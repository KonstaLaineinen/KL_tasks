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










<?php include "footer.php" ?>