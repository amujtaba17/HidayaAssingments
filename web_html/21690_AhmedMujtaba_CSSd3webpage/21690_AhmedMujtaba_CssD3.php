<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>:::: Css Day 3 Assingment</title>
    <link rel="stylesheet" href="../21690_AhmedMujtaba_CSSd3webpage/css/grid_view_by_amj.css" />

    <style>

        .box{
            text-align: center;
            padding: 30px;
            border: 1px solid;
            /* Box Position is Dynamic Sir You Can Change */
            position: relative;
            left: 12%;
            top: 10%;
            
        }

        
        .boxrowheader{

            position: sticky;
            top: 0;
        }

        .boxheader{

            background-color: gold;
            color:brown;
            padding: 30px;
            text-align: center;
        }
      * {
        margin: 0%;
        padding: 0%;
      }

      .scrollheader{

        text-align: center;
        background-color: darkblue;
        color: yellow;
        padding: 30px;
        /* position: sticky; */
        /* top: 0;
        left: 0;
        right: 0;
        bottom: 0; */


      }

      .scrollrow{
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        left: 0;
      }

      .header {
        background-color: black;
        color: white;
        text-align: center;
        padding: 30px;
        border: 3px dashed green;
        /* border-radius: 32px; */
        /* position: sticky; */
        /* top: 0; */
      }

      .contentrow{

        padding:8px;
        margin: 2px;
        
      }

      .contentc1,.contentc2{
        padding: 20px;
        border: 1px solid red;
        margin: 5px;
        text-align: justify;
        border-radius: 20px;
      }

      .contentc1 h1,.contentc2 h1{
        padding:  2px;
    
      }

      

      .headerrow{

        position: sticky;
        top: 0;
      }

      
    </style>
  </head>
  <body>
    <!-- Header 1 Section -->

    <div class="row headerrow">
      <div class="column-12 header">
        <h1>Main Header</h1>
      </div>
    </div>

    <!-- Header 1 End -->

    <!-- Content Section -->

    <div class="row contentrow">
      <div class="column-6 contentc1">
        <h1>Paragraph 1</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
          eum magni obcaecati ut minus! Magnam voluptatem temporibus
          consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
          deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Rem labore mollitia inventore impedit,
          nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
          Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
        </p>

        
      </div>

      <div class="column-6 contentc2">

        <h1>Paragraph 2</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
          eum magni obcaecati ut minus! Magnam voluptatem temporibus
          consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
          deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Rem labore mollitia inventore impedit,
          nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
          Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
        </p>
      </div>
    </div>
<!-- C1 end  c2 Start -->

    <div class="row contentrow">
        <div class="column-6 contentc1">
          <h1>Paragraph 1</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
  
          
        </div>
  
        <div class="column-6 contentc2">
  
          <h1>Paragraph 2</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
        </div>
      </div>

      <!-- C2 end C3 Start -->

      <div class="row contentrow">

        <div class="column-6 contentc1">
          <h1>Paragraph 1</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
  
          
        </div>
  
        <div class="column-6 contentc2">
  
          <h1>Paragraph 2</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
        </div>
      
    </div>
    <!-- Content Section 1 end -->

    <!-- Scroll Header -->

    <div class="row scrollrow">

        <div class="column-12 scrollheader">
            <h1> Sticky Scroll Header</h1>
        </div>
    </div>
    
    <!-- Scroll Header end -->


    <!-- Content Section 2 Start -->

    <div class="row contentrow contentrow2">
        <div class="column-6 contentc1">
          <h1>Paragraph 1</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
  
          
        </div>
  
        <div class="column-6 contentc2">
  
          <h1>Paragraph 2</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
        </div>
      </div>
  <!-- C1 end  c2 Start -->
  
      <div class="row contentrow">
          <div class="column-6 contentc1">
            <h1>Paragraph 1</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
    
            
          </div>
    
          <div class="column-6 contentc2">
    
            <h1>Paragraph 2</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
          </div>
        </div>
  
        <!-- C2 end C3 Start -->
  
        <div class="row contentrow">
  
          <div class="column-6 contentc1">
            <h1>Paragraph 1</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
    
            
          </div>
    
          <div class="column-6 contentc2">
    
            <h1>Paragraph 2</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
          </div>
        
      </div>
      <!-- Content Section 2 end -->
       <!-- Content Section 3 -->

    <div class="row contentrow">
        <div class="column-6 contentc1">
          <h1>Paragraph 1</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
  
          
        </div>
  
        <div class="column-6 contentc2">
  
          <h1>Paragraph 2</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
            eum magni obcaecati ut minus! Magnam voluptatem temporibus
            consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
            deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
            consectetur adipisicing elit. Rem labore mollitia inventore impedit,
            nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
            Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
          </p>
        </div>
      </div>
  <!-- C1 end  c2 Start -->
  
      <div class="row contentrow">
          <div class="column-6 contentc1">
            <h1>Paragraph 1</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
    
            
          </div>
    
          <div class="column-6 contentc2">
    
            <h1>Paragraph 2</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
          </div>
        </div>
  
        <!-- C2 end C3 Start -->
  
        <div class="row contentrow">
  
          <div class="column-6 contentc1">
            <h1>Paragraph 1</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
    
            
          </div>
    
          <div class="column-6 contentc2">
    
            <h1>Paragraph 2</h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione aut,
              eum magni obcaecati ut minus! Magnam voluptatem temporibus
              consequuntur, officiis velit, reiciendis iusto, minima nesciunt facere
              deserunt aliquid obcaecati quia!Lorem Lorem ipsum dolor sit amet
              consectetur adipisicing elit. Rem labore mollitia inventore impedit,
              nesciunt, adipisci a magni accusamus eius quibusdam tempore incidunt!
              Accusamus officia, quidem beatae assumenda velit impedit cupiditate.
            </p>
          </div>
        
      </div>
      <!-- Content Section 3 end -->

      <!-- Another Header -->

      <div class="row boxrowheader">
        <div class="column-12 boxheader">
            <h1>Play with box</h1>
        </div>
      </div>

      <!-- Another Header end -->

      <div class="row">
    <div class="column-12">

        <div class=" column-2 box"><h1>I am a Box <br> Position me where u want</h1></div>

      </div>
    
    </div>
  
  
  
  

  </body>
</html>
