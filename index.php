<?php
if(isset($_POST['name']) &&isset($_POST['email'])){
$name=$_POST['name'];
$email=$_POST['email'];
$to='melusinyoni@outlook.com';
$subject="New Subscriber";
$body='<html>
<body>
<h2>Feedback- example.com</h2>
<hr>
<p>Name<br>'.$name.'</p>
<p>Email<br> '.$email.'</p>
</body>
</html>';
//headers
$headers ="From:".$name."<".$email.">\r\n";
$headers .="Reply-To:".$email."\r\n";
$headers .="NINE-Version: 1.0\r\n";
$headers .="Content type:text/html; charset-utf-8";
//send
$send = mail($to, $subject, $body, $headers);
if ($send){
    echo '<br>';
    echo 'Thanks for contacting me, I will be with you shortly.';
}else {
    echo 'error';
}
}
?>
<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Form></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
   <form action ="" method="post">
       <input type="text" name="name" placeholder="Your Name:">
       <input type="text" name="email" placeholder="Your Email:"> 
       <button type="submit">Submit</button>
</form>
</body>
</html>>
