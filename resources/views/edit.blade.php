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
    {{-- <div>
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
    </div> --}}
    <div class="container mt-5" style="padding-right: 150px;">
        <form>
            <div class="form-group" style="padding-bottom: 25px;" >
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{$employee->name}}" required>
            </div>
            <div class="form-group" style="padding-bottom: 25px;" >
                <label for="email">Email</label>
                <input type="text" class="form-control"  name="email" placeholder="Enter your email" value="{{$employee->email}}" required>
            </div>
            <div class="form-group" style="padding-bottom: 25px;" >
                <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" value="{{$employee->phone}}" required>
            </div>
            <div class="form-group" style="padding-bottom: 25px;" >
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter your address" value="{{$employee->address}}" required>
            </div>
            <div class="form-group" style="padding-bottom: 25px;" >
                <label for="hireDate">Hire Date</label>
                <input type="date" class="form-control" name="hire_date" value="{{$employee->hire_date}}" required>
            </div>
            <div class="form-group" style="padding-bottom: 25px;" >
                <label for="salary">Salary</label>
                <input type="text" class="form-control" name="salary" placeholder="Enter salary" value="{{$employee->salary}}" required>
            </div>
            <div class="form-group" style="padding-bottom: 25px;" >
                <label for="jobTitle">Job Title</label>
                <input type="text" class="form-control" name="job_title" placeholder="Enter your job title" value="{{$employee->job_title}}" required>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-dark btn-lg mb-4" style="margin-left: -120px;">Edit Employee</button>
            </div>
        </form>
    </div>
</form>


</section>
@endsection