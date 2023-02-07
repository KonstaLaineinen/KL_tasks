<?php include "header.php"?>


<style>

  .info {
    width:200px;
    padding:20px;
    
    
    
  }

 


</style>

<h1> Exercise 3 </h1>

<h2> 1. and 2. Create a simple html form to get First name and Last name from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site. </h2>

<form action="action.php" method="post" >

First name <input type="text" placeholder="First name" name="fname" class="first"  style="padding: 10px; border-radius:10px; "> <br>

Last name <input type="text"  placeholder="Last name" name="lname" class="second" style="padding: 10px; margin:10px 0; border-radius:10px;"> <br>

<input type="submit" value="Submit">


 




</form>










<?php include "footer.php" ?>