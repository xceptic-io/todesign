<head>
  <meta charset="utf-8">
  <title>Task 1</title>
  </head>
  
  <body>
      <table width = "80%" height = "60%" border="5">
          <tr>
          <td>
              <?php
                include("2.html");
               ?>
             
          </td>
          </tr>
          
          <tr>
          <td rowspan = "2" align = "center" >
          <form method = "post">
           <fieldset>
                <legend>Login</legend>
                 username:&nbsp;&nbsp;&nbsp;<input type = "text" name = "username"> <br>
                 Email:&nbsp;&nbsp;&nbsp;<input type = "text" name= "password"> <br>
                 <a href="forgotPassword.php">Forgot password?</a><br>
                 <input type="submit" name = "submit" value="Submit">
              </fieldset>
            </form>
          </td>
          </tr>
          
          <tr></tr>
          
          <tr >
          <td >
          <?php
                include("copyright.html");
          ?>
          </td>
          </tr>
          
          
      </table>
      
      
    </body>

    <?php

     
      if(isset($_POST['submit']))
      {
        $xml = simplexml_load_file("profiles.xml");
        foreach ($xml->profile as $profile)
        {
         // echo $_POST['username']; echo $profile['username'];
          if($_POST['username'] === (string)$profile['username'])
          {
             echo " here1";
            if($_POST['password'] === (string)$profile->password)
            {  
              echo " here2";
               header('Location: loggedDashboard.php');
               break;
            }
          }
        }

      }

      ?>
