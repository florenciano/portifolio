$(function() {

    /*  show/hide description 'read more' with animate
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    var btnReadMore = $( ".description-readMore-btn" );
    
    function onClickToggleCont(e) {
        $(this).parents(".container-description").next(".modalReadMore").fadeToggle( "slow" );
        e.preventDefault();
    };

    btnReadMore.each(function() {
        $(this).on( "click", onClickToggleCont );
    });

    /*  close content textual aditional
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    var btnCloseMore = $( ".modalReadMore-close-btn" );

    function onClickHideCont(e) {
        $(this).parents( ".modalReadMore" ).fadeOut( "slow" );
        e.preventDefault();
    };

     btnCloseMore.each(function() {
        $(this).on( "click", onClickHideCont );
    });

    /*  emule effects for media touch
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    // function onTouchEffects(e) {
    //     $(this).toggleClass( "testTouchOverEffects" ); // insert here new class equal class:hover 
    //     e.preventDefault();
    // }
    
    // $( [btnReadMore, btnCloseMore] ).bind( "touchstart touchend", onTouchEffects );

});