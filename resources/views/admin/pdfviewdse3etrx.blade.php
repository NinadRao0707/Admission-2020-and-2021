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
                <th style="font-size: 18px;" colspan="7">List of ACAP Admitted Students</th>
              </tr>
            </thead>
           <thead>
              <tr>
                <th>Sr No.</th>
                <th>DTE Application No.</th>
                <th>Student Name</th>
                <th>Granted Amount</th>
                <th>Paid Amount</th>
                <th>Date of Admission</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
               @foreach($users as $key => $user)
              <tr>
                <td>{{++$key}}</td>
                <td>{{$user->dte_id}}</td>
                <td style="white-space: nowrap;">{{$user->name_on_marksheet}}</td>
                <td>{{$user->granted_amt}}</td>
                <td>{{$user->paid_amt}}</td>
                <td>{{substr($user->updated_at,0,10)}}</td>
                <td>{{$user->status}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
          </div>
        </div>
      </div>
</div>