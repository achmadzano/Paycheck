@extends('dashboard_layout')
@section('dashboard_content_employee')
<section class="home">
  <div class="text">Dashboard Employee</div>
  {{-- <div class="row ml-20"> --}}
  {{-- <div class="row mr-20"> --}}
  <!-- Page Wrapper -->
  <div class="page-wrapper">
    <!-- Page Content -->
    {{-- <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Attendance</h3>
                </div>
            </div>
        </div>
        <!-- /Page Header --> --}}

        <div class="row">
            <div class="col-md-4">
                <div class="card punch-status">
                    <div class="card-body">
                        <h5 class="card-title">Timesheet <small class="text-muted">11 Mar 2023</small></h5>
                        <div class="punch-det">
                            <h6>Check In at</h6>
                            <p>Wed, 11th Mar 2023 10.00 AM</p>
                        </div>
                        <div class="punch-info">
                            <div class="punch-hours">
                                <span>3.45 hrs</span>
                            </div>
                        </div>
                        <div class="punch-btn-section">
                            <button type="button" style="color: black" class="btn btn-primary punch-btn">Check In</button>
                        </div>
                        <div class="statistics">
                            <div class="row">
                                <div class="col-md-6 col-6 text-center">
                                    <div class="stats-box">
                                        <p>Break</p>
                                        <h6>1.21 hrs</h6>
                                    </div>
                                </div>
                                <div class="col-md-6 col-6 text-center">
                                    <div class="stats-box">
                                        <p>Overtime</p>
                                        <h6>3 hrs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card att-statistics">
                    <div class="card-body">
                        <h5 class="card-title">Statistics</h5>
                        <div class="stats-list">
                            <div class="stats-info">
                                <p>Today <strong>3.45 <small>/ 8 hrs</small></strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="stats-info">
                                <p>This Week <strong>28 <small>/ 40 hrs</small></strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="stats-info">
                                <p>This Month <strong>90 <small>/ 160 hrs</small></strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="stats-info">
                                <p>Remaining <strong>90 <small>/ 160 hrs</small></strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="stats-info">
                                <p>Overtime <strong>4</strong></p>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card recent-activity">
                    <div class="card-body">
                        <h5 class="card-title">Today Activity</h5>
                        <ul class="res-activity-list">
                            <li>
                                <p class="mb-0">Check In at</p>
                                <p class="res-activity-time">
                                    <i class="fa fa-clock-o"></i>
                                    10.00 AM.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">Check Out at</p>
                                <p class="res-activity-time">
                                    <i class="fa fa-clock-o"></i>
                                    11.00 AM.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">Check In at</p>
                                <p class="res-activity-time">
                                    <i class="fa fa-clock-o"></i>
                                    11.15 AM.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">Check Out at</p>
                                <p class="res-activity-time">
                                    <i class="fa fa-clock-o"></i>
                                    1.30 PM.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">Check In at</p>
                                <p class="res-activity-time">
                                    <i class="fa fa-clock-o"></i>
                                    2.00 PM.
                                </p>
                            </li>
                            <li>
                                <p class="mb-0">Check Out at</p>
                                <p class="res-activity-time">
                                    <i class="fa fa-clock-o"></i>
                                    7.30 PM.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Filter -->
        <div class="row filter-row">
            <div class="col-sm-3">  
                <div class="form-group form-focus">
                    <div class="cal-icon">
                        <input type="text" class="form-control floating datetimepicker">
                    </div>
                    <label class="focus-label">Date</label>
                </div>
            </div>
            <div class="col-sm-3"> 
                <div class="form-group form-focus select-focus">
                    <select class="select floating"> 
                        <option>-</option>
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                    </select>
                    <label class="focus-label">Select Month</label>
                </div>
            </div>
            <div class="col-sm-3"> 
                <div class="form-group form-focus select-focus">
                    <select class="select floating"> 
                        <option>-</option>
                        <option>2023</option>
                        <option>2022</option>
                        <option>2021</option>
                        <option>2020</option>
                        <option>2019</option>
                    </select>
                    <label class="focus-label">Select Year</label>
                </div>
            </div>
            <div class="col-sm-3">  
                <a href="#" class="btn btn-success btn-block"> Search </a>  
            </div>     
        </div>
        <!-- /Search Filter -->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Date </th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Production</th>
                                <th>Break</th>
                                <th>Overtime</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>19 Feb 2023</td>
                                <td>10 AM</td>
                                <td>7 PM</td>
                                <td>9 hrs</td>
                                <td>1 hrs</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>20 Feb 2023</td>
                                <td>10 AM</td>
                                <td>7 PM</td>
                                <td>9 hrs</td>
                                <td>1 hrs</td>
                                <td>0</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->

    </div>
    <!-- /Page Content -->


</div>
</section>
<!-- /Page Wrapper -->
@section('script')
@endsection
    
@endsection
