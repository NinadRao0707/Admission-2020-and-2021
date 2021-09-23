<!doctype html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vivekanand Education Society's Institute of Technology</title>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('public/images/favicon.png') }}" type="image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/adminStyle.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('public/css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/https://fonts.googleapis.com/css?family=Lato:400,700') }}" rel='stylesheet' type='text/css'>
    <link href="{{ asset('public/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
  </head>
  <header>
    <div class="container-fluid head-banner">
      <div class="container">
        <div style="float: right">
            <br>
            <font style="color: #fdc003; font-size: 14px; padding-right: 100px">
              @if(session('role') == 'Admin' || session('role') == 'Super Admin')
              Course&nbsp; : &nbsp;<label>{{session('adminCourse')}}</label><br>
              Event&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <label>{{session('adminEvent')}}</label>
              @endif

              @if(session('role') == 'Staff')
              Course&nbsp; : &nbsp;<label>{{session('course')}}</label><br>
              Event&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <label>{{session('event')}}</label>
              @endif
            </font>
          </div>
        <div class="logo"><img src="{{ asset('public/images/logo.png') }}" class="img-responsive" /></div>
        <div class="col-md-12">
          @if(session('role') == 'Admin' || session('role') == 'Super Admin')
          <div class="topnav" id="myTopnav">
            <a href="{{ route('adminsEvent') }}"><span class="glyphicon glyphicon-book"></span>Course</a>
            <a href="{{ route('adminDashboard') }}"><span class="glyphicon glyphicon-dashboard"></span>  Dashboard</a>
            <a href="{{ route('adminStudentIntake') }}"><span class="glyphicon glyphicon-user"></span>  Student Intake</a>
            <a href="{{ route('adminSeizer') }}"><span class="glyphicon glyphicon-search"></span>  Admission Management</a>
            <a href="{{ route('adminUsersStaff') }}"><span class="glyphicon glyphicon-list-alt"></span>  Users</a>
            <a href="{{ route('adminAccounts') }}"><span class="glyphicon glyphicon-cog"></span>  Accounts</a>
            <a href="{{ route('adminLosAcapApplied') }}"><span class="glyphicon glyphicon-th-list"></span>  Reports</a>
            <a href="{{ route('adminEvents') }}"><span class="glyphicon glyphicon-pencil"></span>  Events</a>
            <a href="{{ route('adminLogout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
            <script>
              function myFunction() {
                  var x = document.getElementById("myTopnav");
                  if (x.className === "topnav") {
                      x.className += " responsive";
                  } else {
                      x.className = "topnav";
                  }
              }
            </script>
          </div>
          @else
          <div class="topnav" id="myTopnav">
            <a href="{{ route('adminLogout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
            <script>
              function myFunction() {
                  var x = document.getElementById("myTopnav");
                  if (x.className === "topnav") {
                      x.className += " responsive";
                  } else {
                      x.className = "topnav";
                  }
              }
            </script>
            <style type="text/css">
              .topnav {
                overflow: hidden;
                color: #002247;
                background-color: #ffc002;
                border-radius: 25px;
              }

              .topnav a {
                float: right;
                display: block;
                color: #002247;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
              }
            </style>
          </div>
          @endif
        </div>
      </div>
    </div>
  </header>
  <body>
    <div class="container">
      <div class="container">
        <div class="col-md-2">
          <div class="col">
            <div class="row-md-2">
              <br><br><br><br><br>
            </div>
            @if(session('role') == 'Admin' || session('role') == 'Super Admin')
            <div class="row-md-8">
              <aside>
                <div class="list-group">
                  @if(session('adminEvent') == 'ACAP')
                  <a href="{{ route('adminSeizer') }}" class="list-group-item">
                    <h5 class="list-group-item-heading">Form Seizing</h5>
                  </a>
                  @endif
                  @if(session('adminEvent') == 'DTE')
                  <a href="{{ route('adminVerifier') }}" class="list-group-item ">
                    <h5 class="list-group-item-heading">Form Verification</h5>
                  </a>
                  <a href="{{ route('adminDocumentVerifier') }}" class="list-group-item">
                    <h5 class="list-group-item-heading">Document Verification</h5>
                  </a>
                  @endif
                  <a href="{{ route('adminAdmit') }}" class="list-group-item">
                    <h5 class="list-group-item-heading">Admit</h5>
                  </a>
                  <a href="{{ route('adminPartPayment') }}" class="list-group-item">
                    <h5 class="list-group-item-heading">Part Payment</h5>
                  </a>
                  <a href="{{ route('adminCashPayment') }}" class="list-group-item active">
                    <h5 class="list-group-item-heading">Fees transfer</h5>
                </a>
                  <a href="{{ route('adminCancelAdmission') }}" class="list-group-item">
                    <h5 class="list-group-item-heading">Cancel Admission</h5>
                  </a>
                  <a href="{{ route('adminUploadAllotmentList') }}" class="list-group-item">
                    <h5 class="list-group-item-heading">Upload Allotment List</h5>
                  </a>
                </div>
              </aside>
            </div>
            @endif
            <div class="row-md-2"></div>
          </div>
        </div>
        <div class="col-md-8">
          <h1>FEES TRANSFER</h1>
          <form method="POST" action=" {{ url('postacapCashPayment') }} "  enctype="multipart/form-data">
            {{csrf_field()}}
            @if(session('error'))
                <center><p> {{session('error')}}</p></center>
            @endif 
            
            <br><br><br><br>
            <div class="col-md-12">
              <style>
                .table-bordered {
                border: 2px solid #000000;
                }
                .table-bordered > thead > tr {
                color: #002147;
                background-color: #ffc002; 
                }
                .table-bordered > thead > tr > th {
                font-weight: bold;
                color: #ffffff;
                background-color: #002147;
                }
              </style>
            </form>
              <form method="post" action="{{ url('feestransfer') }}" enctype="multipart/form-data">
              
              <div class="form-group">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th colspan="4">Fees transaction details</th>
                    </tr>                    
                  </thead>
                  <tbody>
                   <tr>  
                        <td>Dte ID</td>
                        <td> <input type="text" name="dte_id" readonly value=" {{$data[0]->dte_id }} "> </td>
                        <td>course</td>
                        <td> <input type="text" name="course" readonly value="{{ $data[0]->course }} "> </td>

                    </tr>
                    <tr>  
                        <td>Sub Merchant Id </td>
                        <td> <input type="text" name="sub_merchant_id" readonly value=" {{ $data[0]->sub_merchant_id }} "> </td>
                        <td>ref_no</td>
                        <td> <input type="text" name="ref_no" readonly value=" {{ $data[0]->ref_no }} "> </td>
                    </tr>
                    <tr>  
                        <td>trans_id</td>
                        <td> <input type="text" name="trans_id" readonly value=" {{ $data[0]->trans_id }} "> </td>
                        <td>Initial amount</td>
                        <td> <input type="text" name="init_amt" readonly value=" {{ $data[0]->init_amt }} "> </td>

                    </tr>
                    <tr>  
                        <td>Stax amount</td>
                        <td> <input type="text" name="s_tax_amt" readonly value=" {{ $data[0]->s_tax_amt }} "> </td>
                        <td>Total amount</td>
                        <td><input type="text" name="total_amt" readonly value=" {{ $data[0]->total_amt }} "> </td>

                    </tr>
                      <tr>  
                         <td>Transaction amount</td>
                        <td> <input type="text" name="trans_amt" readonly value=" {{ $data[0]->trans_amt }} "> </td>
                         <td>Current acap amount</td>
                        <td> <input type="text" name="balance_amt" readonly value=" {{ $newdata[0]->balance_amt }} "> </td>
                        
                        
                    </tr>
                      <tr>  
                       <td>Transaction status</td>
                        <td> <input type="text" name="trans_status" readonly value=" {{ $data[0]->trans_status }} "> </td>
                        <td>Payment mode</td>
                        <td><input type="text" name="payment_mode" readonly value=" {{ $data[0]->payment_mode }} "> </td>


                    </tr>
                    <tr>  
                        <td>Admission id</td>
                        <td> <input type="text" name="admission_id" readonly value=" {{ $data[0]->admission_id }} "> </td>
                        
                        <td>Response code</td>
                        <td><input type="text" name="response_code" readonly value=" {{ $data[0]->response_code }} "> </td>
                    </tr>
                    
                      
                 
                    <tr>
                      <td>Transfer to ACAP</td>
                      <td>
                        <select name="admissiontypetransfer" id="type">
                            <!-- <option value="DTE">DTE</option> -->
                            <option value="ACAP">ACAP</option>                            
                        </select>

                      </td>

                        <td>Admission Type</td>
                        <td><input type="text" name="admission_type"  value=" {{ $data[0]->admission_type }} "> </td>
                    </tr>           
                                 
                    <tr>                      
                      <td colspan="4"><input type="submit" name=""
                        <?php 
                        if($data[0]->trans_amt != $newdata[0]->balance_amt ){
                          echo "disabled";
                        }
                        ?>
                       value="Submit" > </td>                    
                    </tr> 
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>
      <br><br><br>
    </div>
    <script src="{{ asset('public/js/app.js') }}"></script>
  </body>
  <footer class="footer">
    <div class="container">
      <p class="text-muted">&copy; 2016. <a href="http://vesit.ves.ac.in">Vivekanand Education Society's Institute of Technology</a></p>
    </div>
  </footer>
</html>