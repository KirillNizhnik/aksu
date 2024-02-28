document.addEventListener('DOMContentLoaded', function() {
    const graduateLinks = document.querySelectorAll('.our-graduates-list__item-link');

    graduateLinks.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault();

            // Disable scrolling
            document.body.style.overflow = 'hidden';

            const graduateItem = event.target.closest('.our-graduates-list__item');
            const graduateName = graduateItem.querySelector('.our-graduates-list__item-name').textContent.trim();
            const graduateDescr = graduateItem.querySelector('.our-graduates-list__item-descr').textContent.trim();
            const graduateImgSrc = graduateItem.querySelector('.our-graduates-list__item-img').getAttribute('src');

            const modalHTML = `
                <section class="our-graduates-single">
                    <div class="container">
                        <div class="our-graduates-single__wrap">
                            <button href="#" class="our-graduates-single__icon">
                                <svg width="32px" height="32px">
                                    <use href="<?php echo bloginfo('template_url'); ?>/assets/images/icons/icons.svg#icon-close"></use>
                                </svg>
                            </button>
                            <div class="our-graduates-single__content">
                                <img src="${graduateImgSrc}" alt="" class="our-graduates-single__photo">
                                <div class="our-graduates-single__heading">
                                    <h1 class="our-graduates-single__title title-section">${graduateName}</h1>
                                    <div class="our-graduates-single__subtitle">${graduateDescr}</div>
                                </div>
                                <div class="our-graduates-single__heading_pc">
                                    <h1 class="our-graduates-single__title title-section">${graduateName}</h1>
                                    <div class="our-graduates-single__subtitle"></div>
                                    <div class="our-graduates-single__text-pc">${graduateDescr}</div>
                                </div>
                            </div>
                            <div class="our-graduates-single__text"></div>
                        </div>
                    </div>
                </section>
            `;

            document.body.insertAdjacentHTML('beforeend', modalHTML);

            const modalCloseBtn = document.querySelector('.our-graduates-single__icon');

            modalCloseBtn.addEventListener('click', function() {
                // Enable scrolling
                document.body.style.overflow = 'auto';

                const modal = document.querySelector('.our-graduates-single');
                modal.parentNode.removeChild(modal);
            });
        });
    });
});
