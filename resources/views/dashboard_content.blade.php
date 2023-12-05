@extends('dashboard_layout')
@section('dashboard_content')
    <section class="home">
      <div class="text">Dashboard</div>
      <div class="row ml-20">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Employees</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$totalEmployeeCount}}</div>
                            <i class="fas fa-comments fa-2x text-gray-300">Employee</i>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Attend</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $employeeAttendCount }}</div>
                            <i class="fas fa-comments fa-2x text-gray-300">Employee</i>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Not Attend</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$employeeNotAttendCount}}</div>
                            <i class="fas fa-comments fa-2x text-gray-300">Employee</i>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row ml-20">
      <div id="column-chart-container" style="width: 1300px; height: 400px;"></div>
      <div class="container">
        <div class="row">
          <div class="col-7">
            <h2 class="mb-3">Employee Status</h2>
            <table class="table table-borderless m-10">
              <!-- Your table content here -->
              <thead>
                <tr>
                  <th scope="col">Employee Name</th>
                  <th scope="col">Department</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($employee as $ep)
                @if ($loop->iteration <= 5)
                    <tr>
                        <td>{{$ep->name}}</td>
                        <td>{{$ep->job_title}}</td>
                        {{-- <td>30</td> --}}
                        <td>{{$ep->status}}</td>
                    </tr>
                @else
                    @break
                @endif
            @endforeach
            
              </tbody>
            </table>
          </div>
          <div class="col-5">
            <div id="pie-chart-container" style="width: 300px; height: 300px;"></div>
          </div>
        </div>
      </div>
  </section>
  <script src="{{asset('assets/js/dashboard_content.js')}}"></script>
@endsection
