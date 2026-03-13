document.addEventListener('DOMContentLoaded', () => {
    const accordionButtons = document.querySelectorAll('.accordion-button');

    accordionButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const targetId = button.dataset.accordion;
            const content = document.getElementById(targetId);
            const arrowIcon = button.querySelector('.arrow img');

            if (!content) return;

            const isOpen =
                content.style.maxHeight &&
                content.style.maxHeight !== '0px';

            if (isOpen) {
                content.style.maxHeight = '0px';
            } else {
                content.style.maxHeight = `${content.scrollHeight}px`;
            }

            if (arrowIcon) {
                arrowIcon.classList.toggle('rotate-180');
            }
        });
    });
});