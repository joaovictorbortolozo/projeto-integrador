<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap');
    </style>
    <title>Reserva de Mesas</title>

</head>
<html>

<head>
    <title>Sistema de Reservas de Mesa</title>
</head>

<body>
    <h2>Faça sua reserva</h2>
    <form action="reservar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="data">Data:</label>
        <input type="date" name="data" required><br>

        <label for="hora">Hora:</label>
        <input type="time" name="hora" required><br>

        <label for="quantidade">Quantidade de pessoas:</label>
        <input type="number" name="quantidade" required><br>

        <input type="submit" value="Reservar">
    </form>

    <style>
        body {
            font-family: 'Yeseva One', cursive;
            background-color: #54595F;
            padding: 20px;
            background-image: url(comida2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        h2 {
            color: #efa765;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.8);
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.3);
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            padding: 15px;
            border-radius: 15px;
        }

        form {
            background-color: rgb(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #efa765;

        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #7A7A7A;
            color: #fff;
            cursor: pointer;
            color: #efa765;
        }

        input[type="submit"]:hover {
            background-color: #7A7A7A;
            color: #efa765;
        }

        .success-message {
            color: #4CAF50;
            font-weight: bold;
            margin-top: 20px;
        }


        @media (min-width: 480px) {
            form {
                width: 400px;
                margin: 0 auto;
            }
        }

        @media (min-width: 768px) {
            form {
                width: 600px;
            }
        }
    </style>
    
</body>

</html>