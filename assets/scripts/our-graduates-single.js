document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.our-graduates-list__item-link');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const graduateId = this.getAttribute('data-graduate-id');

            const xhr = new XMLHttpRequest();
            xhr.open('POST', ajax_object.ajaxurl, true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const data = JSON.parse(xhr.responseText);
                    const iconCloseURL = ajax_object.iconCloseURL;

                    const modalHTML = `
                        <section class="our-graduates-single">
                            <div class="container">
                                <div class="our-graduates-single__wrap">
                                    <button class="our-graduates-single__icon">
                                        <svg width="32px" height="32px">
                                            <use href=" ${iconCloseURL} "></use>
                                        </svg>
                                    </button>
                                    <div class="our-graduates-single__content">
                                        <img src="${data.graduateImgSrc}" alt="" class="our-graduates-single__photo">
                                        <div class="our-graduates-single__heading">
                                            <h1 class="our-graduates-single__title title-section">${data.graduateTitle}</h1>
                                            <div class="our-graduates-single__subtitle">${data.graduateSubtitle}</div>
                                        </div>
                                        <div class="our-graduates-single__heading_pc">
                                            <h1 class="our-graduates-single__title title-section">${data.graduateTitle}</h1>
                                            <div class="our-graduates-single__subtitle">${data.graduateSubtitle}</div>
                                            <div class="our-graduates-single__text-pc">${data.graduateTextPc}</div>
                                        </div>
                                    </div>
                                    <div class="our-graduates-single__text">${data.graduateText}</div>
                                </div>
                            </div>
                        </section>`;

                    document.body.insertAdjacentHTML('beforeend', modalHTML);

                    const closeButton = document.querySelector('.our-graduates-single__icon');

                    closeButton.addEventListener('click', function() {
                        // Remove the modal from the DOM
                        const modal = document.querySelector('.our-graduates-single');
                        modal.parentNode.removeChild(modal);
                    });
                }
            };
            xhr.send('action=fetch_graduate_data&graduate_id=' + encodeURIComponent(graduateId));
        });
    });
});
