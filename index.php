<?php
require 'connection.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $message = $_POST["message"];  // Capture the message input

    $query = "INSERT INTO tb_data (name, gender, email, message) VALUES ('$name', '$gender', '$email', '$message')";
    mysqli_query($conn, $query);
    echo "<script>alert('Data Inserted Successfully');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 350px;
        }
        label {
            margin-bottom: 8px;
            display: block;
            font-weight: 600;
            color: #333;
        }
        input[type="text"], select, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #383766;
        }
    </style>
</head>
<body>
    <form action="" method="post" autocomplete="off">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="gender">Gender</label>
        <select name="gender" id="gender" required>
            <option value="" selected hidden>Select your gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>

        <label for="message">Message</label>
        <textarea name="message" id="message" rows="4"></textarea>  <!-- New Message textbox -->

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

