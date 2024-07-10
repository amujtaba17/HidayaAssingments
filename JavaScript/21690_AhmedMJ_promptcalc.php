<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prompt Calculator</title>
</head>

<body>

    <h1 align="center">Prompt Calculator by Ahmed 21690</h1>
    <hr>

    <script>
    var input1 = Number(prompt("Enter 1st number:"))
    var input2 = Number(prompt("Enter 2nd number:"))
    var operation = prompt("Select Operation to perform +,-,*,/")
    var performed

    switch (operation) {

        case "+":
            performed = input1 + input2
            break
        case "-":
            performed = input1 - input2
            break
        case "*":
            performed = input1 * input2
            break
        case "/":
            performed = input1 / input2
            break
        default:
            document.write("Invalid operation")
    }

    document.write("Result of current operation " + input1 + " " + operation + " " + input2 +  " = "  +  performed )
    </script>

</body>

</html>