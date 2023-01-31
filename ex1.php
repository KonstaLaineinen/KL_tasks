<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP page</title>
</head>
<body>
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>

<?php
echo "Konsta Laineinen <br> ";
echo "BBCAP22";
?>

    <h1>3.2 Write PHP code to display the following message > Hello world! My name is "David" </h1>
    
<?php
echo "Hello world! My name is \"David \" "
?>

    <h1>3.3 Write the PHP code in to display the current date.  </h1>

<?php
date_default_timezone_set('Europe/Helsinki');
$date = date('d-m-y H:i:s');
echo $date;
?>

    
    <h1> echo $title </h1>

    
<?php
$title = "PHP is interesting";
 

?>




</body>
</html>



