<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FilesController extends Controller
{
    public function create($folder_id)
    {
      return view('files.create')->with('folder_id',$folder_id);
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'file'=>'required'
      ]);


      $fileName=$request->get('title');
      //get extension only
      $extension=$request->file('file')->getClientOriginalExtension();

      //replace original file name to title +time()+ extension
      $fileNameToStore=$fileName.'_'.time().'.'.$extension;

      //upload File to public folder on storage folder and create  new Folder and subfolder(folder_id)  with new  uniqe fromat
      $path=$request->file('file')->storeAs('public/Folder/'.$request->input('folder_id'),$fileNameToStore);

      //store on DB
      $file=new File();
      $file->folder_id=$request->get('folder_id');
      $file->unique_file_name=$fileNameToStore;
      $file->title=$request->get('title');
      $file->size=$request->file('file')->getSize();
      $file->description=$request->get('description');
      $file->file_type=$extension;
      $file->save();

      return redirect('/folders/'.$request->input('folder_id'))->with('success','File is created');

    }
}
