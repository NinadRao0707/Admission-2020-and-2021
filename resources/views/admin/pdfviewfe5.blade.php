<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
<div class="container">
  <div class="col-md-12"><img class="img-responsive" src="{{ asset('public/images/headerPrint_acap.png') }}"></div><br>
 <div class="col-md-12">
        <div class="form-group">
          <style>
            th,td {
                text-align: center;
                border: 2px solid #000000;
            }
            .table_content{
              color: black;
              background: white;
              width: 100%;
              font-size: 15px;
              border: 2px solid #000000;
            }

          </style>
          <div class="col-md-12">
          <table class="table_content">
            <thead>
              <tr>
                <th style="font-size: 18px;" colspan="9">List of ACAP Part Payment Students</th>
              </tr>
            </thead>
            <thead>
              <tr>
                <th>Sr No.</th>
                <th>DTE Application No.</th>
                <th>Student Name</th>
                <th>Branch</th>
                <th>Shift</th>
                <th>Date of Admission</th>
                <th>Total Amount</th>
                <th>Paid Amount</th>
                <th>Remaining Amount</th>
              </tr>
            </thead>
            <tbody>
               @foreach($users as $key => $user)
               @if($user->total_amt > $user->granted_amt)
              <tr>
                <td>{{++$key}}</td>
                <td>{{$user->dte_id}}</td>
                <td style="white-space: nowrap;">{{$user->name_on_marksheet}}</td>
                <td>{{$user->branch}}</td>
                <td>{{$user->shift_allotted}}</td>
                <td>{{substr($user->updated_at,0,10)}}</td>
                <td>{{$user->total_amt}}</td>
                <td>{{$user->granted_amt}}</td>
                <td>{{$user->total_amt - $user->granted_amt}}</td>
              </tr>
               @endif
              @endforeach 
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td><td></td><td></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
      </div>
</div>