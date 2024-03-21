<?php
include_once 'header.php';
?>

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
    <?php
    include_once 'footer.php';
    ?>

    <script src="assets/js/script.js"></script>
</body>
</html>
