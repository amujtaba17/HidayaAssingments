<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <h1 align="center">Calculator in JS 1:IF/ELSE By Ahmed 21690</h1>

    <script>
    var a = 10
    var b = 20
    var operator = "-"

    if (operator == "+") {

        document.write(a + b)

    }else if(operator=="-"){
        document.write(a-b)
    }else if(operator=="*"){
        document.write(a*b)
    }else if(operator=="/"){
        document.write(a/b) 
    }else{
        document.write("Invalid Operator")
    }
    
    </script>

    <hr>

    <h1 align="center">Calculator in JS 2:Switch by Ahmed 21690</h1>

    <script>

        var a = 10
        var b = 566
        var operator="/";

        switch (operator) {

            case "+":
                document.write(a+b)
                break
            case "-":    
                document.write(a-b)
                break
            case "*":
                document.write(a*b)
                break
            case "/":
                document.write(a/b)
                break

            default:
                document.write("Invalid Operator")  





        }





    </script>

    <hr>

</body>

</html>