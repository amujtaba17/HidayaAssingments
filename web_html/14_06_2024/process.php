<?php

    //echo $_GET;  // Error     

     //echo"<pre>";
     //print_r($_GET);
     //echo"</pre>";
 
     //echo"<pre>";
     //print_r($_POST);
     //echo"</pre>";

     //echo"<pre>";
     //print_r($_REQUEST);
     //echo"</pre>";
    
     
/*

   if(isset($_GET["submit"])){
   
	echo"<pre>";
        //print_r($_GET);
        echo"</pre>";
        echo"<hr/>";

	echo"Name: "."<h1>".$_GET["first_name"]."</h1>"."<br/>";
        echo"Password :".$_GET["password"]."<br/>";
        echo"Course :".$_GET["course_1"]."<br/>";
        echo"Gender :".$_GET["gender"]."<br/>";
        echo"Address :".$_GET["address"]."<br/>";
        echo"Country :".$_GET["country"];

   }

*/

    if(isset($_POST["submit"])){
 
	echo"<pre>";
        //print_r($_POST);
        echo"</pre>";
        echo"<hr/>";

     //echo"Name: "."<h1>".$_GET["first_name"]."</h1>"."<br/>";
       echo"Name :".$_POST["first_name"]."<br/>";
       echo"Password :".$_POST["password"]."<br/>";
       echo"Course 1 :".$_POST["course_1"]."<br/>";
       echo"Course 2 :".$_POST["course_2"]."<br/>";
       echo"Gender :".$_POST["gender"]."<br/>";
       echo"Address :".$_POST["address"]."<br/>";
       echo"Country :".$_POST["country"];
   
    }	



/*
	if(isset($_REQUEST["submit"])){


	   echo"<pre>";
           //print_r($_REQUEST);
           echo"</pre>";
           echo "<hr/>";
           
           echo"Name : ".$_REQUEST["first_name"]."<br/>";
           echo"Password : ".$_REQUEST["password"]."<br/>";

           echo"Course :" .$_REQUEST["course_2"]."<br/>";

           echo"Gender : ".$_REQUEST["gender"]."<br/>";
           echo "Address :".$_REQUEST["address"]."<br/>";
           echo "Country :".$_REQUEST["country"];
		       


        }


*/











?>