<?php

session_start();

if(isset($_POST['login'])){


    if($_POST['Username']==""||$_POST['Password']==""){

        header("location:Login.php?message=Username or Password Cannot be Empty");
    }elseif($_POST['Username']&&$_POST['Password']){


        $data_users=array(

            1=>array("Email"=>"Jawad@gmail.com","Username"=>"Jawadahmed","Password"=>"1234","Name"=>"Ahmed Mujtaba Jawad","Role"=>"Admin","Status"=>1),
            2=>array("Email"=>"Aftab@gmail.com","Username"=>"Aftab123","Password"=>"12345","Name"=>"Aftab Ahmed","Role"=>"Teacher","Status"=>1),
            3=>array("Email"=>"Fatima.com","Username"=>"Fatima12","Password"=>"123456","Name"=>"Fatima Khan","Role"=>"Student","Status"=>0),
            4=>array("Email"=>"Sajjad34@gmail.com","Username"=>"Sajjad34","Password"=>"1234567","Name"=>"Sajjad Ali","Role"=>"Teacher","Status"=>1),
            5=>array("Email"=>"sabaKazi@.com","Username"=>"Saba12","Password"=>"12345678","Name"=>"Saba Kazi","Role"=>"Student","Status"=>1),




        );
        
        $flag=true;

        foreach($data_users as $key=>$userdata){

            if(
                $userdata["Username"] == $_POST["Username"]&&$userdata["Password"] == $_POST["Password"]
            ){

                $flag=false;
                if($userdata["Status"]==1){

                    $_SESSION['data']=$userdata;

                if($userdata['Role']== 'Admin'){
                    $_SESSION['data']=$userdata;

                    
                    header('location:Admin_Dashboard.php');
                }elseif($userdata['Role']== 'Teacher'){
                    $_SESSION['data']=$userdata;

                    
                    header('location:Teacher_Dashboard.php'); 
                }elseif($userdata['Role']=='Student'){
                    $_SESSION['data']=$userdata;

                    
                    header('location:Student_Dashboard.php');

                }
                
        }else{
            
            header("location:Login.php?message=User Blocked");
        }
        
            



            }


}

if($flag){
    header("location:Login.php?message=Invalid Login Credentials");
}

}



}







?>