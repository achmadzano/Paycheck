@extends('dashboard_layout')
@section('update')
<h1>Create a Product</h1>
<div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>


    @endif
</div>
<form method="post" action="{{route('employee.store')}}">
    @csrf 
    @method('post')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" />
    </div>
    <div>
        <label>Department</label>
        <input type="text" name="qty" placeholder="Qty" />
    </div>
    <div>
        <label>Gross salary</label>
        <input type="text" name="price" placeholder="Price" />
    </div>
    <div>
        <label>Net</label>
        <input type="text" name="description" placeholder="Description" />
    </div>
    <div>
        <input type="submit" value="Save a New Product" />
    </div>
</form>
@endsection