<?php

$Name = $_POST ['Name'];
$Email = $_POST ['Email'];
$Message = $_POST ['Message'];

$conn = new mysqli ('localhost', 'root', '', 'test');
if ($conn -> connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}else {
    $smtmt = $conn->prepare("Insert into registration(Name,Email,Message)values(?, ?, ?,)")
    $stmt->bind_param("sss", $Name, $Email, $Message );
    $stmt->execute();
    echo "Registration Succesful!";
    $stmt->close();
    $conn->close();
}

?>