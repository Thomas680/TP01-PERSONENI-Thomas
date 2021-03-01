
function checkPassword() {
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('password_confirm').value;
    if (password != confirmPassword) {
        document.getElementById('form_message').innerText = "Les mots de passe ne correspondent pas.";
        return false;
    } else {
        document.getElementById('form_message').innerText = "";
        return true;
    }
}

$("#main_form").submit(function(e) {
    if(!checkPassword()) {
        e.preventDefault();
    }
})