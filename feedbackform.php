<html>
<head>
<title>Contact Me</title>
<?php
if(isset($_POST['Submit']))
{
	if (empty($_POST['subject']))
	{
		echo "Subject field is required. <br/>";
	}
	if (empty($_POST['detail']))
	{
		echo "Detail field is required. <br/>";
	}
	if (empty($_POST['mail']))
	{
		echo "Mail field is required. <br/>";
	}
else
	{
	  $email = $_REQUEST['mail'] ;
	  $subject = $_REQUEST['subject'] ;
	  $message = $_REQUEST['detail'] ;
	  $send= mail("anjinson.jeff@gmail.com", $subject, $message, "From:" . $email);
	  if($send)
		{
		?>
			<p>Thank you for your feedback. We've Received your Email.<br/></p>
		<?php
		}
		else
		{
			echo "Error";
		}
	}
}
?>
</head>
<body>
<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<fieldset>
<legend>Enter your information in the form below:</legend>
<table>
<tr>
<td>
<label>Name:</label>
</td>
<td>
<input type="text" name="name"  size="25" required />
</td>
</tr>


<tr>
<td>
<label>Email Address:</label>
</td>
<td>
<input type="email" name="mail" size="25" required  />
</td>
</tr>

<tr>
<td>
<label>Subject:</label 
</td>
<td>
<input name="subject" type="text" id="subject" size="25" required >
</td>
</tr>

<tr>
<td>
<label>Comments:</label>
</td>
<td>
<textarea name="detail" size="25"></textarea>
</td>
</tr>
</table>
</fieldset>
<input type="submit" name="Submit" value="Submit">	
</form>
</div>
</body>
</html>