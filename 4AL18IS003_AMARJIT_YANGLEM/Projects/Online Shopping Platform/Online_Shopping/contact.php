<?php
include("config.php");
extract($_REQUEST);
if(isset($sub))
 {
$name=$_REQUEST['t1'];
$phone=$_REQUEST['t2'];
$email=$_REQUEST['t3'];
$subj=$_REQUEST['t4'];
$mesg=$_REQUEST['t5'];
 if(mysqli_query($conn,"insert into fdbk values('$name','$phone','$email','$subj','$mesg')"))
    {
	  echo "<font face='Lucida Handwriting' color='red' size='+1'>Message sent successfully</font>";
    }
 
 }
?>
<html>
<head>
<script>
function name()
{
  var name=/^[a-zA-Z]{4,15}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	} 
		 function phone()
{
  var phone=/^[0-9]{10,15}$/;
   if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	} 
	function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	} 
		function subj()
{
 	var subj=/^[a-zA_Z0-9]{5,100}$/;
   if(document.f1.t4.value.search(subj)==-1)
    {
	 alert("enter correct subject");
	 document.f1.t4.focus();
	 return false;
	 }
	} 

	
	
function vali()
{

	var name=/^[a-zA-Z]{4,15}$/;
	var phone=/^[0-9]{10,15}$/;
	 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
	 var subj=/^[a-zA_Z0-9]{5,100}$/;
	 var mesg=/^[a-zA_Z0-9]{10,300}$/;
   if(document.f1.t1.value.search(name)==-1)
    {
	 alert("enter correct name");
	 document.f1.t1.focus();
	 return false;
	 }
	 
 
  else if(document.f1.t2.value.search(phone)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t2.focus();
	 return false;
	 }
	 


   else if(document.f1.t3.value.search(email)==-1)
    {
	 alert("enter correct email");
	 document.f1.t3.focus();
	 return false;
	 }
	 
	
   else if(document.f1.t4.value.search(subj)==-1)
    {
	 alert("enter correct subject");
	 document.f1.t4.focus();
	 return false;
	 }
	

 	
   
	 else
	 {
	 return true;
	 }
	}
</script>
</head>
<div><br/><center><h2><font face="lucida sans unicode" size="+2" color="#00CCFF">CONTACT US</font></h2></center></div>
<div style="width:100%;float:left" >
<div>
  <p><br/>
      <font face="lucida sans unicode" size="+1" color="#996699">E-mail:</font><font face="lucida sans unicode" size="+1" color="#009966"> isedept@gmail.com
      </font><font face="lucida sans unicode" size="+1" color="#66CC66"><br>
      </font>
	   <br>
    <font color="#996699" size="+1" face="lucida sans unicode">Address:    <font color="#009966">Moodbidri, Mangalore, Karnataka - 574225 </font></font></p>
  <p> <font color="#996699" size="+1" face="lucida sans unicode">Talk to us:</font><font color="#006633" size="+1" face="lucida sans unicode"> 0123456789</font><font size="+1"><br>
    
  <p>&nbsp;</p>
</div>



<div>
<div style="width:25%;float:left"><br><br><center><fieldset style="width:25%;background-color:#CC99CC"><p><font size="+1" face="Comic Sans MS">Online Shop value your views and your concerns regarding our products and services. We would like to know how we can serve you better. If you have any queries please feel free to drop in your queries at customerservives@onlineshop.in and we will be happy to assist you.<br>HAPPY SHOPPING!</font></p>
</fieldset>
</center></div>&nbsp;&nbsp;
<div style="width:50%;float:right">
<div><br/><br>
<center><h2 align="left"><font face="lucida sans unicode" size="+1" color="#00CCFF">FeedBack Form</font></h2>
</center></div>
<center><fieldset style="width:25%;border-color:#006633;float:left">
<br><br>
  <form method="post" name="f1" onSubmit="return vali()">
    <table width="288" border="0" align="center">
      <tr>
        <td width="111"><font color="#996699" size="+1" face="lucida sans unicode">Name:</font></td>
        <td width="161"><label>
          <input name="t1" type="text" id="t1" onChange="return name()">
        </label></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="lucida sans unicode">Phone No: </font></td>
        <td><label>
        <input name="t2" type="text" id="t2" onChange="return phone()">
        </label></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="lucida sans unicode">Email:</font></td>
        <td><label>
        <input name="t3" type="text" id="t3" onChange="return email()">
        </label></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="lucida sans unicode">Sub:</font></td>
        <td><input name="t4" type="text" id="t4" onChange="return subj()"></td>
      </tr>
      <tr>
        <td><font color="#996699" size="+1" face="lucida sans unicode">Message:</font></td>
        <td><label>
          <textarea name="t5" id="text" ></textarea>
        </label></td>
      </tr>
	  <tr>
	  <td colspan="2"><center><input name="sub" type="submit" value="Submit"></center>	  </td>
	  </tr> 
    </table>
  

</form>
</fieldset></center>
</div>
</div>
</div>
</body>
</html>