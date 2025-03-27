@extends('Layouts.masterLayout')

@section('content')
@if($message=Session::get('success'))
<div class="alert alert-success alert alert-block">
<strong>{{$message}}</strong>
</div>
@endif
<div class="col-sm-6 mx-auto mt-5">
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="name" value="{{old('name')}}"  class="form-control" id="exampleFormControlInput1">
                @if($errors->has('name'))
<span class="text-danger">{{$errors->first('name')}}</span>
                @endif
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3">{{old('desc')}}</textarea>
  @if($errors->has('desc'))
<span class="text-danger">{{$errors->first('desc')}}</span>
                @endif
</div>
<div class="mb-3">
  <label for="exampleFormControlInputFile1" class="form-label">Image</label>
  <input type="file" name="image" value="{{old('image')}}"  class="form-control" id="exampleFormControlInput1">
  @if($errors->has('image'))
<span class="text-danger">{{$errors->first('image')}}</span>
                @endif
</div>
<button type="submit" class="btn btn-success">Submit</button>
                </form>
            
        </div>
@endSection

