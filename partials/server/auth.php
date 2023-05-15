<?php

include __DIR__ . '/settings.php';




$sql = "SELECT `name`, `surname` FROM users WHERE `name` = 'Jorge' 0R 1=1";
$result = $conn->query($sql);
var_dump($result);
if ($result && $result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Nome " . $row['name'] . " cognome: " . $row['surname'];
    }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}

$conn->close();


function login($email, $password)
{
    echo $email . '  ' . $password;
}

function register($name, $surname, $email, $password)
{

}

if (isset($_POST['loginemail']) && isset($_POST['loginpassword'])) {
    login($_POST['loginemail'], $_POST['loginpassword']);
}

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['password'])) {
    register($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['password']);
}