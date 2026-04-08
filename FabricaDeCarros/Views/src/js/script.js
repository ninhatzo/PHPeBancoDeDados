document.getElementById("formEditar").addEventListener("submit", function(e) {
    const confirmacao = confirm("Tem certeza que deseja editar este carro?");

    if (!confirmacao) {
        e.preventDefault();
    }
});