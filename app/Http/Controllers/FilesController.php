<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function create($folder_id)
    {
      return view('files.create')->with('folder_id',$folder_id);
    }
}
