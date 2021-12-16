@extends('layout.v_template')
@section('title','Category')


@section('content')
 <h1>Table Categories</h1>
 <a href="{{url('/categories-create')}}" class="btn btn-sm btn-info">+ Add Category</a> <br>
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
			<th>Slug </th>
			<th>Date Created</th>
			<th>Action </th>
		</tr>
		@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->slug}}</td>
			<td>{{$category->created_at->diffForHumans() }}</td>
			<td>
				<a href="" class="btn btn-sm btn-warning">Edit</a>
				<a href="" class="btn btn-sm btn-danger">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
