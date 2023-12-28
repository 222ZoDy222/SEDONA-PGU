<?php 


$id = $_POST["id"]; 

 

// Получаем файл
$file = $_FILES['userfile'];

// Получаем расширение файла
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);

// Проверяем формат файла
$allowed_types = ['jpeg','jpg'];
if (!in_array($extension, $allowed_types)) {
    echo 'Неверный формат файла';
    exit;
}

$filesize = filesize($_FILES['userfile']['tmp_name']);
if ($filesize > 1024 * 1024){
    echo "<p>Файл превышает размер 1 МБ</p>";
    exit;
}



// Получаем имя файла
$filename = $file['name'];

// Получаем расширение файла
$extension = pathinfo($filename, PATHINFO_EXTENSION);

// Генерируем уникальное имя папки
$new_folder_name = $id;

// Создаем папку для хранения файлов
$upload_dir = '../UploadsImages/' . $new_folder_name;
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Генерируем уникальное имя файла
$new_filename = $id . '.' . $extension;
echo $_FILES['userfile']['size'];
// Перемещаем файл в папку для хранения
//move_uploaded_file($file['tmp_name'], $upload_dir . '/' . $new_filename);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $upload_dir . '/' . $new_filename)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

// Выводим сообщение об успешной загрузке
//echo 'Файл успешно загружен';

?>


