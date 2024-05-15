<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<title>Pedidos Coca-Cola</title>
<link rel="stylesheet" href="styles.css">
<style>
    @media only screen and (max-width: 600px) {
        .container {
            width: 90%;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
        }

        button {
            width: 100%;
        }
    }
</style>
</head>
<body>
<header>
    <img src="Rectangle 11.png" alt="" class="logo">
</header>
<main>
    <div class="container">
        <h1>Recibir Pedidos</h1>
        <form action="guardar_datos.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pedido">Pedido:</label>
                <textarea id="pedido" name="pedido" required></textarea>
            </div>
            <div class="form-group">
                <label for="distribuidor">Distribuidor:</label>
                <input type="text" id="distribuidor" name="distribuidor" required>
            </div>
            <button type="submit">Enviar Pedido</button>
        </form>
    </div>
</main>
</body>
</html>
