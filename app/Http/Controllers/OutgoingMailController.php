<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OutgoingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class OutgoingMailController extends Controller
{
    public function index()
    {
        $outgoingMail = OutgoingMail::latest();

        if (request('kategori') && request('kategori') != 'all') {
            $outgoingMail->where('category_id', request('kategori'));
        }

        return view('outgoing-mail.index', [
            'title' => 'Surat Keluar',
            'categories' => Category::latest()->get(),
            'outgoingMails' => $outgoingMail->with('user', 'category')->limit(1000)->get()
        ]);
    }

    public function create()
    {
        return view('outgoing-mail.create', [
            'title' => 'Surat Keluar',
            'categories' => Category::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_surat' => 'required',
            'no_surat' => 'required|max:255|unique:outgoing_mails',
            'category_id' => 'required',
            'tujuan' => 'required',
            'perihal' => 'required',
            'file' => 'required|file|image',
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['file'] = $request->file('file')->store('outgoing-mail-image');
        OutgoingMail::create($validatedData);

        Alert::success('Berhasil', 'Berhasil Menambahkan Surat Keluar');
        return redirect('/admin/surat-keluar');
    }

    public function edit($id)
    {
        $outgoingMail = OutgoingMail::where('id', $id)->first();

        if ($outgoingMail == null) {
            return redirect()->back();
        }

        return view('outgoing-mail.edit', [
            'title' => 'Surat Keluar',
            'categories' => Category::latest()->get(),
            'outgoingMail' => $outgoingMail
        ]);
    }

    public function update(Request $request, $id)
    {
        $outgoingMail = OutgoingMail::where('id', $id)->first();

        if ($outgoingMail == null) {
            return redirect()->back();
        }

        $rules = [
            'tanggal_surat' => 'required',
            'no_surat' => 'required|max:255',
            'category_id' => 'required',
            'tujuan' => 'required',
            'perihal' => 'required'
        ];

        if ($request->old_no_surat != $request->no_surat) {
            $rules['no_surat'] = 'required|max:255|unique:outgoing_mails';
        }

        if ($request->use_file == 'true') {
            $validatedData = $request->validate($rules);
        } else {
            $rules['file'] = 'required|file|image';
            $validatedData = $request->validate($rules);
        }

        if ($request->use_file == 'true') {
            $validatedData['file'] = $outgoingMail->file;
        } else {
            Storage::delete($outgoingMail->file);
            $validatedData['file'] = $request->file('file')->store('outgoing-mail-image');
        }

        $validatedData['user_id'] = Auth::user()->id;
        OutgoingMail::where('id', $id)->update($validatedData);

        Alert::success('Berhasil', 'Berhasil Mengubah Surat Keluar');
        return redirect('/admin/surat-keluar');
    }

    public function destroy($id)
    {
        $outgoingMail = OutgoingMail::where('id', $id)->first();

        if ($outgoingMail == null) {
            return redirect()->back();
        }

        Storage::delete($outgoingMail->file);

        OutgoingMail::destroy($outgoingMail->id);

        Alert::success('Berhasil', 'Berhasil Menghapus Data Surat Keluar');
        return redirect('/admin/surat-keluar');
    }
}