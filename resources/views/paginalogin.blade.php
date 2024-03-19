<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Café - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1c1c1c;
            color: #fffaeb;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #603814;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        h1 {
            text-align: center;
            margin-top: -30px; /* Ajuste para alinhar o título com a caixa de login */
            font-family: 'Pacifico', cursive;
            font-size: 36px;
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 20px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="text"],
        input[type="password"] {
            background-color: rgba(255, 255, 255, 0.8);
            color: #1c1c1c;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"] {
            background-color: #d2b48c;
            color: #1c1c1c;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #b5936d;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #fffaeb;
        }

        .login-link a {
            color: #d2b48c;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #b5936d;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 100px; /* Ajuste o tamanho conforme necessário */
            height: auto;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <img src="c:\Users\teylor\Downloads\logotipocafe.png" alt="Logo da Pet Café" class="logo">
        <h1>PetCaféSaoLeopoldo</h1>
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
        <div class="login-link">
            Não tem uma conta? <a href="#cadastro" onclick="toggleCadastro()">Cadastre-se aqui</a>.
        </div>
    </div>

    <!-- Cadastro -->
    <div class="container" id="cadastro" style="display: none;">
        <h2>Cadastro</h2>
        <form action="cadastro.php" method="POST">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="text" name="email" placeholder="E-mail" required>
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <script>
        function toggleCadastro() {
            var cadastroDiv = document.getElementById("cadastro");
            cadastroDiv.style.display = (cadastroDiv.style.display === "none") ? "block" : "none";
        }
    </script>
</body>
</html>
