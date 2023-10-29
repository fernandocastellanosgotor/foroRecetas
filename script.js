function togglePasswordVisibility() {
    var passwordInput = document.getElementById("contrasena");
    var icon = document.querySelector(".toggle-password");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.textContent = "🙈";
    } else {
        passwordInput.type = "password";
        icon.textContent = "👁️";
    }
}

function toggleConfirmPasswordVisibility() {
    var confirmPasswordInput = document.getElementById("confirmar-contrasena");
    var icon = document.querySelectorAll(".toggle-password")[1];

    if (confirmPasswordInput.type === "password") {
        confirmPasswordInput.type = "text";
        icon.textContent = "🙈";
    } else {
        confirmPasswordInput.type = "password";
        icon.textContent = "👁️";
    }
}
