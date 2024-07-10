<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body {
        background-image: url(../21690_AhmedMujtaba_webpage_Assingment/css/bgimage.jpg);
        background-position: 50%;
      }

      .sidebar1 a:hover {
        
        color: darkorange;
        background-color: black;
        transition: 1s;
      }

      .sidebar1 a {
        transition: 1s;
      }



      .sidebar1 a:active {
        color: yellow;
        background-color: aliceblue;
      }
      .col8 p {
        color: aliceblue;
        transition: 1s;
      }


      .col8 p:hover {
        font-size: 40px;
        color: white;
        background-color: black;
        transition: 2s;
        
      }

      .col8 h1:hover{
        font-size: 40px;

        background-color: black;
        color: aliceblue;
        transition: 2s;
      }
      
      .col8 h1 {
        font-size: 50px;

        color: rebeccapurple;

        text-shadow: 20px 2px 1px yellow;
      }

      .header {
        width: 100%;
        text-align: center;
        color: blue;
        background-color: black;
      }

      .footer {
        border: 30px solid black;

        width: 100%;
        text-align: center;
        color: cadetblue;
        background-color: black;
      }

      .sidebar1 {
        text-align: center;
        background-color: chartreuse;
      }

      .sidebar2 {
        text-align: center;
        background-color: coral;
      }
    </style>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Css Practice</title>
    <link rel="stylesheet" href="../21690_AhmedMujtaba_webpage_Assingment/css/grid_view_by_amj.css" />
  </head>
  <body>
    <div class="row">
      <div class="column12 header">
        <h1>Header of the website</h1>
      </div>
    </div>

    <div class="row">
      <div class="column-2 sidebar1">
        <h1>Side Bar 1</h1>
        <h2><a href="#" id="hometag">Home</a></h2>
        <h2><a href="#" id="Articletag">Articles</a></h2>
        <h2><a href="#" id="paratag">Paragraphs</a></h2>
        <h2><a href="#" id="logtag">Logout</a></h2>
      </div>

      <div class="col-8 col8">
        <h1 id="para3">Paragraph 1</h1>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
          debitis. Obcaecati cumque rem fugiat modi ipsam eos. Quisquam debitis
          harum quasi molestias hic architecto animi perspiciatis, enim aperiam
          eaque aut.
        </p>

        <h1 id="para2">Paragraph 2</h1>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
          debitis. Obcaecati cumque rem fugiat modi ipsam eos. Quisquam debitis
          harum quasi molestias hic architecto animi perspiciatis, enim aperiam
          eaque aut.
        </p>

        <h1 id="para3">Paragraph 3</h1>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
          debitis. Obcaecati cumque rem fugiat modi ipsam eos. Quisquam debitis
          harum quasi molestias hic architecto animi perspiciatis, enim aperiam
          eaque aut.
        </p>

        <h1>Paragraph 4</h1>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
          debitis. Obcaecati cumque rem fugiat modi ipsam eos. Quisquam debitis
          harum quasi molestias hic architecto animi perspiciatis, enim aperiam
          eaque aut. Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Nobis inventore ea dignissimos illo impedit, iusto quos distinctio
          culpa dolor nihil, obcaecati tempore alias delectus beatae doloribus
          sed numquam! Ipsum, facere.
        </p>

        <h1>Paragraph 5</h1>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet,
          debitis. Obcaecati cumque rem fugiat modi ipsam eos. Quisquam debitis
          harum quasi molestias hic architecto animi perspiciatis, enim aperiam
          eaque aut Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Doloribus facere quaerat perspiciatis necessitatibus pariatur odit
          voluptas quo repellat. Velit quibusdam mollitia fuga illum facere, rem
          eius corporis ut odio magnam?
        </p>
      </div>

      <div class="column-2 sidebar2">
        <h1>Side Bar 2</h1>
        <ul>
          <ul>
            <h1>Topics</h1>
            <li>Pakistan</li>
            <li>India</li>
            <li>Austrailia</li>
          </ul>
        </ul>
      </div>
    </div>

    <div class="row footrow">
      <div class="column12 footer">
        <h1>Footer of the website</h1>
      </div>
    </div>
  </body>
</html>
