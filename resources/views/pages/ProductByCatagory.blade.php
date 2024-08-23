@extends('userlayout')
@section('content')


@foreach($products as $product)
<a href="{{route('product.show',$product->id)}}">
  <h3 class="text-lg font-semibold">{{ $product-> name }}</h3> 
</a>

@endforeach

@endsection
