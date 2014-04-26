<? include "header.php" ?>
	<script>
		function validateForm()
{
var a=document.forms["myForm"]["comp"].value;
if (a==null || a=="")
  {
  alert("Company name must be filled out");
  return false;
  }
  
  var b=document.forms["myForm"]["pers"].value;
if (b==null || b=="")		{
			alert("Please enter your Name");
		 return false;
		}
		var c=document.forms["myForm"]["address"].value;
		
	if (c==null || c=="")
		{
			alert("Please enter your Address");
		 return false;
		}
		var d=document.forms["myForm"]["telNo"].value;
		var g=/^[0-9]{10}+$/;
		if (d==null || d=="" || !g.test(d))
		{
			alert("Please enter your Telephone No");
		 return false;
		}
		var e=document.forms["myForm"]["email"].value;
		 var h = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		if (e==null || e=="" || !h.test(e))
		{
			alert("Please enter your EmailId");
		 return false;
		}
		var f=document.forms["myForm"]["Addres"].value;
		if (f==null || f=="")		{
			alert("Please enter your Requirements");
			 return false;
		}
}
		</script>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span class=e6>MAKE YOUR ENQUIRY</span></h2>
          <div class="clr"></div>
          </div>
        <div class="article">
          
          <div class="clr"></div>
          <div>
			  
<?php 
if(isset($_POST['submit'])){
if($_POST['submit']=='Send')
	{
		
	//print_r($_POST);
	$person    =	$_POST['pers'];
	$address =  $_POST['address'];
	$from    =  $_POST['email'];
	$mob     =  $_POST['telNo'];
    $subject =	$_POST['subject'];
    $message =	$_POST['message'];
	$to="info@hiteckautomation.com";
    $subject="Contact Us:" + $subject;
    $message="This is message from customer  ".$person."&nbsp;&nbsp;&nbsp; Mobile no.:&nbsp;&nbsp;".$mob."<br/>Description of message:".$message."<br/><br/>Address : ".$address." " ;
	$headers  = "From: $from\r\n";
    $headers .= "Content-type: text/html\r\n";
    mail($to, $subject, $message, $headers);
    echo "<center><font color=green>Mail is Sent</font></center>";
    unset($_POST['submit']);
}
}
?>

     <form name="myForm" action="enquiry.php" onsubmit="return validateForm()" method="post">
		  <table>
	  <tr><td width=30%></td><td width=70%></td></tr>
	  <tr><td><font size="2"><b><font face="Arial" required>Name :*</font> </b></font></td><td><font face="Arial" size="2"><input type="text" name="pers" style="max-width:100%; min-width:100%" required></td></tr>
      <tr><td><font size="2"><b><font face="Arial">Email :*</font> </b></font></td><td><font face="Arial" size="2"><input type="text" name="email" style="max-width:100%; min-width:100%" required></td></tr>
      <tr><td><font size="2"><b><font face="Arial" required>Subject :*</font> </b></font></td><td><font face="Arial" size="2"><input type="text" name="subject" style="max-width:100%; min-width:100%" required></td></tr>
      <tr><td><font size="2"><b><font face="Arial">message :* </font> </b></font></td><td><font face="Arial" size="2"><textarea cols="33" name="message" rows="3" MAXLENGTH="100" style="max-width:100%; min-width:100%" required></textarea></font></td></tr>
      <tr><td><font size="2"><b><font face="Arial">Contact No. :* </font> </b></font></td><td><font face="Arial" size="2"><input  name="telNo" size="18" style="max-width:100%; min-width:100%" required></font></td></tr>
      <tr><td><font size="2"><b><font face="Arial">Address :* </font> </b></font></td><td><font face="Arial" size="2"><textarea cols="33" name="address" rows="3" MAXLENGTH="100" style="max-width:100%; min-width:100%" required></textarea></font></td></tr>
          </table>

     <br><br><input type="Submit" value="Send" name=submit>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset">

       </form>
       </div>
       </div>
      </div>
<? include "sidebar.php" ?>
<? include "footer.php" ?>
