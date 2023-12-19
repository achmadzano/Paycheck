@extends('dashboard_layout')
@section('create')
<section class="home">
    <div class="text">Create Employee</div>
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
<form method="post" action="{{route('employee.store')}} ">
    @csrf 
    @method('post')

    <div class="container mt-5" style="padding-right: 150px;">
    <form>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="email">Email</label>
            <input type="text" class="form-control"  name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter your address" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="hireDate">Hire Date</label>
            <input type="date" class="form-control" name="hire_date" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="salary">Salary</label>
            <input type="text" class="form-control" name="salary" placeholder="Enter salary" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" name="job_title" placeholder="Enter your job title" required>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-dark btn-lg mb-4" style="margin-left: -120px;">Add Employee</button>
        </div>
    </form>
</div>



</form>

</section>
@endsection