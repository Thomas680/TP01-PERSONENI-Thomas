
function checkPassword() {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('password_confirm').value;
    if (password != confirmPassword) {
        document.getElementById('form_message').innerText = "Les mots de passe ne correspondent pas.";
    } else {
        document.getElementById('form_message').innerText = "";
    }
}

document.getElementById('password').addEventListener('keyup', checkPassword);
document.getElementById('password_confirm').addEventListener('keyup', checkPassword);