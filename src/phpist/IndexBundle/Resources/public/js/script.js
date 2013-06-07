$(function () {
    var hash = window.location.hash;

    var $links = $("header nav a");

    

    var slideTo = function (hash) {
        //remove #, / and !
        hash = hash.replace(/[#/!]/g,'');

        var id = "#" + hash;
        var cls = "." + hash;
        if (!hash) {
            id = "#contentAboveFooter";
            cls = ".home";
        }

        $links.removeClass("active");
        $links.filter(cls).addClass("active");

        $.scrollTo(id, 500);
    };

    $.history.init(function(hash){
        slideTo(hash);
    });


    setTimeout(function () {
        slideTo(hash);  
    }, 1000);

    $("header nav a").click(function (e) {
        var href = $(this).attr("href");
        slideTo(href);
    });
});
