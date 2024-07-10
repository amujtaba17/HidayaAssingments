<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>21690 -- CSS</title>

    <style>
      .link1::before {
        content: url(Images/word.png);
        padding-right: 10px;
      }

      .link2::before {
        content: url(Images/excel.png);
        padding-right: 10px;
      }

.link3::before {
        content: url(Images/ppt.png);
        padding-right: 10px;
      }


      .link4::before {
        content: url(Images/pdf.png);
        padding-right: 10px;
      }
            
    </style>
  </head>
  <body>
    <a href="" class="link1">Link for MS Word</a>
    <br>

    <a href="" class="link2">Link for Ms Excel (xlmns)</a>
    <br>

    <a href="" class="link3">Link for MS PPT</a>
    <br>

    <a href="" class="link4">Link for PDF</a>
  </body>
</html>
