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
<form method="post" action="{{route('employee.update',['employee'=>$employee])}}">
    @csrf 
    @method('put')
    <!-- <div>
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
    </div> -->
    <div class="container mt-5" style="padding-right: 150px;">
    <form>
        <div class="form-group" style="padding-bottom: 25px;">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{$employee->name}}" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{$employee->email}}" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$employee->phone}}" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" placeholder="Address" value="{{$employee->address}}" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;">
            <label for="hireDate">Hire Date</label>
            <input type="date" class="form-control" name="hire_date" value="{{$employee->hire_date}}" required>
        </div>
        <div class="form-group" style="padding-bottom: 25px;">
            <label for="salary">Salary</label>
            <input type="text" class="form-control" name="salary" placeholder="Salary" value="{{$employee->salary}}" required>
        </div>
        <!-- <div class="form-group" style="padding-bottom: 25px;">
            <label for="jobTitle">Job Title</label>
            <input type="text" class="form-control" name="job_title" placeholder="Job Title" value="{{$employee->job_title}}" required>
            
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
            

        </div> -->

        <div class="form-group" style="padding-bottom: 25px;">
    <label for="jobTitle">Job Title</label>
    <select class="form-control" name="job_title" required>
        <option value="" disabled selected>{{$employee->job_title}}</option>
        <option value="Finance" @if($employee->job_title == 'Finance') selected @endif>Finance</option>
        <option value="Marketing" @if($employee->job_title == 'Marketing') selected @endif>Marketing</option>
        <option value="IT" @if($employee->job_title == 'IT') selected @endif>IT</option>
        <option value="Accounting" @if($employee->job_title == 'Accounting') selected @endif>Accounting</option>
        <option value="HRD" @if($employee->job_title == 'HRD') selected @endif>HRD</option>
        <option value="Legal" @if($employee->job_title == 'Legal') selected @endif>Legal</option>
        <option value="Procurement" @if($employee->job_title == 'Procurement') selected @endif>Procurement</option>
        <option value="GA" @if($employee->job_title == 'GA') selected @endif>GA</option>
        <option value="PPIC" @if($employee->job_title == 'PPIC') selected @endif>PPIC</option>
        <option value="Production" @if($employee->job_title == 'Production') selected @endif>Production</option>
        <option value="QA" @if($employee->job_title == 'QA') selected @endif>QA</option>
        <option value="Creative" @if($employee->job_title == 'Creative') selected @endif>Creative</option>
        <!-- Add similar lines for other job titles -->
        
    </select>
</div>


        <div class="d-flex justify-content-center">
            <button  class="btn btn-dark mb-4 ml-11 "style="margin-left: -120px;">Edit Employee </button>
        </div>

    </form>
</div>

 
    
</form>

</section>
@endsection