@extends('layout.newapp6')
@section('content')
<noscript>
    <style type="text/css">
        .container {display:none;}
    </style>
    <div class="noscriptmsg">
    <p>You don't have javascript enabled.  Good luck with that.</p>
    </div>
</noscript>
<div class="se-pre-con">
    <center><label style="font-size:50px;"><br><br><br><br><br><br>Page Loading...</label></center>
</div>
<body onload = "load()">
<style>
.se-pre-con {
  position: fixed;
  left: 50%;
  top: 50%;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url({{ asset('public/images/loader.svg') }}) center no-repeat #fff;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script src="{{ asset('public/js/jquery.min.js') }}"></script>
<script>
$(window).load(function() {
    // Animate loader off screen
    $(".se-pre-con").fadeOut("slow");;
  });
</script>  
    <script type = "text/javascript">
   function load(){
       //alert('hello');
        ync1();
        ync2();
        ync3();
        ync4();
        ync5();
        ync6();
        ync7();
        ync8();
        ync9();
        ync10();
        ync11();
        ync12();
        ync14();
        ync15();
        ync16();
        ync17();
        ync18();
        ync19();
        ync20();
        ync21();
        ync22();
        ync23();
        ync24();
        ync25();
        
        ync27();
        ync28();
        ync29();
        ync30();
        ync31();
        ync32();
        ync33();
        ync34();
    }
    </script>
<!--nav start-->
 <!--  <header style="position: fixed;right: 1px; top: 80px; width: 100% !important;z-index: 1;">

            <nav id="menu" style="background-color: #204a84;">
    
                         <input type="checkbox" id="tm">
                         <ul class="main-menu clearfix">
              <div class="col-md" >
                <div class="abc">
                    <li ><a href="https://ves.ac.in " ><i class="fa fa-fw fa-home";></i>Home&nbsp</a></li>
                </div>
              </div>
              <div class="col-md" >
                <div class="abc">
                    <li ><a href="{{ route('me_dte_details') }} " ><i class="fa fa-fw fa-home";></i>DTE Details</a></li>
                </div>
              </div>
              
              <div class="col-md" >
                <div class="abc">
                    <li ><a href="{{ route('me_academic_details') }}" ><i class="fa fa-fw fa-home";></i>Academic Details</a></li>
               </div>
              </div>
              <div class="col-md" >
                <div class="abc">
                    <li ><a href="{{ route('me_personal_details') }}" ><i class="fa fa-fw fa-home";></i>Personal Details</a></li>
               </div>
              </div>
              <div class="col-md" >
                <div class="abc">
                    <li><a href="{{ route('me_guardian_details') }}" ><i class="fa fa-fw fa-home"></i>Guardian Details</a></li>
              </div>
              </div>
              <div class="col-md" >
                <div class="abc">
                    <li ><a href="{{ route('me_contact_details') }}" ><i class="fa fa-fw fa-home"></i>Contact Details</a></li>
              </div>
              </div>
              
              
              
              <div class="col-md" >
                <div class="abc">
                    <li class="active"><a href="{{ route('me_document_upload') }}"><i class="fa fa-fw fa-database"></i>Document Upload&nbsp</a></li>
              </div>
              </div>
              <div class="col-md" >
                <div class="abc">
                    <li><a href="{{ route('me_admission_payment') }}"><i class="fa fa-fw fa-database"></i>Payment</a></li>
              </div>
              </div>
              <div class="col-md" >
                <div class="abc">
                    <li><a href="{{ route('me_final_submit') }}"><i class="fa fa-fw fa-database"></i>Final Submission</a></li>
              </div>
              </div> 
              
                <div class="col-md" >
                  <div class="abc">
                           <li><a href="{{ route('me_profile') }} " ><i class="fa fa-fw fa-user"></i>Profile</a></li>
          
                </div>
                </div>
               
                <div class="col-md" >
                    <div class="abc">
                        <li><a href="{{ route('logout') }} " ><i class="fa fa-fw fa-power-off"></i>Logout</a></li>
                  </div>
                  </div>
              </nav>
            </header> 
            nav end -->
<div class="container">
  <div class="col-md-2">
    <div class="col">
      
     <!--  <div class="row-md-8">
        <aside>
          <div class="list-group">
            <a href="{{ route('me_dte_details') }}" class="list-group-item">
              <h5 class="list-group-item-heading">DTE Details</h5>
            </a>
            <a href="{{ route('me_academic_details') }}" class="list-group-item">
              <h5 class="list-group-item-heading">Academic Details</h5>
            </a>
            <a href="{{ route('me_personal_details') }}" class="list-group-item">
              <h5 class="list-group-item-heading">Personal Details</h5>
            </a>
            <a href="{{ route('me_guardian_details') }}" class="list-group-item">
              <h5 class="list-group-item-heading">Guardian Details</h5>
            </a>
            <a href="{{ route('me_contact_details') }}" class="list-group-item">
              <h5 class="list-group-item-heading">Contact Details</h5>
            </a>
              @if(session('log_acap') == "yes")
            <a href="{{ route('me_acap_document_upload') }}" class="list-group-item active">
              <h5 class="list-group-item-heading">Document Upload</h5>
            </a>
            @endif
            @if(Session('log_acap')!="yes")
            <a href="{{ route('me_document_upload') }}" class="list-group-item active">
              <h5 class="list-group-item-heading">Document Upload</h5>
            </a>
            <a href="{{ route('me_admission_payment') }}" class="list-group-item">
              <h5 class="list-group-item-heading">Payment</h5>
            </a>
            
            @endif
            <a href="{{ route('me_final_submit') }}" class="list-group-item">
              <h5 class="list-group-item-heading">Final Submission</h5>
            </a>
          </div>
        </aside>
      </div> -->
      
    </div>
  </div>
  <div class="col-md-12">
       
    <h1>Document Upload&nbsp&nbsp&nbsp<label class="btn btn-sm btn-danger" data-toggle="modal" data-target="#dteDocument" id="myBtn" style="font-weight: bold; border-radius: 100px">?</label></h1>
    <!---------------------------------Modal Open------------------------------------------>
      <!--   <style type="text/css">
       .modal-header, h4, .close {
            background-color: #204a84 !important;
            color:#002147 !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-open {
  overflow: hidden !important;
}
.modal {
  position: fixed !important;
  top: 0!important;
  right: 0!important;
  bottom: 0!important;
  left: 0 !important;
  z-index: 1050!important;
  display: none!important;
  overflow: hidden!important;
  -webkit-overflow-scrolling: touch!important;
  outline: 0 !important;
} 
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform .3s ease-out !important;
       -o-transition:      -o-transform .3s ease-out !important;
          transition:         transform .3s ease-out !important;
  -webkit-transform: translate(0, -25%) !important;
      -ms-transform: translate(0, -25%) !important;
       -o-transform: translate(0, -25%) !important;
          transform: translate(0, -25%) !important;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0) !important;
      -ms-transform: translate(0, 0) !important;
       -o-transform: translate(0, 0) !important;
          transform: translate(0, 0) !important;
}
.modal-open .modal {
  overflow-x: hidden  !important;
  overflow-y: auto !important;
}
.modal-dialog {
  position: relative; !important
  width: auto !important;
  margin: 10px !important;
}
.modal-content {
  position: relative !important;
  background-color: #fff !important;
  -webkit-background-clip: padding-box !important;
          background-clip: padding-box !important;
  border: 1px solid #999 !important;
  border: 1px solid rgba(0, 0, 0, .2) !important;
  border-radius: 6px !important;
  outline: 0 !important;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5) !important;
          box-shadow: 0 3px 9px rgba(0, 0, 0, .5) !important;
}
.modal-backdrop {
  position: fixed !important;
  top: 0 !important;
  right: 0 !important;
  bottom: 0 !important;
  left: 0 !important;
  z-index: 1040 !important;
  background-color: #000 !important;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0) !important;
  opacity: 0 !important;
}
.modal-backdrop.in {
  filter: alpha(opacity=50) !important;
  opacity: .5 !important;
}
.modal-header {
  padding: 15px !important;
  border-bottom: 1px solid #e5e5e5 !important;
}
.modal-header .close {
  margin-top: -2px !important;
}
.modal-title {
  margin: 0 !important;
  line-height: 1.42857143 !important;
}
.modal-body {
  position: relative !important;
  padding: 15px !important;
}
.modal-footer {
  padding: 15px !important;
  text-align: right !important;
  border-top: 1px solid #e5e5e5 !important;
}
.modal-footer .btn + .btn {
  margin-bottom: 0 !important !important;
  margin-left: 5px !important !important;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px !important !important;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0 !important !important;
}
.modal-scrollbar-measure {
  position: absolute !important;
  top: -9999px !important;
  width: 50px !important;
  height: 50px !important;
  overflow: scroll!important;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px!important;
    margin: 30px auto!important;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5)!important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5)!important;
  }
  .modal-sm {
    width: 300px!important;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px !important;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  filter: alpha(opacity=0);
  opacity: 0;

  line-break: auto;
}
.tooltip.in {
  filter: alpha(opacity=90);
  opacity: .9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  right: 5px;
  bottom: 0;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0 ;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, .2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .2);

  line-break: auto;
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  content: "";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, .25);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, .25);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, .25);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, .25);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: .6s ease-in-out left;
       -o-transition: .6s ease-in-out left;
          transition: .6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
         -o-transition:      -o-transform .6s ease-in-out;
            transition:         transform .6s ease-in-out;

    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    -webkit-perspective: 1000px;
            perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    left: 0;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    left: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
  background-color: rgba(0, 0, 0, 0);
  filter: alpha(opacity=50);
  opacity: .5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image:      -o-linear-gradient(left, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .0001)), to(rgba(0, 0, 0, .5)));
  background-image:         linear-gradient(to right, rgba(0, 0, 0, .0001) 0%, rgba(0, 0, 0, .5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  filter: alpha(opacity=90);
  outline: 0;
  opacity: .9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  margin-top: -10px;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  font-family: serif;
  line-height: 1;
}
.carousel-control .icon-prev:before {
  content: '\2039';
}
.carousel-control .icon-next:before {
  content: '\203a';
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}

.carousel-caption .btn {
  text-shadow: none;
}
        .modal-footer {
            background-color: #f9f9f9 !important;
        }
        </style>   -->


        <div class="modal fade" id="dteDocument" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color : #204a84; color:white">
              <h4 class="modal-title">Document Details</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
              <p style="font-weight: bold;">Instructions</p>
              <table class="table table-striped table-bordered" id="academic_modal">
                <thead style="font-weight: bold; text-align: center;">
                  <tr>
                    <td>Column Name</td>
                    <td>Description</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Document Name</td>
                    <td>This column contains the name of the document that needs to be uploaded.</td>
                  </tr>
                  <tr>
                    <td>Uploading ( Yes / No )</td>
                    <td>
                      This column allows you to select if you are uploading a document or not.<br> 
                      <font style="font-weight: bold;">For Documents marked with <font style="color: red;">*</font> :</font> These documents need to be uploaded when you are filling the form.<br>
                      <font style="font-weight: bold;">In case you cannot upload these documents they need to be submitted in the college within 2-3 working days of admission.</font>
                    </td>
                  </tr>
                  <tr>
                    <td>Not Applicable</td>
                    <td>
                      Select this option if the document is not relevent for you.
                      Documents Marked <font style="font-weight: bold;">MANDATORY</font> needs to be uploaded during the form filling process or within 2-3 working days after admission.
                    </td>
                  </tr>
                  <tr>
                    <td>Select Document</td>
                    <td>
                      Choose the file that is to be uploaded. <br>
                    </td>
                  </tr>
                  <tr>
                    <td>Upload Document</td>
                    <td>Click this button when you want to upload the document,</td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>Shows wether the document is uploaded or not.</td>
                  </tr>
                  <tr>
                    <td>Delete</td>
                    <td>
                      You can use the delete button if you make a mistake while uploading a document.
                    </td>
                  </tr>
                  <tr>
                    <td>Comment</td>
                    <td>Any message regarding error will be displayed here.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
    <!---------------------------------Modal Close------------------------------------------>
    <div class="form-group col-md-12">
        <p style="color: red;font-size:18px; font-weight: bold; text-align: center;">Size of each file should be less than 1MB<br>
        Photo and signature should be in .jpg format.<br>
        Rest of the documents should be in .pdf format.</p>
    @if(session('log_acap')=="yes")
    <label style="color: red;font-size:18px; font-weight: bold; text-align: center;">List of Document for ACAP : </label>&nbsp;<button class="btn btn-danger" data-toggle="modal" data-target="#dteDocumentList" id="myBtnAcap" style="font-weight: bold; border-radius: 100px; width: 40%;">Click Here!</button>
    <!---------------------------------Modal Open------------------------------------------>
      <style type="text/css">
        .modal-header, h4, .close {
        background-color: #204a84;
        color:#fff !important;
        text-align: center;
        font-size: 30px;
        } 
        .modal-footer {
        background-color: #f9f9f9;
        }
        .btn-info{
          height: 35px !important; width: 100px !important;
        }
      </style>
      <div class="modal fade" id="dteDocumentList" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="background-color : #204a84; color:white" >
              <h4 class="modal-title">List of Document for ACAP Vacancy Students</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p style="font-weight: bold;">Document List</p>
              <table class="table table-striped table-bordered" id="academic_modal">
                <thead style="font-weight: bold; text-align: center;">
                  <tr>
                    <td>Sr. No.</td>
                    <td>Document Name</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Photo ( in .jpg format )</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Signature ( in .jpg format )</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>SC Confirmation Reciept</td>
                  </tr>
                   <tr>
                    <td>4</td>
                    <td>ARC Acknowledgement Letter</td>
                  </tr>
                   <tr>
                    <td>5</td>
                    <td>DTE Allotment Letter</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>GATE Result ( Printout )</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>SSC Marksheet</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Degree Marksheet</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>First Year or Sem 1 and Sem 2 marksheet</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Second Year or Sem 3 and Sem 4 marksheet</td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Third Year or Sem 5 and Sem 6 marksheet</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Fourth Year or Sem 7 and Sem 8 marksheet</td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Degree Leaving/Transer Certificate</td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Birth Certificate ( In case you dont have Domicile )</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Domicile Certificate ( In case you dont have Birth Certificate )</td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Retention Certificate ( If applicable )</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Minority Affidavit</td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Gap Certificate</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Migration Affidavit</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Convocation Certificate</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>Community Certificate</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>Proforma O</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Caste Certificate</td>
                  </tr
                  <tr>
                    <td>24</td>
                    <td>Caste Validity Certificate</td>
                  </tr>
                  <tr>
                    <td>25</td>
                    <td>Non Creamy Layer Certificate</td>
                  </tr>
                  <tr>
                    <td>26</td>
                    <td>Income Certificate</td>
                  </tr>
                   <tr>
                    <td>27</td>
                    <td>Physical Fitness Certificate</td>
                  </tr>
                   <tr>
                    <td>28</td>
                    <td>Anti-Ragging Affidavit</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <!---------------------------------Modal Close------------------------------------------>
    @endif
    </div>
    
    <form method="post" action="{{ route('me_document_upload') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-group col-md-12">
        <style type="text/css">
          .table-bordered > tbody > tr > td > font {
          color: red;
          font-weight: bold;
          font-size: 20px;
          }
          .modal-dialog{
                          width: 65%;
                        }
        </style>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2">Sr No.</th>
              <th rowspan="2" style="text-align: center">Document Name <br> <font style="color: red">* are mandatory</font></th>
              <th colspan="2">Uploading</th>
              <th rowspan="2">Not Applicable</th>
              <th rowspan="2">Select Document</th>
              <th rowspan="2">Upload Document</th>
              <th rowspan="2">Status</th>
              <th rowspan="2">Delete</th>
              <th rowspan="2">Comments</th>
              {{-- after upload add variable to session , use this to change status to uploaded --}}
            </tr>
            <tr>
              <th>Yes</th>
              <th>No</th>
            </tr>
          </thead>
          <tbody>
            <div id="dteDocs">
              {{-- Profile Photo --}}
              <tr>
                <td>i</td>
                <td>Profile Photo<font> *</font></td>
                @if( $user1[0]->photo == 'Yes')
                  <td>
                    <input type="radio" id="photo_yes" onchange="yesnoCheck1()" name="photo" value="yes" checked disabled>
                  </td>
                  <td>
                    <input type="radio" id="photo_no" onchange="yesnoCheck1()" name="photo" value="no" disabled>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @else
                  <td>
                    <input type="radio" id="photo_yes" onchange="yesnoCheck1()" name="photo" value="yes" >
                  </td>
                  <td>
                    <input type="radio" id="photo_no" onchange="yesnoCheck1()" name="photo" value="no" checked>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @endif
                <td>
                  @if( $user1[0]->photo == 'Yes')
                  {{-- <a href="{{ asset('/public/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->photo_path) }}" id="view_photo" target="_blank">View Document</a> --}}
                                        <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showPhoto" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Profile Photo</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <center>
                              <!-- <img src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->photo_path) }}" width="500"> changes done to reflect on local system follow the same for other docs-->
                              <img src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->photo_path) }}" width="500">
                              </center>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showPhoto" id="pdf_photo_view" class="btn btn-view" style="width: 100%;">View</button>
                  <input type="file" style="display:none;" id="photo" name="photo">
                  @else
                  <input type="file" style="display:block;" id="photo" name="photo">
                  
                  @endif
                </td>
                <td>
                  @if( $user1[0]->photo == 'Yes')
                    <button type="submit" style="display: none;" id="photo_upload" class="btn btn-sm btn-view btn-success">Upload</button>
                     <a href="{{route('delete','photo')}}"><button type="button" style="display: block;" id="photo_reupload" class="btn btn-sm btn-info" onclick="photoReupload()">Reupload</button></a>
                  @else
                    <button type="submit" style="display: block;" id="photo_upload" class="btn btn-sm btn-success" >Upload</button>
                    <button type="button" style="display: none;" id="photo_reupload" class="btn btn-sm btn-info">Reupload</button>
                  @endif
                </td>
                <td>
                  {{-- status check by this variable for js --}}
                  @if( $user1[0]->photo == 'Yes')
                    <p>Uploaded</p>
                  @else
                    <p>Not Uploaded</p>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->photo == "Yes")
                    <a href="{{route('delete','photo')}}"><button type="button" style="display: block;" id="photo_delete" class="btn btn-sm btn-danger" onclick="photoDelete()">Delete</button></a>
                  @else
                    <a href="{{route('delete','photo')}}"><button type="button" style="display: none;" id="photo_delete" class="btn btn-sm btn-danger" onclick="photoDelete()">Delete</button></a>
                  @endif
                </td>
                <td>
                  @if(session('photo_error'))
                  <center>
                    <p style="color: #ff0000;"> {{session('photo_error')}}!</p>
                  </center>
                  @endif    
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                </td>
                <script type="text/javascript">
                  function ync1() {
                      if (document.getElementById('photo_no').checked) {
                          document.getElementById('photo').style.display = 'none';
                          document.getElementById('photo_upload').style.display = 'none';
                      }
                  }
                  function yesnoCheck1() {
                      if (document.getElementById('photo_yes').checked) {
                          document.getElementById('photo').style.display = 'block';
                          document.getElementById('photo_upload').style.display = 'block';
                      }
                      if (document.getElementById('photo_no').checked) {
                          document.getElementById('photo').style.display = 'none';
                          document.getElementById('photo_upload').style.display = 'none';
                      }
                  }
                  function photoReupload()
                    {
                      document.getElementById('photo_yes').disabled = true;
                      document.getElementById('photo_no').disabled = true;
                      document.getElementById('pdf_photo_view').style.display = 'none';
                      document.getElementById('photo').style.display = 'block';
                      document.getElementById('photo_upload').style.display = 'block';
                      document.getElementById('photo_reupload').style.display = 'none';
                    }
                    function photoDelete()
                      {
                        document.getElementById('photo_yes').disabled = false;
                        document.getElementById('photo_no').checked = true;
                        document.getElementById('photo_no').disabled = false;
                        document.getElementById('pdf_photo_view').style.display = 'none';
                        document.getElementById('photo').style.display = 'none';
                        document.getElementById('photo_reupload').style.display = 'none';
                        document.getElementById('photo_delete').style.display = 'none';
                        document.getElementById('photo_upload').style.display = 'none';
                      }
                </script>
              </tr>
              {{-- Signature --}}
              <tr>
                <td>ii</td>
                <td>Signature<font> *</font></td>
                @if( $user1[0]->signature == 'Yes')
                  <td>
                    <input type="radio" id="signature_yes" onchange="yesnoCheck2()" name="signature" value="yes" checked disabled>
                  </td>
                  <td>
                    <input type="radio" id="signature_no" onchange="yesnoCheck2()" name="signature" value="no" disabled>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @else
                  <td>
                    <input type="radio" id="signature_yes" onchange="yesnoCheck2()" name="signature" value="yes" >
                  </td>
                  <td>
                    <input type="radio" id="signature_no" onchange="yesnoCheck2()" name="signature" value="no" checked>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @endif
                <td>
                  @if( $user1[0]->signature == 'Yes')
                  {{-- <a href="{{ asset('public//public/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->signature_path) }}" id="view_signature" target="_blank">View Document</a> --}}
                   <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showSignature" role="dialog">
                        <div class="modal-dialog">
                        
                   <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Signature Photo</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <center>
                              <img src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->signature_path) }}" width="500">
                              </center>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showSignature" id="pdf_signature_view" class="btn btn-view" style="width: 100%;">View</button>
                  <input type="file" style="display: none;" id="signature" name="signature">
                  @else
                  <input type="file" style="display: block;" id="signature" name="signature">
                  
                  @endif
                </td>
                <td>
                  @if( $user1[0]->signature == 'Yes')
                    <button type="submit" style="display: none;" id="signature_upload" class="btn btn-sm btn-success">Upload</button>
                   <a href="{{route('delete','signature')}}"> <button type="button" style="display: block;" id="signature_reupload" class="btn btn-sm btn-info" onclick="signatureReupload()">Reupload</button></a>
                  @else
                    <button type="submit" style="display: block;" id="signature_upload" class="btn btn-sm btn-success" >Upload</button>
                    <button type="button" style="display: none;" id="signature_reupload" class="btn btn-sm btn-info">Reupload</button>
                  @endif
                </td>
                <td>
                  {{-- status check by this variable for js --}}
                  @if( $user1[0]->signature == 'Yes')
                    <p>Uploaded</p>
                  @else
                    <p>Not Uploaded</p>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->signature == 'Yes')
                    <a href="{{route('delete','signature')}}"><button type="button" style="display: block;" id="signature_delete" class="btn btn-sm btn-danger" onclick="signatureDelete()">Delete</button></a>
                  @else
                    <a href="{{route('delete','signature')}}"><button type="button" style="display: none;" id="signature_delete" class="btn btn-sm btn-danger" onclick="signatureDelete()">Delete</button></a>
                  @endif
                </td>
                <td>
                  @if(session('signature_error'))
                  <center>
                    <p style="color: #ff0000;"> {{session('signature_error')}}!</p>
                  </center>
                  @endif    
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                </td>
                <script type="text/javascript">
                function ync2() {
                      if (document.getElementById('signature_no').checked) {
                          document.getElementById('signature').style.display = 'none';
                          document.getElementById('signature_upload').style.display = 'none';
                      }
                }
                  function yesnoCheck2() {
                      if (document.getElementById('signature_yes').checked) {
                          document.getElementById('signature').style.display = 'block';
                          document.getElementById('signature_upload').style.display = 'block';
                      }
                      if (document.getElementById('signature_no').checked) {
                          document.getElementById('signature').style.display = 'none';
                          document.getElementById('signature_upload').style.display = 'none';
                      }
                  }
                  function signatureReupload()
                    {
                      document.getElementById('signature_yes').disabled = true;
                      document.getElementById('signature_no').disabled = true;
                      document.getElementById('pdf_signature_view').style.display = 'none';
                      document.getElementById('signature').style.display = 'block';
                      document.getElementById('signature_upload').style.display = 'block';
                      document.getElementById('signature_reupload').style.display = 'none';
                    }
                    function signatureDelete()
                      {
                        document.getElementById('signature_yes').disabled = false;
                        document.getElementById('signature_no').checked = true;
                        document.getElementById('signature_no').disabled = false;
                        document.getElementById('pdf_signature_view').style.display = 'none';
                        document.getElementById('signature').style.display = 'none';
                        document.getElementById('signature_reupload').style.display = 'none';
                        document.getElementById('signature_delete').style.display = 'none';
                        document.getElementById('signature_upload').style.display = 'none';
                      }
                </script>
              </tr>
              {{-- FC Confirmation Reciept --}}
              <tr>
                <td>iii</td>
                <td>SC Confirmation Reciept<font> *</font></td>
                @if( $user1[0]->fc_confirmation_receipt == 'Yes')
                  <td>
                    <input type="radio" id="fc_confirmation_receipt_yes" onchange="yesnoCheck3()" name="fc_confirmation_receipt" value="yes" checked disabled>
                  </td>
                  <td>
                    <input type="radio" id="fc_confirmation_receipt_no" onchange="yesnoCheck3()" name="fc_confirmation_receipt" value="no" disabled>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @else
                  <td>
                    <input type="radio" id="fc_confirmation_receipt_yes" onchange="yesnoCheck3()" name="fc_confirmation_receipt" value="yes" >
                  </td>
                  <td>
                    <input type="radio" id="fc_confirmation_receipt_no" onchange="yesnoCheck3()" name="fc_confirmation_receipt" value="no" checked>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @endif
                <td>
                  @if( $user1[0]->fc_confirmation_receipt == 'Yes')
                  <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showFC_receipt" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">SC Confirmation Receipt</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->fc_confirmation_receipt_path) }}" type="application/pdf" width="100%" height="700px">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->fc_confirmation_receipt_path) }}" width="100%" height="700px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showFC_receipt" id="pdf_fc_confirmation_receipt_view" class="btn btn-view" style="width: 100%;">View</button>
                      
                  <input type="file" style="display: none;" id="fc_confirmation_receipt" name="fc_confirmation_receipt">
                  @else
                  <input type="file" style="display: block;" id="fc_confirmation_receipt" name="fc_confirmation_receipt">
                  @endif
                </td>
                <td>
                  @if( $user1[0]->fc_confirmation_receipt == 'Yes')
                    <button type="submit" style="display: none;" id="fc_confirmation_receipt_upload" class="btn btn-sm btn-success">Upload</button>
                    <a href="{{route('delete','fc_confirmation_receipt')}}"><button type="button" style="display: block;" id="fc_confirmation_receipt_reupload" class="btn btn-sm btn-info" onclick="fc_confirmation_receiptReupload()">Reupload</button></a>
                  @else
                    <button type="submit" style="display: block;" id="fc_confirmation_receipt_upload" class="btn btn-sm btn-success" >Upload</button>
                    <button type="button" style="display: none;" id="fc_confirmation_receipt_reupload" class="btn btn-sm btn-info">Reupload</button>
                  @endif
                </td>
                <td>
                  {{-- status check by this variable for js --}}
                  @if( $user1[0]->fc_confirmation_receipt == 'Yes')
                    <p>Uploaded</p>
                  @else
                    <p>Not Uploaded</p>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->fc_confirmation_receipt == 'Yes')
                    <a href="{{route('delete','fc_confirmation_receipt')}}"><button type="button" style="display: block;" id="fc_confirmation_receipt_delete" class="btn btn-sm btn-danger" onclick="fc_confirmation_receiptDelete()">Delete</button></a>
                  @else
                    <a href="{{route('delete','fc_confirmation_receipt')}}"><button type="button" style="display: none;" id="fc_confirmation_receipt_delete" class="btn btn-sm btn-danger" onclick="fc_confirmation_receiptDelete()">Delete</button>
                  @endif
                </td>
                <td>
                  @if(session('fc_confirmation_receipt_error'))
                  <center>
                    <p style="color: #ff0000;"> {{session('fc_confirmation_receipt_error')}}!</p>
                  </center>
                  @endif    
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                </td>
                <script type="text/javascript">
                function ync3() {
                      if (document.getElementById('fc_confirmation_receipt_no').checked) {
                          document.getElementById('fc_confirmation_receipt').style.display = 'none';
                          document.getElementById('fc_confirmation_receipt_upload').style.display = 'none';
                      }
                  }
                  function yesnoCheck3() {
                      if (document.getElementById('fc_confirmation_receipt_yes').checked) {
                          document.getElementById('fc_confirmation_receipt').style.display = 'block';
                          document.getElementById('fc_confirmation_receipt_upload').style.display = 'block';
                      }
                      if (document.getElementById('fc_confirmation_receipt_no').checked) {
                          document.getElementById('fc_confirmation_receipt').style.display = 'none';
                          document.getElementById('fc_confirmation_receipt_upload').style.display = 'none';
                      }
                  }
                  function fc_confirmation_receiptReupload()
                    {
                      document.getElementById('fc_confirmation_receipt_yes').disabled = true;
                      document.getElementById('fc_confirmation_receipt_no').disabled = true;
                      document.getElementById('pdf_fc_confirmation_receipt_view').style.display = 'none';
                      document.getElementById('fc_confirmation_receipt').style.display = 'block';
                      document.getElementById('fc_confirmation_receipt_upload').style.display = 'block';
                      document.getElementById('fc_confirmation_receipt_reupload').style.display = 'none';
                    }
                    function fc_confirmation_receiptDelete()
                      {
                        document.getElementById('fc_confirmation_receipt_yes').disabled = false;
                        document.getElementById('fc_confirmation_receipt_no').checked = true;
                        document.getElementById('fc_confirmation_receipt_no').disabled = false;
                        document.getElementById('pdf_fc_confirmation_receipt_view').style.display = 'none';
                        document.getElementById('fc_confirmation_receipt').style.display = 'none';
                        document.getElementById('fc_confirmation_receipt_reupload').style.display = 'none';
                        document.getElementById('fc_confirmation_receipt_delete').style.display = 'none';
                        document.getElementById('fc_confirmation_receipt_upload').style.display = 'none';
                      }
                </script>
              </tr>
              {{-- DTE Allotment Letter --}}
              <tr>
                <td>iv</td>
                <td>DTE Allotment Letter<font> *</font></td>
                @if( $user1[0]->dte_allotment_letter == 'Yes')
                  <td>
                    <input type="radio" id="dte_allotment_letter_yes" onchange="yesnoCheck4()" name="dte_allotment_letter" value="yes" checked disabled>
                  </td>
                  <td>
                    <input type="radio" id="dte_allotment_letter_no" onchange="yesnoCheck4()" name="dte_allotment_letter" value="no" disabled>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @else
                  <td>
                    <input type="radio" id="dte_allotment_letter_yes" onchange="yesnoCheck4()" name="dte_allotment_letter" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="dte_allotment_letter_no" onchange="yesnoCheck4()" name="dte_allotment_letter" value="no" checked>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @endif
                <td>
                  @if( $user1[0]->dte_allotment_letter == 'Yes')
                   <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showDTE_allotment_letter" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">DTE Allotment Letter</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->dte_allotment_letter_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->dte_allotment_letter_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showDTE_allotment_letter" id="pdf_dte_allotment_letter_view" class="btn btn-view" style="width: 100%;">View</button>
                      <input type="file" style="display: none;" id="dte_allotment_letter" name="dte_allotment_letter">
                  @else
                  <input type="file" style="display: block;" id="dte_allotment_letter" name="dte_allotment_letter">
                  <a href="" id="view_dte_allotment_letter" style="display: none;">View Document</a>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->dte_allotment_letter == 'Yes')
                    <button type="submit" style="display: none;" id="dte_allotment_letter_upload" class="btn btn-sm btn-success">Upload</button>
                   <a href="{{route('delete','dte_allotment_letter')}}"> <button type="button" style="display: block;" id="dte_allotment_letter_reupload" class="btn btn-sm btn-info" onclick="dte_allotment_letterReupload()">Reupload</button></a>
                  @else
                    <button type="submit" style="display: block;" id="dte_allotment_letter_upload" class="btn btn-sm btn-success" >Upload</button>
                    <button type="button" style="display: none;" id="dte_allotment_letter_reupload" class="btn btn-sm btn-info">Reupload</button>
                  @endif
                </td>
                <td>
                  {{-- status check by this variable for js --}}
                  @if( $user1[0]->dte_allotment_letter == 'Yes')
                    <p>Uploaded</p>
                  @else
                    <p>Not Uploaded</p>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->dte_allotment_letter == 'Yes')
                    <a href="{{route('delete','dte_allotment_letter')}}"><button type="button" style="display: block;" id="dte_allotment_letter_delete" class="btn btn-sm btn-danger" onclick="dte_allotment_letterDelete()">Delete</button></a>
                  @else
                    <a href="{{route('delete','dte_allotment_letter')}}"><button type="button" style="display: none;" id="dte_allotment_letter_delete" class="btn btn-sm btn-danger" onclick="dte_allotment_letterDelete()">Delete</button></a>
                  @endif
                </td>
                <td>
                  @if(session('dte_allotment_letter_error'))
                  <center>
                    <p style="color: #ff0000;"> {{session('dte_allotment_letter_error')}}!</p>
                  </center>
                  @endif    
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                </td>
                <script type="text/javascript">
                  function ync4() {
                      if (document.getElementById('dte_allotment_letter_no').checked) {
                          document.getElementById('dte_allotment_letter').style.display = 'none';
                          document.getElementById('dte_allotment_letter_upload').style.display = 'none';
                      }
                  }
                  function yesnoCheck4() {
                      if (document.getElementById('dte_allotment_letter_yes').checked) {
                          document.getElementById('dte_allotment_letter').style.display = 'block';
                          document.getElementById('dte_allotment_letter_upload').style.display = 'block';
                      }
                      if (document.getElementById('dte_allotment_letter_no').checked) {
                          document.getElementById('dte_allotment_letter').style.display = 'none';
                          document.getElementById('dte_allotment_letter_upload').style.display = 'none';
                      }
                  }
                  function dte_allotment_letterReupload()
                    {
                      document.getElementById('dte_allotment_letter_yes').disabled = true;
                      document.getElementById('dte_allotment_letter_no').disabled = true;
                      document.getElementById('pdf_dte_allotment_letter_view').style.display = 'none';
                      document.getElementById('dte_allotment_letter').style.display = 'block';
                      document.getElementById('dte_allotment_letter_upload').style.display = 'block';
                      document.getElementById('dte_allotment_letter_reupload').style.display = 'none';
                    }
                    function dte_allotment_letterDelete()
                      {
                        document.getElementById('dte_allotment_letter_yes').disabled = false;
                        document.getElementById('dte_allotment_letter_no').checked = true;
                        document.getElementById('dte_allotment_letter_no').disabled = false;
                        document.getElementById('pdf_dte_allotment_letter_view').style.display = 'none';
                        document.getElementById('dte_allotment_letter').style.display = 'none';
                        document.getElementById('dte_allotment_letter_reupload').style.display = 'none';
                        document.getElementById('dte_allotment_letter_delete').style.display = 'none';
                        document.getElementById('dte_allotment_letter_upload').style.display = 'none';
                      }
                </script>
              </tr>
              {{-- ARC Acknowledgement --}}
              <tr>
                <td>v</td>
                <td>ARC Acknowledgement<font> *</font></td>
                @if( $user1[0]->arc_ackw_receipt == 'Yes')
                  <td>
                    <input type="radio" id="arc_ackw_receipt_yes" onchange="yesnoCheck5()" name="arc_ackw_receipt" value="yes" checked disabled>
                  </td>
                  <td>
                    <input type="radio" id="arc_ackw_receipt_no" onchange="yesnoCheck5()" name="arc_ackw_receipt" value="no" disabled>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @else
                  <td>
                    <input type="radio" id="arc_ackw_receipt_yes" onchange="yesnoCheck5()" name="arc_ackw_receipt" value="yes">
                  </td>
                  <td>
                    <input type="radio" id="arc_ackw_receipt_no" onchange="yesnoCheck5()" name="arc_ackw_receipt" value="no" checked>
                  </td>
                  <td>
                    <font style="font-size: 15px">Mandatory</font>
                  </td>
                @endif
                <td>
                  @if( $user1[0]->arc_ackw_receipt == 'Yes')
                  <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showARC_ack" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">ARC Acknowledgement</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->arc_ackw_receipt_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->arc_ackw_receipt_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showARC_ack" id="pdf_arc_ack_view" class="btn btn-view" style="width: 100%;">View</button>
                  <input type="file" style="display: none;" id="arc_ackw_receipt" name="arc_ackw_receipt">
                  @else
                  <input type="file" style="display: block;" id="arc_ackw_receipt" name="arc_ackw_receipt">
                  <a href="" id="view_arc_ackw_receipt" style="display: none;">View Document</a>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->arc_ackw_receipt == 'Yes')
                    <button type="submit" style="display: none;" id="arc_ackw_receipt_upload" class="btn btn-sm btn-success">Upload</button>
                    <a href="{{route('delete','arc_ackw_receipt')}}"><button type="button" style="display: block;" id="arc_ackw_receipt_reupload" class="btn btn-sm btn-info" onclick="arc_ackw_receiptReupload()">Reupload</button></a>
                  @else
                    <button type="submit" style="display: block;" id="arc_ackw_receipt_upload" class="btn btn-sm btn-success" >Upload</button>
                    <button type="button" style="display: none;" id="arc_ackw_receipt_reupload" class="btn btn-sm btn-info">Reupload</button>
                  @endif
                </td>
                <td>
                  {{-- status check by this variable for js --}}
                  @if( $user1[0]->arc_ackw_receipt == 'Yes')
                    <p>Uploaded</p>
                  @else
                    <p>Not Uploaded</p>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->arc_ackw_receipt == 'Yes')
                    <a href="{{route('delete','arc_ackw_receipt')}}"><button type="button" style="display: block;" id="arc_ackw_receipt_delete" class="btn btn-sm btn-danger" onclick="arc_ackw_receiptDelete()">Delete</button></a>
                  @else
                    <a href="{{route('delete','arc_ackw_receipt')}}"><button type="button" style="display: none;" id="arc_ackw_receipt_delete" class="btn btn-sm btn-danger" onclick="arc_ackw_receiptDelete()">Delete</button></a>
                  @endif
                </td>
                <td>
                  @if(session('arc_ackw_receipt_error'))
                  <center>
                    <p style="color: #ff0000;"> {{session('arc_ackw_receipt_error')}}!</p>
                  </center>
                  @endif    
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                </td>
                <script type="text/javascript">
                  function ync5() {
                      if (document.getElementById('arc_ackw_receipt_no').checked) {
                          document.getElementById('arc_ackw_receipt').style.display = 'none';
                          document.getElementById('arc_ackw_receipt_upload').style.display = 'none';
                      }
                  }
                  function yesnoCheck5() {
                      if (document.getElementById('arc_ackw_receipt_yes').checked) {
                          document.getElementById('arc_ackw_receipt').style.display = 'block';
                          document.getElementById('arc_ackw_receipt_upload').style.display = 'block';
                      }
                      if (document.getElementById('arc_ackw_receipt_no').checked) {
                          document.getElementById('arc_ackw_receipt').style.display = 'none';
                          document.getElementById('arc_ackw_receipt_upload').style.display = 'none';
                      }
                  }
                  function arc_ackw_receiptReupload()
                    {
                      document.getElementById('arc_ackw_receipt_yes').disabled = true;
                      document.getElementById('arc_ackw_receipt_no').disabled = true;
                      document.getElementById('pdf_arc_ack_view').style.display = 'none';
                      document.getElementById('arc_ackw_receipt').style.display = 'block';
                      document.getElementById('arc_ackw_receipt_upload').style.display = 'block';
                      document.getElementById('arc_ackw_receipt_reupload').style.display = 'none';
                    }
                    function arc_ackw_receiptDelete()
                      {
                        document.getElementById('arc_ackw_receipt_yes').disabled = false;
                        document.getElementById('arc_ackw_receipt_no').checked = true;
                        document.getElementById('arc_ackw_receipt_no').disabled = false;
                        document.getElementById('pdf_arc_ack_view').style.display = 'none';
                        document.getElementById('arc_ackw_receipt').style.display = 'none';
                        document.getElementById('arc_ackw_receipt_reupload').style.display = 'none';
                        document.getElementById('arc_ackw_receipt_delete').style.display = 'none';
                        document.getElementById('arc_ackw_receipt_upload').style.display = 'none';
                      }
                </script>
              </tr>
            </div> 
            {{-- GATE Result --}}
            <tr>
              <td>1</td>
              <td>GATE Result<font> *</font></td>
              @if( $user1[0]->gate_result == 'Yes')
                <td>
                  <input type="radio" id="gate_result_yes" onchange="yesnoCheck6()" name="gate_result" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="gate_result_no" onchange="yesnoCheck6()" name="gate_result" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="gate_result_yes" onchange="yesnoCheck6()" name="gate_result" value="yes" >
                </td>
                <td>
                  <input type="radio" id="gate_result_no" onchange="yesnoCheck6()" name="gate_result" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->gate_result == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showGate_result" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">CET Result</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->gate_result_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->gate_result_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showGate_result" id="pdf_gate_result_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="gate_result" name="gate_result">
                @else
                <input type="file" style="display: block;" id="gate_result" name="gate_result">
                <a href="" id="view_gate_result" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->gate_result == 'Yes')
                  <button type="submit" style="display: none;" id="gate_result_upload" class="btn btn-sm btn-success">Upload</button>
                   <a href="{{route('delete','gate_result')}}"><button type="button" style="display: block;" id="gate_result_reupload" class="btn btn-sm btn-info" onclick="gate_resultReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="gate_result_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="gate_result_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->gate_result == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->gate_result== 'Yes')
                  <a href="{{route('delete','gate_result')}}"><button type="button" style="display: block;" id="cet_result_delete" class="btn btn-sm btn-danger" onclick="gate_resultDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','cet_result')}}"><button type="button" style="display: none;" id="cet_result_delete" class="btn btn-sm btn-danger" onclick="gate_resultDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('gate_result_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('gate_result_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync6() {
                    if (document.getElementById('gate_result_no').checked) {
                        document.getElementById('gate_result').style.display = 'none';
                        document.getElementById('gate_result_upload').style.display = 'none';
                    }
                }
                function yesnoCheck6() {
                    if (document.getElementById('gate_result_yes').checked) {
                        document.getElementById('gate_result').style.display = 'block';
                        document.getElementById('gate_result_upload').style.display = 'block';
                    }
                    if (document.getElementById('gate_result_no').checked) {
                        document.getElementById('gate_result').style.display = 'none';
                        document.getElementById('gate_result_upload').style.display = 'none';
                    }
                }
                function gate_resultReupload()
                  {
                    document.getElementById('gate_result_yes').disabled = true;
                    document.getElementById('gate_result_no').disabled = true;
                    document.getElementById('pdf_gate_result_view').style.display = 'none';
                    document.getElementById('gate_result').style.display = 'block';
                    document.getElementById('gate_result_upload').style.display = 'block';
                    document.getElementById('gate_result_reupload').style.display = 'none';
                  }
                  function gate_resultDelete()
                    {

                      document.getElementById('gate_result_yes').disabled = false;
                      document.getElementById('gate_result_no').checked = true;
                      document.getElementById('gate_result_no').disabled = false;
                      document.getElementById('pdf_gate_result_view').style.display = 'none';
                      document.getElementById('gate_result').style.display = 'none';
                      document.getElementById('gate_result_reupload').style.display = 'none';
                      document.getElementById('gate_result_delete').style.display = 'none';
                      document.getElementById('gate_result_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- SSC Marksheet --}}
            <tr>
              <td>2</td>
              <td>SSC Marksheet<font> *</font></td>
              @if( $user1[0]->ssc_marksheet == 'Yes')
                <td>
                  <input type="radio" id="ssc_marksheet_yes" onchange="yesnoCheck7()" name="ssc_marksheet" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="ssc_marksheet_no" onchange="yesnoCheck7()" name="ssc_marksheet" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="ssc_marksheet_yes" onchange="yesnoCheck7()" name="ssc_marksheet" value="yes" >
                </td>
                <td>
                  <input type="radio" id="ssc_marksheet_no" onchange="yesnoCheck7()" name="ssc_marksheet" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->ssc_marksheet == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showSSCPDF" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">SSC Marksheet</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->ssc_marksheet_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->ssc_marksheet_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showSSCPDF" id="pdf_ssc_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="ssc_marksheet" name="ssc_marksheet">
                @else
                <input type="file" style="display: block;" id="ssc_marksheet" name="ssc_marksheet">
                <a href="" id="view_ssc_marksheet" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->ssc_marksheet == 'Yes')
                  <button type="submit" style="display: none;" id="ssc_marksheet_upload" class="btn btn-sm btn-success">Upload</button>
                 <a href="{{route('delete','ssc_marksheet')}}"> <button type="button" style="display: block;" id="ssc_marksheet_reupload" class="btn btn-sm btn-info" onclick="ssc_marksheetReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="ssc_marksheet_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="ssc_marksheet_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->ssc_marksheet == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->ssc_marksheet == 'Yes')
                  <a href="{{route('delete','ssc_marksheet')}}"><button type="button" style="display: block;" id="ssc_marksheet_delete" class="btn btn-sm btn-danger" onclick="ssc_marksheetDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','ssc_marksheet')}}"><button type="button" style="display: none;" id="ssc_marksheet_delete" class="btn btn-sm btn-danger" onclick="ssc_marksheetDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('ssc_marksheet_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('ssc_marksheet_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync7() {
                    if (document.getElementById('ssc_marksheet_no').checked) {
                        document.getElementById('ssc_marksheet').style.display = 'none';
                        document.getElementById('ssc_marksheet_upload').style.display = 'none';
                    }
                }
                function yesnoCheck7() {
                    if (document.getElementById('ssc_marksheet_yes').checked) {
                        document.getElementById('ssc_marksheet').style.display = 'block';
                        document.getElementById('ssc_marksheet_upload').style.display = 'block';
                    }
                    if (document.getElementById('ssc_marksheet_no').checked) {
                        document.getElementById('ssc_marksheet').style.display = 'none';
                        document.getElementById('ssc_marksheet_upload').style.display = 'none';
                    }
                }
                function ssc_marksheetReupload()
                  {
                    document.getElementById('ssc_marksheet_yes').disabled = true;
                    document.getElementById('ssc_marksheet_no').disabled = true;
                    document.getElementById('pdf_ssc_view').style.display = 'none';
                    document.getElementById('ssc_marksheet').style.display = 'block';
                    document.getElementById('ssc_marksheet_upload').style.display = 'block';
                    document.getElementById('ssc_marksheet_reupload').style.display = 'none';
                  }
                  function ssc_marksheetDelete(s)
                    {

                      document.getElementById('ssc_marksheet_yes').disabled = false;
                      document.getElementById('ssc_marksheet_no').checked = true;
                      document.getElementById('ssc_marksheet_no').disabled = false;
                      document.getElementById('pdf_ssc_view').style.display = 'none';
                      document.getElementById('ssc_marksheet').style.display = 'none';
                      document.getElementById('ssc_marksheet_reupload').style.display = 'none';
                      document.getElementById('ssc_marksheet_delete').style.display = 'none';
                      document.getElementById('ssc_marksheet_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- HSC / Diploma Marksheet --}}
            <tr>
              <td>3</td>
              <td>HSC / Diploma Marksheet<font> *</font></td>
              @if( $user1[0]->hsc_marksheet  == 'Yes')
                <td>
                  <input type="radio" id="hsc_marksheet_yes" onchange="yesnoCheck8()" name="hsc_marksheet" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="hsc_marksheet_no" onchange="yesnoCheck8()" name="hsc_marksheet" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="hsc_marksheet_yes" onchange="yesnoCheck8()" name="hsc_marksheet" value="yes" >
                </td>
                <td>
                  <input type="radio" id="hsc_marksheet_no" onchange="yesnoCheck8()" name="hsc_marksheet" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->hsc_marksheet == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showHSCPDF" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">HSC / Diploma Marksheet</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->hsc_marksheet_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->hsc_marksheet_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showHSCPDF" id="pdf_hsc_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="hsc_marksheet" name="hsc_marksheet">
                @else
                <input type="file" style="display: block;" id="hsc_marksheet" name="hsc_marksheet">
                <a href="" id="view_hsc_marksheet" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->hsc_marksheet == 'Yes')
                  <button type="submit" style="display: none;" id="hsc_marksheet_upload" class="btn btn-sm btn-success">Upload</button>
                   <a href="{{route('delete','hsc_diploma_marksheet')}}"><button type="button" style="display: block;" id="hsc_marksheet_reupload" class="btn btn-sm btn-info" onclick="hsc_marksheetReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="hsc_marksheet_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="hsc_marksheet_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->hsc_marksheet == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->hsc_marksheet == 'Yes')
                  <a href="{{route('delete','hsc_diploma_marksheet')}}"><button type="button" style="display: block;" id="hsc_marksheet_delete" class="btn btn-sm btn-danger" onclick="hsc_marksheetDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','hsc_diploma_marksheet')}}"><button type="button" style="display: none;" id="hsc_marksheet_delete" class="btn btn-sm btn-danger" onclick="hsc_marksheetDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('hsc_marksheet_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('hsc_marksheet_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync8() {
                    if (document.getElementById('hsc_marksheet_no').checked) {
                        document.getElementById('hsc_marksheet').style.display = 'none';
                        document.getElementById('hsc_marksheet_upload').style.display = 'none';
                    }
                }
                function yesnoCheck8() {
                    if (document.getElementById('hsc_marksheet_yes').checked) {
                        document.getElementById('hsc_marksheet').style.display = 'block';
                        document.getElementById('hsc_marksheet_upload').style.display = 'block';
                    }
                    if (document.getElementById('hsc_marksheet_no').checked) {
                        document.getElementById('hsc_marksheet').style.display = 'none';
                        document.getElementById('hsc_marksheet_upload').style.display = 'none';
                    }
                }
                function hsc_marksheetReupload()
                  {
                    document.getElementById('hsc_marksheet_yes').disabled = true;
                    document.getElementById('hsc_marksheet_no').disabled = true;
                    document.getElementById('pdf_hsc_view').style.display = 'none';
                    document.getElementById('hsc_marksheet').style.display = 'block';
                    document.getElementById('hsc_marksheet_upload').style.display = 'block';
                    document.getElementById('hsc_marksheet_reupload').style.display = 'none';
                  }
                  function hsc_marksheetDelete()
                    {

                      document.getElementById('hsc_marksheet_yes').disabled = false;
                      document.getElementById('hsc_marksheet_no').checked = true;
                      document.getElementById('hsc_marksheet_no').disabled = false;
                      document.getElementById('pdf_hsc_view').style.display = 'none';
                      document.getElementById('hsc_marksheet').style.display = 'none';
                      document.getElementById('hsc_marksheet_reupload').style.display = 'none';
                      document.getElementById('hsc_marksheet_delete').style.display = 'none';
                      document.getElementById('hsc_marksheet_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Degree Leaving Certificate --}}
            <tr>
              <td>4</td>
              <td>Degree Leaving/Transfer Certificate<font> *</font></td>
              @if( $user1[0]->degree_leaving_tc == 'Yes')
                <td>
                  <input type="radio" id="degree_leaving_tc_yes" onchange="yesnoCheck9()" name="degree_leaving_tc" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="degree_leaving_tc_no" onchange="yesnoCheck9()" name="degree_leaving_tc" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="degree_leaving_tc_yes" onchange="yesnoCheck9()" name="degree_leaving_tc" value="yes" >
                </td>
                <td>
                  <input type="radio" id="degree_leaving_tc_no" onchange="yesnoCheck9()" name="degree_leaving_tc" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->degree_leaving_tc == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showHSC_leaving_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">HSC Leaving Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->degree_leaving_tc_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->degree_leaving_tc_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showHSC_leaving_certi" id="pdf_hsc_leaving_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="degree_leaving_tc" name="degree_leaving_tc">
                @else
                <input type="file" style="display: block;" id="degree_leaving_tc" name="degree_leaving_tc">
                <a href="" id="view_degree_leaving_tc" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->degree_leaving_tc == 'Yes')
                  <button type="submit" style="display: none;" id="degree_leaving_tc_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','degree_leaving_tc')}}"> <button type="button" style="display: block;" id="degree_leaving_tc_reupload" class="btn btn-sm btn-info" onclick="degree_leaving_tcReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="degree_leaving_tc_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="degree_leaving_tc_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->degree_leaving_tc == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->degree_leaving_tc == 'Yes')
                  <a href="{{route('delete','degree_leaving_tc')}}"><button type="button" style="display: block;" id="degree_leaving_tc_delete" class="btn btn-sm btn-danger" onclick="degree_leaving_tcDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','degree_leaving_tc')}}"><button type="button" style="display: none;" id="degree_leaving_tc_delete" class="btn btn-sm btn-danger" onclick="degree_leaving_tcDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('degree_leaving_tc_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('degree_leaving_tc_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync9() {
                    if (document.getElementById('degree_leaving_tc_no').checked) {
                        document.getElementById('degree_leaving_tc').style.display = 'none';
                        document.getElementById('degree_leaving_tc_upload').style.display = 'none';
                    }
                }
                function yesnoCheck9() {
                    if (document.getElementById('degree_leaving_tc_yes').checked) {
                        document.getElementById('degree_leaving_tc').style.display = 'block';
                        document.getElementById('degree_leaving_tc_upload').style.display = 'block';
                    }
                    if (document.getElementById('degree_leaving_tc_no').checked) {
                        document.getElementById('degree_leaving_tc').style.display = 'none';
                        document.getElementById('degree_leaving_tc_upload').style.display = 'none';
                    }
                }
                function degree_leaving_tcReupload()
                  {
                    document.getElementById('degree_leaving_tc_yes').disabled = true;
                    document.getElementById('degree_leaving_tc_no').disabled = true;
                    document.getElementById('pdf_hsc_leaving_certi_view').style.display = 'none';
                    document.getElementById('degree_leaving_tc').style.display = 'block';
                    document.getElementById('degree_leaving_tc_upload').style.display = 'block';
                    document.getElementById('degree_leaving_tc_reupload').style.display = 'none';
                  }
                  function degree_leaving_tcDelete()
                    {

                      document.getElementById('degree_leaving_tc_yes').disabled = false;
                      document.getElementById('degree_leaving_tc_no').checked = true;
                      document.getElementById('degree_leaving_tc_no').disabled = false;
                      document.getElementById('pdf_hsc_leaving_certi_view').style.display = 'none';
                      document.getElementById('degree_leaving_tc').style.display = 'none';
                      document.getElementById('degree_leaving_tc_reupload').style.display = 'none';
                      document.getElementById('degree_leaving_tc_delete').style.display = 'none';
                      document.getElementById('degree_leaving_tc_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- First Year Marksheet --}}
            <tr>
              <td>5</td>
              <td>First Year Marksheet<font> *</font></td>
              @if( $user1[0]->first_year_marksheet == 'Yes')
                <td>
                  <input type="radio" id="first_year_marksheet_yes" onchange="yesnoCheck10()" name="first_year_marksheet" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="first_year_marksheet_no" onchange="yesnoCheck10()" name="first_year_marksheet" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="first_year_marksheet_yes" onchange="yesnoCheck10()" name="first_year_marksheet" value="yes" >
                </td>
                <td>
                  <input type="radio" id="first_year_marksheet_no" onchange="yesnoCheck10()" name="first_year_marksheet" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->first_year_marksheet == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showFirst_year_marks" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">First Year Marksheet</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->first_year_marksheet_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->first_year_marksheet_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showFirst_year_marks" id="pdf_first_year_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="first_year_marksheet" name="first_year_marksheet">
                @else
                <input type="file" style="display: block;" id="first_year_marksheet" name="first_year_marksheet">
                <a href="" id="view_first_year_marksheet" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->first_year_marksheet == 'Yes')
                  <button type="submit" style="display: none;" id="first_year_marksheet_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','first_year_marksheet')}}"><button type="button" style="display: block;" id="first_year_marksheet_reupload" class="btn btn-sm btn-info" onclick="first_year_marksheetReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="first_year_marksheet_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="first_year_marksheet_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->first_year_marksheet == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->first_year_marksheet == 'Yes')
                  <a href="{{route('delete','first_year_marksheet')}}"><button type="button" style="display: block;" id="first_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="first_year_marksheetDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','first_year_marksheet')}}"><button type="button" style="display: none;" id="first_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="first_year_marksheetDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('first_year_marksheet_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('first_year_marksheet_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync10() {
                    if (document.getElementById('first_year_marksheet_no').checked) {
                        document.getElementById('first_year_marksheet').style.display = 'none';
                        document.getElementById('first_year_marksheet_upload').style.display = 'none';
                    }
                }
                function yesnoCheck10() {
                    if (document.getElementById('first_year_marksheet_yes').checked) {
                        document.getElementById('first_year_marksheet').style.display = 'block';
                        document.getElementById('first_year_marksheet_upload').style.display = 'block';
                    }
                    if (document.getElementById('first_year_marksheet_no').checked) {
                        document.getElementById('first_year_marksheet').style.display = 'none';
                        document.getElementById('first_year_marksheet_upload').style.display = 'none';
                    }
                }
                function first_year_marksheetReupload()
                  {
                    document.getElementById('first_year_marksheet_yes').disabled = true;
                    document.getElementById('first_year_marksheet_no').disabled = true;
                    document.getElementById('pdf_first_year_view').style.display = 'none';
                    document.getElementById('first_year_marksheet').style.display = 'block';
                    document.getElementById('first_year_marksheet_upload').style.display = 'block';
                    document.getElementById('first_year_marksheet_reupload').style.display = 'none';
                  }
                  function first_year_marksheetDelete()
                    {

                      document.getElementById('first_year_marksheet_yes').disabled = false;
                      document.getElementById('first_year_marksheet_no').checked = true;
                      document.getElementById('first_year_marksheet_no').disabled = false;
                      document.getElementById('pdf_first_year_view').style.display = 'none';
                      document.getElementById('first_year_marksheet').style.display = 'none';
                      document.getElementById('first_year_marksheet_reupload').style.display = 'none';
                      document.getElementById('first_year_marksheet_delete').style.display = 'none';
                      document.getElementById('first_year_marksheet_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Second Year Marksheet --}}
            <tr>
              <td>6</td>
              <td>Second Year Marksheet<font> *</font></td>
              @if( $user1[0]->second_year_marksheet == 'Yes')
                <td>
                  <input type="radio" id="second_year_marksheet_yes" onchange="yesnoCheck11()" name="second_year_marksheet" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="second_year_marksheet_no" onchange="yesnoCheck11()" name="second_year_marksheet" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="second_year_marksheet_yes" onchange="yesnoCheck11()" name="second_year_marksheet" value="yes" >
                </td>
                <td>
                  <input type="radio" id="second_year_marksheet_no" onchange="yesnoCheck11()" name="second_year_marksheet" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->second_year_marksheet == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showSecond_year_marks" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Second Year Marksheet</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->second_year_marksheet_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->second_year_marksheet_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showSecond_year_marks" id="pdf_second_year_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="second_year_marksheet" name="second_year_marksheet">
                @else
                <input type="file" style="display: block;" id="second_year_marksheet" name="second_year_marksheet">
                <a href="" id="view_second_year_marksheet" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->second_year_marksheet == 'Yes')
                  <button type="submit" style="display: none;" id="second_year_marksheet_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','second_year_marksheet')}}"><button type="button" style="display: block;" id="second_year_marksheet_reupload" class="btn btn-sm btn-info" onclick="second_year_marksheetReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="second_year_marksheet_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="second_year_marksheet_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->second_year_marksheet == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->second_year_marksheet == 'Yes')
                  <a href="{{route('delete','second_year_marksheet')}}"><button type="button" style="display: block;" id="second_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="second_year_marksheetDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','second_year_marksheet')}}"><button type="button" style="display: none;" id="second_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="second_year_marksheetDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('second_year_marksheet_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('second_year_marksheet_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync11() {
                    if (document.getElementById('second_year_marksheet_no').checked) {
                        document.getElementById('second_year_marksheet').style.display = 'none';
                        document.getElementById('second_year_marksheet_upload').style.display = 'none';
                    }
                }
                function yesnoCheck11() {
                    if (document.getElementById('second_year_marksheet_yes').checked) {
                        document.getElementById('second_year_marksheet').style.display = 'block';
                        document.getElementById('second_year_marksheet_upload').style.display = 'block';
                    }
                    if (document.getElementById('second_year_marksheet_no').checked) {
                        document.getElementById('second_year_marksheet').style.display = 'none';
                        document.getElementById('second_year_marksheet_upload').style.display = 'none';
                    }
                }
                function second_year_marksheetReupload()
                  {
                    document.getElementById('second_year_marksheet_yes').disabled = true;
                    document.getElementById('second_year_marksheet_no').disabled = true;
                    document.getElementById('pdf_second_year_view').style.display = 'none';
                    document.getElementById('second_year_marksheet').style.display = 'block';
                    document.getElementById('second_year_marksheet_upload').style.display = 'block';
                    document.getElementById('second_year_marksheet_reupload').style.display = 'none';
                  }
                  function second_year_marksheetDelete()
                    {

                      document.getElementById('second_year_marksheet_yes').disabled = false;
                      document.getElementById('second_year_marksheet_no').checked = true;
                      document.getElementById('second_year_marksheet_no').disabled = false;
                      document.getElementById('pdf_second_year_view').style.display = 'none';
                      document.getElementById('second_year_marksheet').style.display = 'none';
                      document.getElementById('second_year_marksheet_reupload').style.display = 'none';
                      document.getElementById('second_year_marksheet_delete').style.display = 'none';
                      document.getElementById('second_year_marksheet_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Third Year Marksheet --}}
            <tr>
              <td>7</td>
              <td>Third Year Marksheet<font> *</font></td>
              @if( $user1[0]->third_year_marksheet == 'Yes')
                <td>
                  <input type="radio" id="third_year_marksheet_yes" onchange="yesnoCheck12()" name="third_year_marksheet" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="third_year_marksheet_no" onchange="yesnoCheck12()" name="third_year_marksheet" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="third_year_marksheet_yes" onchange="yesnoCheck12()" name="third_year_marksheet" value="yes" >
                </td>
                <td>
                  <input type="radio" id="third_year_marksheet_no" onchange="yesnoCheck12()" name="third_year_marksheet" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->third_year_marksheet == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showThird_year_marks" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Third Year Marksheet</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->third_year_marksheet_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->third_year_marksheet_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showThird_year_marks" id="pdf_third_year_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="third_year_marksheet" name="third_year_marksheet">
                @else
                <input type="file" style="display: block;" id="third_year_marksheet" name="third_year_marksheet">
                <a href="" id="view_third_year_marksheet" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->third_year_marksheet == 'Yes')
                  <button type="submit" style="display: none;" id="third_year_marksheet_upload" class="btn btn-sm btn-success">Upload</button>
                 <a href="{{route('delete','third_year_marksheet')}}"> <button type="button" style="display: block;" id="third_year_marksheet_reupload" class="btn btn-sm btn-info" onclick="third_year_marksheetReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="third_year_marksheet_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="third_year_marksheet_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->third_year_marksheet == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->third_year_marksheet == 'Yes')
                  <a href="{{route('delete','third_year_marksheet')}}"><button type="button" style="display: block;" id="third_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="third_year_marksheetDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','third_year_marksheet')}}"><button type="button" style="display: none;" id="third_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="third_year_marksheetDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('third_year_marksheet_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('third_year_marksheet_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync12() {
                    if (document.getElementById('third_year_marksheet_no').checked) {
                        document.getElementById('third_year_marksheet').style.display = 'none';
                        document.getElementById('third_year_marksheet_upload').style.display = 'none';
                    }
                }
                function yesnoCheck12() {
                    if (document.getElementById('third_year_marksheet_yes').checked) {
                        document.getElementById('third_year_marksheet').style.display = 'block';
                        document.getElementById('third_year_marksheet_upload').style.display = 'block';
                    }
                    if (document.getElementById('third_year_marksheet_no').checked) {
                        document.getElementById('third_year_marksheet').style.display = 'none';
                        document.getElementById('third_year_marksheet_upload').style.display = 'none';
                    }
                }
                function third_year_marksheetReupload()
                  {
                    document.getElementById('third_year_marksheet_yes').disabled = true;
                    document.getElementById('third_year_marksheet_no').disabled = true;
                    document.getElementById('pdf_third_year_view').style.display = 'none';
                    document.getElementById('third_year_marksheet').style.display = 'block';
                    document.getElementById('third_year_marksheet_upload').style.display = 'block';
                    document.getElementById('third_year_marksheet_reupload').style.display = 'none';
                  }
                  function third_year_marksheetDelete()
                    {

                      document.getElementById('third_year_marksheet_yes').disabled = false;
                      document.getElementById('third_year_marksheet_no').checked = true;
                      document.getElementById('third_year_marksheet_no').disabled = false;
                      document.getElementById('pdf_third_year_view').style.display = 'none';
                      document.getElementById('third_year_marksheet').style.display = 'none';
                      document.getElementById('third_year_marksheet_reupload').style.display = 'none';
                      document.getElementById('third_year_marksheet_delete').style.display = 'none';
                      document.getElementById('third_year_marksheet_upload').style.display = 'none';
                    }
              </script>
            </tr>
             {{-- Fourth Year Marksheet --}}
            <tr>
              <td>8</td>
              <td>Fourth Year Marksheet<font> *</font></td>
              @if( $user1[0]->fourth_year_marksheet == 'Yes')
                <td>
                  <input type="radio" id="fourth_year_marksheet_yes" onchange="yesnoCheck34()" name="fourth_year_marksheet" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="fourth_year_marksheet_no" onchange="yesnoCheck34()" name="fourth_year_marksheet" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="fourth_year_marksheet_yes" onchange="yesnoCheck34()" name="fourth_year_marksheet" value="yes" >
                </td>
                <td>
                  <input type="radio" id="fourth_year_marksheet_no" onchange="yesnoCheck34()" name="fourth_year_marksheet" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->fourth_year_marksheet == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showFourth_year_marks" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Fourth Year Marksheet</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->fourth_year_marksheet_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->fourth_year_marksheet_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showFourth_year_marks" id="pdf_fourth_year_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="fourth_year_marksheet" name="fourth_year_marksheet">
                @else
                <input type="file" style="display: block;" id="fourth_year_marksheet" name="fourth_year_marksheet">
                <a href="" id="view_fourth_year_marksheet" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->fourth_year_marksheet == 'Yes')
                  <button type="submit" style="display: none;" id="fourth_year_marksheet_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','fourth_year_marksheet')}}"><button type="button" style="display: block;" id="fourth_year_marksheet_reupload" class="btn btn-sm btn-info" onclick="fourth_year_marksheetReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="fourth_year_marksheet_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="fourth_year_marksheet_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->fourth_year_marksheet == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->fourth_year_marksheet == 'Yes')
                  <a href="{{route('delete','fourth_year_marksheet')}}"><button type="button" style="display: block;" id="fourth_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="fourth_year_marksheetDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','fourth_year_marksheet')}}"><button type="button" style="display: none;" id="first_year_marksheet_delete" class="btn btn-sm btn-danger" onclick="fourth_year_marksheetDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('fourth_year_marksheet_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('fourth_year_marksheet_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync34() {
                    if (document.getElementById('fourth_year_marksheet_no').checked) {
                        document.getElementById('fourth_year_marksheet').style.display = 'none';
                        document.getElementById('fourth_year_marksheet_upload').style.display = 'none';
                    }
                }
                function yesnoCheck34() {
                    if (document.getElementById('fourth_year_marksheet_yes').checked) {
                        document.getElementById('fourth_year_marksheet').style.display = 'block';
                        document.getElementById('fourth_year_marksheet_upload').style.display = 'block';
                    }
                    if (document.getElementById('fourth_year_marksheet_no').checked) {
                        document.getElementById('fourth_year_marksheet').style.display = 'none';
                        document.getElementById('fourth_year_marksheet_upload').style.display = 'none';
                    }
                }
                function fourth_year_marksheetReupload()
                  {
                    document.getElementById('fourth_year_marksheet_yes').disabled = true;
                    document.getElementById('fourth_year_marksheet_no').disabled = true;
                    document.getElementById('pdf_fourth_year_view').style.display = 'none';
                    document.getElementById('fourth_year_marksheet').style.display = 'block';
                    document.getElementById('fourth_year_marksheet_upload').style.display = 'block';
                    document.getElementById('fourth_year_marksheet_reupload').style.display = 'none';
                  }
                  function fourth_year_marksheetDelete()
                    {

                      document.getElementById('fourth_year_marksheet_yes').disabled = false;
                      document.getElementById('fourth_year_marksheet_no').checked = true;
                      document.getElementById('fourth_year_marksheet_no').disabled = false;
                      document.getElementById('pdf_fourth_year_view').style.display = 'none';
                      document.getElementById('fourth_year_marksheet').style.display = 'none';
                      document.getElementById('fourth_year_marksheet_reupload').style.display = 'none';
                      document.getElementById('fourth_year_marksheet_delete').style.display = 'none';
                      document.getElementById('fourth_year_marksheet_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Convocation Certificate --}}
            <tr>
              <td>9</td>
              <td>Convocation/Passing Certificate<font> *</font></td>
              @if( $user1[0]->convocation_passing_certi == 'Yes')
                <td>
                  <input type="radio" id="convocation_passing_certi_yes" onchange="yesnoCheck14()" name="convocation_passing_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="convocation_passing_certi_no" onchange="yesnoCheck14()" name="convocation_passing_certi" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="convocation_passing_certi_yes" onchange="yesnoCheck14()" name="convocation_passing_certi" value="yes" >
                </td>
                <td>
                  <input type="radio" id="convocation_passing_certi_no" onchange="yesnoCheck14()" name="convocation_passing_certi" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->convocation_passing_certi == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showConvo_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Convocation Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->convocation_passing_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->convocation_passing_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showConvo_certi" id="pdf_convo_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="convocation_passing_certi" name="convocation_passing_certi">
                @else
                <input type="file" style="display: block;" id="convocation_passing_certi" name="convocation_passing_certi">
                <a href="" id="view_convocation_passing_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->convocation_passing_certi == 'Yes')
                  <button type="submit" style="display: none;" id="convocation_passing_certi_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','convocation_passing_certi')}}"><button type="button" style="display: block;" id="convocation_passing_certi_reupload" class="btn btn-sm btn-info" onclick="convocation_passing_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="convocation_passing_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="convocation_passing_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->convocation_passing_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->convocation_passing_certi == 'Yes')
                  <a href="{{route('delete','convocation_passing_certi')}}"><button type="button" style="display: block;" id="convocation_passing_certi_delete" class="btn btn-sm btn-danger" onclick="convocation_passing_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','convocation_passing_certi')}}"><button type="button" style="display: none;" id="convocation_passing_certi_delete" class="btn btn-sm btn-danger" onclick="convocation_passing_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('convocation_passing_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('convocation_passing_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync14() {
                    if (document.getElementById('convocation_passing_certi_no').checked) {
                        document.getElementById('convocation_passing_certi').style.display = 'none';
                        document.getElementById('convocation_passing_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck14() {
                    if (document.getElementById('convocation_passing_certi_yes').checked) {
                        document.getElementById('convocation_passing_certi').style.display = 'block';
                        document.getElementById('convocation_passing_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('convocation_passing_certi_no').checked) {
                        document.getElementById('convocation_passing_certi').style.display = 'none';
                        document.getElementById('convocation_passing_certi_upload').style.display = 'none';
                    }
                }
                function convocation_passing_certiReupload()
                  {
                    document.getElementById('convocation_passing_certi_yes').disabled = true;
                    document.getElementById('convocation_passing_certi_no').disabled = true;
                    document.getElementById('pdf_convo_certi_view').style.display = 'none';
                    document.getElementById('convocation_passing_certi').style.display = 'block';
                    document.getElementById('convocation_passing_certi_upload').style.display = 'block';
                    document.getElementById('convocation_passing_certi_reupload').style.display = 'none';
                  }
                  function convocation_passing_certiDelete()
                    {

                      document.getElementById('convocation_passing_certi_yes').disabled = false;
                      document.getElementById('convocation_passing_certi_no').checked = true;
                      document.getElementById('convocation_passing_certi_no').disabled = false;
                      document.getElementById('pdf_convo_certi_view').style.display = 'none';
                      document.getElementById('convocation_passing_certi').style.display = 'none';
                      document.getElementById('convocation_passing_certi_reupload').style.display = 'none';
                      document.getElementById('convocation_passing_certi_delete').style.display = 'none';
                      document.getElementById('convocation_passing_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Migration Certificate --}}
            <tr>
                <td>10</td>
                <td>Migration Certificate<font> *</font></td>
                @if( $user1[0]->migration_certi == 'Yes')
                  <td>
                    <input type="radio" id="migration_certi_yes" onchange="yesnoCheck15()" name="migration_certi" value="yes" checked disabled>
                  </td>
                  <td>
                    <input type="radio" id="migration_certi_no" onchange="yesnoCheck15()" name="migration_certi" value="no" disabled>
                  </td>
                  <td>
                    <input type="radio" id="migration_certi_na" onchange="yesnoCheck15()" name="migration_certi" value="na" disabled>
                  </td>
                @elseif( $user1[0]->migration_certi == 'No')
                  <td>
                    <input type="radio" id="migration_certi_yes" onchange="yesnoCheck15()" name="migration_certi" value="yes" >
                  </td>
                  <td>
                    <input type="radio" id="migration_certi_no" onchange="yesnoCheck15()" name="migration_certi" value="no">
                  </td>
                  <td>
                    <input type="radio" id="migration_certi_na" onchange="yesnoCheck15()" name="migration_certi" value="na" checked>
                  </td>
                @else
                  <td>
                    <input type="radio" id="migration_certi_yes" onchange="yesnoCheck15()" name="migration_certi" value="yes" >
                  </td>
                  <td>
                    <input type="radio" id="migration_certi_no" onchange="yesnoCheck15()" name="migration_certi" value="no">
                  </td>
                  <td>
                    <input type="radio" id="migration_certi_na" onchange="yesnoCheck15()" name="migration_certi" value="na" checked>
                  </td>
                @endif
                <td>
                  @if( $user1[0]->migration_certi == 'Yes')
                  <!---------------------------View PDF Modal------------------------------->
                          <div class="modal fade" id="showMigration_certi" role="dialog">
                          <div class="modal-dialog">
                          
                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header" style="background-color : #204a84; color:white">
                                <h4 class="modal-title">Migration Certificate</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->migration_certi_path) }}" type="application/pdf" width="95%" height="700">
                              <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->migration_certi_path) }}" width="1200px" height="770px" />
                              </embed>
                              </object>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        <!-------------------------------Close------------------------------------>

                        <button type="button" data-toggle="modal" data-target="#showMigration_certi" id="pdf_migration_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                  <input type="file" style="display: none;" id="migration_certi" name="migration_certi">
                  @else
                  <input type="file" style="display: block;" id="migration_certi" name="migration_certi">
                  <a href="" id="view_migration_certi" style="display: none;">View Document</a>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->migration_certi == 'Yes')
                    <button type="submit" style="display: none;" id="migration_certi_upload" class="btn btn-sm btn-success">Upload</button>
                    <a href="{{route('delete','migration_certi')}}"><button type="button" style="display: block;" id="migration_certi_reupload" class="btn btn-sm btn-info" onclick="migration_certiReupload()">Reupload</button></a>
                  @else
                    <button type="submit" style="display: block;" id="migration_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                    <button type="button" style="display: none;" id="migration_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                  @endif
                </td>
                <td>
                  {{-- status check by this variable for js --}}
                  @if( $user1[0]->migration_certi == 'Yes')
                    <p>Uploaded</p>
                  @else
                    <p>Not Uploaded</p>
                  @endif
                </td>
                <td>
                  @if( $user1[0]->migration_certi == 'Yes')
                    <a href="{{route('delete','migration_certi')}}"><button type="button" style="display: block;" id="migration_certi_delete" class="btn btn-sm btn-danger" onclick="migration_certiDelete()">Delete</button></a>
                  @else
                    <a href="{{route('delete','migration_certi')}}"><button type="button" style="display: none;" id="migration_certi_delete" class="btn btn-sm btn-danger" onclick="migration_certiDelete()">Delete</button></a>
                  @endif
                </td>
                <td>
                  @if(session('migration_certi_error'))
                  <center>
                    <p style="color: #ff0000;"> {{session('migration_certi_error')}}!</p>
                  </center>
                  @endif    
                  @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                  @endif
                </td>
                <script type="text/javascript">
                  function ync15() {
                      if (document.getElementById('migration_certi_na').checked) {
                          document.getElementById('migration_certi').style.display = 'none';
                          document.getElementById('migration_certi_upload').style.display = 'none';
                      }
                  }
                  function yesnoCheck15() {
                      if (document.getElementById('migration_certi_yes').checked) {
                          document.getElementById('migration_certi').style.display = 'block';
                          document.getElementById('migration_certi_upload').style.display = 'block';
                      }
                      if (document.getElementById('migration_certi_no').checked) {
                          document.getElementById('migration_certi').style.display = 'none';
                          document.getElementById('migration_certi_upload').style.display = 'none';
                      }
                      if (document.getElementById('migration_certi_na').checked) {
                          document.getElementById('migration_certi').style.display = 'none';
                          document.getElementById('migration_certi_upload').style.display = 'none';
                      }
                  }
                  function migration_certiReupload()
                    {
                      document.getElementById('migration_certi_yes').disabled = true;
                      document.getElementById('migration_certi_no').disabled = true;
                      document.getElementById('migration_certi_na').disabled = true;
                      document.getElementById('pdf_migration_certi_view').style.display = 'none';
                      document.getElementById('migration_certi').style.display = 'block';
                      document.getElementById('migration_certi_upload').style.display = 'block';
                      document.getElementById('migration_certi_reupload').style.display = 'none';
                    }
                    function migration_certiDelete()
                      {

                        document.getElementById('migration_certi_yes').disabled = false;
                        document.getElementById('migration_certi_no').disabled = false;
                        document.getElementById('migration_certi_na').checked = true;
                        document.getElementById('migration_certi_na').disabled = false;
                        document.getElementById('pdf_migration_certi_view').style.display = 'none';
                        document.getElementById('migration_certi').style.display = 'none';
                        document.getElementById('migration_certi_reupload').style.display = 'none';
                        document.getElementById('migration_certi_delete').style.display = 'none';
                        document.getElementById('migration_certi_upload').style.display = 'none';
                      }
                </script>
              </tr>
            {{-- Birth Certificate --}}
            <tr>
              <td>11</td>
              <td>Birth Certificate<font> *</font></td>
              @if( $user1[0]->birth_certi == 'Yes')
                <td>
                  <input type="radio" id="birth_certi_yes" onchange="yesnoCheck16()" name="birth_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="birth_certi_no" onchange="yesnoCheck16()" name="birth_certi" value="no" disabled>
                </td>
                <td>
                    <font style="font-size: 15px">Mandatory</font><br>
                    <font style="font-size: 11px">( If You do not have Domicile Certificate )</font>
                </td>
              @else
                <td>
                  <input type="radio" id="birth_certi_yes" onchange="yesnoCheck16()" name="birth_certi" value="yes" >
                </td>
                <td>
                  <input type="radio" id="birth_certi_no" onchange="yesnoCheck16()" name="birth_certi" value="no" checked>
                </td>
                <td>
                    <font style="font-size: 15px">Mandatory</font><br>
                    <font style="font-size: 11px">( If You do not have Domicile Certificate )</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->birth_certi == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showBirth_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Birth Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->birth_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->birth_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showBirth_certi" id="pdf_birth_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="birth_certi" name="birth_certi">
                @else
                <input type="file" style="display: block;" id="birth_certi" name="birth_certi">
                <a href="" id="view_birth_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->birth_certi == 'Yes')
                  <button type="submit" style="display: none;" id="birth_certi_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','birth_certi')}}"><button type="button" style="display: block;" id="birth_certi_reupload" class="btn btn-sm btn-info" onclick="birth_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="birth_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="birth_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->birth_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->birth_certi == 'Yes')
                  <a href="{{route('delete','birth_certi')}}"><button type="button" style="display: block;" id="birth_certi_delete" class="btn btn-sm btn-danger" onclick="birth_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','birth_certi')}}"><button type="button" style="display: none;" id="birth_certi_delete" class="btn btn-sm btn-danger" onclick="birth_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('birth_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('birth_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync16() {
                    if (document.getElementById('birth_certi_no').checked) {
                        document.getElementById('birth_certi').style.display = 'none';
                        document.getElementById('birth_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck16() {
                    if (document.getElementById('birth_certi_yes').checked) {
                        document.getElementById('birth_certi').style.display = 'block';
                        document.getElementById('birth_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('birth_certi_no').checked) {
                        document.getElementById('birth_certi').style.display = 'none';
                        document.getElementById('birth_certi_upload').style.display = 'none';
                    }
                }
                function birth_certiReupload()
                  {
                    document.getElementById('birth_certi_yes').disabled = true;
                    document.getElementById('birth_certi_no').disabled = true;
                    document.getElementById('pdf_birth_certi_view').style.display = 'none';
                    document.getElementById('birth_certi').style.display = 'block';
                    document.getElementById('birth_certi_upload').style.display = 'block';
                    document.getElementById('birth_certi_reupload').style.display = 'none';
                  }
                  function birth_certiDelete()
                    {

                      document.getElementById('birth_certi_yes').disabled = false;
                      document.getElementById('birth_certi_no').checked = true;
                      document.getElementById('birth_certi_no').disabled = false;
                      document.getElementById('pdf_birth_certi_view').style.display = 'none';
                      document.getElementById('birth_certi').style.display = 'none';
                      document.getElementById('birth_certi_reupload').style.display = 'none';
                      document.getElementById('birth_certi_delete').style.display = 'none';
                      document.getElementById('birth_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Domicile Certificate --}}
            <tr>
              <td>12</td>
              <td>
                    Domicile Certificate<font> *&nbsp;</font><br>
                    <font style="font-size: 11px">(Mandatory for Type B candidate)</font>
                </td>
              @if( $user1[0]->domicile == 'Yes')
                <td>
                  <input type="radio" id="domicile_yes" onchange="yesnoCheck17()" name="domicile" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="domicile_no" onchange="yesnoCheck17()" name="domicile" value="no" disabled>
                </td>
                <td>
                    <font style="font-size: 15px">Mandatory</font><br>
                    <font style="font-size: 11px">( If You do not have Birth Certificate )</font>
                  </td>
              @else
                <td>
                  <input type="radio" id="domicile_yes" onchange="yesnoCheck17()" name="domicile" value="yes" >
                </td>
                <td>
                  <input type="radio" id="domicile_no" onchange="yesnoCheck17()" name="domicile" value="no" checked>
                </td>
                <td>
                    <font style="font-size: 15px">Mandatory</font><br>
                    <font style="font-size: 11px">( If You do not have Birth Certificate )</font>
                  </td>
              @endif
              <td>
                @if( $user1[0]->domicile == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showDomicile" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Domicile Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->domicile_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->domicile_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showDomicile" id="pdf_domicile_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="domicile" name="domicile">
                @else
                <input type="file" style="display: block;" id="domicile" name="domicile">
                <a href="" id="view_domicile" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->domicile == 'Yes')
                  <button type="submit" style="display: none;" id="domicile_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','domicile')}}"><button type="button" style="display: block;" id="domicile_reupload" class="btn btn-sm btn-info" onclick="domicileReupload()">Reupload</button>
                @else
                  <button type="submit" style="display: block;" id="domicile_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="domicile_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->domicile == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->domicile == 'Yes')
                  <a href="{{route('delete','domicile')}}"><button type="button" style="display: block;" id="domicile_delete" class="btn btn-sm btn-danger" onclick="domicileDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','domicile')}}"><button type="button" style="display: none;" id="domicile_delete" class="btn btn-sm btn-danger" onclick="domicileDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('domicile_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('domicile_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync17() {
                    if (document.getElementById('domicile_no').checked) {
                        document.getElementById('domicile').style.display = 'none';
                        document.getElementById('domicile_upload').style.display = 'none';
                    }
                }
                function yesnoCheck17() {
                    if (document.getElementById('domicile_yes').checked) {
                        document.getElementById('domicile').style.display = 'block';
                        document.getElementById('domicile_upload').style.display = 'block';
                    }
                    if (document.getElementById('domicile_no').checked) {
                        document.getElementById('domicile').style.display = 'none';
                        document.getElementById('domicile_upload').style.display = 'none';
                    }
                }
                function domicileReupload()
                  {
                    document.getElementById('domicile_yes').disabled = true;
                    document.getElementById('domicile_no').disabled = true;
                    document.getElementById('pdf_domicile_view').style.display = 'none';
                    document.getElementById('domicile').style.display = 'block';
                    document.getElementById('domicile_upload').style.display = 'block';
                    document.getElementById('domicile_reupload').style.display = 'none';
                  }
                  function domicileDelete()
                    {

                      document.getElementById('domicile_yes').disabled = false;
                      document.getElementById('domicile_no').checked = true;
                      document.getElementById('domicile_no').disabled = false;
                      document.getElementById('pdf_domicile_view').style.display = 'none';
                      document.getElementById('domicile').style.display = 'none';
                      document.getElementById('domicile_reupload').style.display = 'none';
                      document.getElementById('domicile_delete').style.display = 'none';
                      document.getElementById('domicile_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Proforma O --}}
            <tr>
              <td>13</td>
              <td>Proforma O</td>
              @if( $user1[0]->proforma_o == 'Yes')
                <td>
                  <input type="radio" id="proforma_o_yes" onchange="yesnoCheck18()" name="proforma_o" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_o_no" onchange="yesnoCheck18()" name="proforma_o" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_o_na" onchange="yesnoCheck18()" name="proforma_o" value="na" disabled>
                </td>
              @elseif( $user1[0]->proforma_o == 'No' )
                <td>
                  <input type="radio" id="proforma_o_yes" onchange="yesnoCheck18()" name="proforma_o" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_o_no" onchange="yesnoCheck18()" name="proforma_o" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="proforma_o_na" onchange="yesnoCheck18()" name="proforma_o" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="proforma_o_yes" onchange="yesnoCheck18()" name="proforma_o" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_o_no" onchange="yesnoCheck18()" name="proforma_o" value="no">
                </td>
                <td>
                  <input type="radio" id="proforma_o_na" onchange="yesnoCheck18()" name="proforma_o" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->proforma_o == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showPerforma_o" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Proforma O</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_o_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_o_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showPerforma_o" id="pdf_performa_o_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="proforma_o" name="proforma_o">
                @else
                <input type="file" style="display: none;" id="proforma_o" name="proforma_o">
                <a href="" id="view_proforma_o" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_o == 'Yes')
                  <button type="submit" style="display: none;" id="proforma_o_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','proforma_o')}}"> <button type="button" style="display: block;" id="proforma_o_reupload" class="btn btn-sm btn-info" onclick="proforma_oReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="proforma_o_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="proforma_o_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->proforma_o == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_o == 'Yes')
                  <a href="{{route('delete','proforma_o')}}"><button type="button" style="display: block;" id="proforma_o_delete" class="btn btn-sm btn-danger" onclick="proforma_oDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','proforma_o')}}"><button type="button" style="display: none;" id="proforma_o_delete" class="btn btn-sm btn-danger" onclick="proforma_oDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('proforma_o_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('proforma_o_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync18() {
                    if (document.getElementById('proforma_o_na').checked) {
                        document.getElementById('proforma_o').style.display = 'none';
                        document.getElementById('proforma_o_upload').style.display = 'none';
                    }
                }
                function yesnoCheck18() {
                    if (document.getElementById('proforma_o_yes').checked) {
                        document.getElementById('proforma_o').style.display = 'block';
                        document.getElementById('proforma_o_upload').style.display = 'block';
                    }
                    if (document.getElementById('proforma_o_no').checked) {
                        document.getElementById('proforma_o').style.display = 'none';
                        document.getElementById('proforma_o_upload').style.display = 'none';
                    }
                    if (document.getElementById('proforma_o_na').checked) {
                        document.getElementById('proforma_o').style.display = 'none';
                        document.getElementById('proforma_o_upload').style.display = 'none';
                    }
                }
                function proforma_oReupload()
                  {
                    document.getElementById('proforma_o_yes').disabled = true;
                    document.getElementById('proforma_o_no').disabled = true;
                    document.getElementById('proforma_o_na').disabled = true;
                    document.getElementById('pdf_performa_o_view').style.display = 'none';
                    document.getElementById('proforma_o').style.display = 'block';
                    document.getElementById('proforma_o_upload').style.display = 'block';
                    document.getElementById('proforma_o_reupload').style.display = 'none';
                  }
                  function proforma_oDelete()
                    {

                      document.getElementById('proforma_o_yes').disabled = false;
                      document.getElementById('proforma_o_no').disabled = false;
                      document.getElementById('proforma_o_na').checked = true;
                      document.getElementById('proforma_o_na').disabled = false;
                      document.getElementById('pdf_performa_o_view').style.display = 'none';
                      document.getElementById('proforma_o').style.display = 'none';
                      document.getElementById('proforma_o_reupload').style.display = 'none';
                      document.getElementById('proforma_o_delete').style.display = 'none';
                      document.getElementById('proforma_o_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Retention Certificate --}}
            <tr>
              <td>14</td>
              <td>Retention Certificate</td>
              @if( $user1[0]->retention == 'Yes')
                <td>
                  <input type="radio" id="retention_yes" onchange="yesnoCheck19()" name="retention" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="retention_no" onchange="yesnoCheck19()" name="retention" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="retention_na" onchange="yesnoCheck19()" name="retention" value="na" disabled>
                </td>
              @elseif($user1[0]->retention == 'No')
                <td>
                  <input type="radio" id="retention_yes" onchange="yesnoCheck19()" name="retention" value="yes"  >
                </td>
                <td>
                  <input type="radio" id="retention_no" onchange="yesnoCheck19()" name="retention" value="no" checked >
                </td>
                <td>
                  <input type="radio" id="retention_na" onchange="yesnoCheck19()" name="retention" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="retention_yes" onchange="yesnoCheck19()" name="retention" value="yes">
                </td>
                <td>
                  <input type="radio" id="retention_no" onchange="yesnoCheck19()" name="retention" value="no">
                </td>
                <td>
                  <input type="radio" id="retention_na" onchange="yesnoCheck19()" name="retention" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->retention == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showRetention" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Retention Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->retention_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->retention_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showRetention" id="pdf_retention_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="retention" name="retention">
                @else
                <input type="file" style="display: none;" id="retention" name="retention">
                <a href="" id="view_retention" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->retention == 'Yes')
                  <button type="submit" style="display: none;" id="retention_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','retention')}}"><button type="button" style="display: block;" id="retention_reupload" class="btn btn-sm btn-info" onclick="retentionReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="retention_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="retention_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->retention == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->retention == 'Yes')
                  <a href="{{route('delete','retention')}}"><button type="button" style="display: block;" id="retention_delete" class="btn btn-sm btn-danger" onclick="retentionDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','retention')}}"><button type="button" style="display: none;" id="retention_delete" class="btn btn-sm btn-danger" onclick="retentionDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('retention_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('retention_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync19() {
                    if (document.getElementById('retention_na').checked) {
                        document.getElementById('retention').style.display = 'none';
                        document.getElementById('retention_upload').style.display = 'none';
                    }
                }
                function yesnoCheck19() {
                    if (document.getElementById('retention_yes').checked) {
                        document.getElementById('retention').style.display = 'block';
                        document.getElementById('retention_upload').style.display = 'block';
                    }
                    if (document.getElementById('retention_no').checked) {
                        document.getElementById('retention').style.display = 'none';
                        document.getElementById('retention_upload').style.display = 'none';
                    }
                    if (document.getElementById('retention_na').checked) {
                        document.getElementById('retention').style.display = 'none';
                        document.getElementById('retention_upload').style.display = 'none';
                    }
                }
                function retentionReupload()
                  {
                    document.getElementById('retention_yes').disabled = true;
                    document.getElementById('retention_no').disabled = true;
                    document.getElementById('retention_na').disabled = true;
                    document.getElementById('pdf_retention_view').style.display = 'none';
                    document.getElementById('retention').style.display = 'block';
                    document.getElementById('retention_upload').style.display = 'block';
                    document.getElementById('retention_reupload').style.display = 'none';
                  }
                  function retentionDelete()
                    {

                      document.getElementById('retention_yes').disabled = false;
                      document.getElementById('retention_no').disabled = false;
                      document.getElementById('retention_na').checked = true;
                      document.getElementById('retention_na').disabled = false;
                      document.getElementById('pdf_retention_view').style.display = 'none';
                      document.getElementById('retention').style.display = 'none';
                      document.getElementById('retention_reupload').style.display = 'none';
                      document.getElementById('retention_delete').style.display = 'none';
                      document.getElementById('retention_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Minority Affidavit --}}
            <tr>
              <td>15</td>
              <td>Minority Affidavit</td>
              @if( $user1[0]->minority_affidavit == 'Yes')
                <td>
                  <input type="radio" id="minority_affidavit_yes" onchange="yesnoCheck20()" name="minority_affidavit" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="minority_affidavit_no" onchange="yesnoCheck20()" name="minority_affidavit" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="minority_affidavit_na" onchange="yesnoCheck20()" name="minority_affidavit" value="na" disabled>
                </td>
              @elseif($user1[0]->minority_affidavit == 'No')
                <td>
                  <input type="radio" id="minority_affidavit_yes" onchange="yesnoCheck20()" name="minority_affidavit" value="yes">
                </td>
                <td>
                  <input type="radio" id="minority_affidavit_no" onchange="yesnoCheck20()" name="minority_affidavit" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="minority_affidavit_na" onchange="yesnoCheck20()" name="minority_affidavit" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="minority_affidavit_yes" onchange="yesnoCheck20()" name="minority_affidavit" value="yes">
                </td>
                <td>
                  <input type="radio" id="minority_affidavit_no" onchange="yesnoCheck20()" name="minority_affidavit" value="no">
                </td>
                <td>
                  <input type="radio" id="minority_affidavit_na" onchange="yesnoCheck20()" name="minority_affidavit" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->minority_affidavit == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showMinority_aff" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Minority Affidavit</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->minority_affidavit_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->minority_affidavit_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showMinority_aff" id="pdf_minority_aff_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="minority_affidavit" name="minority_affidavit">
                @else
                <input type="file" style="display: none;" id="minority_affidavit" name="minority_affidavit">
                <a href="" id="view_minority_affidavit" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->minority_affidavit == 'Yes')
                  <button type="submit" style="display: none;" id="minority_affidavit_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','minority_affidavit')}}"><button type="button" style="display: block;" id="minority_affidavit_reupload" class="btn btn-sm btn-info" onclick="minority_affidavitReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="minority_affidavit_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="minority_affidavit_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->minority_affidavit == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->minority_affidavit == 'Yes')
                  <a href="{{route('delete','minority_affidavit')}}"><button type="button" style="display: block;" id="minority_affidavit_delete" class="btn btn-sm btn-danger" onclick="minority_affidavitDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','minority_affidavit')}}"><button type="button" style="display: none;" id="minority_affidavit_delete" class="btn btn-sm btn-danger" onclick="minority_affidavitDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('minority_affidavit_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('minority_affidavit_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync20() {
                    if (document.getElementById('minority_affidavit_na').checked) {
                        document.getElementById('minority_affidavit').style.display = 'none';
                        document.getElementById('minority_affidavit_upload').style.display = 'none';
                    }
                }
                function yesnoCheck20() {
                    if (document.getElementById('minority_affidavit_yes').checked) {
                        document.getElementById('minority_affidavit').style.display = 'block';
                        document.getElementById('minority_affidavit_upload').style.display = 'block';
                    }
                    if (document.getElementById('minority_affidavit_no').checked) {
                        document.getElementById('minority_affidavit').style.display = 'none';
                        document.getElementById('minority_affidavit_upload').style.display = 'none';
                    }
                    if (document.getElementById('minority_affidavit_na').checked) {
                        document.getElementById('minority_affidavit').style.display = 'none';
                        document.getElementById('minority_affidavit_upload').style.display = 'none';
                    }
                }
                function minority_affidavitReupload()
                  {
                    document.getElementById('minority_affidavit_yes').disabled = true;
                    document.getElementById('minority_affidavit_no').disabled = true;
                    document.getElementById('minority_affidavit_na').disabled = true;
                    document.getElementById('pdf_minority_aff_view').style.display = 'none';
                    document.getElementById('minority_affidavit').style.display = 'block';
                    document.getElementById('minority_affidavit_upload').style.display = 'block';
                    document.getElementById('minority_affidavit_reupload').style.display = 'none';
                  }
                  function minority_affidavitDelete()
                    {

                      document.getElementById('minority_affidavit_yes').disabled = false;
                      document.getElementById('minority_affidavit_no').disabled = false;
                      document.getElementById('minority_affidavit_na').checked = true;
                      document.getElementById('minority_affidavit_na').disabled = false;
                      document.getElementById('pdf_minority_aff_view').style.display = 'none';
                      document.getElementById('minority_affidavit').style.display = 'none';
                      document.getElementById('minority_affidavit_reupload').style.display = 'none';
                      document.getElementById('minority_affidavit_delete').style.display = 'none';
                      document.getElementById('minority_affidavit_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Gap Certificate --}}
            <tr>
              <td>16</td>
              <td>Gap Certificate</td>
              @if( $user1[0]->gap_certi == 'Yes')
                <td>
                  <input type="radio" id="gap_certi_yes" onchange="yesnoCheck21()" name="gap_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="gap_certi_no" onchange="yesnoCheck21()" name="gap_certi" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="gap_certi_na" onchange="yesnoCheck21()" name="gap_certi" value="na" disabled>
                </td>
              @elseif($user1[0]->gap_certi == 'No')
                <td>
                  <input type="radio" id="gap_certi_yes" onchange="yesnoCheck21()" name="gap_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="gap_certi_no" onchange="yesnoCheck21()" name="gap_certi" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="gap_certi_na" onchange="yesnoCheck21()" name="gap_certi" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="gap_certi_yes" onchange="yesnoCheck21()" name="gap_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="gap_certi_no" onchange="yesnoCheck21()" name="gap_certi" value="no">
                </td>
                <td>
                  <input type="radio" id="gap_certi_na" onchange="yesnoCheck21()" name="gap_certi" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->gap_certi == 'Yes')
                                     <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="showGAP_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Gap Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->gap_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->gap_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#showGAP_certi" id="pdf_gap_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="gap_certi" name="gap_certi">
                @else
                <input type="file" style="display: none;" id="gap_certi" name="gap_certi">
                <a href="" id="view_gap_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->gap_certi == 'Yes')
                  <button type="submit" style="display: none;" id="gap_certi_upload" class="btn btn-sm btn-success">Upload</button>
                 <a href="{{route('delete','gap_certi')}}"> <button type="button" style="display: block;" id="gap_certi_reupload" class="btn btn-sm btn-info" onclick="gap_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="gap_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="gap_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->gap_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->gap_certi == 'Yes')
                  <a href="{{route('delete','gap_certi')}}"><button type="button" style="display: block;" id="gap_certi_delete" class="btn btn-sm btn-danger" onclick="gap_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','gap_certi')}}"><button type="button" style="display: none;" id="gap_certi_delete" class="btn btn-sm btn-danger" onclick="gap_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('gap_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('gap_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync21() {
                    if (document.getElementById('gap_certi_na').checked) {
                        document.getElementById('gap_certi').style.display = 'none';
                        document.getElementById('gap_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck21() {
                    if (document.getElementById('gap_certi_yes').checked) {
                        document.getElementById('gap_certi').style.display = 'block';
                        document.getElementById('gap_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('gap_certi_no').checked) {
                        document.getElementById('gap_certi').style.display = 'none';
                        document.getElementById('gap_certi_upload').style.display = 'none';
                    }
                    if (document.getElementById('gap_certi_na').checked) {
                        document.getElementById('gap_certi').style.display = 'none';
                        document.getElementById('gap_certi_upload').style.display = 'none';
                    }
                }
                function gap_certiReupload()
                  {
                    document.getElementById('gap_certi_yes').disabled = true;
                    document.getElementById('gap_certi_no').disabled = true;
                    document.getElementById('gap_certi_na').disabled = true;
                    document.getElementById('pdf_gap_certi_view').style.display = 'none';
                    document.getElementById('gap_certi').style.display = 'block';
                    document.getElementById('gap_certi_upload').style.display = 'block';
                    document.getElementById('gap_certi_reupload').style.display = 'none';
                  }
                  function gap_certiDelete()
                    {

                      document.getElementById('gap_certi_yes').disabled = false;
                      document.getElementById('gap_certi_no').disabled = false;
                      document.getElementById('gap_certi_na').checked = true;
                      document.getElementById('gap_certi_na').disabled = false;
                      document.getElementById('pdf_gap_certi_view').style.display = 'none';
                      document.getElementById('gap_certi').style.display = 'none';
                      document.getElementById('gap_certi_reupload').style.display = 'none';
                      document.getElementById('gap_certi_delete').style.display = 'none';
                      document.getElementById('gap_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Community Certificate --}}
            <tr>
              <td>17</td>
              <td>Community Certificate</td>
              @if( $user1[0]->community_certi == 'Yes')
                <td>
                  <input type="radio" id="community_certi_yes" onchange="yesnoCheck22()" name="community_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="community_certi_no" onchange="yesnoCheck22()" name="community_certi" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="community_certi_na" onchange="yesnoCheck22()" name="community_certi" value="na" disabled>
                </td>
              @elseif($user1[0]->community_certi == 'No')
                <td>
                  <input type="radio" id="community_certi_yes" onchange="yesnoCheck22()" name="community_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="community_certi_no" onchange="yesnoCheck22()" name="community_certi" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="community_certi_na" onchange="yesnoCheck22()" name="community_certi" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="community_certi_yes" onchange="yesnoCheck22()" name="community_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="community_certi_no" onchange="yesnoCheck22()" name="community_certi" value="no">
                </td>
                <td>
                  <input type="radio" id="community_certi_na" onchange="yesnoCheck22()" name="community_certi" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->community_certi == 'Yes')
                 <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_community_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Community Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->community_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->community_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_community_certi" id="pdf_community_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="community_certi" name="community_certi">
                @else
                <input type="file" style="display: none;" id="community_certi" name="community_certi">
                <a href="" id="view_community_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->community_certi == 'Yes')
                  <button type="submit" style="display: none;" id="community_certi_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','community_certi')}}"> <button type="button" style="display: block;" id="community_certi_reupload" class="btn btn-sm btn-info" onclick="community_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="community_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="community_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->community_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->community_certi == 'Yes')
                  <a href="{{route('delete','community_certi')}}"><button type="button" style="display: block;" id="community_certi_delete" class="btn btn-sm btn-danger" onclick="community_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','community_certi')}}"><button type="button" style="display: none;" id="community_certi_delete" class="btn btn-sm btn-danger" onclick="community_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('community_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('community_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync22() {
                    if (document.getElementById('community_certi_na').checked) {
                        document.getElementById('community_certi').style.display = 'none';
                        document.getElementById('community_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck22() {
                    if (document.getElementById('community_certi_yes').checked) {
                        document.getElementById('community_certi').style.display = 'block';
                        document.getElementById('community_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('community_certi_no').checked) {
                        document.getElementById('community_certi').style.display = 'none';
                        document.getElementById('community_certi_upload').style.display = 'none';
                    }
                    if (document.getElementById('community_certi_na').checked) {
                        document.getElementById('community_certi').style.display = 'none';
                        document.getElementById('community_certi_upload').style.display = 'none';
                    }
                }
                function community_certiReupload()
                  {
                    document.getElementById('community_certi_yes').disabled = true;
                    document.getElementById('community_certi_no').disabled = true;
                    document.getElementById('community_certi_na').disabled = true;
                    document.getElementById('pdf_community_certi_view').style.display = 'none';
                    document.getElementById('community_certi').style.display = 'block';
                    document.getElementById('community_certi_upload').style.display = 'block';
                    document.getElementById('community_certi_reupload').style.display = 'none';
                  }
                  function community_certiDelete()
                    {

                      document.getElementById('community_certi_yes').disabled = false;
                      document.getElementById('community_certi_no').disabled = false;
                      document.getElementById('community_certi_na').checked = true;
                      document.getElementById('community_certi_na').disabled = false;
                      document.getElementById('pdf_community_certi_view').style.display = 'none';
                      document.getElementById('community_certi').style.display = 'none';
                      document.getElementById('community_certi_reupload').style.display = 'none';
                      document.getElementById('community_certi_delete').style.display = 'none';
                      document.getElementById('community_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Caste Certificate --}}
            <tr>
              <td>18</td>
              <td>Caste Certificate</td>
              @if( $user1[0]->caste_certi == 'Yes')
                <td>
                  <input type="radio" id="caste_certi_yes" onchange="yesnoCheck23()" name="caste_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="caste_certi_no" onchange="yesnoCheck23()" name="caste_certi" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="caste_certi_na" onchange="yesnoCheck23()" name="caste_certi" value="na" disabled>
                </td>
              @elseif($user1[0]->caste_certi == 'No')
                <td>
                  <input type="radio" id="caste_certi_yes" onchange="yesnoCheck23()" name="caste_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="caste_certi_no" onchange="yesnoCheck23()" name="caste_certi" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="caste_certi_na" onchange="yesnoCheck23()" name="caste_certi" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="caste_certi_yes" onchange="yesnoCheck23()" name="caste_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="caste_certi_no" onchange="yesnoCheck23()" name="caste_certi" value="no">
                </td>
                <td>
                  <input type="radio" id="caste_certi_na" onchange="yesnoCheck23()" name="caste_certi" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->caste_certi == 'Yes')
                 <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_caste_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Caste Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->caste_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->caste_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_caste_certi" id="pdf_caste_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="caste_certi" name="caste_certi">
                @else
                <input type="file" style="display: none;" id="caste_certi" name="caste_certi">
                <a href="" id="view_caste_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->caste_certi == 'Yes')
                  <button type="submit" style="display: none;" id="caste_certi_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','caste_certi')}}"><button type="button" style="display: block;" id="caste_certi_reupload" class="btn btn-sm btn-info" onclick="caste_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="caste_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="caste_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->caste_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->caste_certi == 'Yes')
                  <a href="{{route('delete','caste_certi')}}"><button type="button" style="display: block;" id="caste_certi_delete" class="btn btn-sm btn-danger" onclick="caste_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','caste_certi')}}"><button type="button" style="display: none;" id="caste_certi_delete" class="btn btn-sm btn-danger" onclick="caste_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('caste_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('caste_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">

                function ync23() {
                    if (document.getElementById('caste_certi_na').checked) {
                        document.getElementById('caste_certi').style.display = 'none';
                        document.getElementById('caste_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck23() {
                    if (document.getElementById('caste_certi_yes').checked) {
                        document.getElementById('caste_certi').style.display = 'block';
                        document.getElementById('caste_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('caste_certi_no').checked) {
                        document.getElementById('caste_certi').style.display = 'none';
                        document.getElementById('caste_certi_upload').style.display = 'none';
                    }
                    if (document.getElementById('caste_certi_na').checked) {
                        document.getElementById('caste_certi').style.display = 'none';
                        document.getElementById('caste_certi_upload').style.display = 'none';
                    }
                }
                function caste_certiReupload()
                  {
                    document.getElementById('caste_certi_yes').disabled = true;
                    document.getElementById('caste_certi_no').disabled = true;
                    document.getElementById('caste_certi_na').disabled = true;
                    document.getElementById('pdf_caste_certi_view').style.display = 'none';
                    document.getElementById('caste_certi').style.display = 'block';
                    document.getElementById('caste_certi_upload').style.display = 'block';
                    document.getElementById('caste_certi_reupload').style.display = 'none';
                  }
                  function caste_certiDelete()
                    {

                      document.getElementById('caste_certi_yes').disabled = false;
                      document.getElementById('caste_certi_no').disabled = false;
                      document.getElementById('caste_certi_na').checked = true;
                      document.getElementById('caste_certi_na').disabled = false;
                      document.getElementById('pdf_caste_certi_view').style.display = 'none';
                      document.getElementById('caste_certi').style.display = 'none';
                      document.getElementById('caste_certi_reupload').style.display = 'none';
                      document.getElementById('caste_certi_delete').style.display = 'none';
                      document.getElementById('caste_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Cast Validity Certificate --}}
            <tr>
              <td>19</td>
              <td>Caste Validity Certificate</td>
              @if( $user1[0]->caste_validity_certi == 'Yes')
                <td>
                  <input type="radio" id="caste_validity_certi_yes" onchange="yesnoCheck24()" name="caste_validity_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="caste_validity_certi_no" onchange="yesnoCheck24()" name="caste_validity_certi" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="caste_validity_certi_na" onchange="yesnoCheck24()" name="caste_validity_certi" value="na" disabled>
                </td>
              @elseif($user1[0]->caste_validity_certi == 'No')
                <td>
                  <input type="radio" id="caste_validity_certi_yes" onchange="yesnoCheck24()" name="caste_validity_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="caste_validity_certi_no" onchange="yesnoCheck24()" name="caste_validity_certi" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="caste_validity_certi_na" onchange="yesnoCheck24()" name="caste_validity_certi" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="caste_validity_certi_yes" onchange="yesnoCheck24()" name="caste_validity_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="caste_validity_certi_no" onchange="yesnoCheck24()" name="caste_validity_certi" value="no">
                </td>
                <td>
                  <input type="radio" id="caste_validity_certi_na" onchange="yesnoCheck24()" name="caste_validity_certi" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->caste_validity_certi == 'Yes')
                 <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_caste_validity_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Caste Validity Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->caste_validity_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->caste_validity_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_caste_validity_certi" id="pdf_caste_validity_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="caste_validity_certi" name="caste_validity_certi">
                @else
                <input type="file" style="display: none;" id="caste_validity_certi" name="caste_validity_certi">
                <a href="" id="view_caste_validity_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->caste_validity_certi == 'Yes')
                  <button type="submit" style="display: none;" id="caste_validity_certi_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','caste_validity_certi')}}"><button type="button" style="display: block;" id="caste_validity_certi_reupload" class="btn btn-sm btn-info" onclick="caste_validity_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="caste_validity_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="caste_validity_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->caste_validity_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->caste_validity_certi == 'Yes')
                  <a href="{{route('delete','caste_validity_certi')}}"><button type="button" style="display: block;" id="caste_validity_certi_delete" class="btn btn-sm btn-danger" onclick="caste_validity_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','caste_validity_certi')}}"><button type="button" style="display: none;" id="caste_validity_certi_delete" class="btn btn-sm btn-danger" onclick="caste_validity_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('caste_validity_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('caste_validity_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync24() {
                    if (document.getElementById('caste_validity_certi_na').checked) {
                        document.getElementById('caste_validity_certi').style.display = 'none';
                        document.getElementById('caste_validity_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck24() {
                    if (document.getElementById('caste_validity_certi_yes').checked) {
                        document.getElementById('caste_validity_certi').style.display = 'block';
                        document.getElementById('caste_validity_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('caste_validity_certi_no').checked) {
                        document.getElementById('caste_validity_certi').style.display = 'none';
                        document.getElementById('caste_validity_certi_upload').style.display = 'none';
                    }
                    if (document.getElementById('caste_validity_certi_na').checked) {
                        document.getElementById('caste_validity_certi').style.display = 'none';
                        document.getElementById('caste_validity_certi_upload').style.display = 'none';
                    }
                }
                function caste_validity_certiReupload()
                  {
                    document.getElementById('caste_validity_certi_yes').disabled = true;
                    document.getElementById('caste_validity_certi_no').disabled = true;
                    document.getElementById('caste_validity_certi_na').disabled = true;
                    document.getElementById('pdf_caste_validity_certi_view').style.display = 'none';
                    document.getElementById('caste_validity_certi').style.display = 'block';
                    document.getElementById('caste_validity_certi_upload').style.display = 'block';
                    document.getElementById('caste_validity_certi_reupload').style.display = 'none';
                  }
                  function caste_validity_certiDelete()
                    {

                      document.getElementById('caste_validity_certi_yes').disabled = false;
                      document.getElementById('caste_validity_certi_no').disabled = false;
                      document.getElementById('caste_validity_certi_na').checked = true;
                      document.getElementById('caste_validity_certi_na').disabled = false;
                      document.getElementById('pdf_caste_validity_certi_view').style.display = 'none';
                      document.getElementById('caste_validity_certi').style.display = 'none';
                      document.getElementById('caste_validity_certi_reupload').style.display = 'none';
                      document.getElementById('caste_validity_certi_delete').style.display = 'none';
                      document.getElementById('caste_validity_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Non - Creamy Layer Certificate --}}
            <tr>
              <td>20</td>
              <td>Non-Creamy Layer Certificate</td>
              @if( $user1[0]->non_creamy_layer_certi == 'Yes')
                <td>
                  <input type="radio" id="non_creamy_layer_certi_yes" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="non_creamy_layer_certi_no" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="non_creamy_layer_certi_na" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="na" disabled>
                </td>
              @elseif($user1[0]->non_creamy_layer_certi == 'No')
                <td>
                  <input type="radio" id="non_creamy_layer_certi_yes" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="non_creamy_layer_certi_no" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="non_creamy_layer_certi_na" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="non_creamy_layer_certi_yes" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="non_creamy_layer_certi_no" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="no">
                </td>
                <td>
                  <input type="radio" id="non_creamy_layer_certi_na" onchange="yesnoCheck25()" name="non_creamy_layer_certi" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->non_creamy_layer_certi == 'Yes')
                 <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_non_creamy_layer_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Non-Creamy Layer Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->non_creamy_layer_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->non_creamy_layer_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_non_creamy_layer_certi" id="pdf_non_creamy_layer_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="non_creamy_layer_certi" name="non_creamy_layer_certi">
                @else
                <input type="file" style="display: none;" id="non_creamy_layer_certi" name="non_creamy_layer_certi">
                <a href="" id="view_non_creamy_layer_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->non_creamy_layer_certi == 'Yes')
                  <button type="submit" style="display: none;" id="non_creamy_layer_certi_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','non_creamy_layer_certi')}}"><button type="button" style="display: block;" id="non_creamy_layer_certi_reupload" class="btn btn-sm btn-info" onclick="non_creamy_layer_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="non_creamy_layer_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="non_creamy_layer_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->non_creamy_layer_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->non_creamy_layer_certi == 'Yes')
                  <a href="{{route('delete','non_creamy_layer_certi')}}"><button type="button" style="display: block;" id="non_creamy_layer_certi_delete" class="btn btn-sm btn-danger" onclick="non_creamy_layer_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','non_creamy_layer_certi')}}"><button type="button" style="display: none;" id="non_creamy_layer_certi_delete" class="btn btn-sm btn-danger" onclick="non_creamy_layer_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('non_creamy_layer_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('non_creamy_layer_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync25() {
                    if (document.getElementById('non_creamy_layer_certi_na').checked) {
                        document.getElementById('non_creamy_layer_certi').style.display = 'none';
                        document.getElementById('non_creamy_layer_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck25() {
                    if (document.getElementById('non_creamy_layer_certi_yes').checked) {
                        document.getElementById('non_creamy_layer_certi').style.display = 'block';
                        document.getElementById('non_creamy_layer_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('non_creamy_layer_certi_no').checked) {
                        document.getElementById('non_creamy_layer_certi').style.display = 'none';
                        document.getElementById('non_creamy_layer_certi_upload').style.display = 'none';
                    }
                    if (document.getElementById('non_creamy_layer_certi_na').checked) {
                        document.getElementById('non_creamy_layer_certi').style.display = 'none';
                        document.getElementById('non_creamy_layer_certi_upload').style.display = 'none';
                    }
                }
                function non_creamy_layer_certiReupload()
                  {
                    document.getElementById('non_creamy_layer_certi_yes').disabled = true;
                    document.getElementById('non_creamy_layer_certi_no').disabled = true;
                    document.getElementById('non_creamy_layer_certi_na').disabled = true;
                    document.getElementById('pdf_non_creamy_layer_certi_view').style.display = 'none';
                    document.getElementById('non_creamy_layer_certi').style.display = 'block';
                    document.getElementById('non_creamy_layer_certi_upload').style.display = 'block';
                    document.getElementById('non_creamy_layer_certi_reupload').style.display = 'none';
                  }
                  function non_creamy_layer_certiDelete()
                    {

                      document.getElementById('non_creamy_layer_certi_yes').disabled = false;
                      document.getElementById('non_creamy_layer_certi_no').disabled = false;
                      document.getElementById('non_creamy_layer_certi_na').checked = true;
                      document.getElementById('non_creamy_layer_certi_na').disabled = false;
                      document.getElementById('pdf_non_creamy_layer_certi_view').style.display = 'none';
                      document.getElementById('non_creamy_layer_certi').style.display = 'none';
                      document.getElementById('non_creamy_layer_certi_reupload').style.display = 'none';
                      document.getElementById('non_creamy_layer_certi_delete').style.display = 'none';
                      document.getElementById('non_creamy_layer_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            
           
            {{-- Proforma A B1 B2 --}}
            <tr>
              <td>22</td>
              <td>Proforma A B1 B2</td>
              @if( $user1[0]->proforma_a_b1_b2 == 'Yes')
                <td>
                  <input type="radio" id="proforma_a_b1_b2_yes" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_a_b1_b2_no" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_a_b1_b2_na" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="na" disabled>
                </td>
              @elseif($user1[0]->proforma_a_b1_b2 == 'No')
                <td>
                  <input type="radio" id="proforma_a_b1_b2_yes" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_a_b1_b2_no" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="proforma_a_b1_b2_na" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="proforma_a_b1_b2_yes" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_a_b1_b2_no" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="no">
                </td>
                <td>
                  <input type="radio" id="proforma_a_b1_b2_na" onchange="yesnoCheck27()" name="proforma_a_b1_b2" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->proforma_a_b1_b2 == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_proforma_a_b1_b2" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Proforma A B1 B2</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_a_b1_b2_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_a_b1_b2_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_proforma_a_b1_b2" id="pdf_proforma_a_b1_b2_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="proforma_a_b1_b2" name="proforma_a_b1_b2">
                @else
                <input type="file" style="display: none;" id="proforma_a_b1_b2" name="proforma_a_b1_b2">
                <a href="" id="view_proforma_a_b1_b2" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_a_b1_b2 == 'Yes')
                  <button type="submit" style="display: none;" id="proforma_a_b1_b2_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','proforma_a_b1_b2')}}"><button type="button" style="display: block;" id="proforma_a_b1_b2_reupload" class="btn btn-sm btn-info" onclick="proforma_a_b1_b2Reupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="proforma_a_b1_b2_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="proforma_a_b1_b2_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->proforma_a_b1_b2 == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_a_b1_b2 == 'Yes')
                  <a href="{{route('delete','proforma_a_b1_b2')}}"><button type="button" style="display: block;" id="proforma_a_b1_b2_delete" class="btn btn-sm btn-danger" onclick="proforma_a_b1_b2Delete()">Delete</button></a>
                @else
                  <a href="{{route('delete','proforma_a_b1_b2')}}"><button type="button" style="display: none;" id="proforma_a_b1_b2_delete" class="btn btn-sm btn-danger" onclick="proforma_a_b1_b2Delete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('proforma_a_b1_b2_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('proforma_a_b1_b2_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync27() {
                    if (document.getElementById('proforma_a_b1_b2_na').checked) {
                        document.getElementById('proforma_a_b1_b2').style.display = 'none';
                        document.getElementById('proforma_a_b1_b2_upload').style.display = 'none';
                    }
                }
                function yesnoCheck27() {
                    if (document.getElementById('proforma_a_b1_b2_yes').checked) {
                        document.getElementById('proforma_a_b1_b2').style.display = 'block';
                        document.getElementById('proforma_a_b1_b2_upload').style.display = 'block';
                    }
                    if (document.getElementById('proforma_a_b1_b2_no').checked) {
                        document.getElementById('proforma_a_b1_b2').style.display = 'none';
                        document.getElementById('proforma_a_b1_b2_upload').style.display = 'none';
                    }
                    if (document.getElementById('proforma_a_b1_b2_na').checked) {
                        document.getElementById('proforma_a_b1_b2').style.display = 'none';
                        document.getElementById('proforma_a_b1_b2_upload').style.display = 'none';
                    }
                }
                function proforma_a_b1_b2Reupload()
                  {
                    document.getElementById('proforma_a_b1_b2_yes').disabled = true;
                    document.getElementById('proforma_a_b1_b2_no').disabled = true;
                    document.getElementById('proforma_a_b1_b2_na').disabled = true;
                    document.getElementById('pdf_proforma_a_b1_b2_view').style.display = 'none';
                    document.getElementById('proforma_a_b1_b2').style.display = 'block';
                    document.getElementById('proforma_a_b1_b2_upload').style.display = 'block';
                    document.getElementById('proforma_a_b1_b2_reupload').style.display = 'none';
                  }
                  function proforma_a_b1_b2Delete()
                    {

                      document.getElementById('proforma_a_b1_b2_yes').disabled = false;
                      document.getElementById('proforma_a_b1_b2_no').disabled = false;
                      document.getElementById('proforma_a_b1_b2_na').checked = true;
                      document.getElementById('proforma_a_b1_b2_na').disabled = false;
                      document.getElementById('pdf_proforma_a_b1_b2_view').style.display = 'none';
                      document.getElementById('proforma_a_b1_b2').style.display = 'none';
                      document.getElementById('proforma_a_b1_b2_reupload').style.display = 'none';
                      document.getElementById('proforma_a_b1_b2_delete').style.display = 'none';
                      document.getElementById('proforma_a_b1_b2_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Proforma F F1 --}}
            <tr>
              <td>23</td>
              <td>Proforma F F1</td>
              @if( $user1[0]->proforma_f_f1 == 'Yes')
                <td>
                  <input type="radio" id="proforma_f_f1_yes" onchange="yesnoCheck28()" name="proforma_f_f1" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_f_f1_no" onchange="yesnoCheck28()" name="proforma_f_f1" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_f_f1_na" onchange="yesnoCheck28()" name="proforma_f_f1" value="na" disabled>
                </td>
              @elseif($user1[0]->proforma_f_f1 == 'No')
                <td>
                  <input type="radio" id="proforma_f_f1_yes" onchange="yesnoCheck28()" name="proforma_f_f1" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_f_f1_no" onchange="yesnoCheck28()" name="proforma_f_f1" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="proforma_f_f1_na" onchange="yesnoCheck28()" name="proforma_f_f1" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="proforma_f_f1_yes" onchange="yesnoCheck28()" name="proforma_f_f1" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_f_f1_no" onchange="yesnoCheck28()" name="proforma_f_f1" value="no">
                </td>
                <td>
                  <input type="radio" id="proforma_f_f1_na" onchange="yesnoCheck28()" name="proforma_f_f1" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->proforma_f_f1 == 'Yes')
                 <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_proforma_f_f1" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Proforma F F1</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_f_f1_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_f_f1_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_proforma_f_f1" id="pdf_proforma_f_f1_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="proforma_f_f1" name="proforma_f_f1">
                @else
                <input type="file" style="display: none;" id="proforma_f_f1" name="proforma_f_f1">
                <a href="" id="view_proforma_f_f1" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_f_f1 == 'Yes')
                  <button type="submit" style="display: none;" id="proforma_f_f1_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','proforma_f_f1')}}"><button type="button" style="display: block;" id="proforma_f_f1_reupload" class="btn btn-sm btn-info" onclick="proforma_f_f1Reupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="proforma_f_f1_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="proforma_f_f1_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->proforma_f_f1 == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_f_f1 == 'Yes')
                  <a href="{{route('delete','proforma_f_f1')}}"><button type="button" style="display: block;" id="proforma_f_f1_delete" class="btn btn-sm btn-danger" onclick="proforma_f_f1Delete()">Delete</button></a>
                @else
                  <a href="{{route('delete','proforma_f_f1')}}"><button type="button" style="display: none;" id="proforma_f_f1_delete" class="btn btn-sm btn-danger" onclick="proforma_f_f1Delete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('proforma_f_f1_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('proforma_f_f1_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync28() {
                    if (document.getElementById('proforma_f_f1_na').checked) {
                        document.getElementById('proforma_f_f1').style.display = 'none';
                        document.getElementById('proforma_f_f1_upload').style.display = 'none';
                    }
                }
                function yesnoCheck28() {
                    if (document.getElementById('proforma_f_f1_yes').checked) {
                        document.getElementById('proforma_f_f1').style.display = 'block';
                        document.getElementById('proforma_f_f1_upload').style.display = 'block';
                    }
                    if (document.getElementById('proforma_f_f1_no').checked) {
                        document.getElementById('proforma_f_f1').style.display = 'none';
                        document.getElementById('proforma_f_f1_upload').style.display = 'none';
                    }
                    if (document.getElementById('proforma_f_f1_na').checked) {
                        document.getElementById('proforma_f_f1').style.display = 'none';
                        document.getElementById('proforma_f_f1_upload').style.display = 'none';
                    }
                }
                function proforma_f_f1Reupload()
                  {
                    document.getElementById('proforma_f_f1_yes').disabled = true;
                    document.getElementById('proforma_f_f1_no').disabled = true;
                    document.getElementById('proforma_f_f1_na').disabled = true;
                    document.getElementById('pdf_proforma_f_f1_view').style.display = 'none';
                    document.getElementById('proforma_f_f1').style.display = 'block';
                    document.getElementById('proforma_f_f1_upload').style.display = 'block';
                    document.getElementById('proforma_f_f1_reupload').style.display = 'none';
                  }
                  function proforma_f_f1Delete()
                    {

                      document.getElementById('proforma_f_f1_yes').disabled = false;
                      document.getElementById('proforma_f_f1_no').disabled = false;
                      document.getElementById('proforma_f_f1_na').checked = true;
                      document.getElementById('proforma_f_f1_na').disabled = false;
                      document.getElementById('pdf_proforma_f_f1_view').style.display = 'none';
                      document.getElementById('proforma_f_f1').style.display = 'none';
                      document.getElementById('proforma_f_f1_reupload').style.display = 'none';
                      document.getElementById('proforma_f_f1_delete').style.display = 'none';
                      document.getElementById('proforma_f_f1_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Income Certificate --}}
            <tr>
              <td>24</td>
              <td>Income Certificate</td>
              @if( $user1[0]->income_certi == 'Yes')
                <td>
                  <input type="radio" id="income_certi_yes" onchange="yesnoCheck29()" name="income_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="income_certi_no" onchange="yesnoCheck29()" name="income_certi" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="income_certi_na" onchange="yesnoCheck29()" name="income_certi" value="na" disabled>
                </td>
              @elseif($user1[0]->income_certi == 'No')
                <td>
                  <input type="radio" id="income_certi_yes" onchange="yesnoCheck29()" name="income_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="income_certi_no" onchange="yesnoCheck29()" name="income_certi" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="income_certi_na" onchange="yesnoCheck29()" name="income_certi" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="income_certi_yes" onchange="yesnoCheck29()" name="income_certi" value="yes">
                </td>
                <td>
                  <input type="radio" id="income_certi_no" onchange="yesnoCheck29()" name="income_certi" value="no">
                </td>
                <td>
                  <input type="radio" id="income_certi_na" onchange="yesnoCheck29()" name="income_certi" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->income_certi == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_income_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Income Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->income_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->income_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_income_certi" id="pdf_income_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="income_certi" name="income_certi">
                @else
                <input type="file" style="display: none;" id="income_certi" name="income_certi">
                <a href="" id="view_income_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->income_certi == 'Yes')
                  <button type="submit" style="display: none;" id="income_certi_upload" class="btn btn-sm btn-success">Upload</button>
                   <a href="{{route('delete','income_certi')}}"><button type="button" style="display: block;" id="income_certi_reupload" class="btn btn-sm btn-info" onclick="income_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="income_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="income_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->income_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->income_certi == 'Yes')
                  <a href="{{route('delete','income_certi')}}"><button type="button" style="display: block;" id="income_certi_delete" class="btn btn-sm btn-danger" onclick="income_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','income_certi')}}"><button type="button" style="display: none;" id="income_certi_delete" class="btn btn-sm btn-danger" onclick="income_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('income_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('income_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync29() {
                    if (document.getElementById('income_certi_na').checked) {
                        document.getElementById('income_certi').style.display = 'none';
                        document.getElementById('income_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck29() {
                    if (document.getElementById('income_certi_yes').checked) {
                        document.getElementById('income_certi').style.display = 'block';
                        document.getElementById('income_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('income_certi_no').checked) {
                        document.getElementById('income_certi').style.display = 'none';
                        document.getElementById('income_certi_upload').style.display = 'none';
                    }
                    if (document.getElementById('income_certi_na').checked) {
                        document.getElementById('income_certi').style.display = 'none';
                        document.getElementById('income_certi_upload').style.display = 'none';
                    }
                }
                function income_certiReupload()
                  {
                    document.getElementById('income_certi_yes').disabled = true;
                    document.getElementById('income_certi_no').disabled = true;
                    document.getElementById('income_certi_na').disabled = true;
                    document.getElementById('pdf_income_certi_view').style.display = 'none';
                    document.getElementById('income_certi').style.display = 'block';
                    document.getElementById('income_certi_upload').style.display = 'block';
                    document.getElementById('income_certi_reupload').style.display = 'none';
                  }
                  function income_certiDelete()
                    {

                      document.getElementById('income_certi_yes').disabled = false;
                      document.getElementById('income_certi_no').disabled = false;
                      document.getElementById('income_certi_na').checked = true;
                      document.getElementById('income_certi_na').disabled = false;
                      document.getElementById('pdf_income_certi_view').style.display = 'none';
                      document.getElementById('income_certi').style.display = 'none';
                      document.getElementById('income_certi_reupload').style.display = 'none';
                      document.getElementById('income_certi_delete').style.display = 'none';
                      document.getElementById('income_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Proforma C D E --}}
            <tr>
              <td>25</td>
              <td>Proforma C D E</td>
              @if( $user1[0]->proforma_c_d_e == 'Yes')
                <td>
                  <input type="radio" id="proforma_c_d_e_yes" onchange="yesnoCheck30()" name="proforma_c_d_e" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_c_d_e_no" onchange="yesnoCheck30()" name="proforma_c_d_e" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_c_d_e_na" onchange="yesnoCheck30()" name="proforma_c_d_e" value="na" disabled>
                </td>
              @elseif($user1[0]->proforma_c_d_e == 'No')
                <td>
                  <input type="radio" id="proforma_c_d_e_yes" onchange="yesnoCheck30()" name="proforma_c_d_e" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_c_d_e_no" onchange="yesnoCheck30()" name="proforma_c_d_e" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="proforma_c_d_e_na" onchange="yesnoCheck30()" name="proforma_c_d_e" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="proforma_c_d_e_yes" onchange="yesnoCheck30()" name="proforma_c_d_e" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_c_d_e_no" onchange="yesnoCheck30()" name="proforma_c_d_e" value="no">
                </td>
                <td>
                  <input type="radio" id="proforma_c_d_e_na" onchange="yesnoCheck30()" name="proforma_c_d_e" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->proforma_c_d_e == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_proforma_c_d_e" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Proforma C D E</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_c_d_e_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_c_d_e_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_proforma_c_d_e" id="pdf_proforma_c_d_e_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="proforma_c_d_e" name="proforma_c_d_e">
                @else
                <input type="file" style="display: none;" id="proforma_c_d_e" name="proforma_c_d_e">
                <a href="" id="view_proforma_c_d_e" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_c_d_e == 'Yes')
                  <button type="submit" style="display: none;" id="proforma_c_d_e_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','proforma_c_d_e')}}"><button type="button" style="display: block;" id="proforma_c_d_e_reupload" class="btn btn-sm btn-info" onclick="proforma_c_d_eReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="proforma_c_d_e_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="proforma_c_d_e_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->proforma_c_d_e == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_c_d_e == 'Yes')
                  <a href="{{route('delete','proforma_c_d_e')}}"><button type="button" style="display: block;" id="proforma_c_d_e_delete" class="btn btn-sm btn-danger" onclick="proforma_c_d_eDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','proforma_c_d_e')}}"><button type="button" style="display: none;" id="proforma_c_d_e_delete" class="btn btn-sm btn-danger" onclick="proforma_c_d_eDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('proforma_c_d_e_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('proforma_c_d_e_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync30() {
                    if (document.getElementById('proforma_c_d_e_na').checked) {
                        document.getElementById('proforma_c_d_e').style.display = 'none';
                        document.getElementById('proforma_c_d_e_upload').style.display = 'none';
                    }
                }
                function yesnoCheck30() {
                    if (document.getElementById('proforma_c_d_e_yes').checked) {
                        document.getElementById('proforma_c_d_e').style.display = 'block';
                        document.getElementById('proforma_c_d_e_upload').style.display = 'block';
                    }
                    if (document.getElementById('proforma_c_d_e_no').checked) {
                        document.getElementById('proforma_c_d_e').style.display = 'none';
                        document.getElementById('proforma_c_d_e_upload').style.display = 'none';
                    }
                    if (document.getElementById('proforma_c_d_e_na').checked) {
                        document.getElementById('proforma_c_d_e').style.display = 'none';
                        document.getElementById('proforma_c_d_e_upload').style.display = 'none';
                    }
                }
                function proforma_c_d_eReupload()
                  {
                    document.getElementById('proforma_c_d_e_yes').disabled = true;
                    document.getElementById('proforma_c_d_e_no').disabled = true;
                    document.getElementById('proforma_c_d_e_na').disabled = true;
                    document.getElementById('pdf_proforma_c_d_e_view').style.display = 'none';
                    document.getElementById('proforma_c_d_e').style.display = 'block';
                    document.getElementById('proforma_c_d_e_upload').style.display = 'block';
                    document.getElementById('proforma_c_d_e_reupload').style.display = 'none';
                  }
                  function proforma_c_d_eDelete()
                    {

                      document.getElementById('proforma_c_d_e_yes').disabled = false;
                      document.getElementById('proforma_c_d_e_no').disabled = false;
                      document.getElementById('proforma_c_d_e_na').checked = true;
                      document.getElementById('proforma_c_d_e_na').disabled = false;
                      document.getElementById('pdf_proforma_c_d_e_view').style.display = 'none';
                      document.getElementById('proforma_c_d_e').style.display = 'none';
                      document.getElementById('proforma_c_d_e_reupload').style.display = 'none';
                      document.getElementById('proforma_c_d_e_delete').style.display = 'none';
                      document.getElementById('proforma_c_d_e_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Proforma J K L --}}
            <tr>
              <td>26</td>
              <td>Proforma J K L</td>
              @if( $user1[0]->proforma_j_k_l == 'Yes')
                <td>
                  <input type="radio" id="proforma_j_k_l_yes" onchange="yesnoCheck31()" name="proforma_j_k_l" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_j_k_l_no" onchange="yesnoCheck31()" name="proforma_j_k_l" value="no" disabled>
                </td>
                <td>
                  <input type="radio" id="proforma_j_k_l_na" onchange="yesnoCheck31()" name="proforma_j_k_l" value="na" disabled>
                </td>
              @elseif($user1[0]->proforma_j_k_l == 'No')
                <td>
                  <input type="radio" id="proforma_j_k_l_yes" onchange="yesnoCheck31()" name="proforma_j_k_l" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_j_k_l_no" onchange="yesnoCheck31()" name="proforma_j_k_l" value="no" checked>
                </td>
                <td>
                  <input type="radio" id="proforma_j_k_l_na" onchange="yesnoCheck31()" name="proforma_j_k_l" value="na" >
                </td>
              @else
                <td>
                  <input type="radio" id="proforma_j_k_l_yes" onchange="yesnoCheck31()" name="proforma_j_k_l" value="yes">
                </td>
                <td>
                  <input type="radio" id="proforma_j_k_l_no" onchange="yesnoCheck31()" name="proforma_j_k_l" value="no">
                </td>
                <td>
                  <input type="radio" id="proforma_j_k_l_na" onchange="yesnoCheck31()" name="proforma_j_k_l" value="na" checked>
                </td>
              @endif
              <td>
                @if( $user1[0]->proforma_j_k_l == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_proforma_j_k_l" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Proforma J K L</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_j_k_l_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->proforma_j_k_l_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_proforma_j_k_l" id="pdf_proforma_j_k_l_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="proforma_j_k_l" name="proforma_j_k_l">
                @else
                <input type="file" style="display: none;" id="proforma_j_k_l" name="proforma_j_k_l">
                <a href="" id="view_proforma_j_k_l" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_j_k_l == 'Yes')
                  <button type="submit" style="display: none;" id="proforma_j_k_l_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','proforma_j_k_l')}}"><button type="button" style="display: block;" id="proforma_j_k_l_reupload" class="btn btn-sm btn-info" onclick="proforma_j_k_lReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: none;" id="proforma_j_k_l_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="proforma_j_k_l_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->proforma_j_k_l == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->proforma_j_k_l == 'Yes')
                  <a href="{{route('delete','proforma_j_k_l')}}"><button type="button" style="display: block;" id="proforma_j_k_l_delete" class="btn btn-sm btn-danger" onclick="proforma_j_k_lDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','proforma_j_k_l')}}"><button type="button" style="display: none;" id="proforma_j_k_l_delete" class="btn btn-sm btn-danger" onclick="proforma_j_k_lDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('proforma_j_k_l_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('proforma_j_k_l_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync31() {
                    if (document.getElementById('proforma_j_k_l_na').checked) {
                        document.getElementById('proforma_j_k_l').style.display = 'none';
                        document.getElementById('proforma_j_k_l_upload').style.display = 'none';
                    }
                }
                function yesnoCheck31() {
                    if (document.getElementById('proforma_j_k_l_yes').checked) {
                        document.getElementById('proforma_j_k_l').style.display = 'block';
                        document.getElementById('proforma_j_k_l_upload').style.display = 'block';
                    }
                    if (document.getElementById('proforma_j_k_l_no').checked) {
                        document.getElementById('proforma_j_k_l').style.display = 'none';
                        document.getElementById('proforma_j_k_l_upload').style.display = 'none';
                    }
                    if (document.getElementById('proforma_j_k_l_na').checked) {
                        document.getElementById('proforma_j_k_l').style.display = 'none';
                        document.getElementById('proforma_j_k_l_upload').style.display = 'none';
                    }
                }
                function proforma_j_k_lReupload()
                  {
                    document.getElementById('proforma_j_k_l_yes').disabled = true;
                    document.getElementById('proforma_j_k_l_no').disabled = true;
                    document.getElementById('proforma_j_k_l_na').disabled = true;
                    document.getElementById('pdf_proforma_j_k_l_view').style.display = 'none';
                    document.getElementById('proforma_j_k_l').style.display = 'block';
                    document.getElementById('proforma_j_k_l_upload').style.display = 'block';
                    document.getElementById('proforma_j_k_l_reupload').style.display = 'none';
                  }
                  function proforma_j_k_lDelete()
                    {

                      document.getElementById('proforma_j_k_l_yes').disabled = false;
                      document.getElementById('proforma_j_k_l_no').disabled = false;
                      document.getElementById('proforma_j_k_l_na').checked = true;
                      document.getElementById('proforma_j_k_l_na').disabled = false;
                      document.getElementById('pdf_proforma_j_k_l_view').style.display = 'none';
                      document.getElementById('proforma_j_k_l').style.display = 'none';
                      document.getElementById('proforma_j_k_l_reupload').style.display = 'none';
                      document.getElementById('proforma_j_k_l_delete').style.display = 'none';
                      document.getElementById('proforma_j_k_l_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Physical Fitness Certificate --}}
            <tr>
              <td>27</td>
              <td>Physical Fitness Certificate<font> *</font></td>
              @if( $user1[0]->medical_certi == 'Yes')
                <td>
                  <input type="radio" id="medical_certi_yes" onchange="yesnoCheck32()" name="medical_certi" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="medical_certi_no" onchange="yesnoCheck32()" name="medical_certi" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="medical_certi_yes" onchange="yesnoCheck32()" name="medical_certi" value="yes" >
                </td>
                <td>
                  <input type="radio" id="medical_certi_no" onchange="yesnoCheck32()" name="medical_certi" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->medical_certi == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_medical_certi" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Physical Fitness Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->medical_certi_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->medical_certi_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_medical_certi" id="pdf_medical_certi_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="medical_certi" name="medical_certi">
                @else
                <input type="file" style="display: block;" id="medical_certi" name="medical_certi">
                <a href="" id="view_medical_certi" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->medical_certi == 'Yes')
                  <button type="submit" style="display: none;" id="medical_certi_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','medical_certi')}}"><button type="button" style="display: block;" id="medical_certi_reupload" class="btn btn-sm btn-info" onclick="medical_certiReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="medical_certi_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="medical_certi_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->medical_certi == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->medical_certi == 'Yes')
                  <a href="{{route('delete','medical_certi')}}"><button type="button" style="display: block;" id="medical_certi_delete" class="btn btn-sm btn-danger" onclick="medical_certiDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','medical_certi')}}"><button type="button" style="display: none;" id="medical_certi_delete" class="btn btn-sm btn-danger" onclick="medical_certiDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('medical_certi_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('medical_certi_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync32() {
                    if (document.getElementById('medical_certi_no').checked) {
                        document.getElementById('medical_certi').style.display = 'none';
                        document.getElementById('medical_certi_upload').style.display = 'none';
                    }
                }
                function yesnoCheck32() {
                    if (document.getElementById('medical_certi_yes').checked) {
                        document.getElementById('medical_certi').style.display = 'block';
                        document.getElementById('medical_certi_upload').style.display = 'block';
                    }
                    if (document.getElementById('medical_certi_no').checked) {
                        document.getElementById('medical_certi').style.display = 'none';
                        document.getElementById('medical_certi_upload').style.display = 'none';
                    }
                }
                function medical_certiReupload()
                  {
                    document.getElementById('medical_certi_yes').disabled = true;
                    document.getElementById('medical_certi_no').disabled = true;
                    document.getElementById('pdf_medical_certi_view').style.display = 'none';
                    document.getElementById('medical_certi').style.display = 'block';
                    document.getElementById('medical_certi_upload').style.display = 'block';
                    document.getElementById('medical_certi_reupload').style.display = 'none';
                  }
                  function medical_certiDelete()
                    {

                      document.getElementById('medical_certi_yes').disabled = false;
                      document.getElementById('medical_certi_no').checked = true;
                      document.getElementById('medical_certi_no').disabled = false;
                      document.getElementById('pdf_medical_certi_view').style.display = 'none';
                      document.getElementById('medical_certi').style.display = 'none';
                      document.getElementById('medical_certi_reupload').style.display = 'none';
                      document.getElementById('medical_certi_delete').style.display = 'none';
                      document.getElementById('medical_certi_upload').style.display = 'none';
                    }
              </script>
            </tr>
            {{-- Anti Ragging Certificate --}}
            <tr>
              <td>28</td>
              <td>Anti Ragging Certificate<font> *</font></td>
              @if( $user1[0]->anti_ragging_affidavit == 'Yes')
                <td>
                  <input type="radio" id="anti_ragging_affidavit_yes" onchange="yesnoCheck33()" name="anti_ragging_affidavit" value="yes" checked disabled>
                </td>
                <td>
                  <input type="radio" id="anti_ragging_affidavit_no" onchange="yesnoCheck33()" name="anti_ragging_affidavit" value="no" disabled>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @else
                <td>
                  <input type="radio" id="anti_ragging_affidavit_yes" onchange="yesnoCheck33()" name="anti_ragging_affidavit" value="yes" >
                </td>
                <td>
                  <input type="radio" id="anti_ragging_affidavit_no" onchange="yesnoCheck33()" name="anti_ragging_affidavit" value="no" checked>
                </td>
                <td>
                  <font style="font-size: 15px">Mandatory</font>
                </td>
              @endif
              <td>
                @if( $user1[0]->anti_ragging_affidavit == 'Yes')
                <!---------------------------View PDF Modal------------------------------->
                        <div class="modal fade" id="show_anti_ragging_affidavit" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" style="background-color : #204a84; color:white">
                              <h4 class="modal-title">Anti Ragging Certificate</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                              <object data="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->anti_ragging_affidavit_path) }}" type="application/pdf" width="95%" height="700">
                            <embed src="{{ asset('/public/uploads/'.$user1[0]->dte_id.'_'.$hash.'/'.$user1[0]->anti_ragging_affidavit_path) }}" width="1200px" height="770px" />
                            </embed>
                            </object>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                      <!-------------------------------Close------------------------------------>

                      <button type="button" data-toggle="modal" data-target="#show_anti_ragging_affidavit" id="pdf_anti_ragging_affidavit_view" class="btn btn-view" style="width: 100%;">View</button>
                <input type="file" style="display: none;" id="anti_ragging_affidavit" name="anti_ragging_affidavit">
                @else
                <input type="file" style="display: block;" id="anti_ragging_affidavit" name="anti_ragging_affidavit">
                <a href="" id="view_anti_ragging_affidavit" style="display: none;">View Document</a>
                @endif
              </td>
              <td>
                @if( $user1[0]->anti_ragging_affidavit == 'Yes')
                  <button type="submit" style="display: none;" id="anti_ragging_affidavit_upload" class="btn btn-sm btn-success">Upload</button>
                  <a href="{{route('delete','anti_ragging_affidavit')}}"><button type="button" style="display: block;" id="anti_ragging_affidavit_reupload" class="btn btn-sm btn-info" onclick="anti_ragging_affidavitReupload()">Reupload</button></a>
                @else
                  <button type="submit" style="display: block;" id="anti_ragging_affidavit_upload" class="btn btn-sm btn-success" >Upload</button>
                  <button type="button" style="display: none;" id="anti_ragging_affidavit_reupload" class="btn btn-sm btn-info">Reupload</button>
                @endif
              </td>
              <td>
                {{-- status check by this variable for js --}}
                @if( $user1[0]->anti_ragging_affidavit == 'Yes')
                  <p>Uploaded</p>
                @else
                  <p>Not Uploaded</p>
                @endif
              </td>
              <td>
                @if( $user1[0]->anti_ragging_affidavit == 'Yes')
                  <a href="{{route('delete','anti_ragging_affidavit')}}"><button type="button" style="display: block;" id="anti_ragging_affidavit_delete" class="btn btn-sm btn-danger" onclick="anti_ragging_affidavitDelete()">Delete</button></a>
                @else
                  <a href="{{route('delete','anti_ragging_affidavit')}}"><button type="button" style="display: none;" id="anti_ragging_affidavit_delete" class="btn btn-sm btn-danger" onclick="anti_ragging_affidavitDelete()">Delete</button></a>
                @endif
              </td>
              <td>
                @if(session('anti_ragging_affidavit_error'))
                <center>
                  <p style="color: #ff0000;"> {{session('anti_ragging_affidavit_error')}}!</p>
                </center>
                @endif    
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
              </td>
              <script type="text/javascript">
                function ync33() {
                    if (document.getElementById('anti_ragging_affidavit_no').checked) {
                        document.getElementById('anti_ragging_affidavit').style.display = 'none';
                        document.getElementById('anti_ragging_affidavit_upload').style.display = 'none';
                    }
                }
                function yesnoCheck33() {
                    //alert('hello');
                    if (document.getElementById('anti_ragging_affidavit_yes').checked) {
                        document.getElementById('anti_ragging_affidavit').style.display = 'block';
                        document.getElementById('anti_ragging_affidavit_upload').style.display = 'block';
                    }
                    if (document.getElementById('anti_ragging_affidavit_no').checked) {
                        document.getElementById('anti_ragging_affidavit').style.display = 'none';
                        document.getElementById('anti_ragging_affidavit_upload').style.display = 'none';
                    }
                }
                function anti_ragging_affidavitReupload()
                  {
                    document.getElementById('anti_ragging_affidavit_yes').disabled = true;
                    document.getElementById('anti_ragging_affidavit_no').disabled = true;
                    document.getElementById('pdf_anti_ragging_affidavit_view').style.display = 'none';
                    document.getElementById('anti_ragging_affidavit').style.display = 'block';
                    document.getElementById('anti_ragging_affidavit_upload').style.display = 'block';
                    document.getElementById('anti_ragging_affidavit_reupload').style.display = 'none';
                  }
                  function anti_ragging_affidavitDelete()
                    {

                      document.getElementById('anti_ragging_affidavit_yes').disabled = false;
                      document.getElementById('anti_ragging_affidavit_no').checked = true;
                      document.getElementById('anti_ragging_affidavit_no').disabled = false;
                      document.getElementById('pdf_anti_ragging_affidavit_view').style.display = 'none';
                      document.getElementById('anti_ragging_affidavit').style.display = 'none';
                      document.getElementById('anti_ragging_affidavit_reupload').style.display = 'none';
                      document.getElementById('anti_ragging_affidavit_delete').style.display = 'none';
                      document.getElementById('anti_ragging_affidavit_upload').style.display = 'none';
                    }
              </script>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="form-group  btnpadding col-md-6 col-md-6">
        <a href="{{ route('me_contact_details') }} ">
        <button type="button" class="btn btn-view btn-primary pull-left" id="back" name="back" style="width: 100%" >Back</button>
        </a>
      </div>
      <div class="form-group btnpadding col-md-6  col-md-6">
        @if(Session('log_dte')!="yes")
            <a href="{{ route('me_final_submit') }} ">
        @else
            <a href="{{ route('me_admission_payment') }} ">
        @endif
        <button type="button" class="btn btn-view btn-primary pull-left" id="submit" name="submit" style="width: 100%" >Save and Continue</button>
        </a>
      </div>
    </form>
  </div>
</div>
</body>
<br><br><br>
<style type="text/css">
  @media (max-width: 575px){
body{
      width: fit-content;
    }
  }
  @media (max-width: 900px) {
.container {
    max-width: max-content !important;
}
body{
      min-width: fit-content !important;

}
.container-fluid{
    width: max-content !important;
}
}

</style>
@endsection