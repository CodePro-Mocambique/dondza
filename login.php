<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title> Entrada - Dondza Academy</title>
</head>
<body>
    <!-- Esta tag serve para definir o cabecalho-->
    <header>
        <h1>Dondza Academy</h1>
        <!-- A tag nav serve para criar menus de navegacao -->
        <nav>
            <ul>
                <li> <a href="index.html"> Inicio</a></li>
                <li> <a href="sobre-nos.html"> Sobre nós</a></li>
                <li> <a href="contactos.html"> Contactos</a></li>
                <li> <a href="login.html"> Entrada </a></li>
            </ul>
        </nav>
    </header>

    <!-- Esta tag serve para dividir as seccoes -->
    <section class="login-container">
        <form id="loginForm"  onsubmit="return validateLoginForm()">
            <div>
                <label for="username">Nome de Utilizador:</label>
                <input type="text" id="username" name="username" required>
                <span id="usernameError" class="error"></span>
            </div>
            <div>
                <label for="password">Palavra-passe:</label>
                <input type="password" id="password" name="password" >
                <span id="passwordError" class="error"></span>
            </div>
            
            <button type="submit">Entrar</button>
        </form>
    </section>
    <footer>
        <p>&copy; 2024. Todos os direitos reservados.</p>
        <a href="https://codeprogroup.com" target="_blank">CodePro</a>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>
