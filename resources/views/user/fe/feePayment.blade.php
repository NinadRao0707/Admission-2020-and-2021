@extends('layout.newapp6')
@section('content')
<div class="container">
    <div class="col-md-2">

    </div>
    <div class="col-md-12">
        <h1>Payment</h1>
        <form method="post" action="{{ route('fe_admission_payment') }}">
            {{ csrf_field() }}
            <div class="form-group col-md-12">
                <div class="form-group col-md-12 col-sm-12 input-group">
                    <label class="input-group-btn" style="width: 120px">
                        <span class="btn btn-view btn-primary">
                            Form Fees<input type="text" id="paymentAmount" name="paymentAmount" style="display: none;"
                                disabled="">
                        </span>
                    </label>
                    @if($users[0]->balance_amt)
                    <input type="text" class="form-control" id="amount" name="amount" value="{{$users[0]->balance_amt}}"
                        readonly style="color: black; z-index:0;">
                    @elseif($fees[0]->amt)
                    <input type="text" class="form-control" id="amount" name="amount" value="{{$fees[0]->amt}}" readonly
                        style="color: black;z-index:0;">
                    @elseif($part['amt'])
                    <input type="text" class="form-control" id="amount" name="amount" value="{{$part['amt']}}" readonly
                        style="color: black;z-index:0;">
                    @endif

                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="form-group col-md-6 col-sm-12">
                    <a href="{{ route('fe_showDD') }}"><button type="button" id="by_dd" class="button btn-view"
                            name="by_dd">Demand Draft (DD)</button></a>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    <div class="dropdown">
                        <button id="other_means" class="btn-view dropbtn" name="other_means">Other Means</button>
                        <div class="dropdown-content">
                            <a href="#">NetBanking</a>
                            <a href="#">NEFT</a>
                            <a href="#">RTGS</a>
                        </div>
                        <style>
                        .dropbtn {
                            min-width: 495px;
                        }

                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            min-width: 495px;
                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                            z-index: 1;
                        }

                        .dropdown-content a {
                            color: white;
                            background-color: #204a84;
                            padding: 12px 16px;
                            display: block;
                        }

                        .dropdown-content a:hover {
                            background-color: white;
                            color: #204a84;
                        }

                        .dropdown:hover .dropdown-content {
                            display: block;
                        }
                        </style>
                    </div>
                    <!-- <button type="submit" id="other_means" class="btn-view" name="other_means" >Other Means</button> -->
                </div>
                <!--  <div class="form-group col-md-4 col-sm-12">
                        <a href="{{ url('fe_cash') }}"><button type="button" id="Cash" class="button btn-view" name="Cash">Cash</button></a>     
                   </div> -->

            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="feeStructureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FE Fee Structure 2020-21</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <embed src="https://vesitadmissions.ves.ac.in/pdfs/FEE%20STRUCTURE%20FE%2020-21.pdf" width="900"
                    height="500" type="application/pdf">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<center>
<b>
    <font color="red">
        IF THERE IS AN ERROR IN FEES STRUCTURE, THEN GO TO DTE DETAILS PAGE AND CHECK YOUR CATEGORY. </font>
</b>
</center>
<center><a href="#" data-toggle="modal" data-target="#feeStructureModal">
        <h5>CLICK HERE to check your fee structure according to your category</h5>
    </a></center>
<br>
<b>
    <font color="red">NOTE: DO NOT REVERT BACK FROM THE PAYMENT GATEWAY. RELOADING PAYMENT GATEWAY MULTIPLE TIMES CAN
        BLOCK THE USER. IN CASE OF SLOW INTERNET CONNECTION DO NOT REFRESH THE PAGE. BE PATIENT.</font>
</b>
<br><br>
@endsection