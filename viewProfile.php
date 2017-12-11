<head>
  <meta charset="utf-8">
  <title>View Profile</title>
</head>
  
  <body>
      <table width = "80%" height = "60%" border="5">
          <tr >
          <td align = "left" width = "40%"><h4>X Company</h4></td>     
            <td align = "right" width = "60%">
                Logged in as Bob| 
                <a href="Home.php">Log Out</a>
                
            </td>

          </tr>
          
          <tr>
          <td rowspan = "2" width ="20%" >
             <?php
                include("check.html");
             ?>
          </td>

          <td rowspan = "2" width ="80%">
            
                 <fieldset>
                   <legend>Profile</legend>
                   Name:&nbsp;Bob <br>
                   Email:&nbsp;bob@aiub.edu <br>
                   Gender:&nbsp;Male <br>
                   Date of Birth:&nbsp;19/8/1989 <br>
                   <a href="editProfile.php">Edit Profile</a></li>
                 </fieldset>
           </td>
      
  
          </tr>
          <tr></tr>
          
         
          
          <tr >
          <td colspan ="2" align = "center">
             <h4>Copyright &#9400; 2017</h4>
             
          </td>
          </tr>
          
          
      </table>
      
      
    </body>
