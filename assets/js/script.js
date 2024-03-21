function validateLoginForm() {
    //recebendo dados dos inputs
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    //recebendo ids erros
    var usernameError = document.getElementById('usernameError');
    var passwordError = document.getElementById('passwordError');
    //inicializando as variaveis
    usernameError.innerHTML = '';
    passwordError.innerHTML = '';
    var isValid = true;

    //efectuar as validacoes
    if (username.trim() === '') {
        usernameError.innerHTML = 'Por favor, insira seu nome de utilizador.';
        isValid = false;
    }

    if (password.trim() === '') {
        passwordError.innerHTML = 'Por favor, insira a palavra-passe.';
        isValid = false;
    }

    return isValid;
}

function validateContactForm(){
    //recebendo dados dos inputs
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var mensagem = document.getElementById('mensagem').value;
    
    //recebendo ids erros
    var nomeError = document.getElementById('nomeError');
    var emailError = document.getElementById('emailError');
    var mensagemError = document.getElementById('mensagemError');
    
    //inicializando as variaveis
    nomeError.innerHTML = '';
    emailError.innerHTML = '';
    mensagemError.innerHTML = '';
    var isValid = true;

    //efectuar as validacoes
    if( nome.trim() === '') {
        nomeError.innerHTML = 'Nome vazio. Preencha por favor';
        isValid = false;
    }

    if( email.trim() === '' || !isValidEmail(email)) {
        emailError.innerHTML = 'Email vazio ou inválido. Preencha por favor';
        isValid = false;
    }

    if( mensagem.trim() === '') {
        mensagemError.innerHTML = 'Mensagem vazia. Preencha por favor';
        isValid = false;
    }

    return isValid;
}

function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
