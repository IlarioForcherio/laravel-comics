@extends('layout.app')

@section('main')

<div class="d-flex justify-content-center" >
 <div class="card" style="width: 18rem;">
    <img src="{{$prodotto_singolo['thumb']}}" class="card-img-top" alt="...">
    <div class="card-body text-center ">
      <h5 class="card-title">{{ $prodotto_singolo['series'] }}</h5>
      <h5 class="card-price">{{ $prodotto_singolo['price'] }}</h5>
      <h5 class="card-title">{{ $prodotto_singolo['type'] }}</h5>
      {{-- <p class="card-text">{{ $prodotto_singolo['description'] }}</p> --}}
    </div>
  </div>   
</div>

@endsection