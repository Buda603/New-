<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'db_Pakhutov';

$conn = mysqli_connect($host, $user, $password, $db_name);
if ($conn === false) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

if (isset($_GET['delete_id'])) {
    $id = (int)$_GET['delete_id'];
    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    header("Location: index.php");
    exit();
}

if (isset($_POST['add'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    mysqli_query($conn, "INSERT INTO user (name, login, birthday) VALUES ('$name', '$login', '$birthday')");
    header("Location: index.php");
    exit();
}

if (isset($_POST['update'])) {
    $id = (int)$_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
    mysqli_query($conn, "UPDATE user SET name='$name', login='$login', birthday='$birthday' WHERE id=$id");
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пользователи</title>
    <style>
        .user { margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        .user a { margin-right: 10px; }
    </style>
</head>
<body>

<form method="POST">
    <input type="text" name="name" placeholder="Имя" required>
    <input type="text" name="login" placeholder="Логин" required>
    <input type="date" name="birthday" required>
    <input type="submit" name="add" value="Добавить пользователя">
</form>

<h1>Пользователи</h1>

<?php
$result = mysqli_query($conn, "SELECT * FROM user");
$counter = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='user'>";
    echo "<h2>Пользователь $counter</h2>";
    echo htmlspecialchars($row['name']) . "<br>";
    echo "Дата рождения: " . htmlspecialchars($row['birthday']) . "<br>";
    echo "login: " . htmlspecialchars($row['login']) . "<br>";
    echo "<a href='?delete_id=" . $row['id'] . "'>Удалить</a> ";
    echo "<a href='update.php?id=" . $row['id'] . "'>Обновить</a>";
    echo "</div>";
    $counter++;
}

mysqli_close($conn);
?>

</body>
</html>
