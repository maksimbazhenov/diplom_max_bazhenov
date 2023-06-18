<?php
 require_once '../../connect/connect.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'DELETE') {
  // Получение идентификатора записи для удаления из URL
  $url = $_SERVER['REQUEST_URI'];
  $url = explode('/', $url);
  $id = $url[count($url) - 1];

  // Подготовка и выполнение SQL-запроса для удаления записи из базы
  $statement = $pdo->prepare("DELETE FROM `subject` WHERE id = :id");
  $statement->bindParam(':id', $id);
  $statement->execute();

  // Дополнительные действия, например, перенаправление пользователя
  echo '<meta HTTP-EQUIV="Refresh" Content="1; URL=../../../../admin/admin_reviews.php">';
  exit();
}