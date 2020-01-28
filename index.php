<!DOCTYPE html>
<html lang="cz">
<head>
    <title></title>
</head>
<body>


<?php
  $p1 = filter_input(INPUT_GET, "p1");
  $p2 = filter_input(INPUT_GET, "p2");
  $p3 = filter_input(INPUT_GET, "p3");
  $p4 = filter_input(INPUT_GET, "p4");
  $p5 = filter_input(INPUT_GET, "p5");
 ?> 
 <a href = "index.php?p1=<?= $p1?>&p2=<?= $p2?>&p3=<?= $p3?>& p4=<?= $p4?> p5=<?= $p5?>&"style= "background-color:blue; height: 40px; width: 40px; display:inline-block;"> <?php
    ?> </a>
   


</body>
</html>               