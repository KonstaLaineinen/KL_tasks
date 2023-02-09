<?php include "header.php" ?>

<h3>  1. Write a php script to display courses as list. Use li
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project") </h3>

<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");



{
    echo "<li>$courses[0]</li>";
}
{
    echo "<li>$courses[1]</li>";
}
{
    echo "<li>$courses[2]</li>";
}
{
    echo "<li>$courses[3]</li>";
}
{
    echo "<li>$courses[4]</li>";
}

?>


<h3> 2. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project"); </h3>

<?php

$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);

var_dump($courses1);



?>


<h3> 3. Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
 </h3>

 <h2> A) </h2>

 <?php

 $courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

 asort($courses3);
 print_r($courses3);
?>


<h2> B) </h2>

<?php

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

ksort($courses3);
print_r($courses3);
?>

<h2> C) </h2>

<?php

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

arsort($courses3);
print_r($courses3);
?>


<h2> D) </h2>

<?php

$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");

krsort($courses3);
print_r($courses3);
?>


<h3> 4. Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project"); </h3>

 <?php
 $courses4=array("php", "html", "javascript", "cms", "project");

 $courses4 = array_map('strtoupper', $courses4);

 print_r($courses4);




?>


<h3> 5. List all your favorite colors and their hexadecimal equivalents. (associative arrays) </h3>

<?php

$colors = array("Blue"=>"#0000FF", "Red"=>"#FF0000", "Green"=>"#00FF00");
print_r($colors);



?>

<h3> 6. PHP script to calculate and display average temperature, five lowest and highest temperatures. </h3>

<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73,
85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
 ";
echo "<br>";
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>







<?php include "footer.php" ?>