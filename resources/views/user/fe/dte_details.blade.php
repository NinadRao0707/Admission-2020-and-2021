@extends('layout.newapp6')
@section('content')
<noscript>
  <style type="text/css">
    .container {display:none;}
  </style>
</noscript>
<div class="se-pre-con">
    <center><label style="font-size:50px;"><br><br><br><br><br><br>Page Loading...</label></center>
    </div>
<body>
<style>
.se-pre-con {
  position: fixed;
  left: 50%;
  top: 50%;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url({{ asset('images/loader.svg') }}) center no-repeat #fff;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>

<script type="text/javascript">
  function load(r)
  {
     // wait();
     if(r == 'RESERVED')
      {
      document.getElementById('reserved').disabled=false;
      }
  }
</script>
<div class="container">
  
  <div class="col-md-12 col-sm-12">
      
    <h1>DTE Details&nbsp;&nbsp;&nbsp;<label class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dteModal" id="myBtn" onclick="myFunction()" style="font-weight: bold; border-radius: 100px">?</label></h1>
      <script>
function myFunction() {
  var a=document.getElementById("dteModal");
   a.classList.add("fade");
}
</script>

    <!---------------------------------Modal Open------------------------------------------>
    <style type="text/css">
      .modal-header, h4, .close {
      background-color: #204a84;;
      color:#FFFF  !important;
      text-align: center;
      font-size: 30px;
      }
      .modal-footer {
      background-color: #f9f9f9;
      }
    </style>
    <div class="modal " id="dteModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">DTE Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <div class="noscriptmsg">
                <p style="font-weight: bold;">Instructions</p>
                <table class="table table-striped table-bordered" id="dte_modal">
                  <thead style="font-weight: bold; text-align: center;">
                    <tr>
                      <td>Field Name</td>
                      <td>Description</td>
                      <td>Example Input</td>
                    </tr>
                  </thead>
                  <tbody>
                  <!--   <tr>
                      <td>CET Score</td>
                      <td rowspan="8" style="padding-top: 130px;">Enter these details from your DTE CET result.</td>
                      <td>123</td>
                    </tr> -->
                 <!--    <tr>
                      <td>Month of Exam</td>
                      <td>Apr</td>
                    </tr>
                    <tr>
                      <td>Year of Exam</td>
                      <td>2018</td>
                    </tr>
                    <tr> -->
                    <tr>
                      <td>MH State DTE Merit No.</td>
                      <td>You will get MH State DTE Merit No. on application receipt with you freeze </td>
                      <td>367</td>
                    </tr>
                    <tr>
                      <td>Category</td>
                      <td>Category describe as Open, OBC, SC / NT</td>
                      <td>Open</td>
                    </tr>
                    <tr>
                      <td>Candidate Type</td>
                      <td>If you have domicile of maharashtra you are in Type A, else you are in Type B/C/D</td>
                      <td>Type B</td>
                    </tr>
                  </tbody>
                </table>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    @if($user1[0]->is_dte_details_completed==0)
    <script type="text/javascript" >

      $(window).on('load',function(){
          $('#dteModal').modal('show');
      });
    </script>
    @endif
    <!---------------------------------Modal Close------------------------------------------>

    <form method="post" action="{{ route('fe_dte_details') }}"   enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group col-md-12 col-sm-12">
            <center><h4 style="font-weight: bold; color= red ;">Do not use ' (apostrophe) inside any fields</h4></center>
        </div>
      <div class="form-group col-md-12 col-sm-12">
        <label for="dteId">DTE ID</label>
        <input type="text" class="form-control" id="dteId" name="dteId" value="{{$user1[0]->dte_id}}"placeholder=" DTE ID" disabled>
      </div>
      <div class="form-group col-md-6 col-sm-12">
        <label for="category">Category<label style="color: red; font-size: 25px;vertical-align: sub;">*</label></label>
        
        <input type="radio" required value="Reserved" name="cat_Radio">Reserved
        <input type="radio" value="Minority" name="cat_Radio">Minority
        <input type="radio" value="General" name="cat_Radio">General

        <script type="text/javascript">
          $(function() {
          $("input[type=\"radio\"]").click(function(){
            var thisElem = $(this);
            var value = thisElem.val();
                $(".displaynone").hide();
            $("."+value).show();
            localStorage.setItem("option", value);
            });
          var itemValue = localStorage.getItem("option");
          if (itemValue !== null) {
            $("input[value=\""+itemValue+"\"]").click();
          }
        });
        </script>

        <style type="text/css">
          .displaynone{
              display: none;
          }
        </style>
        <div class="General displaynone"  id="opencategory">
        <select class="form-control"  id="category1" name="opencategory" required>
        
@foreach($open as $category)          
          @if( $user1[0]->category == $category )
          <option value={{$category}} id="select" selected>{{$category}}</option>
          @endif
          @if( $user1[0]->category != $category )
          <option id="wk_sl_search_select_{{$category}}" value={{$category}}>{{$category}}</option>
          @endif
          @endforeach
          
        </select>
        </div>

        <script type="text/javascript">
        document.getElementById('category1').onchange = function() {
            localStorage.setItem('selectedtem', document.getElementById('category1').value);
        };

        if (localStorage.getItem('selectedtem')) {
            document.getElementById('wk_sl_search_select_' + localStorage.getItem('selectedtem')).selected =
                true;
        }

      </script>

         <div class="Reserved displaynone"   id="reservedcategory">
        <select class="form-control"  id="category2" name="reservedcategory" required>        
        @foreach($reservedtype as $category)          
          @if( $user1[0]->category == $category )
          <option value={{$category}} id="select" selected>{{$category}}</option>
          @endif
          @if( $user1[0]->category != $category )
          <option id="wk_sl_search_select_{{$category}}" value={{$category}}>{{$category}}</option>
          @endif
          @endforeach
          
        </select>
      </div>

      <script type="text/javascript">
        document.getElementById('category2').onchange = function() {
            localStorage.setItem('selectedtem', document.getElementById('category2').value);
            
        };

        if (localStorage.getItem('selectedtem')) {
            document.getElementById('wk_sl_search_select_' + localStorage.getItem('selectedtem')).selected =
                true;
            // console.log(localStorage.getItem('selectedtem'))
            };
      </script>
      <script>
        $('input[name="cat_Radio"]').change(function() {
          if($(this).is(':checked') && $(this).val() == 'Reserved') {
              $('#categoryModal').modal('show');
          }
        });
    </script>

      <div  class="Minority displaynone" id="minoritycategory">
        <select class="form-control" id="category3" name="minoritycategory" required>        
@foreach($minotype as $category)          
          @if( $user1[0]->category == $category )
          <option value={{$category}} id="select" selected>{{$category}}</option>
          @endif
          @if( $user1[0]->category != $category )
          <option id="wk_sl_search_select_{{$category}}" value={{$category}}>{{$category}}</option>
          @endif
          @endforeach
          
        </select>
      </div>

      <script type="text/javascript">
        document.getElementById('category3').onchange = function() {
            localStorage.setItem('selectedtem', document.getElementById('category3').value);
        };

        if (localStorage.getItem('selectedtem')) {
            document.getElementById('wk_sl_search_select_' + localStorage.getItem('selectedtem')).selected =
                true;
        }

      </script>

      </div>
     
      <div class="form-group col-md-6 col-sm-12">
        <label for="candidate_types">Candidate Type<label style="color: red; font-size: 25px;vertical-align: sub;">*</label></label>
        <select class="form-control" id="candidate_types" name="candidate_types" required>
          {{$user1[0]->candidate_type}}
          @foreach($candidate_types as $key=>$candidate_types)
          @if( $user1[0]->candidate_type == $key )
          <option id="select" value="{{$key}}" selected>{{$candidate_types}}</option>
          @endif
          @if( $user1[0]->candidate_type != $key )
          <option id="wk_sl_search_select_{{$key}}" value="{{$key}}">{{$candidate_types}}</option>
          @endif 
          @endforeach
        </select>
      </div>

      <script type="text/javascript">
        document.getElementById('candidate_types').onchange = function() {
            localStorage.setItem('selectedtem', document.getElementById('candidate_types').value);
        };

        if (localStorage.getItem('selectedtem')) {
            document.getElementById('wk_sl_search_select_' + localStorage.getItem('selectedtem')).selected =
                true;
        }

      </script>

      <div class="form-group col-md-12 col-sm-12">
        <label for="mhStateGeneralmeritNo">MH State DTE merit No.<label style="color: red; font-size: 25px;vertical-align: sub;">*</label></label>
        <input type="text" onKeyUp="$(this).val($(this).val().replace(/[^\d]/ig, ''))" class="form-control" id="mhStateGeneralmeritNo" name="mhStateGeneralmeritNo" value="{{$user1[0]->mh_state_general_merit_no}}" placeholder="Enter merit no." maxlength="5" required>
      </div>
      &nbsp;
      @if(session('log_acap') == null)
      <div class="form-group col-sm-12">
        <div class="card border-dark mb-3" style="max-width: 200rem;">
          <div class="card-header"><h5>As per DTE Allotment details</h5></div>
            <div class="card-body text-dark">
              <div class="form-group col-md-6 col-sm-12">
                <label for="seatType">Seat Type</label>
                <input type="text" class="form-control" id="seatType" name="seatType" value="{{$user1[0]->seat_type}}"  placeholder="Seat Type" disabled>
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="shift">Shift Allotted</label>
                <input type="text" class="form-control" id="shift" name="shift" value="{{$user1[0]->shift_allotted}}"  placeholder="Shift" disabled>
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="capRound">Allotted Cap Round</label>
                <input type="text" class="form-control" id="capRound" name="capRound" value="{{$user1[0]->allotted_cap_round}}"  placeholder="Allotted Cap Round" disabled>
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="courseAllotted">Course Allotted</label>
                <input type="text" class="form-control" id="courseAllotted" name="courseAllotted" value="{{$user1[0]->course_allotted}}"  placeholder="Course Allotted" disabled>
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="courseCode">Course Code</label>
                <input type="text" class="form-control" id="courseCode" name="courseCode" value="{{$user1[0]->course_allotted_code}}"  placeholder="Course Code" disabled>
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="branch">Branch Allotted</label>
                <input type="text" class="form-control" id="branch" name="branch" value= "{{$user1[0]->dte_branch}}" placeholder="DteBranch" disabled>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="form-group col-md-6 col-sm-12">
          <label for="seatType">Seat Type</label>
          <input type="text" class="form-control" id="seatType" name="seatType" value="{{$user1[0]->seat_type}}"  placeholder="Seat Type" disabled>
        </div>
        <div class="form-group col-md-6 col-sm-12">
          <label for="shift">Shift Allotted</label>
          <input type="text" class="form-control" id="shift" name="shift" value="{{$user1[0]->shift_allotted}}"  placeholder="Shift" disabled>
        </div>
        <div class="form-group col-md-6 col-sm-12">
          <label for="capRound">Allotted Cap Round</label>
          <input type="text" class="form-control" id="capRound" name="capRound" value="{{$user1[0]->allotted_cap_round}}"  placeholder="Allotted Cap Round" disabled>
        </div>
        <div class="form-group col-md-6 col-sm-12">
          <label for="courseAllotted">Course Allotted</label>
          <input type="text" class="form-control" id="courseAllotted" name="courseAllotted" value="{{$user1[0]->course_allotted}}"  placeholder="Course Allotted" disabled>
        </div>
        <div class="form-group col-md-6 col-sm-12">
          <label for="courseCode">Course Code</label>
          <input type="text" class="form-control" id="courseCode" name="courseCode" value="{{$user1[0]->course_allotted_code}}"  placeholder="Course Code" disabled>
        </div>
        <div class="form-group col-md-6 col-sm-12">
          <label for="branch">Branch Allotted</label>
          <input type="text" class="form-control" id="branch" name="branch" value= "{{$user1[0]->dte_branch}}" placeholder="DteBranch" disabled>
        </div>-->
      @endif
      <div class="form-group row justify-content-center">
      <div class="form-group btnpadding col-sm-6">
        <a href="{{ route('fe_profile') }}">
        <button type="button" class="btn btn-view btn-primary pull-left" id="back" name="back" style="width: 100%" >Back to Profile</button>
        </a>
      </div>
      <div class="form-group btnpadding col-sm-6">
        <button type="submit" class="btn btn-view btn-primary pull-left" id="submit" name="submit" style="width: 100%" >Save and Continue</button>
      </div>
      </div>
    </form>
  </div>
</div>
<br><br>

<!-- Undertaking Form Start -->
<div class="modal" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UNDERTAKING FOR ALL (EBC/ OBC/ SBC/ VJ/ NT/ SC & ST) CATEGORY STUDENTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      
      <div class="modal-body">
        <a class="text-body">
					I, Mr. / Mrs. 
					<b>
            _______________
					</b> hereby solemnly affirm that, my ward Mr. / Ms. 
					<b>
            _______________
					</b> has taken admission to the 
					<b> 
            _______________
					</b> of 
					<b>
            _______________
					</b> course in <b> _______________ </b> for the Academic Year <b>2021-22</b>
					in V.E.S. Institute of Technology, Chembur – 400074. <br>
					<br>
					We are aware of the fees structure email sent to all students from vesit.accounts@ves.ac.in. <br>
					<br>
					We further know that the balance fees payable by my ward towards Tuition Fees / Development Fees will be reimbursed 
					by Government to college after successful submission of Scholarship form <b>by my ward</b>. <br>
					<br>
					I undertake that my ward will be solely responsible to fill the Scholarship form for respective Caste / Category and 
					submit the form with required documents within the prescribed time as per the notification of Institute / Government 
					and if in case he / she fails to submit the application form with all required documents or if the government does not 
					approve the course / sanction the Freeship / Scholarship form because of non-submission of documents / any of the document 
					or certificate is found to be a invalid or fraudulent and / or does not meet the eligibility norms / or fails to apply 
					for Scholarship within the prescribed time, then I will be responsible and liable to pay the remaining / Tuition fees / Development fees.
				</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{-- Undertaking Form Close --}}



</body>
@endsection