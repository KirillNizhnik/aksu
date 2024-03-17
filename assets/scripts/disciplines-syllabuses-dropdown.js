document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.disciplines-descr__link');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const list = this.parentElement.nextElementSibling;
            list.classList.toggle('visible');
        });
    });
});