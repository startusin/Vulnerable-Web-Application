<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="../../Resources/hmbct.png" />
      <title> Level 1 </title>
   </head>

   <body>    
      <div style="background-color:#c9c9c9;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='fileinc.html';">Main Page</button>  
      </div>
      
      <div align="center"><b><h3>This is Level 1</h3></b></div>
      <div align="center">
      <a href=lvl1.php?file=1.php><button>Button</button></a>
      <a href=lvl1.php?file=2.php><button>The Other Button!</button></a>
      </div>
      
      <?php
        echo "</br></br>";

        $file = $_GET['file'] ?? null;
        $files = ['1.php', '2.php'];

        if ($file && in_array($file, $files)) {
            @include($_GET[ 'file' ]);
            echo"<div align='center'><b><h5>".htmlentities($file)."</h5></b></div> ";
        } else {
            echo"<div align='center'>Not found</div> ";
        }
      ?>
   </body>
</html>

