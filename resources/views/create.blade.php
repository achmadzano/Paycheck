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

    <!-- <div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Name" />
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" placeholder="email" />
    </div>
    <div>
        <label>Phone</label>
        <input type="text" name="phone" placeholder="phone" />
    </div>
    <div>
        <label>Address</label>
        <input type="text" name="address" placeholder="Address" />
    </div>
    <div>
        <label>hire date</label>
        <input type="date" name="hire_date" placeholder="hire date" />
    </div>
    <div>
        <label>Salary</label>
        <input type="text" name="salary" placeholder="Salary" />
    </div>
    <div>
        <label>job title</label>
        <input type="text" name="job_title" placeholder="job_title" />
    </div> -->
    <!-- <div class="container mt-5"> -->
    <div class="container mt-5" style="padding-right: 150px;">
    <form>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="hireDate">Hire Date</label>
            <input type="date" class="form-control" id="hireDate" name="hire_date" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="salary">Salary</label>
            <input type="text" class="form-control" id="salary" name="salary" placeholder="Enter salary" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;" >
            <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" id="jobTitle" name="job_title" placeholder="Enter your job title" required>
        </div>
    </form>
</div>

<div class="d-flex justify-content-center">
    <button class="btn btn-dark btn-lg mb-4" style="margin-left: -120px;">Add Employee</button>
</div>


</form>

</section>
@endsection