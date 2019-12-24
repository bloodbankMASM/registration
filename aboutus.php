<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<h1><a href="index.php"><img src="Images/logo.PNG" alt="" height="100px"></a></h1>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
  
   
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">
<div class="s_bg">
<div class="wrap">
<div class="cont_main">
	<div class="content">
		<img src="Images/about.png" height="70px"  />
			<h4><span class="bold">News Letter from the Founders</span></h4>
			<p><img src="Images/123.jpg" height="200px" style="margin-bottom:40px" /></a>The main objective of this specification is to support the automated tracking of blood 
                      products from the initial ordering of a blood transfusion for a patient, through to the taking of a 
                      blood sample for cross matching, to administration of a blood transfusion and subsequent 
                      updates to care records.
                      To allow the probable recipients to make search and match the volunteer donors, and 
                      make request for the blood.</p>
			<p class="top"> <h6>Mission</h6></p>
			<p class="top">To simplify and automate the process of searching for blood in case of emergency and maintain the records of blood donors, recipients,
					  blood donation programs and blood stocks in the bank.</p>
					  <h5>Vision</h5>
                    <p>To Publicize and Advertise Blood Donation
					  Programs.</p>  
					  
					 <!-- <section class="gallery bg-gray">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title text-center">
                      <h3>Collected Shots During Development Of Project
                         
                      </h3>
              <div class="col-md-6 col-sm-6">
                  <div class="gallery-item">
                      <img src="Images/gallery-03.jpeg" class="img-responsive" alt="gallery-image" style="width:300px;height:200px">
                      
                      
                  </div>
              </div>
              <div class="col-md-6 col-sm-6">
                    <div class="gallery-item">
                        <img src="Images/gallery-04.jpeg" class="img-responsive" alt="gallery-image" style="width:300px;height:200px">
                        
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <img src="Images/gallery-05.jpeg" class="img-responsive" alt="gallery-image" style="width:300px;height:200px">
                        
                        
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                  <div class="gallery-item">
                      <img src="Images/gallery-06.jpeg" class="img-responsive" alt="gallery-image" style="width:300px;height:200px">
                     
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="gallery-item">
                      <img src="Images/gallery-08.jpeg" class="img-responsive" alt="gallery-image" style="width:300px;height:200px">
                     
                  </div>
              </div>
             
          </div>
      </div>
  </section>-->

		<p class="top">Thank you and Happy Blood donating!</p>	
        
       
	</div>
	<div class="sidebar">
			<div>  
<br /><br /><br /><br /><br />
			       <div>
                       <img src="Images/doc.png" width="250px" height="200px" class="tableborder" />
						<br /><br />
                            <img src="Images/camp1.png" width="250px" height="500px" class="tableborder" />
                            
				  </div>
				 
					 <div class="clear"></div>	
				</div>	
	</div>
	
</div>
</div>
		
</form>
</div>

       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		
	<div class="clear"></div>
</div>
</div>
</div>
		
	
</div>


<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>