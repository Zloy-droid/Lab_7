<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $uploadDirectory = 'uploads/'; 
        $uploadFile = $uploadDirectory . basename($_FILES['file']['name']);

        // Проверка, существует ли уже файл с таким именем
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "<h2>Файл успешно загружен!</h2>";
            echo "<p>Имя загруженного файла: " . htmlspecialchars($_FILES['file']['name']) . "</p>";
        } else {
            echo "<h2>Ошибка при загрузке файла!</h2>";
        }
    } else {
        echo "<h2>Файл не был загружен. Ошибка загрузки: " . $_FILES['file']['error'] . "</h2>";
    }
} else {
    echo "<h2>Нет данных для загрузки.</h2>";
}
?>
