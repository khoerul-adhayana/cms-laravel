@extends('layout.v_template')

@section('title','Insert New Product')

@section('content')

    <div class="container">
	<form action="{{route('products-create')}}" method="POST" enctype="multipart/form-data">
                                
                            {{ csrf_field() }}
 								<div class="content">
 									<div class="row" >
 										<div class="col-sm-6">
                               <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                                    <div class="text-danger">
                                    	@error('name')
                                    		{{$message}}
                                        @enderror  	
                                    </div>
                                </div>

                                <label for="category_id">Category id</label>
                                <select name="category_id" class="form-control" >
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->id}}.{{$category->slug}}</option>
                                    @endforeach
                                </select>
                                <div class="text-danger">
                                        @error('category_id')
                                            {{$message}}
                                        @enderror   
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input class="form-control " type="text" name="description" value="{{ old('description') }}">
                                    <div class="text-danger">
                                    	@error('description')
                                    		{{$message}}
                                    	@enderror  	
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image">Select Image</label>
                                    <input class="form-control" type="file" name="image" value="{{ old('image') }}">
                                    <div class="text-danger">
                                        @error('image')
                                            {{$message}}
                                        @enderror   
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="price">Price (72000) </label>
                                    <input class="form-control" type="text" name="price" value="{{ old('price') }}">
                                    <div class="text-danger">
                                    	@error('price')
                                    		{{$message}}
                                    	@enderror  	
                                    </div>
                                </div>                                
                                <div class="form-group">
                                   <input class="btn btn-primary" type="submit" value="Send">
                                </div>
                               </div>
                              </div>
                             </div>

    </form>
</div>

@endsection