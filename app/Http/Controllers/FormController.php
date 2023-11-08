<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function landing()
    {
        return view("index");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Form::all();
        return view("tabel", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form = new Form();
        $form->nama = $request->nama;
        $form->nim = $request->nim;
        $form->alamat = $request->alamat;
        $form->jenis_kelamin = $request->jenis_kelamin;
        $form->jurusan = $request->jurusan;
        $form->email = $request->email;
        $form->save();

        return redirect('tabel');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::find($id);

        if (!$form) {
            return redirect('table');
        }

        return view('edit', compact('form'));
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
        $form = Form::find($id);
        if (!$form) {
            return redirect('tabel')->with('error', 'Record not found');
        }

        $form->nama = $request->nama;
        $form->nim = $request->nim;
        $form->alamat = $request->alamat;
        $form->jenis_kelamin = $request->jenis_kelamin;
        $form->jurusan = $request->jurusan;
        $form->email = $request->email;
        $form->save();

        if ($form->save()) {
            return redirect('tabel')->with('success', 'Record updated successfully');
        } else {
            return redirect('tabel')->with('error', 'Failed to update record');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Form::find($id)->delete();
        return redirect('tabel');
    }
}
