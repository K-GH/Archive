<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class FoldersController extends Controller
{

    public function index()
    {
      $folders=Folder::all();
      return view('folders.index')->with('folders',$folders);
    }

    public function create()
    {
      return view('folders.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
          'name'=>'required',
          'description'=>'required'
        ]);

        $folder=new Folder();
        $folder->name=$request->input('name');
        $folder->description=$request->input('description');
        $folder->save();

        return redirect('/folders/index')->with('success',$folder->name.'is created');

    }

    public function show($id)
    {
      $folder=Folder::with('files')->find($id);
      return view('folders.show')->with('folder',$folder);
    }
}
