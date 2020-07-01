@extends('layouts.app')

@section('content')



                  <div class="row justify-content-center ">
                        <br>
                        <div class="col-md-5">

                            <div class="card border-success mb-3 " style="max-width: 30rem;">
                                <div class="card-header d-flex justify-content-center">@lang('site.welcome_back')   <strong>{{Auth::user()->name}}</strong> </div>
                                <!-- switch languages to switch  mr-auto or ml-auto -->
                                  @if (app()->getLocale() == 'ar')
                                  <div class="card-body">
                                        @if (session('status'))
                                            <div class="card-text " role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="d-flex justify-content-right" >
                                            @lang('site.you_are_logged_in')!
                                        </div>
                                        <br>
                                        <div class="d-flex justify-content-right">
                                            @lang('site.last_login_at') : {{Auth::user()->last_login_at}}
                                        </div>
                                        <br>
                                        <div class="d-flex justify-content-right" >
                                          @lang('site.last_login_ip') :   {{Auth::user()->last_login_ip}}
                                        </div>
                                  </div>
                                  @else
                                  <div class="card-body">
                                        @if (session('status'))
                                            <div class="card-text " role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <div class="d-flex justify-content-left" >
                                            @lang('site.you_are_logged_in')!
                                        </div>
                                        <br>
                                        <div class="d-flex justify-content-left">
                                            @lang('site.last_login_at') : {{Auth::user()->last_login_at}}
                                        </div>
                                        <br>
                                        <div class="d-flex justify-content-left" >
                                          @lang('site.last_login_ip') :   {{Auth::user()->last_login_ip}}
                                        </div>
                                  </div>
                                  @endif
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
