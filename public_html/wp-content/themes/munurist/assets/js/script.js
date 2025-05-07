$(document).ready(function () {
  $('.hamburger').on('click', function () {
    $('.mobile-menu').addClass('is-active')
  })

  $('.mobile-menu-close').on('click', function () {
    $('.mobile-menu').removeClass('is-active')
  })

  $('.header-bottom-btn').magnificPopup({
    type: 'inline',
    removalDelay: 700,
    callbacks: {
      beforeOpen: function () {
        this.st.mainClass = this.st.el.attr('data-effect')
      },
    },
  })


})
