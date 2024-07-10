<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MArksheet 21690</title>
</head>
<body>

<h1 align="center">Marksheet 1 IF/ELSE By Ahmed 21690</h1>

<script>


var sub1=70,sub2=46,sub3=59,sub4=60,sub5=70
var passing = 40
var total = sub1+sub2+sub3+sub4+sub5
var percentage = total/500*100

document.write("Total marks = "+total+"<br>")
document.write("Percentage = "+percentage+"<br>")

if(sub1<passing || sub2<passing || sub3<passing || sub4<passing || sub5<passing){
    document.write("Grade: Null<br>Failed in Subjects")
}else if(percentage>80&&percentage<100){
    document.write("Grade:A")
}else if(percentage>60&&percentage<80){
    document.write("Grade:B")
}else if(percentage>40&&percentage<60){
    document.write("Grade:C")
}else if(percentage>30&&percentage<40){
    document.write("Grade:D")
}else if(percentage<30){
    document.write("Grade:F")
}





</script>

<hr>

<h1 align="center">Marksheet 2 Switch By Ahmed 21690</h1>

<script>

var sub1=70,sub2=36,sub3=59,sub4=60,sub5=70
var passing = 40
var total = sub1+sub2+sub3+sub4+sub5
var percentage = total/500*100

document.write("Total marks = "+total+"<br>")
document.write("Percentage = "+percentage+"<br>")

switch(true){

case (sub1<passing || sub2<passing || sub3<passing || sub4<passing || sub5<passing):
    document.write("Grade: Null<br>Failed in Subjects")
    break

case(percentage>80&&percentage<100):
    document.write("Grade:A")
    break
case(percentage>60&&percentage<80):
    document.write("Grade:B")
    break
case(percentage>40&&percentage<60):
    document.write("Grade:C")
    break
case(percentage>30&&percentage<40):
    document.write("Grade:D")
    break
case(percentage<30):
    document.write("Grade:F")
    break




}




</script>




<hr>

    
</body>
</html>