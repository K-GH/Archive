@extends('layouts.app')

@section('content')
  <a href="/folders/index" class="btn btn-primary  float-right">Back to Folders</a>
  <h3>Create Folder</h3>
  <div >

                        {!! Form::open(['action' => 'FoldersController@store','method'=>'POST']) !!}
                              <!--
                              //tb3n 2bl ay 7ga lazm a3ml update composer 3lshan yanzl laravel collective (html)=>Form
                              //bdef kam line fil config=>app.php ( providers , alies)
                              //kol 7aga mn dol bro7 a3del fil FormServiceProvider w b3d kda bcreate file fil view=>component=>Form=>filename bnfs alname 3lshan bs 2adr 2ast5dma hena
                              -->
                              {{ Form::Text('name','',['placeholder'=>'Folder Name']) }}
                              <br>
                              {{ Form::Textarea('description','',['placeholder'=>'Folder Description']) }}
                              <br>
                              {{ Form::Submit('submit',['class'=>'btn btn-primary']) }}
                        {!! Form::close() !!}

  </div>
@endsection
