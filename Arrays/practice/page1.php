<?php

session_start();


$users=array(

"user1"=>array(

    "Username"=>"Ahmedmujtaba",
    "Password"=>"Jawads123",
    "Role"=>"Admin"
),


"user2"=>array(

    "Username"=>"Faizan",
    "Password"=>"fs123",
    "Role"=>"Teacher"
),





);

// echo "<pre>";
// print_r($users);
// echo "</pre>";

foreach($users as $key=>$values){

    if($values['Role']=="Admin"){

        $_SESSION['data1']=$values;

    }elseif($values['Role']=="Teacher"){
    
    
    $_SESSION['data2']=$values;
    
    
    
    }


}

//$_SESSION['data']= session_destroy();
unset($_SESSION['data']);
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// echo $_SESSION['data1']['Username'];




?>