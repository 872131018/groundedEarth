$(document).ready(function() {
    /*
    * Delegate all clicks to the document
    */
    $(document).on('click', '[data-delegate=signup]', function(event) {
        /*
        * Set url for post to correct endpoint
        */
        var url = window.location.href+"inquiry"
        $.post(url, $("form").serialize(), function(response, status) {
            if(status == "success") {
                $('form').html(response)
            } else {
                console.log("server error")
            }
        })
    })
});
/*
* Wait until all the images have loaded to get right grid
*/
$(window).load(function() {
    /*
    * Initialize masonry image grid
    */
    $('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: 200
    });
    /*
    * Set the logo sticker
    */
    Sticker.init('.logo-sticker');
});
