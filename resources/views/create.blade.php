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
<form method="post" action="{{route('employee.store')}}">
    @csrf 
    @method('post')
    <div>
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
    </div>
    <div>
        <button  class="btn btn-dark mb-4 ml-11 ">Add Employee </button>
    </div>
</form>

</section>
@endsection