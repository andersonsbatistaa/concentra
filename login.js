document.addEventListener("DOMContentLoaded", () => {
  const loginForm = document.querySelector("#login");
  const cadastroForm = document.querySelector("#cadastro");

document.querySelector("#linkCadastro").addEventListener("click", e => {
    e.preventDefault();
    loginForm.classList.add("form--hidden");
    cadastroForm.classList.remove("form--hidden");
});

document.querySelector("#linkLogin").addEventListener("click", e => {
    e.preventDefault();
    loginForm.classList.remove("form--hidden");
    cadastroForm.classList.add("form--hidden");
});

loginForm.addEventListener("submit", e => {
    e.preventDefault();
});

document.querySelectorAll(".form__input").forEach(inputElement => {
    inputElement.addEventListener("blur", e => {
        if (e.target.id === "nome" && e.target.value.length > 0 && e.target.value.length < 10) {
            setInputError(inputElement, "Nome precisa ter pelo menos 10 caracteres!");
        }
    });
});
});


