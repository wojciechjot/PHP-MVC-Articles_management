(function () {

    var register = document.getElementById("register"),
        registerWindow = document.getElementById("registerWindow"),
        cancel = document.getElementById("cancel"),
        registerInput = document.getElementById("registerInput"),
        registerButton = document.getElementById("registerButton"),
        wrongPassword = document.getElementById("wrongPassword"),
        goodPassword = document.getElementById("goodPassword");

    register.addEventListener('click', function() {

        registerWindow.style.display = "flex";

    }, false);

    cancel.addEventListener('click', function() {

        registerWindow.style.display = "none";

    }, false);

    registerInput.addEventListener('keyup', function() {

        var expression = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;

        if(!expression.test(registerInput.value)) {

            registerButton.disabled = true;
            registerButton.style.background = "#cfcfcf";
            registerButton.style.cursor = "default";
            wrongPassword.style.display = "block";
            goodPassword.style.display = "none";

        }else {
            registerButton.disabled = false;
            registerButton.style.background = "#4f63ff";
            registerButton.style.cursor = "pointer";
            wrongPassword.style.display = "none";
            goodPassword.style.display = "block";
        }

    }, false);


})();