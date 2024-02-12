var botones = document.querySelectorAll('[id^="reply"]');
botones.forEach(function (button) {
    button.addEventListener("click", function () {
        var comentario_id = this.getAttribute("rastreador");
        var formulario = document.getElementById("formulario" + comentario_id);
        if (formulario.style.display === "block") {
            formulario.style.display = "none";
        } else {
            formulario.style.display = "block";
        }
    });
});
