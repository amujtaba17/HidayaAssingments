<?php
     echo"<pre>";
      print_r($_REQUEST);
     echo"</pre>";
?>
<!DOCTYPE HTML>
<html>
      <head>
            <title>..:: HTML DAY-4 ::..</title>
      </head>
<body>
	<h1 align="center">..:: HTML DAY-4 ::..</h1>
	<br/>
        <hr/>
<!--
	<table align="center" cellspacing="5" cellpadding="10">
            <form>
                  <tr>
                      <th><label>Color :</label></th>
                      <td><input type="color" name="color" value="#f00"></td>
                  </tr>
                  <tr>
                      <th><label>Email :</label></th>
                      <td><input type="email" name="email" 			   placeholder="Enter Your Valid Email" required></td>
                  </tr>
                  <tr>
                      <th><label>Number :</label></th>
                      <td>
                        <input type="number" name="number" min="1" max="8" 		                               step="2" autofocus>
                      </td>
                  </tr>
                  <tr>
                       <th><label>Range</label></th>
                       <td><input type="range" name="range" min="1" max="10"></td>
                  </tr>
                  <tr>
                       <th><label>Time</label></th>
                       <td><input type="time" name="time"></td>
                  </tr>
                  <tr>
                       <th><label>Week</label></th>
                       <td>
                          <input type="week" name="week" min="2023-W2" 
                           max="2024-W12">
                       </td>
                  </tr>
                  <tr>
                       <th><label>Month</label></th>
                       <td>
                          <input type="month" name="month" min="2023-02" 		           max="2024-02">
                       </td>
                  </tr>
                  <tr>
                      <th><label>Date :</label></th>
                      <td>
                          <input type="date" name="date" min="2023-02-5" 			                   max="2024-03-2">
                     </td>
                  </tr>
                  <tr>
                      <th><label>Url :</label></th>
                      <td><input type="url" name="url"></td>
                  </tr>
                  <tr>
                      <th><label>Image :</label></th>
                      <td><input type="file" name="image" multiple></td>
                  </tr>
                  <tr>
                      <th><label>Pattern :</label></th>
                      <td>
                         <input type="text" name="pattern" pattern="[0-9]{2,5}">
                      </td>
                  </tr>
                  <tr align="center">
                      <td colspan="2">
                         <input type="submit" name="submit" value="submit">
                      </td>
                  </tr>
            </form>
        </table>
	
       -->
	
	<!--
	<h1>..:: Before HTML 5 ::..</h1>
	<img src="image.jpg" width="300" height="200" />
        <p>Fig : 1.1 Nature Image</p>

	<hr/>

	<h1>..:: After HTML 5 ::..</h1>
          <figure>
	     <img src="image.jpg" width="300" height="200" />
                  <figcaption>
                            <p>Fig : 1.1 Nature Image</p>
                  </figcaption>
           </figure>

	-->
	<!--
	<ul type="circle" contenteditable="true">
           <li>Php Basic</li>
           <li>Php Advance</li>
           <li>Java Basic</li>
           <li>Java Advance</li>
        </ul>

	-->
	<!--
	<audio autoplay="autoplay" controls="controls">
               <source src="file_example_MP3_700KB.mp3"/>
        </audio>

	-->

	<!--
	<video autoplay="autoplay" controls="controls">
              <source src="electronic_-_61695 (720p).mp4" />
        </video>
	-->


	<h1 align="center">Semantic Elements</h1>
	
         <header>
                 <h1>Header</h1>
              <nav>
                   <span>Home</span> &nbsp;&nbsp; <span>About Us</span>
              </nav>
         </header>
	
	<section>
                <h1>About Us</h1>
                <p>About Us Content</p>
        </section>
  
        <section>
                <h1>Features</h1>
                <p>About Us Content</p>
        </section>

        <section>
                <h1>Contact Us</h1>
                <p>Contact Us Content</p>
        </section>

	<article>
                <h1>Article Heading</h1>
                <p>Article Description</p>
        </article>

	<aside>
              <p>Side Bar</p>
        </aside>

       <footer>
              <p>@ Hidaya Trust Copy Rights</p>
       </footer>




























</body>
</html>