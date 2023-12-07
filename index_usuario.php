<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index_login.html");
    exit();
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<style>
body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }

        p {
            text-align: center;
            margin-top: 10px;
            color: #666;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        video {
            width: 80%;
            max-width: 800px;
            margin-top: 20px;
        }
    </style>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?></h2>
    <p>alejo capillera 6b</p>
    <form action="index_login.html">
        <input type="submit" value="Atrás">
    </form>
    <video width="640" height="360" controls autoplay>
        <source src="video.mp4" type="video/mp4">
</body>
</html>
