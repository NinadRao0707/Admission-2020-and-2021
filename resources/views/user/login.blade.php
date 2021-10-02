@extends('layout.newapp7')
@section('content')
<style type="text/css">
   
   .btn-primary
{
 background-color:#204a84
}  


.inner-box {
  width: 100%;
  max-width: 450px;
  margin: 80px auto;
}
input {
  height: 50px;
  width: 100%;
  float: left;
  margin: 10px 0;
  padding:0 15px;
}
.has-tip {
  display: block;
  width: 100%;
  float: left;
  margin-bottom: -7px;
  background: url(https://image.freepik.com/free-icon/information-circle_318-27255.jpg)
    no-repeat right center / contain;
  cursor: pointer;
  position: relative;
}
.has-tip:hover:before {
  content: attr(data-tip);
  display: flex;
  justify-content: center;
  width: 400px;
  background: #ddf;
  border: 1px solid #ebebeb;
  padding: 20px;
  bottom: 20px;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  border-radius: 10px;
  box-shadow: 0 5px 10px #000;
}
.has-tip:hover:after {
  content: "";
  position: absolute;
  left: calc(390px);
  background: #ddf;
  width: 20px;
  height: 20px;
  transform: rotate(0deg);
  border-right: 1px solid #ebebeb;
  border-bottom: 1px solid #ebebeb;
  border-radius:50%;
  bottom: 10px;
  box-shadow: 5px 5px 7px #000;
}


</style>
<div class="container">
 <br><br>
   <div class="col-md-6 midcol6">
      <h1>Login</h1>
      <form method="post" action="{{ route('login') }}">
         {{csrf_field()}}
   @if(session('error'))
   <center><p> {{session('error')}}</p></center>
   @endif    
 
           <!--<label for="dteId">Application ID</label>-->
           <label for="text" class="has-tip" data-tip="As on 'eScutiny Acknoledgement Recipt' Example: MEG:ME21XXXXXX MCA:MC21XXXXXX BE:EN21XXXXXX DSE:DSE21XXXXXX">Application ID</label>
         <input type="text" class="form-control dteId" id="dteId" name="dteId" onkeydown="upperCaseF(this)" placeholder="Application ID"  />
         <!--<span>As on E-scrutiny Acknoledgement recipt MEG:ME20XXXXXX MCA:MC20XXXXXX BE:EN20XXXXXX DSE:DSE20XXXXXX </span>-->
                   
                     <script type="text/javascript">
                        function upperCaseF(a){
                        setTimeout(function(){
                            a.value = a.value.toUpperCase();
                        }, 1);
                    }
                    </script>
                    
      
      
         <label for="password">Password</label>
         <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      
      
         <a href="{{ route('forgotPassword') }}">
            <h5 style="color: #5a5d60 !important;">Forgot Password?</h5>
         </a>
      <div class="form-group ">
         <button type="submit" class="btn btn-primary btn-view" id="login" name="login" style="width: 100%">Login</button>
      </div>
      <div class="form-group ">
         <a href="{{ route('register') }}">
            <button type="button" class="btn btn-primary btn-view" id="register" name="register" style="width: 100%" >Register</button>
         </a>
      </div>
      
   
      </form>
      <br><br><br>
   </div>
</div>
@endsection