<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonanci series by Ahmed</title>
</head>
<body>

<h1 align="center">Fibonanci series by Ahmed Mujtaba</h1>
<hr>

<script>

    var n = 10;
    var a=0,b=1,temp

    document.write(a+" "+b+" ")


    for (var i=1;i<=n;i++){


        temp=a+b
        a=b
        b=temp

        document.write(temp+" ");
    }

</script>
    
</body>
</html>