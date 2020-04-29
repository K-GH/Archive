@extends('layouts.app')
@section('content')
  <h2>Files of {{$folder->name}}</h2>
  <a href="/files/create/{{$folder->id}}" class="btn btn-primary " >Upload files</a>
  @if(count($folder->files)>0)
        <h2>Files loaded</h2>
  @else
      <br><br>
      <div class="badge badge-danger">
            <h4>{{$folder->name}} has not files yet.</h4>
      </div>
  @endif
@endsection
