@extends('layouts.app')
@section('content')
    <a href="/folders/{{$file->folder_id}}" class="btn btn-primary  float-right ">Back to Files</a>
    <h3>{{$file->title}}</h3>
    <p>{{$file->description}}</p>
    <a href="/storage/Folder/{{$file->folder_id}}/{{$file->unique_file_name}}">Click To Download</a>

    <embed src="/storage/Folder/{{$file->folder_id}}/{{$file->unique_file_name}}" width="1100px" height="1000px" />
@endsection
