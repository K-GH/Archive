
@if(count($errors)>0)
  @foreach($errors->all() as $error)
      <div class="alert alert-dismissible alert-danger">
          {{$error}}
      </div>
  @endforeach
@endif

@if(session('success'))
    <div class="alert alert-dismissible alert-success">
        {{session('success')}}
    </div>
@endif


@if(session('error'))
    <div class="alert alert-dismissible alert-danger">
        {{session('error')}}
    </div>
@endif
