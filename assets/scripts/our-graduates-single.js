// Находим элементы, которые будем использовать
const openPopupButtons = document.querySelectorAll('[data-popup-open]');
const closePopupButtons = document.querySelectorAll('[data-popup-close]');
const popup = document.querySelector('[data-popup]');

function openPopup() {
    popup.classList.add('is-active');
    document.body.classList.add('popup-open');
    document.body.style.overflow = 'hidden'; // Видаляємо прокрутку тіла
}

function closePopup() {
    popup.classList.remove('is-active');
    document.body.classList.remove('popup-open');
    document.body.style.overflow = ''; // Повертаємо прокрутку тіла
}

openPopupButtons.forEach(button => {
    button.addEventListener('click', openPopup);
});

closePopupButtons.forEach(button => {
    button.addEventListener('click', closePopup);
});

popup.addEventListener('click', event => {
    if (event.target === popup) {
        closePopup();
    }
});

document.addEventListener('keydown', event => {
    if (event.key === 'Escape') {
        closePopup();
    }
});
