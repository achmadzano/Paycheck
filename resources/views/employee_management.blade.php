@extends('dashboard_layout')
@section('employee_management')
    <section class="home">
      <div class="text">Employee management</div>
      <div class="container">
        <div class="row">
          <div class="col-9">
    
            {{-- <div class="mt-4 ml-11" id="clock">Jakarta, Indonesia / <span id="time">12:00:00</span></div> --}}
            <div class="mt-4 ml-11" id="clock">Jakarta, Indonesia / <span id="time"></span></div>
 

            
            <table class="table table-borderless m-10">
              <thead>
                <tr>
                  <th scope="col">Employee Name</th>
                  <th scope="col">Department</th>
                  {{-- <th scope="col">Age</th> --}}
                  {{-- <th scope="col">Gross Salary</th> --}}
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              {{-- <tbody id="employeeTableBody"> --}}
                @foreach ($employee as $ep)
                <tr>
                    <td scope="col">{{$ep->name}}</td>
                    <td scope="col">{{$ep->job_title}}</td>
                    {{-- <td scope="col">{{$ep->age}}</td> --}}
                    {{-- <td scope="col">{{$ep->gross_salary}}</td>
                    <td scope="col">{{$ep->net_salary}}</td> --}}
                    <td scope="col">
                      <a href="{{route('employee.edit', $ep->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td scope="col">
                      <form action="{{route('employee.destroy', $ep->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                      </form>
                    </td>

                    {{-- <td scope="col">
                        @if ($ep->status === "Intern")
                            <span class="text-warning">{{$ep->status}}</span>
                        @elseif ($ep->status === "Permanent")
                            <span class="text-primary">{{$ep->status}}</span>
                        @elseif ($ep->status === "Contract")
                            <span class="text-success">{{$ep->status}}</span>
                        @endif
                    </td> --}}
                </tr>
                @endforeach
              
              </tbody>
            </table>
            
            {{-- <button  class="btn btn-dark mb-4 ml-11 ">Remove Employee </button>
            <button  class="btn btn-dark mb-4 ml-11 ">Edit Employee </button> --}}
          </div>
          <div class="col-3">
            <div class="container">
              <div class="row mt-5">
                <div class="col-md-12">
                  <div class="card border-left-primary shadow mb-4 mt-4 mr-4">
                    <div class="card-body">
                      <div class="text-xs font-weight-bold text-primary-emphasis text-uppercase mb-1">
                        Total Employees
                      </div>
                      <div class="h5 font-weight-bold text-gray-800">{{$totalEmployeeCount}}</div>
                      <i class="fas fa-calendar fa-2x text-gray-300">Employee</i>
                    </div>
                  </div>
                  {{-- <div class="card border-left-success shadow mb-4 mr-4">
                    <div class="card-body">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Permanent
                      </div>
                      <div class="h5 font-weight-bold text-gray-800">500</div>
                      <i class="fas fa-dollar-sign fa-2x text-gray-300">Employee</i>
                    </div>
                  </div>
                  <div class="card border-left-warning shadow mr-4">
                    <div class="card-body">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Intern
                      </div>
                      <div class="h5 font-weight-bold text-gray-800">100</div>
                      <i class="fas fa-comments fa-2x text-gray-300">Employee</i>
                    </div>
                  </div> --}}
                  <div class="card border-left-primary shadow mb-4 mt-4 mr-4">
                    <div class="card-body">
                      <div class="h5 font-weight-bold text-gray-800">Add Employee</div>
                      {{-- add employee link --}}
                      <a href="{{route('employee.create')}}" class="btn btn-success">Add</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
    
            var ampm = hours >= 12 ? 'PM' : 'AM';
    
            // Convert hours to 12-hour format
            hours = hours % 12;
            hours = hours ? hours : 12; // Handle midnight (0 hours)
    
            // Add leading zero if the value is less than 10
            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
    
            var timeString = hours + ":" + minutes + ":" + seconds + " " + ampm;
    
            document.getElementById("time").innerText = timeString;
        }
    
        // Update the clock every second
        setInterval(updateClock, 1000);
    
        // Initial call to set the clock immediately
        updateClock();
    </script>
      
  </section>
@endsection



    


    