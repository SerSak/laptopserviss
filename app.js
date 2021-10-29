'use strict'


const lang = document.documentElement.lang;
const currentLang = document.getElementById('currentLang');
const links = document.querySelectorAll('.nav__link');


document.addEventListener('DOMContentLoaded', function () {
    lang == 'ru' ? currentLang.textContent = 'RU' : currentLang.textContent = 'LV';
})


links.forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const id = e.target.getAttribute('href');
        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start',
            inline: 'nearest'
        });
    })
});




(function ($) { // Begin jQuery
    $(function () { // DOM ready
        // If a link has a dropdown, add sub menu toggle.
        $('nav ul li a:not(:only-child)').click(function (e) {
            $(this).siblings('.nav-dropdown').toggle();
            // Close one dropdown when selecting another
            $('.nav-dropdown').not($(this).siblings()).hide();
            e.stopPropagation();
        });
        // Clicking away from dropdown will remove the dropdown class
        $('html').click(function () {
            $('.nav-dropdown').hide();
        });
        // Toggle open and close nav styles on click
        $('#nav-toggle').click(function () {
            $('nav ul').slideToggle();
        });
        // Hamburger to X toggle
        $('#nav-toggle').on('click', function () {
            this.classList.toggle('active');
        });

        // hide dropdown and revert burger on link click
        $('.nav__link').click(function () {

            if ($('#nav-toggle').hasClass('active')) {
                $('nav ul').slideToggle();
                $('#nav-toggle').removeClass('active');
            }
        });

    });
})(jQuery);





//============================================================ MODAL ============================================================

const modal = document.querySelector('.modal');
const overlay = document.querySelector('.overlay');
const btnCloseModal = document.querySelector('.btn--close-modal');
const btnsOpenModal = document.querySelectorAll('.btn--show-modal');



const openModal = function (e) {
    e.preventDefault();
    modal.classList.remove('hidden');
    overlay.classList.remove('hidden');
};

const closeModal = function () {
    modal.classList.add('hidden');
    overlay.classList.add('hidden');
};

btnsOpenModal.forEach(btn => btn.addEventListener('click', openModal));

btnCloseModal.addEventListener('click', closeModal);
overlay.addEventListener('click', closeModal);


document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        closeModal();
    }
});



// ============================================================ FORM ============================================================
jQuery(document).ready(function () {

    $(".phone").mask("+371 (99) 999-999");

    jQuery('.send-form').click(function () {
        var form = jQuery(this).closest('form');

        if (form.valid()) {
            form.css('opacity', '.5');
            var actUrl = form.attr('action');

            jQuery.ajax({
                url: actUrl,
                type: 'post',
                dataType: 'html',
                data: form.serialize(),
                success: function (data) {
                    form.html(data);
                    form.css('opacity', '1');

                },
                error: function () {
                    form.find('.status').html('Server error');
                }
            });
        }
    });


});













