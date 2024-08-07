<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Construcción</title>
    <style>
        body {
            font-family: 'Helvetica Neue', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 40px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .construction-message {
            font-size: 28px;
            font-weight: 700;
            color: #333333;
            margin-bottom: 20px;
        }

        .description {
            font-size: 18px;
            color: #666666;
            margin-bottom: 30px;
        }

        .debt-button {
            font-size: 18px;
            padding: 15px 30px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .debt-button:hover {
            background-color: #218838;
            transform: translateY(-3px);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="construction-message">PÁGINA EN CONSTRUCCIÓN</div>
        <p class="description">Estamos trabajando para reestablecer los servicios</p>
        <a href="https://www.municipalidad.com/sals/deuda" class="debt-button" target="_blank">CONSULTA DE DEUDA</a>
    </div>
</body>

</html>
