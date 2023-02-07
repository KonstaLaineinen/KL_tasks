<?php include "header.php"?>


<style>

  

 


</style>

<h1> Exercise 3 </h1>

<h2> 1. and 2. Create a simple html form to get First name and Last name from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site. </h2>

<form action="action.php" method="post" >

<div class="row">

  <div class="col">
  First name <input type="text" placeholder="First name" required name="fname" class="form-control"  style="padding: 10px; border-radius:10px; "> <br>
</div>

<div class="row">

  <div class="col">
  Last name <input type="text"  placeholder="Last name" required name="lname" class="form-control" style="padding: 10px; margin:10px 0; border-radius:10px;"> <br>
</div>






<input type="submit" value="Submit">





</form>


<h2> 3. Prepare a simple html table and apply bootstrap style to the table. </h2>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">SM</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>One</td>
      <td>Two</td>
      <td>@13</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Three</td>
      <td>Four</td>
      <td>@14</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Five</td>
      <td>Six</td>
      <td>@15</td>
    </tr>
  </tbody>
</table>


<h2> 4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. </h2>


<?php

$first = "Hey";
$second = "how are you";

$combine = $first . ' ' . $second;

echo strlen($combine);

?>


<h2> 5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h2>

<?php

$fnumber = 298;
$snumber = 234;
$tnumber = 46;
$sum = $fnumber + $snumber + $tnumber;

echo $sum;

?>













<?php include "footer.php" ?>