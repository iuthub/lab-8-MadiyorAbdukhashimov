@extends('layouts.master')

@section('title')
Shopping Cart
@endsection

@section('content')
@if(Session::has('cart'))
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <ul class="list-group">
      @foreach($products as $product)
      <li class="list-group-item">
        <strong>{{$product['item']['title']}}</strong>
        <span class="label label-success">{{$product['price']}}</span>

        <span class="float-right"> {{$product['qty']}} </span>

        <div class="nav-item dropdown float-right">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('product.reduceByOne', ['id' => $product['item']['id']])}}">Reduce by 1</a>
            <a class="dropdown-item" href="{{route('product.remove', ['id' => $product['item']['id']])}}">Reduce All</a>
          </div>
        </div>

      </li>
      @endforeach
    </ul>
  </div>
</div>

<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <strong>Total: {{$totalPrice}}</strong>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
  </div>
</div>
@else
<div class="row">
  <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <h2>No Items in Cart!</h2>
  </div>
</div>
@endif


@endsection
