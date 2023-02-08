<?php include "header.php" ?>


<h3>   1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays. </h3>


<?php 
$month = date('F');

if($month == "August"){
   echo "It is August so it's still holiday";
} else {
   echo "Not August, this is $month, so I dont have any holidays";
}
?>


<h3> 2. Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h3>

<?php
$color = "red";

    if ($color == "red") {
    echo "The color is red.";
    }
    else {
    echo "The color is not red";
    }


?>


<h3> 3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
Excellent: >80; 
Great >70 & less than 80;
Good >60 & less than 70; 
Pass >50 & less than 60
Fail less than 50
 </h3>


 <?php
 $totalscore = 68;

 $grade = '';

 switch ($totalscore) {
     case ($totalscore >= 80):
         $grade = 'Excellent';
         echo "Excellent";
         break;
     case ($totalscore >= 70):
         $grade = 'Great';
         echo "Great";
         break;
     case ($totalscore >= 60):
         $grade = 'Good';
         echo "Good";
         break;
     case ($totalscore >= 50):
         $grade = 'Pass';
         echo "Pass";
         break;
     case ($totalscore < 50):
         $grade = 'Fail';
         echo "Fail";
         break;
              
 }
?>

<h3> 4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting,)</h3>

<?php

{
    $name = "Konsta";
    $age = 23;
    if ($age >= 18) {
        echo $name . ", you are eligible to vote";
    } else {
        echo $name . ", you are not eligible to vote. ";
    }
}

?>


<h3>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name. 
Use Switch statement with strops function to print the name of the browser as below: 
If someone is using Chrome it should print, you are using Goolge Chrome….
 </h3>

 <?php

 $user_agent = $_SERVER['HTTP_USER_AGENT'];
 

switch($user_agent) {
	case (strpos($user_agent, 'Chrome') == true):
		echo 'You are using Google Chrome';
	break;

    case (strpos($user_agent, 'Edg') == true):
		echo 'You are using MS Edge';
	break;
	
}
?>












<?php include "footer.php" ?>