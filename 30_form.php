<?php 

if(isset($_POST['submit'])) {
    

$username = $_POST['username'];
$password = $_POST['password'];
    
    
    
    
echo "Hello" . $username;   
echo "Your Password is " . $password;


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="30_form.php" method="post">
    
<input type="text" name="username" placeholder="Enter Username"><br>
<input type="password"  name="password" placeholder="Enter Password"><br>
<input type="submit" name="submit">
    
    
</form>



</body>
</html>