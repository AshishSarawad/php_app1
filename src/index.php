<!DOCTYPE html>
<html>
<head>
    <title>calculator</title>



</head>
<body>
    <div>
    <h1>calculator</h1>
    </div>



   <p>



   <form action="index.php" method="post">
    <input name="v1"/>
    <select name="action" id="">
    <option value="plus">+</option>
    <option value="minus">-</option>



   </select>
    <input name="v2"/>
    <input type="submit" name="submit" value="Submit"/>




    </form>
    </p>



   <p>
<?php



if(isset($_GET["submit"])){



   $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    
   if($_GET["action"]=="plus"){
        $result= $v1+$v2;
        echo " $v1 + $v2 ";



  } else{
    $result= $v1-$v2;
    echo " $v1 - $v2 ";



  }
   echo "= $result";



}



?>



   </p>
</body>
</html>
