<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/About_us.php'); }?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Tolan Solar | About tolan|TEST </title>



<link rel="stylesheet" type="text/css" href="../styles.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" type="text/css" href="side_form.css">



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
				 product: "required",
				 agree: "required"
				 },
				 messages: {
				   firstname:"please enter firstname",
				   lastname:"please enter lastname",
				   contact: {
				      required:"please provide a number",
					  minlength: "phone must be at least 9 characters long" },
					  product: "please select product",
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
			</div>
			<div id="column_small">	
			
			<span id="topic">
				<h3 id="topic">ABOUT US </h3>
			</span>
			<span id="contents4">
			 <h3 class="blue">TOLAN SOLAR : OUR COMPANY </h3>
		
			<blockquote>
			<p class="text">
				Our business aims to provide cheaper alternatives to carbon-fuelled energy creation, by utilizing
				existing and new technologies to cater for the domestic market. We believe in the potential
				benefit of research in areas of ElectroChemistry, Electronics and <abbr title="photo voltaic ">PV</abbr>-Technology to produce Solutions
				for unique problems in third world countries.
			</p>
			<p class="text">
			 The Nigerian market: 
				With the epileptic nature of electricity in Nigeria. Tolan has focused its attention on providing unique solutions that can 
				fill the gap left by power shortage and unaffordable infrastructure. 
				
			</p>

			</blockquote>
			</span>
			<span id="contents4">
			 <h3 class="blue">
					 OUR BUSINESS</h3>
			
			<blockquote>
				<p class="text">
			   Tolan Electronics was set up to provide cheaper and efficient energy and lighting solutions.
			 Our research has enabled us utilize existing technologies to develop 
			  products aimed at improving the living standards, reduce energy wastage and provide consumers with quality lighting and electrical products at affordable prices.
				
				
				At the moment we have focused on manufacturing and sales of Energy efficient lighting products and <abbr title="photo voltaic ">PV</abbr> -solar technology. 
				We also sell electronic parts, semi-conductor resales and made to order designs of lighting equipment.
				We strive to make new technologies available to the our target market at affordable prices.
				
				</p>
			</blockquote></span>
			
</div>
			
<div id="column_right">
			
<!--<span id="span#contentsfaq_right">-->
			<form action="" method="post" id="register-form"  novalidate="novalidate"  >
			
			<h2>Quick Order</h2>
			
			<div id="form-content">
				<fieldset>
                    
					    <div class="fieldgroup">
					    <label for="name">Firstname</label>
						<input type="text" name="firstname" size="20" required />
						</div>
						<div class="fieldgroup">
						 <label for="lastname">Lastname</label>
						 <input type="text" name="lastname" size="20" required />
						</div>
						<div class="fieldgroup">
						<label for="email">Email</label>
						<input type="text" name="email"  size="30" required />
						</div>
						
					    <div class="fieldgroup">
						<label for="contact">Contact </label>
						<input type="text" name="contact" size="20" required />
						</div>
						
						<div class="fieldgroup">
						<label for="product">Product Selection </label>
						<select name="product" size="20"/>
						  <option>solar array</option>
						  <option>roof install</option>
						  <option>single room </option>
						  <option>double room</option>
						  <option>mobile panels</option>
						  <option>commercial install</option>
				        </select></br>
						</div>
	
						<div class="fieldgroup">
						<p class="right">By clicking submit you agree to our <a target="_blank" href="/policy">policy</a>.</p>
						<input type="submit" value="Submit" class="submit" >
						</div>
						
						
						
						
				</fieldset>		
				</div>
				</form>	
			<!--</span>-->
		    </div>
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