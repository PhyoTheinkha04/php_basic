<?php
 $js =<<<st
   <!DOCTYPE html>
   <html>
   <head>
        <title>JS</title>
        <link rel="stylesheet" type="text/css" href="css/common.css">
   </head>
        <body>
           <h1 id="demo">introduce to me</h1>
           <img id="demo2">
           <div>
           <button type="button" onclick="myFunction()">my age</button>
           <button type="button" onclick="myFunction2()">my name</button>
           <button type="button" onclick="myFunction4()">dele that</button>
             
           </div>
        <script>
           var x = 2;
           var y = 5;
           var z = 4;
           var a = (y+z)*x;
           function myFunction() {
            document.getElementById("demo").innerHTML ="my age is: " + a;
           }
           var p = "Phyo";
           var t = "Theinkha";
           var n = p + " " + t;
          function myFunction2() {
           document.getElementById("demo").innerHTML = "my name is " +n;
          }
           function myFunction4() {
           document.getElementById("demo").innerHTML="introduce to me";
          }
  
        </script>
        </body>
   </html>
 st;
 echo $js;
 ?>