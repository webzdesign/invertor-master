function updateControls(event) {
    const total = event.item.count;
    const current = event.item.index;

    $("#current-slide").text((current + 1).toString().padStart(2, "0"));
    $("#total-slides").text(total.toString().padStart(2, "0"));

    if (current === 0) {
        $("#prev-slide").addClass("disabled");
    } else {
        $("#prev-slide").removeClass("disabled");
    }

    if (current === total - 1) {
        $("#next-slide").addClass("disabled");
    } else {
        $("#next-slide").removeClass("disabled");
    }
}
$(document).ready(function(){
    if( $(".clientSlider").length > 0 ){
        const owl = $(".owl-carousel");
        $(".clientSlider").owlCarousel({
            margin: 20,
            items: 1,
            dots: false,
            nav: false,
            touchDrag: false,
            mouseDrag: false,
            smartSpeed: 1200,
            autoHeight: true,
            autoplay: false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            onInitialized: updateControls,
            onChanged: updateControls
        });
    
        $("#prev-slide").click(function () {
            if (!$(this).hasClass("disabled")) {
                owl.trigger("prev.owl.carousel");
            }
        });
    
        $("#next-slide").click(function () {
            if (!$(this).hasClass("disabled")) {
                owl.trigger("next.owl.carousel");
            }
        });
    }
});