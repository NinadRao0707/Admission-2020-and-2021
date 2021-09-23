
  <div style=" margin-left: auto;  margin-right: auto;"><img src="{{ asset('public/images/logo.png') }}" /></div> 
<div style="color:black !important;">
  <b>Dear {{$name}},
    <br>Dte ID: {{$dte_id}},
    <br>Ref: Form Filling details<br></b>
  <br>
  <div style="text-align: center;"><span style="font-size: large;">Welcome to Vivekanand Education Society's Institute of Technology</span></div>

<b> You need to verify the below-listed contents and submit the form again :-</b>
      <label id = "demo"><br>
    <?php 
$string =$content; 
$docname=explode("\r\n",$string);
for ($x = 0; $x <count($docname); $x++) {
    
  echo "$docname[$x] <br>";
}
?> 
    </label>
  <br><br>
  <br>You can access the following link to do the changes as listed above.
  <br>http://vesitadmissions.ves.ac.in/ &gt;&gt; Login/Register &gt;&gt; Dte/Acap &gt;&gt;.
  <br><br><br>
  Warm Regards,
  <br><br>VESIT ADMISSIONS TEAM
  <br><br>


  <div style="text-align: center;">
    <br>
  </div>Address:
  <br>Vivekanand Education Society's Institute of Technology
  <br>
  Hashu Advani Memorial Complex,
  <br>Collector’s Colony,
  <br>Chembur,
  <br>Mumbai – 400 074.
  <br>India.
  <br>Contact Person: 
  <br>Tel No.:+91-22-61532510
  <br><br>
 
</div>
