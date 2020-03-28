<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <?php 

$number = array('Arun', 'Kumar', 'Singh');

//print_r($number);

echo $number[0] . "<br>";
echo "<br>";  


// Associative Array Below

$names = array("first_name" => 'Arun', "Last_Name" => 'Singh' );

//print_r($names);

echo $names['first_name'] . " " . $names['Last_Name'];
    
    
?>
</body>

</html>
