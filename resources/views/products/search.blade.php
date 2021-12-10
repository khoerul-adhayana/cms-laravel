@extends ('layout.v_template')

@section('content')

<table class="table table-bordered">
		<tr>
			<th>Id  </th>
			<th>Name  </th>
			<th>Category</th>
			<th>Description </th>	
			<th>Image</th>
			<th>Price </th>	
			<th>Action </th>
		</tr>
			@foreach($products as $product)
		<tr>
			<td>{{ $product->id }}</td>
			<td>{{ $product->name }}</td>
			<td>{{ $product->category->slug}}</td>
			<td>{{ $product->description }}</td>
			<td><img height="110px" src="{{asset ('/storage/images/products/'.$product->image)}}"> 
			</td>	 	
			<td>Rp.{{ $product->price }}</td>

			<td style="display: flex;">
				<div>
				<a href="/products/detail{$id}" class="btn btn-sm btn-success">Detail</a>
				<a href="{{url('/products-edit/'.$product->id)}}" class="btn btn-sm btn-warning">Edit</a>
				</div>
				<form action="{{url('/products-destroy/'.$product->id)}}" method="post">
					{{method_field('DELETE')}}
					{{csrf_field()}}
				<button class="btn btn-sm btn-danger" type="submit">Delete</button>
				</form>					
			</td>
		</tr>
			@endforeach
	</table>
@endsection