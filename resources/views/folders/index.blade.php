@extends('layouts.app')

@section('content')

  <div class="text-center">
            <h2>@lang('site.your_folders')</h2>
  </div>
  <a href="/folders/create" class="btn btn-primary  float-right " >@lang('site.create_folder')</a>
    <br>
    <br>
        <div class="row">
          @if(count($folders)>0)
              @foreach($folders as $folder)
                <div class="col-sm-4">
                  <div class="card border-primary mb-3 " style="max-width: 20rem;">
                      <div class="card-header text-center"> <a href="/folders/{{$folder->id}}"> {{$folder->name}} </a> </div>
                      <div class="card-body">
                         <h4 class="card-title">Description</h4>
                        <p class="card-text">{{$folder->description}}.</p>
                      </div>
                  </div>
                </div>
              @endforeach
          @else
              <br><br>
              <div class="badge badge-danger">
                    <h4>Create the first Folder.</h4>
              </div>
          @endif
        </div>
@endsection
