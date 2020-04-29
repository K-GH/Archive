@extends('layouts.app')

@section('content')
  <h3>Your Folders</h3>
  <a href="/folders/create" class="btn btn-primary ">Create a new folder</a>
    <br>
    <br>
  @foreach($folders as $folder)
      <div class="card border-primary mb-3" style="max-width: 20rem;">
          <div class="card-header"> <a href="/folders/{{$folder->id}}"> {{$folder->name}} </a> </div>
          <div class="card-body">
             <h4 class="card-title">Description</h4>
            <p class="card-text">{{$folder->description}}.</p>
          </div>
      </div>
  @endforeach

@endsection
