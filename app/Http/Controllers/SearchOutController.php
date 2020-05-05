<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use App\File;
use App\user;
use Illuminate\Support\Facades\Auth;

class SearchOutController extends Controller
{
      public function find(Request $request)
      {
          $this->validate($request,[
            'key'=>'required',
          ]);

          $user_id=Auth::id();
          $key=$request->get('key');
          $found=Folder::where('name',$key)->get();
          if($found)
          {
             return redirect('/home')->with('found',$found);
          }else{
              return redirect('/home')->with('error','not found');
          }

      }
}
