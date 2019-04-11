var spinnerwhitexs = ' <div class="spinner white xs"></div>';

function openNav() {
    document.getElementById("mySidenav").style.left = "0%";
}

function closeNav() {
    document.getElementById("mySidenav").style.left = "-70%";
}

$(document).ready(function() {
    $('.carousel').carousel({
        interval: false
    });
    var img = $(".tint-bg").attr('bg-img');
    $(".tint-bg").css("background-image", 'url("' + img + '")');

    /* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event) {
        event.preventDefault();
        var content = $('.modal-body');
        content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);
        content.html($(this).html());
        $(".modal-profile").modal({
            show: true
        });
    });
});

$('#carouselExample').on('slide.bs.carousel', function(e) {
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 6;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i = 0; i < it; i++) {
            // append slides to end
            if (e.direction == "left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            } else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

$('#carouselExample').carousel({
    interval: 2000
});

function getBicycleSpecs(e, bid) {
    $("#bicycle-modal .modal-content").html('<div class="pad-30 text-center"><div class="spinner lg"></div></div>');
    $.ajax({
        url: BASE_URL+"actions",
        type: "POST",
        data: {"action":"getBicycleSpecs", "bid":bid},
        success: function(data) {
            $("#bicycle-modal .modal-content").html(data);
        }
    });
}

/*
/ loadButton: function to switch button to loading state
*/

function loadButton(e, sp) {
    $(e).attr("disabled", true).html($(e).html() + sp);
}

/*
/ unloadButton: function to switch button to normal state
*/

function unloadButton(e, classes) {
    $(e).attr("disabled", false).find(classes).remove();
}

// error popover
function showPopover(e, position, msg) {
    $(e).attr('data-toggle', 'popover');
    $(e).attr('data-placement', position);
    $(e).attr('data-content', msg);
    $(e).popover({trigger: 'manual'})
    .on('click', function() {
        $(e).popover('hide');
        $(e).removeAttr('data-toggle data-placement data-content data-trigger');
    })
    .on('keydown', function() {
        $(e).popover('hide');
        $(e).removeAttr('data-toggle data-placement data-content data-trigger');
    });
    $(e).popover('show');
    setTimeout(function(){
        $(e).popover('hide');
    }, 4000);
    $(".popover").addClass("error-alert");
    $(e).focus();
}