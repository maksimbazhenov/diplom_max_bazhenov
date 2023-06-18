<?php
// Подключение к базе данных
$host = 'localhost'; // адрес сервера базы данных
$db   = 'maxvel'; // имя базы данных
$user = 'root'; // имя пользователя базы данных
$pass = ''; // пароль пользователя базы данных

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
    exit();
}

// Проверка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  date_default_timezone_set('Asia/Bishkek');
    // Получение данных из формы
    $date = date('d F Y, h:i:s A');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tell = $_POST['tell'];
    $site = $_POST['site'];
    $comment =$_POST['comment'];
    $categories =$_POST['categories'];

    // Подготовка SQL-запроса для вставки данных
    $sql = "INSERT INTO `applications` (date, name, email, tell, site, comment, categories) VALUES (:date, :name, :email, :tell, :site, :comment, :categories)";
    $stmt = $pdo->prepare($sql);

    // Привязка значений к параметрам
    $stmt->bindValue(':date', $date);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':tell', $tell);
    $stmt->bindValue(':site', $site);
    $stmt->bindValue(':comment', $comment);
    $stmt->bindValue(':categories', $categories);

    // Выполнение запроса
    try {
        $stmt->execute();
        // Отображение сообщения об успешной отправке данных
        echo '<h3 style="color: green; test-aling:center;">Ваша заявка успешно отправлены, <br> Мы свяжемся с вами в течение 24 часов.</h3>';
        // Перенаправление на главную страницу через 3 секунды
        header("refresh:3;url=../../../../index.php");
        exit();
    } catch (PDOException $e) {
        echo "Ошибка выполнения запроса: " . $e->getMessage();
    }
}
?>
