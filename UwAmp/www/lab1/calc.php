<style>
   HTML { font-size: 60px;
    color: black;
    text-align: center;
    background-color: blanchedalmond;
}  
  </style>
<?php 
echo $b = "Результат подсчета = ";
echo $v = $b + ($_GET["A"] * $_GET["A"] * $_GET["A"]);
?> 