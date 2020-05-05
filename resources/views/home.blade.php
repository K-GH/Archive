@extends('layouts.app')

@section('content')



                  <div class="row justify-content-center">
                        <br>
                        <div class="col-md-5">

                            <div class="card border-success mb-3" style="max-width: 30rem;">
                                <div class="card-header">Welcome Back <strong> {{Auth::user()->name}}</strong> </div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="card-text" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    You are logged in!
                                    <br>
                                    Last login at : {{Auth::user()->last_login_at}}
                                    <br>
                                    Last login IP:   {{Auth::user()->last_login_ip}}
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-10 col-lg-8">
                          <br>
                          <br>
                          <br>

                            {!! Form::open(['action' => 'SearchOutController@find','method'=>'POST' ,"class"=>"card card-sm"]) !!}
                                    @csrf
                                    <!--
                                    //tb3n 2bl ay 7ga lazm a3ml update composer 3lshan yanzl laravel collective (html)=>Form
                                    //bdef kam line fil config=>app.php ( providers , alies)
                                    //kol 7aga mn dol bro7 a3del fil FormServiceProvider w b3d kda bcreate file fil view=>component=>Form=>filename bnfs alname 3lshan bs 2adr 2ast5dma hena
                                    -->
                                    <div class="card-body row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-search h4 text-body"></i>
                                        </div>
                                        <!--end of col-->
                                        <div class="col">
                                           {{ Form::Text('key','',['placeholder'=>'Search topics or keywords' ,'class'=>'form-control form-control-lg form-control-borderless'  ]) }}
                                        </div>
                                        <!--end of col-->
                                        <div class="col-auto">

                                          {{ Form::Submit('Search',['class'=>'btn btn-lg btn-success']) }}
                                        </div>
                                        <!--end of col-->
                                    </div>


                            {!! Form::close() !!}
                            @include('inc.resultsearch')
                        </div>
                        <!--end of col-->
                    </div>
@endsection
