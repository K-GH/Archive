@extends('layouts.app')

@section('content')
  <a href="/folders/index" class="btn btn-primary  float-right">@lang('site.Back')</a>
  <br> <br>

  <div class="text-center">
                        <h3 >@lang('site.create_folder')</h3>
                        <form  action="{{ route('store')}}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('post') }}
                          <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right"> </label>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" name="name" placeholder="@lang('site.folder_name')" value="{{old('name')}}">
                                </div>
                          </div>
                          <div class="form-group row">
                                 <label class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-4">
                                      <input type="text" class="form-control" name="description" placeholder="@lang('site.description')" value="{{old('description')}}">
                                </div>
                          </div>

                          <div class="form-group row mb-5">
                                <div class="col-md-5 offset-md-4" >
                                  <button type="submit" class="btn btn-primary" style="float: left;">@lang('site.create')</button>
                                </div>
                          </div>
                        </form>


  </div>
@endsection
