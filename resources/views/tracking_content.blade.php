@extends('dashboard_layout')
@section('tracking_content')
    <section class="home">
      <div class="text">Attendance Tracking</div>
      <div class="container">
        <div class="row">
          <div class="col-9">
            <!-- Your table content here -->
            {{-- <h2 class="mt-4 ml-11">Employee Status</h2> --}}
            <div class="mt-4 ml-11" id="clock">Jakarta, Indonesia / <span id="time">12:00:00</span></div>
            <div class="mt-4 ml-11">
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
            </div>

            
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
                      <div class="h5 font-weight-bold text-gray-800">756</div>
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

//TABLE
const employeeData = [
  { name: "Jacob", department: "IT", startTime: "8:59", endTime: "17:01", status: "Attend" },
  { name: "Emma", department: "Accounting", startTime: "8:30", endTime: "16:45", status: "Late" },
  { name: "Lucas", department: "Creative", startTime: "N/A", endTime: "N/A", status: "Not Attend" },
  { name: "Olivia", department: "Procurement", startTime: "8:45", endTime: "16:30", status: "Late" },
  { name: "Sophia", department: "IT", startTime: "9:15", endTime: "17:10", status: "Attend" },
  { name: "John", department: "Legal", startTime: "8:00", endTime: "16:30", status: "Late" },
  { name: "Lily", department: "Legal", startTime: "8:30", endTime: "17:00", status: "Attend" },
  { name: "William", department: "Marketing", startTime: "9:15", endTime: "17:15", status: "Attend" },
  { name: "Ella", department: "Marketing", startTime: "8:45", endTime: "16:45", status: "Late" },
  { name: "Daniel", department: "Finance", startTime: "8:00", endTime: "16:30", status: "Late" },
  { name: "Ava", department: "Finance", startTime: "9:00", endTime: "17:00", status: "Attend" },
  { name: "Oliver", department: "HRD", startTime: "8:30", endTime: "17:00", status: "Attend" },
  { name: "Harper", department: "HRD", startTime: "8:30", endTime: "16:45", status: "Late" },
  { name: "Mason", department: "GA", startTime: "8:45", endTime: "16:30", status: "Late" },
  { name: "Mia", department: "GA", startTime: "9:00", endTime: "17:00", status: "Attend" },
  { name: "Ethan", department: "Production", startTime: "8:15", endTime: "17:15", status: "Attend" },
  { name: "Aiden", department: "Production", startTime: "8:30", endTime: "16:30", status: "Late" },
  { name: "Harper", department: "QA", startTime: "8:45", endTime: "16:45", status: "Late" },
  { name: "Elizabeth", department: "QA", startTime: "9:00", endTime: "17:00", status: "Attend" },
  { name: "Benjamin", department: "PPIC", startTime: "8:00", endTime: "16:30", status: "Late" },
  { name: "Evelyn", department: "PPIC", startTime: "9:15", endTime: "17:15", status: "Attend" },
];


const departmentSelect = document.getElementById("department-select");
const statusSelect = document.getElementById("status-select");
const filterButton = document.getElementById("filter-button");
const employeeTableBody = document.getElementById("employeeTableBody");

function generateTableRows(data) {
  let tableRows = "";

  for (const employee of data) {
    let statusClass = "";
    if (employee.status === "Late") {
      statusClass = "text-warning";
    } else if (employee.status !== "Attend") {
      statusClass = "text-danger";
    } else if (employee.status === "Attend") {
      statusClass = "text-success";
    }

    tableRows += `
      <tr>
        <td>${employee.name}</td>
        <td>${employee.department}</td>
        <td>${employee.startTime}</td>
        <td>${employee.endTime}</td>
        <td class="${statusClass}">${employee.status}</td>
      </tr>
    `;
  }

  employeeTableBody.innerHTML = tableRows;
}

function filterData() {
  const selectedDepartment = departmentSelect.value;
  const selectedStatus = statusSelect.value;

  // Filter by department and status
  const filteredData = employeeData.filter(employee => {
    return (!selectedDepartment || employee.department === selectedDepartment) &&
           (!selectedStatus || employee.status === selectedStatus);
  });

  generateTableRows(filteredData);
}

filterButton.addEventListener("click", filterData);

// Generate the table rows when the page loads
window.addEventListener("load", function() {
  generateTableRows(employeeData);
});
//TABLE

//CLOCK

        function updateClock() {
            const timeElement = document.getElementById("time");
            const options = {
            timeZone: "Asia/Jakarta",
            hour: "2-digit",
            minute: "2-digit",
            second: "2-digit",
            };
            const dateTime = new Date().toLocaleString("en-US", options);
            timeElement.textContent = dateTime;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to display the time immediately
        updateClock();

//CLOCK

        
</script>


      

      
      
  </section>
@endsection
