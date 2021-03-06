@extends('layouts.master')

@section('title')
LifePage
@endsection

@section('content')
<div class="row">
	@foreach($products as $product)
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
			<img src="{{URL::to($product->imagePath)}}" alt="..." class="img-responsive">
			<div class="caption">
				<h3>{{$product->title}}</h3>
				<p class="description">{{$product->description}}</p>
				<div class="clearfix">
					<div class="float-left price">
						$ {{$product->price}}
					</div>
					<a href="{{route('product.addToCart', ['id' =>$product->id])}}" class="btn btn-success float-right" role="button">Add to Cart</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>

@endsection
