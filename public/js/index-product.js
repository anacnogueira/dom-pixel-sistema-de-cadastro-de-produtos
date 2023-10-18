$(".delete-button").on("click", (event) => {
    if (!confirm("Tem certeza que deseja excluir? Essa ação é irreversível!")) {
        event.preventDefault();
    }
});
