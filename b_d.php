// Переменные с формы
$name = $_POST['name'];
$text = $_POST['text'];

// Параметры для подключения
$db_host = "localhost"; 
$db_user = "user"; // Логин БД
$db_password = "123"; // Пароль БД
$db_base = 'mybase'; // Имя БД
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
