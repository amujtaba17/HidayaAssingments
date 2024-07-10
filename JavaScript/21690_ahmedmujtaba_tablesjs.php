<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tables in java script by Ahmed Mujtaba</title>
</head>

<body>
    <center>
    <h1 align="center">Tables in java script by Ahmed Mujtaba</h1>
    <hr>

    <script>
    for (var i = 1; i <= 10; i++) {

        document.write("<br><h3>Table of<h3> " + i + "<br><br>")


        if (i === 5) {
            var message = confirm("Do you want to  continue??")
            if (!message) {
                break
            }
        }




        for (j = 1; j <= 10; j++) {

            document.write(i + " * " + j + " = " + i * j + "<br>")


        }



    }
    </script>
</center>
</body>

</html>