<?php
require_once 'registr_insert.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>LITERA</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="otp.css">
<meta http-equiv="refresh" content="5;URL=otpravleno.html" />
    </head>

<body>
  <div class="container">
    <div class="Loading"></div>
  </div>

</body>
</html>

<?php
if (isset($_POST['popa']))
{
    // Переменные с формы
    $name = $_POST['name'];
    $adres = $_POST['adres'];
	$tel = $_POST['tel'];
	$soob = $_POST['soob'];


    $result="INSERT INTO `zhalob` (`name`,`adres`,`tel`,`soob`) VALUES ('$name','$adres','$tel','$soob')";
    $mysqli->query($result);
	if($result){


    }else{
    	echo "Произошла ошибка!";
    }

}
?>

