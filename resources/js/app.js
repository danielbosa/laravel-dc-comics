import "./bootstrap";
import "~resources/scss/app.scss";
import * as bootstrap from "bootstrap";
import.meta.glob(["../img/**"]);

const deleteButtons = document.querySelectorAll(".BtnToConfirm");

deleteButtons.forEach(button => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        const modale = document.getElementById("indexModal");
        const myModal = new bootstrap.Modal(modale);
        myModal.show();

        const btnSave = modale.querySelector(".btn.btn-primary");

        // Rimuovi eventuali listener precedenti per evitare duplicazioni
        btnSave.removeEventListener("click", handleConfirmDelete);
        btnSave.addEventListener("click", handleConfirmDelete);

        function handleConfirmDelete() {
            button.parentElement.submit();
        }
    });
});