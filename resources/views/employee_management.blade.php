@extends('dashboard_layout')
@section('employee_management')
    <section class="home">
      <div class="text">Employee management</div>
      <div class="container">
        <div class="row">
          <div class="col-9">
    
            <div class="mt-4 ml-11" id="clock">Jakarta, Indonesia / <span id="time">12:00:00</span></div>
 

            
            <button class="btn btn-dark ml-11" onclick="window.location='{{ route('employee.create') }}'">Add Employee</button>
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
                      <div class="h5 font-weight-bold text-gray-800">856</div>
                      <i class="fas fa-calendar fa-2x text-gray-300">Employee</i>
                    </div>
                  </div>
                  <div class="card border-left-success shadow mb-4 mr-4">
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
                  </div>
                  <div class="card border-left-primary shadow mb-4 mt-4 mr-4">
                    <div class="card-body">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Contract
                      </div>
                      <div class="h5 font-weight-bold text-gray-800">200</div>
                      <i class="fas fa-calendar fa-2x text-gray-300">Employee</i>
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
  { name: "Jacob", department: "IT", age: "29", gross_salary: "$1900", net: "$1800", status: "Intern" },
  { name: "Alice", department: "HR", age: "26", gross_salary: "$1800", net: "$1700", status: "Permanent" },
  { name: "Sarah", department: "Finance", age: "32", gross_salary: "$2200", net: "$2100", status: "Permanent" },
  { name: "John", department: "Marketing", age: "28", gross_salary: "$2000", net: "$1900", status: "Contract" },
  { name: "Emily", department: "Sales", age: "31", gross_salary: "$2100", net: "$2000", status: "Permanent" },
  { name: "Michael", department: "IT", age: "35", gross_salary: "$2200", net: "$2100", status: "Intern" },
  { name: "Olivia", department: "HR", age: "27", gross_salary: "$1900", net: "$1800", status: "Contract" },
  { name: "Daniel", department: "Marketing", age: "30", gross_salary: "$2100", net: "$2000", status: "Permanent" },
  { name: "Sophia", department: "Sales", age: "28", gross_salary: "$1900", net: "$1800", status: "Contract" },
  { name: "Ethan", department: "Finance", age: "33", gross_salary: "$2300", net: "$2200", status: "Permanent" },
  { name: "Ava", department: "IT", age: "27", gross_salary: "$2000", net: "$1900", status: "Permanent" },
  { name: "Liam", department: "HR", age: "29", gross_salary: "$2100", net: "$2000", status: "Contract" },
  { name: "Mia", department: "Marketing", age: "31", gross_salary: "$2200", net: "$2100", status: "Permanent" }
  // Add more objects as needed
];


function sortDataByGrossSalary(order) {
      employeeData.sort((a, b) => {
        const salaryA = parseFloat(a.gross_salary.replace('$', '').replace(',', ''));
        const salaryB = parseFloat(b.gross_salary.replace('$', '').replace(',', ''));
        return order === 'Ascending' ? salaryA - salaryB : salaryB - salaryA;
      });

      displaySortedData();
    }

    function displaySortedData() {
      // Replace this with your code to display the sorted data (e.g., update a table or list).
      console.log(employeeData);
    }

    const sortSelect = document.getElementById('sort-select');
    sortSelect.addEventListener('change', function () {
      const selectedValue = sortSelect.value;
      if (selectedValue) {
        sortDataByGrossSalary(selectedValue);
      }
    });


const departmentSelect = document.getElementById("department-select");
const statusSelect = document.getElementById("status-select");
const filterButton = document.getElementById("filter-button");
const employeeTableBody = document.getElementById("employeeTableBody");

function generateTableRows(data) {
  let tableRows = "";

  for (const employee of data) {
    let statusClass = "";
    if (employee.status === "Intern") {
      statusClass = "text-warning";
    } else if (employee.status === "Permanent") {
      statusClass = "text-primary";
    } else if (employee.status === "Contract") {
      statusClass = "text-success";
    }


    tableRows += `
      <tr>
        <td>${employee.name}</td>
        <td>${employee.department}</td>
        <td>${employee.age}</td>
        <td>${employee.gross_salary}</td>
        <td>${employee.net}</td>
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



    


    