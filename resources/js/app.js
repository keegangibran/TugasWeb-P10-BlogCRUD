import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {

    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach((form) => {

        const trigger = form.querySelector('.delete-trigger');
        const modal = form.closest('article').nextElementSibling;

        if (!trigger || !modal) {
            return;
        }

        const cancelButton = modal.querySelector('.modal-cancel');
        const confirmButton = modal.querySelector('.modal-confirm');
        const overlay = modal.querySelector('.delete-modal-overlay');

        trigger.addEventListener('click', () => {
            modal.classList.add('is-visible');
            document.body.classList.add('modal-open');
        });

        cancelButton.addEventListener('click', () => {
            modal.classList.remove('is-visible');
            document.body.classList.remove('modal-open');
        });

        overlay.addEventListener('click', () => {
            modal.classList.remove('is-visible');
            document.body.classList.remove('modal-open');
        });

        confirmButton.addEventListener('click', () => {
            form.submit();
        });

    });

});