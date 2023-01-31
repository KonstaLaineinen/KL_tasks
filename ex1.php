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
echo "Hello world! My name is \"David \" ";
?>

    <h1>3.3 Write the PHP code in to display the current date.  </h1>

<?php
date_default_timezone_set('Europe/Helsinki');
$date = date('d-m-y H:i:s');
echo $date;
?>

    
    <h1> 3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. > </h1>

    
<?php
$title = "PHP is interesting";
?>

<h1> <?php echo $title; ?>

    <h1> 3.5  $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade.</h1>





<?php
  
// Declaration of strings
$g1=  5;
$g2 = 4;
$g3 = 5;
   
// Display HTML table using PHP echo
// Use $variable_name to use a string
// in code
echo "<table border=1 cellspacing=1 cellpadding=1>
    <tr> 
       <td><b> S.N </b> </td>
       <td><b> Name </b> </td>
       <td><b> Grade </b> </td>
    </tr>
    <tr> 
        <td> 1  </td>
        <td> Pekka </td>
        <td>  $g1 </td>
    </tr>
    <tr> 
        <td> 2  </td>
        <td> Johanna </td>
        <td>  $g2 </td>
    </tr>
    <tr> 
        <td> 3  </td>
        <td> John </td>
        <td>  $g3 </td>
    </tr>
</table>";
?>











  







</body>
</html>



