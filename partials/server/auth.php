<?php

include __DIR__ . '/settings.php';


function login($email, $password, $conn)
{
    $md5password = md5($password);

    $sql = "SELECT `id`,`name`,`email`, `password` FROM `users` WHERE `email` = ?  AND `password` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $md5password);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['userId'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $conn->close();
        header("location: index.php");
    }
}

function register($name, $surname, $email, $password, $conn)
{
    $md5password = md5($password);
    $sql = "INSERT INTO `users` (`name`,`surname`,`email` ,`password`) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $surname, $email, $md5password);
    $stmt->execute();
    $result = $stmt->insert_id;
    if ($result) {
        $_SESSION['userId'] = $result;
        $conn->close();
        header("location: index.php");
    }
}

if (isset($_POST['loginemail']) && isset($_POST['loginpassword'])) {
    login($_POST['loginemail'], $_POST['loginpassword'], $conn);
}

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])) {
    register($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password'], $conn);
}