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
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
@endsection
