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
        <div class="form-group" style="padding-bottom: 25px;">
    <label for="jobTitle">Job Title</label>
    <select class="form-control" name="job_title" required>


  <ul class="dropdown-menu" >
        <option value="" disabled selected>Select Job Title</option>
        <option value="Finance" >Finance</option>
        <option value="Marketing" >Marketing</option>
        <option value="IT" >IT</option>
        <option value="Accounting" >Accounting</option>
        <option value="HRD" >HRD</option>
        <option value="Legal" >Legal</option>
        <option value="Procurement">Procurement</option>
        <option value="GA" >GA</option>
        <option value="PPIC" >PPIC</option>
        <option value="Production">Production</option>
        <option value="QA" >QA</option>
        <option value="Creative">Creative</option>
  </ul>
        
    </select>
</div>


        <div class="d-flex justify-content-center">
            <button class="btn btn-dark btn-lg mb-4" style="margin-left: -120px;">Add Employee</button>
        </div>
    </form>
</div>




</form>

</section>
@endsection