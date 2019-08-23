<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   <body bgcolor = "#FFFFFF">
   <form action="register.php" name="indexform" method="POST">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "">
                  <label>First Name  :</label><input type = "text" name = "userid" class = "box"/><br /><br />
                  <label>First Name  :</label><input type = "text" name = "firstname" class = "box"/><br /><br />
                  <label>Last Name :</label><input type = "text" name = "lastname" class = "box" /><br/><br />
                  <label>Email  :</label><input type = "text" name = "email" class = "box" /><br/><br />
                  <label>Contact  :</label><input type = "text" name = "contact" class = "box" /><br/><br />
                  <label>Company  :</label><input type = "text" name = "company" class = "box" /><br/><br />
                  <label>Designation  :</label><input type = "text" name = "designation" class = "box" /><br/><br />
                  <label>Role  :</label><input type = "text" name = "role" class = "box" /><br/><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Register " /><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>