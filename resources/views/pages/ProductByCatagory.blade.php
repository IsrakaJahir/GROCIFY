@extends('userlayout')
@section('content')


@foreach($products as $product)

  <h3 class="text-lg font-semibold">{{ $product-> name }}</h3> 

@endforeach

@endsection
