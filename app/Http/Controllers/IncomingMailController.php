<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\IncomingMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class IncomingMailController extends Controller
{
    public function index()
    {
        $incomingMail = IncomingMail::latest();

        if (request('kategori') && request('kategori') != 'all') {
            $incomingMail->where('category_id', request('kategori'));
        }

        return view('incoming-mail.index', [
            'title' => 'Surat Masuk',
            'categories' => Category::latest()->get(),
            'incomingMails' => $incomingMail->with('user', 'category')->limit(1000)->get()
        ]);
    }

    public function create()
    {
        return view('incoming-mail.create', [
            'title' => 'Surat Masuk',
            'categories' => Category::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_terima' => 'required',
            'tanggal_surat' => 'required',
            'no_surat' => 'required|max:255|unique:incoming_mails',
            'category_id' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required',
            'keterangan' => '',
            'file' => 'required|file|image',
        ]);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['file'] = $request->file('file')->store('incoming-mail-image');
        IncomingMail::create($validatedData);

        Alert::success('Berhasil', 'Berhasil Menambahkan Surat Masuk');
        return redirect('/admin/surat-masuk');
    }

    public function edit($id)
    {
        $incomingMail = IncomingMail::where('id', $id)->first();

        if ($incomingMail == null) {
            return redirect()->back();
        }

        return view('incoming-mail.edit', [
            'title' => 'Surat Masuk',
            'categories' => Category::latest()->get(),
            'incomingMail' => $incomingMail
        ]);
    }

    public function update(Request $request, $id)
    {
        $incomingMail = IncomingMail::where('id', $id)->first();

        if ($incomingMail == null) {
            return redirect()->back();
        }

        $rules = [
            'tanggal_terima' => 'required',
            'tanggal_surat' => 'required',
            'no_surat' => 'required|max:255',
            'category_id' => 'required',
            'pengirim' => 'required',
            'perihal' => 'required',
            'keterangan' => '',
        ];

        if ($request->old_no_surat != $request->no_surat) {
            $rules['no_surat'] = 'required|max:255|unique:incoming_mails';
        }

        if ($request->use_file == 'true') {
            $validatedData = $request->validate($rules);
        } else {
            $rules['file'] = 'required|file|image';
            $validatedData = $request->validate($rules);
        }

        if ($request->use_file == 'true') {
            $validatedData['file'] = $incomingMail->file;
        } else {
            Storage::delete($incomingMail->file);
            $validatedData['file'] = $request->file('file')->store('incoming-mail-image');
        }

        $validatedData['user_id'] = Auth::user()->id;
        IncomingMail::where('id', $id)->update($validatedData);

        Alert::success('Berhasil', 'Berhasil Mengubah Surat Masuk');
        return redirect('/admin/surat-masuk');
    }

    public function destroy($id)
    {
        $incomingMail = IncomingMail::where('id', $id)->first();

        if ($incomingMail == null) {
            return redirect()->back();
        }

        Storage::delete($incomingMail->file);

        IncomingMail::destroy($incomingMail->id);

        Alert::success('Berhasil', 'Berhasil Menghapus Data Surat Masuk');
        return redirect('/admin/surat-masuk');
    }
}