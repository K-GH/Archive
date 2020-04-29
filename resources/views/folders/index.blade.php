@extends('layouts.app')

@section('content')
  <h3>Your Folders</h3>
  <a href="/folders/create" class="btn btn-primary  float-right " >Create a new folder</a>
    <br>
    <br>
        <div class="row">
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
        </div>
@endsection
