<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/Charity.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Tolan Solar | solar technology |rural work | Charity | community support |</title>
	
<!--[if IE]><!-->	
 <link rel="stylesheet" href="main3_style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="side_form.css">
 <!--<![endif]-->
 
 
<script type="text/javascript" src="jquery.min.js">
</script>

<script type="text/javascript" src="jquery.validate.min.js">
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("p.text").click(function(){
    $(this).hide();
  });
});
</script>

		
<meta name="description" content=" Charity and community support by tolan solar in Nigeria "/>
<meta name="keywords" content="Training courses","solar-panel projects","Community support","Cottage farm projects"  />


	<script>
 (function() {
   var cx = '016733281910472351058:azkatytop1i';
   var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
   gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
       '//www.google.com/cse/cse.js?cx=' + cx;
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
 })();
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
<body id="contents3">


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
			<img src="images/Tolan-Logo.jpg" alt="tolansolar logo"/>
		   </span>
		 </div>


    
		 <ul class="navigate">
		    <li><a class="nav" href="home.php"> Home </a>
				<ul>
					<li><a href="About_us.php">Who we are</a></li>
					<li><a href="Charity.php">Community Support</a></li>
					<li><a href="Case_study.php">Case Study</a></li>
				</ul>
			</li>			
			<li><a class="nav" href="Contact.php"> Contact  </a></li>
			<li><a class="nav" href="Products.php"> Products</a>
				<ul>
					<li><a href="House.php">Home Products </a></li>
					<li><a href="Lighting.php">Lighting Products</a></li>
				
				</ul>
			</li>
			<li><a class="nav" href="PV-Installation.php">Installation</a>

			</li>
			<li><a class="nav" href="Support.php">Support</a>
				<ul>
					<li><a href="Frequent_Questions.php">FAQ </a></li>
					<li><a href="Repairs.php">Repairs</a></li>
					<li><a href="Manuals.php">Manuals</a></li>
					<li><a href="Deliveries.php">Deliveries</a></li>
				</ul>
			</li>
		 </ul>
	 
		 
	</div>	
	
	
    <div id="cf">
	  	   <img class="bottom" src="images/container_bg9.jpg" alt="sunset off docks "/>
           <img class="top" src="images/freeimage-6126418-1-rural.jpg" alt="rural village"/>	
	</div>
	
	<div id="sidebar">
	    <div id="column1">
	    
           
			<span id="contentsfaq">
		
	        <h3 class="grey">Customer Support </h3>
				<UL class="sidemenu">
					<LI><a href="Complaints.php">Make a complaint </a></LI>
					<LI><a href="Complaints.php">Product faults</a></LI>
					<LI><a href="Deliveries.php">Delivery queries</a></LI>
					<LI><a href="Repairs.php"> Servicing </a></LI>
				</UL>
				</br>
				<h3 class="grey_bottom"> Repairs and Replacements</h3>
				<UL class="sidemenu">
					<LI><a href="Repairs.php">Repairs</a></LI>
					<LI><a href="Repairs.php">Recycling</a></LI>
					<LI><a href="Repairs.php"> Returns Policy</a></LI>
					<LI><a href="Frequent_Questions.php">FAQ</a></LI>
					
				</UL>
				
				
				
			</blockquote>
						
				
			</span>
		
			
			
			
			<span id="contents2">
				<h3>CHARITY WORK</h3>
			</span>
			
			<span id="contents3">
			
				<p>
					Tolan Electronics is currently running social schemes 
					for budding enterpreneurs and electronics hobbyists.
				
				</p>
				
				<P class="text3"  >
				Our company aims to provide social schemes to aid rural
				communities to become more self sufficent and less dependent
				on government and unreliable local power grid. We have therefore
				installed solar powered water pumps village project.

				</p>
				
				<p class="text3">
				 We also aim to provide cottage industries to educate people
				 on the advantages of solar energy and teach them how to setup
				 or maintain solar equipment that can power equipment used at 
				 home. Our aim is to empower these communities to find solutions
				 and work themselves out of poverty through these schemes.
				
				</p>
				
				<p> if you wish to know more about our social projects and activities and wish
				    to contact us about it please visit our facebook page otherwise use our
					<a href="enquires.php">enquires page</a> to get in touch. </p>
				
							<p class="text">
				<iframe frameborder="0" width="450" height="300" marginwidth="0" marginheight="0" 
				src="http://www.google.com/uds/modules/elements/newsshow/iframe.php?topic=h&rsz=small&format=300x250"></iframe>
				
				</p>
			
			</span>
	    </div>

	
	</div>
  	<div id="footer">
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company. Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Privacy.php"> Privacy Policy</a> | <a href="Conditions.php">Terms and Conditions</a> | <a href="sitemap.php"> Sitemap </a> | 
	</p> </span>
	</div>


	
</body>
</html>