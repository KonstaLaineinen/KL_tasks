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

<table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        
      </tr>
    </tbody>
  </table>
</div>











<?php include "footer.php" ?>