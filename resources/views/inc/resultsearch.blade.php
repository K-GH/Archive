@if(session('found'))
<div class="alert alert-dismissible alert-success">

          @foreach(session('found') as $found)
  
                <p></p>
                <a href="/folders/{{$found->id}}"> Click here : {{$found->name}}</a>
                <br>
                <p>{{$found->description}}</p>
          @endforeach
</div>
@endif
