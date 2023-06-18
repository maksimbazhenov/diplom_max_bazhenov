<?php
// Подключение к базе данных
require_once '../../connect/connect.php'; 

if(isset($_POST["save"])){

  $list=['.php', '.zip', '.js', '.rar', '.html', '.exe'];
    foreach($list as $item){
      if(preg_match("/$item$/", $_FILES['im'] ['name'])) exit("Расширение не подходит");
    }
    $type=getimagesize($_FILES['im'] ['tmp_name']);
      if($type && ($type['mime'] !='image/jpg' || $type['mime'] !='image/png' || $type['mime'] !='image/jpeg')){
        if($_FILES['im']['name']<1024*1000){
          $upload='../../img/user/' .$_FILES['im'] ['name'];

          if(move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo "<h1 class='mt-10' style='text-aling:center'>Отзыв успешно отправлен!
          <br> Спасибо!!!</h1>";
          else echo "Ошибка загрузки";
        }
        else exit("Размер фаила привышен");
      }
      else exit("Размер фаила Фаил не подходит");
}
?>
<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $filename = $_POST['filename'];
  
  
  $sql = "INSERT INTO `subject` (name, email, filename, message) VALUES (:name, :email, :filename, :message)";
  $query = $pdo->prepare($sql);
  $query->execute([
      'name' => $name,
      'email' => $email,
      'message' => $message,
      'filename' => $_FILES['im'] ['name'],
      
  ]);
  
  echo '<meta HTTP-EQUIV="Refresh" Content="1; URL=../../../../index.php">';
  ?>