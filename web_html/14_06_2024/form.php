<!DOCTYPE HTML>
<html>
     <head>
           <title>..:: HTML DAY 3 ::..</title>
     </head>
<body>
	<h1 align="center">..:: Form In Html ::..</h1>
	<br/>
	<hr/>

	<table align="center" border='2' cellspacing="5" cellpadding="10">
            <!--<form method="GET" action="process.php">-->
               <form method="POST" action="process.php">
                 <tr>
                     <th><label>Name : </label></th>
		     <td><input type="text" name="first_name" size="22" maxlength="8"></td>	
		 </tr>
	         <tr>
                     <th><label>Password :</label></th>
		     <td><input type="password" name="password" size="22" maxlength="8"></td>
		 </tr>
	         <tr>
                     <th><label>Course : </label></th>
	             <td>
                          Php <input type="checkbox" name="course_1" value="Php" checked>
			  Java <input type="checkbox" name="course_2" value="Java">
                     </td>
		 </tr>
	         <tr>
                     <th><label>Gender :</label></th>
                     <td>
                         Male <input type="radio" name="gender" value="Male" checked>
                         Female <input type="radio" name="gender" value="Female">
                      </td>
                 </tr>
                 <tr>
                      <th><label>Address :</label></th>
                      <td>
                          <textarea name="address" cols="22" rows="5">
                          </textarea>
                      </td>
                 </tr>
                 <tr>
                      <th><label>Country :</label></th>
                      <td>
                           <select name="country">
                               <option>---Select Option----</option>
                               <option selected>Pakistan</option>
                               <option>United States Of America</option>
                               <option>Canada</option>
                               <option>India</option>
                           </select>
                      </td>
                 </tr>
                 <tr align="center">
                     <td colspan="2">
                        <input type="submit" name="submit" value="submit">
                        <input type="reset" name="reset" value="Reset">
                     </td>
                 </tr>
	    </form>
	</table>


</body>
</html>