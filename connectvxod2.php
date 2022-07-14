<?php
require_once 'registr_insert.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LITERA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="regotp2.css">
<meta http-equiv="refresh" content="6;URL=regotp2.html" />
    </head>
<body>
  <div>
  <p>З</p>
  <p>А</p>
  <p>Г</p>
  <p>Р</p>
  <p>У</p>
  <p>З</p>
  <p>К</p>
  <p>А</p>
</div>


</body>
</html>
<?php
if (isset($_POST['popavxod2']))
{
    // Переменные с формы
    $name = $_POST['name'];
    $text = $_POST['text'];

    $result="INSERT INTO `vxod2` (`name`,`text`) VALUES ('$name','$text')";
    $mysqli->query($result);
    if($result){


    }else{
        echo "Произошла ошибка!";
    }

}
?>