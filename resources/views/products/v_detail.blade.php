@extends('layout.v_template')
@section('title','Detail Product')

@section('content')
   
   <table class="table">
     
   		<tr>
   			<th width="100px">Name</th>
   			<th width="30px">:</th>
   			<th>{{$product->name}}</th>
   		</tr>
   		<tr>
   			<th width="100px">Category</th>
   			<th width="30px">:</th>
   			<th>{{$product->category->slug}}</th>
   		</tr>
   		<tr>
   			<th width="100px">Description</th>
   			<th width="30px">:</th>
   			<th>{{$product->description}}</th>
   		</tr>
   		<tr>
   			<th width="100px">Image</th>
   			<th width="30px">:</th>
   			<th><img height="130px" src="{{asset ('/storage/images/products/'.$product->image)}}"></th>
   		</tr>
   		<tr>
   			<th width="100px">Price</th>
   			<th width="30px">:</th>
   			<th>Rp.{{$product->price}}</th>
   		</tr>

   </table>

   
@endsection