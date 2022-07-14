// Переменные с формы
$name = $_POST['name'];
$adres = $_POST['adres'];
$tel = $_POST['tel'];
$soob = $_POST['soob'];

// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = "root"; // Пароль БД
$db_base = 'US'; // Имя БД
$db_table = "mytable"; // Имя Таблицы БД

try {
    // Подключение к базе данных
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
    // Устанавливаем корректную кодировку
    $db->exec("set names utf8");
} catch (PDOException $e) {
    // Если есть ошибка соединения, выводим её
    print "Ошибка!: " . $e->getMessage() . "<br/>";
}

// Собираем данные для запроса
$data = array( 'name' => $name, 'adres' => $adres, 'tel' => $tel, 'soob' => $soob, ); 
// Подготавливаем SQL-запрос
$query = $db->prepare("INSERT INTO $db_table (name, adres, tel, soob) values (:name, :adres, :tel, :soob)");
// Выполняем запрос с данными
$query->execute($data);
if ($result) {
  echo "Информация занесена в базу данных";
}



if (isset($_POST['name']) && isset($_POST['adres']) isset($_POST['tel']) && isset($_POST['soob'])){
    // Переменные с формы
    $name = $_POST['name'];
    $adres = $_POST['adres'];
     $tel = $_POST['tel'];
      $soob = $_POST['soob'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "admin"; // Логин БД
    $db_password = "admin"; // Пароль БД
    $db_base = 'US'; // Имя БД
    $db_table = "mytable"; // Имя Таблицы БД
    
    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса
        $data = array( 'name' => $name, 'adres' => $adres, 'tel' => $tel, 'soob' => $soob ); 
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (name, adres, tel, soob ) values (:name, :adres, :tel, :soob)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
    
    if ($result) {
        echo "Успех. Информация занесена в базу данных";
    }
}