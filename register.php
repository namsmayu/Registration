<?php
include('server.php');
?>
  <!DOCTYPE>
<html>
  <head>
    <title>User Registration with PHP and MySQL</title>	
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
    <div class="header">
      <h2>Register</h2>
    </div>
 
      <form method="post" action="register.php">
        <!--display validation errros here-->
        <?php include('errors.php')?>
        <div class="input-group">
          <label>UserName</label>
          <input type="text" name="username"/>
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="text" name="email"/>
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1"/>
        </div>
         <div class="input-group">
 <label>Confirm Password</label>
    <input type="password" name="password_2"/>
             </div>
            <div class="input-group">
<button name="register" type="submit" class="btn">Register</button>
             </div>
        </form>
  
    
  </body>
</html>