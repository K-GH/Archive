@extends('layouts.app')
@section('content')


          <div class="text-center">
                <a href="/folders/{{$file->folder_id}}" class="btn btn-primary  float-right ">Back to Files</a>

                  <div class="text-center">
                    <div class="row">
                              <div class="col-lg-8 ml-auto">
                                    <form class="form-inline  md-form mr-auto mb-4" >
                                        <span class="label label-default"> <strong>Search for text inside of:  </strong> </span>
                                        <input class="form-control mr-sm-2" type="text" placeholder="{{$file->title}}" aria-label="Search">
                                        <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="submit">Search</button>
                                    </form>
                              </div>


                      </div>


                </div>
                  <a href="/storage/{{Auth::user()->id}}/{{$file->folder_id}}/{{$file->unique_file_name}}">Click To Download</a>
                  <br>
                  <br>
                  <embed src="/storage/{{Auth::user()->id}}/{{$file->folder_id}}/{{$file->unique_file_name}}" width="1100px" height="1000px" />
          </div>



@endsection
