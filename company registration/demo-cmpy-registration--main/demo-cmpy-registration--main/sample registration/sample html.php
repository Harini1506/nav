<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
 </head>
 <body>

       <form method="post" action="sample php.php">
       <br><br>
             NAME: <input type="text" name="name" ><br><br>
             PHONE:<input type="tel" name="phone" ><br><br>
             <input type="submit" value="submit"><br><br>
       </form> 
       
       <?php
       $query='SELECT * FROM LOGIN'
       ?>
   
 </body>
</html>