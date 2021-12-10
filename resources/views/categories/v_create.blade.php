@extends('layout.v_template')

@section('title','Insert New Category')

@section('content')
    <div class="container">
    <form action="{{route('categories-create')}}" method="POST" enctype="multipart/form-data">
                                
                            {{ csrf_field() }}
                                <div class="content">
                                    <div class="row" >
                                        <div class="col-sm-6">
                               <div class="form-group">
                                    <label for="slug">slug</label>
                                    <input class="form-control" type="text" name="slug" value="{{ old('slug') }}">
                                    <div class="text-danger">
                                        @error('slug')
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