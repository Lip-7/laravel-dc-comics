import * as bootstrap from 'bootstrap';


export function modalFeature() {
    const deleteSubmitButtons = document.querySelectorAll(".deleteBtn");
    deleteSubmitButtons.forEach((button) => {
        button.addEventListener("click", (event) => {
            event.preventDefault();
            const dataTitle = button.getAttribute("data-item-title");
            const ourModal = document.getElementById("popupModal");
            const bootstrapModal = new bootstrap.Modal(ourModal);
            bootstrapModal.show();
            const modalItemTitle = ourModal.querySelector("#modal-item-title");
            modalItemTitle.textContent = dataTitle;

            const buttonDelete = ourModal.querySelector("button.btnConfirm");

            buttonDelete.addEventListener("click", () => {
                button.parentElement.submit();
            });
        });
    });
    /* const deleteSubmitButton = document.querySelector(".deleteBtn");
    button.addEventListener("click", (event) => {
        event.preventDefault();
        const dataTitle = button.getAttribute("data-item-title");
        const ourModal = document.getElementById("popupModal");
        const bootstrapModal = new bootstrap.Modal(ourModal);
        bootstrapModal.show();
        const modalItemTitle = ourModal.querySelector("#modal-item-title");
        modalItemTitle.textContent = dataTitle;

        const buttonDelete = ourModal.querySelector("button.btn-primary");

        buttonDelete.addEventListener("click", () => {
            button.parentElement.submit();
        });
    }); */
}
