


<head>
  <meta charset="utf-8">
  <title>Registration</title>
  </head>
  
  <body>
      <table width = "80%" height = "60%" border="0">
          <tr>
          <td>
              <?php
                include("2.html");
               ?>
             
          </td>
          </tr>
          
          <tr>
          <td rowspan = "2" align = "center" width = "60%">
              <form method = "post">
           <fieldset>
                <legend>Registration</legend>
                 Name:&nbsp;<input type = "text" name="name"> <br>
                 Email:&nbsp;<input type = "text" name="email"> <br>
                 Username:&nbsp;<input type = "text" name="username"> <br>
                 Password:&nbsp;<input type = "text" name="password"> <br>
                
                 <fieldset>
                 <legend>Gender</legend>
                 <input type = "radio" name = "gender" value="Male" checked />Male
                 <input type = "radio" name = "gender" value="Female"/>Female
                 <input type = "radio" name = "gender" value="Other"/>Other
                 </fieldset>
 
                 <fieldset>
                 <legend>Date Of Birth</legend>
                 <input type = "text" name="dd" maxlength="4" size="4">/<input type = "text" name="mm" maxlength="4" size="4">/<input type = "text" name="yy" maxlength="4" size="4">
                 (dd/mm/yy)
                 </fieldset>
                 <hr>
                 <input type = "submit" name = "Submit" value="Submit">&nbsp;
                 <input type = "submit" name = "Reset" value="Reset">
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
                  if(isset($_POST['Submit']))
                  {

                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $gender = "";
                    if(!empty($_POST['gender']))
                           $gender = $_POST['gender'];
                    $dd = $_POST['dd'];
                    $mm = $_POST['mm'];
                    $yy = $_POST['yy'];
                    $date = $dd.$mm.$yy;

                    $xml = simplexml_load_file('profiles.xml');
                    


                    $profile=$xml->addChild('profile','');
                    $profile->addAttribute('username', $username);
                    $profile->addChild('name',$name);
                    $profile->addChild('email',$email);
                    $profile->addChild('password',$password);
                    $profile->addChild('gender',$gender);
                    $profile->addChild('dob',$date);


                    $xml->asXML('Profiles.xml');
                    $_POST = array();
                  }
    ?>
