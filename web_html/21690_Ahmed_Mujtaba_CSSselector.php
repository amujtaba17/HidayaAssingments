<!DOCTYPE html>
<html lang="en">

<head>

    <style>
    h1 {

        text-align: center;
        color: greenyellow;
    }

    .paragraph_1 h1 {

        color: green;
        text-align: left;
    }

    .paragraph_2 h1 {

        color: blue;
    }

    .paragraph_2 p {

        color: red;
        text-align: center;
        background-color: aqua;
        font-weight: bold;
    }


    .paragraph_3>p {

        color: brown;
        text-transform: uppercase;

    }


    .paragraph_3>h1 {

        color: midnightblue;
        text-transform: uppercase;
    }

    .paragraph_4 ul li:first-child {

        color: yellow;
    }

    .paragraph_4 ul li:last-child {

        color: red;
        font-size: 30;

    }

    .paragraph_4 ul li:nth-child(3) {

        color: cyan;
        font-size: 30;

    }

    .paragraph_5 p::first-letter{

        font-size: 60px;
    }
    </style>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21690 - Css Selector Assigment</title>
</head>

<body>



    <h1>Assingment of using CSS selectors by Ahmed Mujtaba Jawad</h1>

    <hr>

    <h2>#1.</h2>

    <div class="paragraph_1">

        <h1>History of Pakistan</h1>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore numquam aliquam asperiores, perspiciatis
            nostrum nulla blanditiis fuga adipisci deleniti veniam vero nihil esse dolorem voluptates perferendis
            debitis
            maiores eum. Officiis!</p>

        <hr>
        <h2>#2.</h2>

        <div class="paragraph_2">

            <h1>History of India</h1>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore numquam aliquam asperiores,
                perspiciatis
                nostrum nulla blanditiis fuga adipisci deleniti veniam vero nihil esse dolorem voluptates perferendis
                debitis
                maiores eum. Officiis!</p>

        </div>

        <hr>

        <h2>#3.</h2>

        <div class="paragraph_3">

            <h1>Php Basics by HIDAYA TRUST</h1>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore numquam aliquam asperiores,
                perspiciatis
                nostrum nulla blanditiis fuga adipisci deleniti veniam vero nihil esse dolorem voluptates perferendis
                debitis
                maiores eum. Officiis!</p>

        </div>
        <hr>

        <h2 id="#pseaudo">#Psuedo Classes.</h2>

        <div class="paragraph_4">
            <ul>
                <li>1st Child</li>
                <li>2nd Child</li>
                <li>3rd Child</li>
                <li>4rth Child</li>
                <li>5th Child</li>


            </ul>

        </div>
        <hr>

        <h2>#Letter Large.</h2>

        <div class="paragraph_5">

            <h1>Oracle Orgnization</h1>

            <p>Oracle Organization Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reprehenderit
                doloremque dicta explicabo culpa enim minus facilis incidunt, deserunt perspiciatis repellat officia
                iure natus aliquid accusantium quae ipsam voluptatibus. Magni.</p>

        </div>
        <hr>




</body>

</html>