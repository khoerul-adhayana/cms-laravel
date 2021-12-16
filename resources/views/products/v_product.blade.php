@extends('layout.v_template')
@section('title','Products')


@section('content')
 <h1>Table Products</h1>
 <br>
 <a href="{{url('/products-create')}}" class="btn btn-sm btn-info">+ Add Product</a> 
 <a href="{{url('/products/export_excel')}}" class="btn btn-sm btn-info" target="blank">EXPORT EXCEL</a>
 <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
 </button>
 <br>
 @if (session('pesan'))
 	<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ session('pesan') }}.
    </div>
 @endif
 
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
			<td><img height="130px" src="{{asset ('/storage/images/products/'.$product->image)}}"> 
			</td>	 	
			<td>Rp.{{ $product->price }}</td>

			<td style="display: flex;">
				<a href="{{url('/products-detail/'.$product->id)}}" class="btn btn-sm btn-success">Detail</a>
				<a href="{{url('/products-edit/'.$product->id)}}" class="btn btn-sm btn-warning">Edit</a>
				<form action="{{url('/products-destroy/'.$product->id)}}" method="post">
					{{method_field('DELETE')}}
					{{csrf_field()}}
				<button class="btn btn-sm btn-danger" type="submit">Delete</button>
				</form>					
			</td>
		</tr>
		@endforeach
	</table>

		 <!-- PAGINATE -->
		<div style="margin-left:50%;">
		{{$products->links() }}
	    {{$products->currentPage()}}
		</div>

		 <!-- MODAL IMPORT-->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/products/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>

	
		
@endsection
