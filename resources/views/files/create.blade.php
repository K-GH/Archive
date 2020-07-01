@extends('layouts.app')

@section('content')
    <a href="/folders/{{$folder_id}}" class="btn btn-primary  float-right">@lang('site.Back')</a>
    <br> <br>

    <div class="text-center">
                          <h3>@lang('site.create_file')</h3>
                          <form  action="{{ route( 'store') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <div class="form-group row">
                              <label class="col-md-4 col-form-label text-md-right"> </label>
                                  <div class="col-md-4">
                                    <input type="text" class="form-control" name="title" placeholder="@lang('site.file_title')" value="{{old('title')}}">
                                  </div>
                            </div>
                            <div class="form-group row">
                                   <label class="col-md-4 col-form-label text-md-right"></label>
                                  <div class="col-md-4">
                                        <input type="text" class="form-control" name="description" placeholder="@lang('site.description')" value="{{old('description')}}">
                                        <br>
                                        <input type="file" name="file" class="form-control"  >
                                  </div>
                            </div>

                                  <input type="hidden" name="folder_id" value="{{$folder_id}}">

                            <div class="form-group row mb-5">
                                  <div class="col-md-5 offset-md-4" >
                                    <button type="submit" class="btn btn-primary" style="float: left;">@lang('site.add')</button>
                                  </div>
                            </div>
                          </form>


    </div>
@endsection
