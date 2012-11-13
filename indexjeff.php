<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>1st PHP Form</title>

<?php
if(isset($_POST['Submit']))
{
//get the information from index.html
$name = $_POST['name'];
$email = $_POST['email'];
$homeno = $_POST['homeno'];
$bday = $_POST['bday'];
$posting = $_POST['posting'];

echo "Thank you for your feedback <br/>";
echo "The following info are as follow: <br/>";
echo "Name = " . $name . "<br/>";
echo "Email = " . $email . "<br/>"; 
echo "Home no = " . $homeno . "<br/>";
echo "Bday = " . $bday . "<br/>";
echo "Posting = " . $posting . "<br/>";
}

?>
</head>

<body>
<div><p>Please fill in the necessary information:</p></div>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<p>Name: <input type = "text" name ="name" size ="25" required placeholder ="Enter Your Name"></p>
<p>Email: <input type="email" name="email" size="25" required placeholder ="Enter Your Email"></p>
<p>Birthday: <input type = "date" name ="bday" min="1990-01-01" max="1998-01-01"></p>
<p>Home no: <input type="number" name="homeno" size="20" required placeholder ="+99(99)9999-9999" pattern="[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}"></p>
<p>Posting: <textarea name = "posting" rows="8" cols ="20"></textarea></p>
<input type = "submit" name ="Submit" value="Send it server">

</form>
</body>

</html>
