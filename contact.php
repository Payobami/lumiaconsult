<?php
//require_once('conn.php');

	$nam = "";
	$mail ="";
	$phon = "";
	$comm ="";
	$date = date('F j, Y');
	$time = date('g:i a');
	$error="";
	$success="";
	
	
if($_SERVER['REQUEST_METHOD'] =="POST")
{
	$nam = $_POST['name'];
	$mail =$_POST['email'];
	$phon = $_POST['phone'];
	$comm = $_POST['comment'];
	$mail_to ='y.ayobami@yahoo.com'.', ';
	//$mail_to .='mayes777@yahoo.com';
	$subject = "Message from ".$nam . " lumiaconsult.com" ;
	$headers ='Content-type: text/html; charset=iso-8859-1' . '\r\n';
	$headers .='MIME-Version: 1.0' . '\r\n';
	if($nam ==""|| $mail=="" || $phon=="" || $comm=="")
	{
		$error=1;
		//exit();
	}
	
	//$sql = "INSERT INTO contact (nam, email, phone, comment, date, time) VALUES('$nam','$mail','$phon','$comm','$date','$time')";
	
	
	if($error==1 )
	{ 
		$qry="";
		$sql="";
		$error=1;
		//echo "Unable to submit".mysql_error();
	}
	else
	{
		//$qry = mysql_query($sql,$conn);
		$success = "<div style='color:#060'>Thanks for contating us. We shall reply you soon</div>";
		$message = "<html>
<body>
<h5 style='border-bottom:2px solid #8A462F; font-weight:700; font-size:17px; color:#8A462F;'>Lumia Consult & Lumia Mayes Construction Company</h5>
$comm
<br />
Message From: $nam;
<br />
Phone Number:$phon;
<br />
Email: $mail;
</body>
</html>";
mail($mail_to, $subject, $message, $headers);
}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>..::Lumia Mayes || About Us::..</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left" style="width:400px; height:100px;">
      <div id="logo"><img src="images/lumia.png" alt="" width="90" height="91"  /></div>
      <h1 style="float:; margin-top:0px; margin-right:-15px; background:none !important !important"><a href="index.html"><span style="font-size:25px; font-weight:700">Lumia Mayes</span> <br />
        <p style="margin-left:150px; font-weight:700">And</p>
        <span style="font-size:22px; background:#510000; color:#fff">Lumia Consult Ltd.</span></a></h1>
      <p style="color:#000; margin-left:65px;margin-top:05px; clear:right; font-weight:600; font-style:italic">Building and Contruction Company Limited</p>
    </div>
    <div class="fl_right">
      <p><a href="#">A - Z Index</a> | <a href="hse.htm">HSE</a> | <a href="Lumia - mayes construction company limited Latest Profile.pdf" target="new">Company Profile</a></p>
      <form action="#" method="post" id="sitesearch">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="image" src="images/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
    </div>
    <div id="topnav">
        <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="services.html">Our services</a></li>
            <li><a href="experience.html">Our Experiences</a></li>

            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="equipment.html">Plant and Equipment</a></li>
            <li class="last"><a href="contact.html">Contact</a></li>
        </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="content">
      <h1>Contact Us</h1>
     <?php 
	 if($error ==1)
	 {
		 echo "<div style='color:#F00'>All field must be filled</div>";
	 }
	 if($success)
	 {
		 echo $success;
	 } 
	 
	  ?>

       <div id="respond">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <p>
            <input type="text" name="name" id="name" value="" size="22" />
            <label for="name"><small>Name (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email" value="" size="22" />
            <label for="email"><small>Mail (required)</small></label>
          </p>
          
          <p>
            <input type="text" name="phone" id="email" value="" size="22" />
            <label for="email"><small>Phone Number (required)</small></label>
          </p>
          
          <p>
            <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Comment (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Submit Form" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
          </p>
        </form>
      </div>
    </div>
    <div id="column">
      <div id="featured">
        <ul>
          <li>
               
            
             <div class="footbox" style="width:270px">
      <h2>How To Find Us</h2>
      <address>
      
      <h3>Abuja</h3>
       <p style="margin-bottom:10px; margin-top:-7px">Suite 38, Harmonic Plaza,Mike Aighbe,Off Obafemi Awolowo way, Jabi, Abuja.
      </p>
      <h4>Ibadan</h4>
      <p style="margin-bottom:10px; margin-top:-7px">Suite 4, Al-Barakan Plaza, Favous Bodija Ibadan
     </p>
      <h5 style="width:auto">Lagos</h5>
       <p style="margin-bottom:10px; margin-top:-7px">6, Amore Off Toyin Street, Ikeja Lagos.</p>
      </address>
      <address>
      
      <h6>Phone Numbers</h6>
      
           Tel: 08037136696
      <br style="margin-bottom:5px !important"/>
      Tel: 08072397483
      <br />
      Email: <a href="#">mayes777@yahoo.com</a>
      </address>
    </div>
            
            
            
          </li>
        </ul>
        
       
        
        
      </div>
      
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="footbox">
      <h2>Quick Links</h2>
      <ul>
        <li><a href="index.html">&raquo; Homepage</a></li>
        <li><a href="contact.php">&raquo; Contact Us</a></li>
        <li><a href="#">&raquo; Sitemap</a></li>
        <li><a href="#">&raquo; Privacy Policy</a></li>
        <li><a href="#">&raquo; Terms of Use</a></li>
        <li><a href="#">&raquo; Copyright Information</a></li>
        <li><a href="#">&raquo; Website Matters</a></li>
      </ul>
    </div>
    <div class="footbox" style="width:280px">
      <h2>How To Find Us</h2>
      <address>
     Suite 38, Harmonic Plaza,Mike Aighbe,Off Obafemi Awolowo way, Jabi, Abuja.<br />
      Suite 4, Al-Barakan Plaza, Favous Bodija Ibadan
      <br />
      6, Amore Off Toyin Street, Ikeja Lagos.
      </address>
      <address>
      
           Tel: 08037136696
      <br style="margin-bottom:5px !important"/>
      Tel: 08072397483<br />
      Email: <a href="#">mayes777@yahoo.com</a>
      </address>
    </div>
    <div class="fl_right">
      <div id="social">
        <h2>Connect With Us</h2>
        <ul>
          <li><a href="#"><img src="images/social/facebook.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/social/twitter.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/social/flickr.gif" alt="" /></a></li>
          <li><a href="#"><img src="images/social/youtube.gif" alt="" /></a></li>
          <li class="last"><a href="#"><img src="images/social/rss.gif" alt="" /></a></li>
        </ul>
      </div>
      <div id="newsletter" class="clear">
        <form action="#" method="post">
          <fieldset>
            <legend>Subscribe To Our Newsletter:</legend>
            <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
            <input type="text" id="subscribe" value="Submit" />
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2013 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="#" title="Free Website Templates">Beyad Technology</a></p>
  </div>
</div>
</body>
</html>