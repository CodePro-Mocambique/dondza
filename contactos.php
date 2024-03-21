<?php
 include_once 'header.php';
?>

    <!-- Esta tag serve para dividir as seccoes -->
    <section class="contactos-container">
        <!-- FOrmulario de contactos-->
        <div class="form-container">
            <h2>Formulário de Contactos</h2>
            <form id="contactForm" onsubmit="return validateContactForm()">
                <div>
                    <label for="nome"> Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                    <span id="nomeError" class="error"></span>
                </div>
    
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <span id="emailError" class="error"></span>
                </div>
    
                <div>
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                    <span id="mensagemError" class="error"></span>
                </div>
    
                <div>
                    <button type="submit"> Enviar Mensagem</button>
                </div>
            </form>

        </div>

        <!--- Detalhes de contacto-->
        <div class="address-container">
            <h2>Endereço da Empresa</h2>
            <p>Rua da Empresa, 123</p>
            <p>Cidade, País</p>

            <p>Telefone: +258 21 456 789</p>

            <p>Email: info@empresa.com</p>
        </div>
    </section>

<?php
include_once 'footer.php';
?>

    <script src="assets/js/script.js"></script>
</body>

</html>