$('.l-1').each(function () {
    $(this).click(function () {
        $(this).find('.glyphicon-chevron-right').toggleClass('rotate-arrow');
        $(this).parent().find('.l-1-children').toggle(500);
    })
})
