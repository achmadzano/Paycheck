@extends('dashboard_layout')
@section('edit')
<section class="home">
    <div class="text">Edit Employee</div>
    <div class="row ml-20">
<div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>


    @endif
</div>
<form method="post" action="{{route('employee.update', ['employee' => $employee])}}">
    @csrf 
    @method('put')
    <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" value="{{$employee->name}}" />
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" placeholder="email" value="{{$employee->email}}"/>
    </div>
    <div>
        <label>Phone</label>
        <input type="text" name="phone" placeholder="phone" value="{{$employee->phone}}"/>
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" placeholder="Address" value="{{$employee->address}}"/>
    </div>
    <div>
        <label>hire date</label>
        <input type="date" name="hire_date" placeholder="hire date" value="{{$employee->hire_date}}"/>
    </div>
    <div>
        <label>Salary</label>
        <input type="text" name="salary" placeholder="Salary" value="{{$employee->salary}}" />
    </div>
    <div>
        <label>job title</label>
        <input type="text" name="job_title" placeholder="job_title" value="{{$employee->job_title}}"/>
    </div>
    <div>
        <button  class="btn btn-dark mb-4 ml-11 ">Edit Employee </button>
    </div>
</form>


</section>
@endsection