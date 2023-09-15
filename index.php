<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Store the user data in a text file (not recommended for production)
    $user_data = "$name, $age, $gender, $email, $password\n";
    file_put_contents("user_data.txt", $user_data, FILE_APPEND);

    // Redirect to a success page
    header("Location: registration_success.html");
    exit;
}
?>
