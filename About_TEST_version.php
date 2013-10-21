<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/About_us.php'); }?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Tolan Solar | About tolan|TEST </title>



<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>

body {
    background-color: #FFFFFF;
	z-index:0;
}
#content { background-color:#C6F5F2; width:950px; min-height:550px; text-align:left; padding:20px;  }
h1 {
    padding:15px 10px 12px 10px;
}
h2 {
    padding-left: 0px !important;
}
#header {
    background-color: #CA410B !important;
}
.large { font-size:20px; }
.orange { color:orange; }
.italic { font-style:italic }
.textmiddle {vertical-align:middle;}
.padout { padding-left:20px; padding-right:20px; }
.rounded-corners {
     -moz-border-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.rounded-corners-top {
     -moz-border-top-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.right {
    float: right;
}
.scrolldown { padding-left:20px; color:#EDECE8; font-size:14px; font-weight:bold; vertical-align:middle;
	text-shadow: #6374AB 2px 2px 2px;
 }
 .contentblock { margin: 0px 20px; }
 .results { border: 1px solid blue; padding:15px; margin-top:15px; min-height:40px; }
 .blue-bold { font-size:16px; font-weight:bold; color:blue; }

 /* example styles for validation form demo */
#register-form {
	
    background: #F8FDEF url('form-fieldset.gif') repeat-x left bottom;
    border: 1px solid #DFDCDC;
    border-radius: 15px 15px 15px 15px;
    display: inline-block;
    margin-bottom: 30px;
    margin-left: 720px;
    margin-top:0px;
    width: 200px; padding-left:15px; padding-right:15px; padding-top:10px; padding-bottom:10px
	z-index:1;
}

#register-form .fieldgroup {
    background: url('form-divider.gif') repeat-x left top;
    display: inline-block;
    width: 180px; padding-left:5px; padding-right:10px; padding-top:8px; padding-bottom:8px
}

#register-form .fieldgroup label {
    float: left;
    padding: 8px 0 0;
    text-align: right;
    width: 80px;
}

#register-form .fieldgroup input, #register-form .fieldgroup textarea, #register-form .fieldgroup select {
    float: right;
    margin: 5px 0;
    height: 20px;
}

#register-form .submit {
    padding: 8px;
    width: 160px;
    height: 40px !important;
}

#register-form .fieldgroup label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 30px;
    padding: 0;
    text-align: left;
    width: 170px;
}
</style>


<link rel="stylesheet" href="default.css" type="text/css" />

<!--[!if IE]><!-->	
<link rel="stylesheet" href="main3_style.css" type="text/css" />
 <!--<![endif]-->

 
<meta name="description" content=" for affordable solar and lighting products "/>
<meta name="keywords" content="About Tolan","LED-Lighting production", "Lighting products ", "Solar company"  />


<script type-"text/javascript" src="jquerybrowserdetect.js">
</script>

<script type="text/javascript" src="jquery.min.js">
</script>
<!--<script type="text/javascript" src="jquery.validator.min.js"></script>-->
<script type="text/javascript" src="jquery.validate.min.js">
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("p.text").click(function(){
    $(this).hide();
  });
});
</script>



<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
				rules: {
				 firstname: "required",
				 lastname: "required",
				 email: {
				   required:true,
				   email:true
				 },
				 contact: {
				   required: true,
				   minlength:9
				 },
				 agree: "required"
				 },
				 messages: {
				   firstname:"please enter your firstname",
				   lastname:"please enter your lastname",
				   contact: {
				      required:"please provide a number",
					  minlength: "your phone must be atleast 7 characters long" },
					  email: "please enter a valid email address",
					  agree:"please accept our policy"
					},
					submitHandler:function(form){
				             form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();

    });

})(jQuery, window, document);
</script>


</head>

<body>

<div>



   <div id="Header">
	     <div id="menu"> 
		    <ul class="topmenu">
			  <li class="search">
			 <gcse:searchbox-only></gcse:llsearchbox-only>
              </li>
			</ul>
			
 		 </div>
		 
		 <div id="logo">
		   <span id="imag">
			<img src="images/Tolan-Logo.jpg" alt="tolansolar logo "/>
		   </span>
		 </div>
	



<!--<div id="line">-->
<!--<div id="menu">-->
		<ul class="navigate">
			<li><a href="home.php">home<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]-->
			<ul>
				<li><a href="About_us.php">Who we are</a></li>
				<li><a href="Charity.php">Community Support</a></li>
				<li><a href="Case_study.php">Case Study</a></li>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</ul>
			</li>
			<li><a class="nav" href="Contact.php"> Contact  </a></li><ul>
			<li><a href="Products.php">Products<!--[if gte IE 7]><!--></a><!--<![endif]-->
				<!--[if lte IE 6]><table><tr><td><![endif]-->
			<ul>
					<li><a href="House.php">Home Products </a></li>
					<li><a href="Lighting.php">Lighting Products</a></li>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</ul>
			</li>
		
		<li><a class="nav" href="PV-Installation.php">PV-Installation </a></li>

		
		<li><a href="Support.php">Support<!--[if gte IE 7]><!--></a><!--<![endif]-->
			<!--[if lte IE 6]><table><tr><td><![endif]--><ul>
					<li><a href="Frequent_Questions.php">FAQ </a></li>
					<li><a href="Repairs.php">Repairs</a></li>
					<li><a href="Manuals.php">Manuals</a></li>
					<li><a href="Deliveries.php">Deliveries</a></li>
					<!--[if lte IE 6]></td></tr></table></a><![endif]--></ul>
		</li>
		</ul>
</div>
	
</div>	
    <div id="cf">
	  	   <img class="bottom" src="images/container_bg9.png"/>
           <img class="top" src="images/container_bg3.jpg"/>	
	</div>
	
	<div id="sidebar">
	    <div id="column1">
		    <div id="column_left">
			    <span id="contentsfaq_update">
		
	        <h3 class="grey">About Tolan </h3>
				<ul class="sidemenu">
					<li><a href="About_us1.php">Our business </a></li>
					<li><a href="About_us2.php">Research </a></li>
					<li><a href="About_us2.php">Business Philosophy </a></li>
					<li><a href="About_us3.php">Projects</a> </li>

				</ul>
				
			    </br>
				</br>
				<h3 class="grey_bottom">Tolan Sections </h3>
				<ul class="sidemenu">
					<li><a href="Branches.php">Offices</a></li>
					<li><a href="Contact.php">Contact</a></li>
					<li><a href="Departments.php">Departments</a></li>
					<li><a href="Training.php">Training</a></li>
					<li><a href="Staff.php">Staff Login </a></li>
				 
				 </ul>
			</span>
			
			<form action="" method="post" id="register-form"  novalidate="novalidate"  >
			
			<h2>Quick Order</h2>
			
			<div id="form-content">
				<fieldset>
                    
					    <div class="fieldgroup">
					    <label for="name">Firstname</label>
						<input type="text" name="name" size="20" required />
						</div>
						<div class="fieldgroup">
						 <label for="lastname">Lastname</label>
						 <input type="text" name="lastname">
						</div>
						<div class="fieldgroup">
						<label for="email">Email</label>
						<input type="text" name="email"  size="20" required />
						</div>
						
					    <div class="fieldgroup">
						<label for="contact">contact </label>
						<input type="text" name="contact" size="20" required />
						</div>
	
						<div class="fieldgroup">
						<p class="right">By clicking register you agree to our <a target="_blank" href="/policy">policy</a>.</p>
						<input type="submit" value="Register" class="submit" >
						</div>
						
						
						
						
				</fieldset>		
				</div>
				</form>	
		    </div>

	</div>		

	    </div>
  	<div id="footer">
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company.     Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Privacy.php">Data Privacy Statement</a> | <a href="Conditions.php">Terms and Conditions</a> | 
	</p> </span>
	</div>


	
</body>
</html>