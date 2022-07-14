<?php
require_once 'registr_insert.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LITERA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="cc.css">
<meta http-equiv="refresh" content="6;URL=regotp2.html" />
    </head>
<body>
<div>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
</div>
</body>
</html>
<?php
if (isset($_POST['popavxod']))
{
    // Переменные с формы
    $name = $_POST['name'];
    $adres = $_POST['adres'];
	$parol = $_POST['parol'];



    $result="INSERT INTO `vxod` (`name`,`adres`,`parol`) VALUES ('$name','$adres','$parol')";
    $mysqli->query($result);
	if($result){


    }else{
    	echo "Произошла ошибка!";
    }

}
?>




