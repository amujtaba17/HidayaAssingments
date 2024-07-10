<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Even</title>
</head>
<body>

<h1 align="center">Sum of even numbers using prompt 21690 Ahmed Mujtaba</h1>
    
<hr>

<script>

var input
var sum=0

while(true){

    input=Number(prompt("Enter a Number:"))

    if(input%2===0){
        sum+=input
    }else{
        break
    }
}

alert("Sum of all inpput even numbers enterd is :"+sum)
document.write("Sum of all input even numbers entered is :"+sum)

</script>
</body>
</html>