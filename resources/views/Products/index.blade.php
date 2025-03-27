
@extends('Layouts.masterLayout')


@section('content')
<div class="text-end">
                <a href="{{ route('products.create') }}" class="btn btn-dark mt-2">New Product</a>
</div>

<!--show data -->
<table class="table table-bordered mt-2 text-center bg-dark">
  <thead>
    <tr>
      <th scope="col">Sr No</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Active</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$product->name}}</td>
      <td>
        <image src="Products/{{$product->image}}" class="rounded-circle" width="50" height="50">
      </td>
      <td>
        <a href="products/{{$product->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
        <a href="products/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endSection()