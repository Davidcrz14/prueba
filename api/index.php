<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wiadth=device-width, initial-scale=1.0">
    <title>Conexión a Base de Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Estado de la Conexión</h1>
        <?php
        $servername = "sql312.infinityfree.com";
        $username = "if0_37321698";
        $password = "1Dq0m98evc";
        $dbname = "if0_37321698_prueba";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        echo "Conexión exitosa";
        //escribe un hola mud
        ?>
    </div>
</body>

</html>
