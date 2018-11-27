$('#carouselDestaque').carousel({
    interval: false
}); 

$('.launch-modal').on('click', function(e){
    e.preventDefault();
    $( '#' + $(this).data('modal-id') ).modal();
});

$( "li#menu-item-230" ).hover(function() {  // mouse enter
    $( this ).addClass('show'); // display immediate child

}, function(){ // mouse leave
    if ( !$(this).hasClass("current_page_item") ) {  // check if current page
        $( this ).removeClass('show'); // display immediate child
    }
});