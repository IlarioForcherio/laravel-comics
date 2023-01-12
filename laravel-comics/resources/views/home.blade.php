@extends('layout.app')

@section('main')

<div class="d-flex  flex-wrap justify-content-center" >
 @foreach ( $comics as $elem )

<div class="card  dio">
    <img class="card-img-top" src="{{$elem['thumb']}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $elem['series'] }}</h5>
    </div>
</div>
    
@endforeach   
</div>


@endsection