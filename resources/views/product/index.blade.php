@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{ url('product/create') }}">Crear</a>
<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Price</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{url('/product/'.$product->id.'/edit')}}">Edit</a>
                    <form action="{{ url('/product/'.$product->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input type="submit" value="Delete" onclick="return confirm('desea borrar?')">  
                    </form>   
                </td>
            </tr>
                
            @endforeach
           
        </tbody>
</table> 
</div>
@endsection