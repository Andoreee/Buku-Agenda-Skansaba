<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OutgoingMail;
use Illuminate\Http\Request;

class OutgoingMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('outgoing-mail.index', [
            'title' => 'Surat Keluar',
            'categories' => Category::latest()->get(),
            'outgoingMails' => OutgoingMail::latest()->with('user', 'category')->limit(1000)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('outgoing-mail.create', [
            'title' => 'Surat Keluar',
            'categories' => Category::latest()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
