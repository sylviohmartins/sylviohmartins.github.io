$('a[data-scroll-to="true"]').on('click', function() {
    var el = $(this).data('to-div'),
        elWrapped = $(el),
        offset = elWrapped.offset(),
        offsetTop = offset.top,
        totalScroll = offsetTop -60;

    $('body,html').animate({
       scrollTop: totalScroll
    }, 500);

    return false;
});