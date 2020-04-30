@extends('layouts.app')
@section('content')
  <h2>Files of {{$folder->name}}</h2>
  <a href="/files/create/{{$folder->id}}" class="btn btn-primary " >Upload files</a>
  @if(count($folder->files)>0)
      <h2>Files loaded</h2>

        <div class="row">
            @foreach($folder->files as $file)

                <div class="col-sm">
                    <div class="alert alert-dismissible alert-primary">
                          <h4>{{$file->title}}</h4>
                          <p>{{$file->description}}</p>
                          <a href="/files/{{$file->id}}"> Click to show</a>
                    </div>
                </div>
            @endforeach
      </div>
  @else
      <br><br>
      <div class="badge badge-danger">
            <h4>{{$folder->name}} has not files yet.</h4>
      </div>
  @endif
@endsection
