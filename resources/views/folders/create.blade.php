@extends('layouts.app')

@section('content')
  <a href="/folders/index" class="btn btn-primary  float-right">Back to Folders</a>
  <br> <br>

  <div class="text-center">
                        <h3>Create Folder</h3>

                        {!! Form::open(['action' => 'FoldersController@store','method'=>'POST']) !!}
                                @csrf
                                <!--
                                //tb3n 2bl ay 7ga lazm a3ml update composer 3lshan yanzl laravel collective (html)=>Form
                                //bdef kam line fil config=>app.php ( providers , alies)
                                //kol 7aga mn dol bro7 a3del fil FormServiceProvider w b3d kda bcreate file fil view=>component=>Form=>filename bnfs alname 3lshan bs 2adr 2ast5dma hena
                                -->
                                <div class="form-group row">
                                      {{Form::label('name','Folder Name',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                      <div class="col-md-4">
                                            {{ Form::Text('name','',['placeholder'=>'Folder Name' ,'class'=>'form-control ']) }}
                                      </div>
                                </div>

                                <div class="form-group row">
                                      {{Form::label('description','Folder Description',['class'=>'col-md-4 col-form-label text-md-right'])}}
                                      <div class="col-md-4">
                                            {{ Form::Textarea('description','',['placeholder'=>'Folder Description' ,'class'=>'form-control  ', 'rows'=>'2']) }}
                                      </div>
                                </div>

                                <div class="form-group row mb-0">
                                      <div class="col-md-8 offset-md-4" >
                                        {{ Form::Submit('submit',['class'=>'btn btn-primary' , 'style'=>"float: left;" ]) }}
                                      </div>
                                </div>

                        {!! Form::close() !!}

  </div>
@endsection
