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

                            <!-- call Search.vue -->
                                <div id="app">
                                  <search></search>
                                </div>

                        </div>
                        <!--end of col-->
                    </div>
@endsection
