@extends('layout.app')


@section('main')

<div class="d-flex  flex-wrap justify-content-center" >
 @foreach ( $comics as $key => $elem )

<div class="card ">
    <img class="card-img-top" src="{{$elem['thumb']}}" alt="Card image cap">
    <div class="card-body">
       <a href="{{route('show_comic',compact('key')) }}"><h5 class="card-title">{{ $elem['series'] }}</h5></a> 
    </div>
</div>
    
@endforeach   
</div>


@endsection