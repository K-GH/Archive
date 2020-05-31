<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use App\File;
use App\user;
use Illuminate\Support\Facades\Auth;

class SearchOutController extends Controller
{
      public function find($key)
      {

            $user_id=Auth::id();
            //$twoCondition=['name'=>$key ,'user_id'=>$user_id];
            //return Folder::where($twoCondition)->get();
            //return Folder::where('name',$key)->get();


          //$found=Folder::where('name',$key)->get();
          $found=Folder::select('*')
                        ->where('name','like','%'.$key.'%')
                        ->get();



          //return Phonebook::where('name', 'like', '%'.$request->SearchQuery.'%')->orWhere('email', 'like', '%'.$request->SearchQuery.'%')->orWhere('phone', 'like', '%'.$request->SearchQuery.'%')->get();

          if($found)
          {
             return $found;
          }else{
              return redirect('/home')->with('error','not found');
          }

      }
}
