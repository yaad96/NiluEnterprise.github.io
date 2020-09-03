

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Extreme Packaging BANGLADESH</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!--===============================================================================================-->
</head>
<body >

  <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<span class="login100-form-title p-b-49">
					Bangaldesh Packaging LTD.
				</span>

				<div class="container-login100-form-btn m-b-23">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							CALCULATION PAGE
						</button>
					</div>
				</div>

				<div class="login100-form validate-form" >



            <form>
              <div class="wrap-input100 validate-input m-b-23">
    						<span class="label-input100">YOUR SIZE IN : </span>
            <div class="form-group">

    <select class="form-control-lg" id="coeff" onblur="coeffSet()">
      <option value="0" selected="selected">inch</option>
      <option value="1">mm</option>
      <option value="2">cm</option>

    </select>
  </div>
</div>
</form>

          <div id="measureStd">
            <p style="text-align:center">YOU ARE MEASURING IN INCH</p>

        </div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Length is required">
						<span class="label-input100">Length</span>
						<input class="input100" type="number"  id="len" placeholder="input length" onblur="dimCheck()">
						<span class="focus-input100" data-symbol="&#x269D;"></span>
					</div>


          <div class="wrap-input100 validate-input m-b-23" data-validate = "Width is required">
						<span class="label-input100">Width</span>
						<input class="input100" type="number"  id="wi" placeholder="input width" onblur="dimCheck()">
						<span class="focus-input100" data-symbol="&#x269D;"></span>
					</div>

          <div class="wrap-input100 validate-input m-b-23" data-validate = "Height is required">
						<span class="label-input100">Height</span>
						<input class="input100" type="number" id="hi" placeholder="input height" onblur="dimCheck()">
						<span class="focus-input100" data-symbol="&#x269D;"></span>
					</div>

          <div class="dimcheck" id="dimcheck" style="display:none">

        </div>

<div class="container-login100-form-btn" id="calc" style="margin-top:50px; display:none">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="sizeGiven()">
								NEXT
							</button>
						</div>
					</div>

					<p style="text-align:center">Click here for new h, l or w!</p>
          <div id="first2" style="margin:50px;">
          </div>

          <div id="linMid" style="margin:50px; display:none">
          <form>
            <div class="wrap-input100 validate-input m-b-23">
              <span class="label-input100">LINER PLY:</span>
          <div class="form-group">

  <select class="form-control-lg" id="linply">
    <option value="0" selected="selected">3 PLY 300 GSM</option>
    <option value="1">5 PLY 300 GSM</option>
    <option value="2">7 PLY 300 GSM</option>

  </select>
</div>
</div>

<div class="wrap-input100 validate-input m-b-23">
  <span class="label-input100">MEDIA PLY:</span>
<div class="form-group">

<select class="form-control-lg" id="midply">
<option value="0" selected="selected">3 PLY 282 GSM</option>
<option value="1">5 PLY 500 GSM</option>
<option value="2">7 PLY 740 GSM</option>

</select>
</div>
</div>
</form>
<div class="row">
<div class="col-12 my-3">
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="side1" value="option1" checked>
  <label class="form-check-label" for="side1" style="font-family: Poppins-Regular;">
    Liner Single Side
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="side2" value="option2">
  <label class="form-check-label" for="side2" style="font-family: Poppins-Regular;">
    Liner Both Side
  </label>
</div>
</div>
</div>


<div class="wrap-input100 validate-input m-b-23" >
  <span class="label-input100">Liner PAPER RATE/kg</span>
  <input class="input100" type="number" id="linerpaperRate" placeholder="input rate">
  <span class="focus-input100" data-symbol="&#x269D;"></span>
</div>


<div class="wrap-input100 validate-input m-b-23" >
  <span class="label-input100">Media PAPER RATE/kg</span>
  <input class="input100" type="number" id="midpaperRate" placeholder="input rate">
  <span class="focus-input100" data-symbol="&#x269D;"></span>
</div>
<div class="wrap-input100 validate-input" data-validate="Profit margin is required">
	<span class="label-input100">Profit Margin</span>
	<input class="input100" type="number" name="profitmargin" id="profitmargin" placeholder="Profit Margin">
	<span class="focus-input100" data-symbol="&#x269D;"></span>

	<button class="btn btn-success disabled" type="button" style="float:right;margin-top: -35px;
position: relative;
z-index: 2;">&#37;</button>
</div>
</div>

<div class="container-login100-form-btn" id="finalWin"  style="margin-top:50px; display:none">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="finalCalc()">
								CALCULATE!
							</button>
						</div>
					</div>

  <div id="finalcalculation" style="margin-top:50px">
  </div>

				</div>






			</div>
		</div>
	</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
var len = 0;
var hi = 0;
var wi = 0;
var coeff=1;
var lw=0;
var wh=0;
var gunfol=0;
var liner = 0;
var media =0;

function coeffSet(){
  var e = document.getElementById("coeff");
 document.getElementById('first2').style.display="none";
 var strUser = e.options[e.selectedIndex].value;
console.log(typeof strUser, strUser);
localcoeff = parseInt(strUser,10);
console.log(typeof localcoeff, localcoeff);
if(localcoeff==0){
  coeff=1;
  document.getElementById('measureStd').innerHTML='<p style="text-align:center">YOU ARE MEASURING IN INCH</p>';
}
else if(localcoeff==1){
  coeff=0.0393701;
  document.getElementById('measureStd').innerHTML='<p style="text-align:center">YOU ARE MEASURING IN MM</p>';
}
else if(localcoeff==2){
  coeff=0.393701;
  document.getElementById('measureStd').innerHTML='<p style="text-align:center">YOU ARE MEASURING IN CM</p>';
}

}

function dimCheck(){
   len = document.getElementById('len').value;
   hi = document.getElementById('hi').value;
   wi = document.getElementById('wi').value;

  if(len=='' || hi=='' || wi=='' ){
    //document.getElementById('dimcheckbtn').innerText='ONE OR MORE DIMENSION IS MISSING';
		document.getElementById('dimcheck').innerHTML=

    `<div class="card bg-danger text-white text-center p-3">
        <blockquote class="blockquote mb-0">
        <p style="text-align:center; color:white">ONE OR MORE DIMENSION IS MISSING</p>
      	</blockquote>
      </div>`;
    document.getElementById('calc').style.display="none";
  }
  else{
		document.getElementById('dimcheck').innerHTML=

    `<div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
        <p style="text-align:center; color:white">ALL SET</p>
      	</blockquote>
      </div>`;
    document.getElementById('calc').style.display="block";

  }
  document.getElementById('dimcheck').style.display="block";
}

function sizeGiven()
{



    len = document.getElementById('len').value;
    hi = document.getElementById('hi').value;
    wi = document.getElementById('wi').value;
    len=parseFloat(len)*coeff;
    wi=parseFloat(wi)*coeff;
    hi=parseFloat(hi)*coeff;
    console.log(len,wi,hi);
    lw=(len+wi+2.5)*2.54;
    wh=(wi+hi+1.5)*2.54;
    gunfol= lw*wh;



    //document.getElementById('a3').value = len*hi*wi;
    console.log(lw);
    console.log(wh);
    document.getElementById('first2').innerHTML=

    `<div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
        <p style="text-align:center; color:white"> (L+W+2.5)*2.54 = ${lw} (in inch) </p>
        <p style="text-align:center; color:white"> (W+H+1.5)*2.54 = ${wh} (in inch) </p>
        <p style="text-align:center; color:white"> গুনফল = ${gunfol} (in inch) </p>

        </blockquote>
      </div>`;
    document.getElementById('first2').style.display="block";

    document.getElementById('linMid').style.display="block";
    document.getElementById('finalWin').style.display="block";
}

function finalCalc(){
  var e = document.getElementById("linply");

 var linVal = e.options[e.selectedIndex].value;
 console.log(typeof linVal, linVal);
 linVal = parseInt(linVal);

 var f = document.getElementById("midply");

var midVal = f.options[f.selectedIndex].value;
midVal=parseInt(midVal);
console.log(typeof linVal, typeof midVal, linVal, midVal);
var linerplyprice =300;
var midlyprice = 500;

if(linVal==0){
	linerplyprice=300;
}
else if(linVal==1){
	linerplyprice=300;
}
else if(linVal==2){
	linerplyprice=300;
}

if(midVal==0){
	midlyprice = 282;

}
else if(midVal==1){
	midlyprice = 500;
}
else if(midVal==2){
	midlyprice = 740;
}
var linerside = 1;
var linertext="One side";

if(document.getElementsByClassName('side1').checked){
	linerside=1;
	linertext="One side";
}
if(document.getElementById('side2').checked){
	linerside=2;
	linertext = "Both side";
}

var linerpaper = document.getElementById('linerpaperRate').value;
linerpaper = parseFloat(linerpaper)*linerside;

var midpaperRate=document.getElementById('midpaperRate').value;
midpaperRate=parseFloat(midpaperRate);



//console.log(linVal, midVal);

liner = ((gunfol*linerplyprice*2)/10000000)*linerpaper;
media = ((gunfol*midlyprice*2)/10000000)*midpaperRate;


var tempcost = liner+media;
var silicost = tempcost*0.20;

var totalcost = tempcost+silicost;

var prof = document.getElementById('profitmargin').value;
var costwithprofit = totalcost + ((totalcost)*(prof/100));

document.getElementById('finalcalculation').innerHTML=

`<div class="card bg-primary text-white text-center p-3">
    <blockquote class="blockquote mb-0">
    <p style="text-align:center; color:white"> LINER COST = ${liner.toFixed(3)} Tk. (${linertext}) </p>
    <p style="text-align:center; color:white"> Media cost = ${media.toFixed(3)} Tk. </p>
    <p style="text-align:center; color:white"> 20% Silicate  = ${silicost.toFixed(3)} Tk. </p>

    </blockquote>
  </div>

  <div class="card bg-warning text-white text-center p-3 mt-3">
      <blockquote class="blockquote mb-0">
      <p style="text-align:center; color:white"> TOTAL COST = ${totalcost.toFixed(3)} Tk. </p>
			<p style="text-align:center; color:white"> TOTAL PRICE WITH ${prof}% Proftit Margin = ${costwithprofit.toFixed(3)} Tk. </p>


      </blockquote>
    </div>`;



}
</script>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
