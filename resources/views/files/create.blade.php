@extends('layouts.app')

@section('content')
<h1>Create a file</h1>
    {{$folder_id}}

    <div >
          {!! Form::open(['action' => 'FilesController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
          <!--
          //tb3n 2bl ay 7ga lazm a3ml update composer 3lshan yanzl laravel collective (html)=>Form
          //bdef kam line fil config=>app.php ( providers , alies)
          //kol 7aga mn dol bro7 a3del fil FormServiceProvider w b3d kda bcreate file fil view=>component=>Form=>filename bnfs alname 3lshan bs 2adr 2ast5dma hena
          -->
          {{ Form::Text('title','',['placeholder'=>'File Title']) }}
          <br>
          {{ Form::Textarea('description','',['placeholder'=>'File Description']) }}
          <br>
          {{Form::hidden('folder_id',$folder_id)}}
          {{ Form::file('file')}}
          <br>
          {{ Form::Submit('submit',['class'=>'btn btn-primary']) }}
          {!! Form::close() !!}
    </div>
@endsection
