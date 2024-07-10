<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>

<h1 align="center">Prime number by Ahmed Mujtaba</h1>
<hr>
 <script>

    var limit = 50; //defines the limit to be ittrated

    for(var num=2;num<=limit;num++){

        var prime=true
    
    for(var div=2;div*div<=num;div++){

        if(num%div==0){

            prime=false
            break
        }
    
    
    }
    
    if(prime){
        document.write(num+"<br>");
    }
}





 </script>
    
</body>
</html>