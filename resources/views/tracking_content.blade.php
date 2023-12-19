@extends('dashboard_layout')
@section('tracking_content')
    <section class="home">
      <div class="text">Attendance Tracking</div>
      <div class="container">
        <div class="row">
          <div class="col-9">
            <div class="mt-4 ml-11" id="clock">Jakarta, Indonesia / <span id="time"></span></div>

            <!-- Your table content here -->
            {{-- <h2 class="mt-4 ml-11">Employee Status</h2> --}}
            {{-- <div class="mt-4 ml-11" id="clock">Jakarta, Indonesia / <span id="time">12:00:00</span></div> --}}
            {{-- <div class="mt-4 ml-11">
              <select id="department-select">
                <option value="">-- Select Department --</option>
                <option value="IT">IT</option>
                <option value="Accounting">Accounting</option>
                <option value="Creative">Creative</option>
                <option value="Procurement">Procurement</option>
                <option value="Legal">Legal</option>
                <option value="Marketing">Marketing</option>
                <option value="Finance">Finance</option>
                <option value="HRD">HRD</option>
                <option value="GA">GA</option>
                <option value="Production">Production</option>
                <option value="QA">QA</option>
                <option value="PPIC">PPIC</option>

              </select>
              <select id="status-select">
                <option value="">-- Select Status --</option>
                <option value="Attend">Attend</option>
                <option value="Not Attend">Not Attend</option>
                <option value="Late">Late</option>
              </select>
              <button id="filter-button" class="btn btn-outline-primary">Filter</button>
            </div> --}}

            
            {{-- <button type="button" class="btn btn-primary" id="filter-sort-button">Filter / Sort</button> --}}
            {{-- <div id="server-time" class="mb-4 mt-4 ml-3"></div> --}}
            <table class="table table-borderless m-10">
              <thead>
                <tr>
                  <th scope="col">Employee Name</th>
                  <th scope="col">Department</th>
                  <th scope="col">Check In</th>
                  <th scope="col">Check Out</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              @foreach ($employee as $ep)
              <tr>
                  <td scope="col">{{$ep->name}}</td>
                  <td scope="col">{{$ep->job_title}}</td>
                  <td scope="col">{{$ep->check_in_time}}</td>
                  <td scope="col">{{$ep->check_out_time}}</td>
                  <td scope="col">
                      @if ($ep->check_in_time === null)
                          Not Attend
                      @elseif (strtotime($ep->check_in_time) > strtotime('09:00:00'))  {{-- Assuming 9:00 AM is the expected check-in time --}}
                          Late
                      @else
                          Attend
                      @endif
                  </td>
              </tr>
          @endforeach
          
              </tbody>
            </table>
          </div>
          <div class="col-3">
            <div class="container">
              <div class="row mt-5">
                <div class="col-md-12">
                  <div class="card border-left-primary shadow mb-4 mt-4 mr-4">
                    <div class="card-body">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Attend
                      </div>
                      <div class="h5 font-weight-bold text-gray-800">{{$employeeAttendCount}}</div>
                      <i class="fas fa-calendar fa-2x text-gray-300">Employee</i>
                    </div>
                  </div>
                  <div class="card border-left-success shadow mb-4 mr-4">
                    <div class="card-body">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Late
                      </div>
                      {{-- <div class="h5 font-weight-bold text-gray-800">{{$employee->status}}</div> --}}
                      {{-- late employe count --}}
                      <div class="h5 font-weight-bold text-gray-800">{{$employeeLateCount}}</div>


                      <i class="fas fa-dollar-sign fa-2x text-gray-300">Employee</i>
                    </div>
                  </div>
                  <div class="card border-left-warning shadow mr-4">
                    <div class="card-body">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Not Attend
                      </div>
                      <div class="h5 font-weight-bold text-gray-800">{{$employeeNotAttendCount}}</div>
                      <i class="fas fa-comments fa-2x text-gray-300">Employee</i>
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
