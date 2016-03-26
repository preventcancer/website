// JavaScript Document
var $jq = jQuery.noConflict();
$jq(document).ready(function ($) {

    $(".mobile-search").click(function () {
        $(this).parent().parent().parent().find(".row").toggleClass("active");
        $(".mobile-search-field").slideToggle();
    });
    $('.nav-menu li').find("div.sub-menu-wrapper").each(function () {
        var insert = '<span class="mobile-menu"></span>';
        $(this).before(insert);
    });

    $(".menu-toggle").click(function () {
        $(this).toggleClass("active");
        $("ul.nav-menu").slideToggle();
    });
    $(".mobile-menu").click(function () {
        $(this).parent().parent().find(".mobile-menu").not(this).removeClass("active");
        $(this).toggleClass("active");
    });
    $("#select-topic").change(function () {
        $("#select-topic-value").html($("#select-topic :selected").html())
    });
 

});
/*********** Equal Height ***************/

equalheight = function (container) {

    if ($jq(window).width() > 991) {

        var currentTallest = 0,
                currentRowStart = 0,
                rowDivs = new Array(),
                $el,
                topPosition = 0;
        $jq(container).each(function () {

            $el = $(this);
            $jq($el).height('auto')
            topPostion = $el.position().top;
            if (currentRowStart != topPostion) {
                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
                rowDivs.length = 0; // empty the array
                currentRowStart = topPostion;
                currentTallest = $el.height();
                rowDivs.push($el);
            } else {
                rowDivs.push($el);
                currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
            }
            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
        });
    }
    else {



    }

}

$jq(window).load(function () {
    equalheight('.vcenter');
});
$jq(window).resize(function () {
    equalheight('.vcenter');
});


// Break Learn sub menu
$jq(document).ready(function ($) {
    $('#primary-menu li a').each(function () {
        var nav = $(this).text();
        if (nav == 'Learn') {
            $(this).parent().find(".sub-menu-wrapper .sub-menu li").eq(3).after('</ul><ul>');
        }
    });
});



// breadcrumb placement

$jq(document).ready(function ($) {
    var depthOne = $('#primary-menu .current-menu-item .sub-menu-wrapper');
    var depthTwo = $('#primary-menu .current-page-parent .sub-menu-wrapper');
    var depthActive = $('#primary-menu .current-page-ancestor .sub-menu-wrapper');
	 var h = depthOne.height();
	if(depthActive.length) {
		 h = depthActive.height();
	}
   
    if (h == null) {
        var h = depthTwo.height();
    }
    if ($('#primary-menu .current-menu-ancestor .sub-menu-wrapper').find('.current-menu-item .sub-menu-wrapper').length != 0) {
        var h = $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').height() + $('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-menu-item .sub-menu-wrapper').height();
    }
    if ($('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-page-ancestor').find('div').length != 0) {
        var h = depthTwo.height() + $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').height();
    }
    if ($('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-page-ancestor').find('.current-menu-item .sub-menu-wrapper').length != 0) {
        var h = $('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-menu-item .sub-menu-wrapper').height() + $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').height();
    }
    if (h > 0) {
        $('.breadcrum-area').css({
            'position': 'relative',
            'margin-top': h + 'px',
            'background': '#fff'
        });
    }
    $('#primary-menu li').mouseover(function () {
        if ($(this).find('div').length != 0) {
            $('#primary-menu .current-menu-item .sub-menu-wrapper').hide();
            $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').hide();
            $(this).find('.sub-menu-wrapper').show();
            var ht = $(this).find('.sub-menu-wrapper').height() + $('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-menu-item .sub-menu-wrapper').height();
            if (ht > 0) {
                $('.breadcrum-area').css({
                    'position': 'relative',
                    'margin-top': ht + 'px',
                    'background': '#fff'
                });
            }
        }
    });
    $('#primary-menu li').mouseout(function () {
        $('#primary-menu .current-menu-item .sub-menu-wrapper').show();
        $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').show();
        if(depthActive.length) {
		 h = depthActive.height();
		}
		if (h == null) {
            var h = depthTwo.height();
        }
        if ($('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-page-ancestor').find('div').length != 0) {
            var h = depthTwo.height() + $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').height();
        }
        if ($('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-page-ancestor').find('.current-menu-item .sub-menu-wrapper').length != 0) {
            var h = $('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-menu-item .sub-menu-wrapper').height() + $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').height();
        }
        if (h == null) {
            h = $('#primary-menu .current-menu-item .sub-menu-wrapper').height();
        }
        if (h == null) {
            h = $('#primary-menu .current-page-parent .sub-menu-wrapper').height();
        }

        if ($('#primary-menu .current-menu-ancestor .sub-menu-wrapper').find('.current-menu-item .sub-menu-wrapper').length != 0) {
            var h = $('#primary-menu .current-menu-ancestor .sub-menu-wrapper').height() + $('#primary-menu .current-menu-ancestor .sub-menu-wrapper .current-menu-item .sub-menu-wrapper').height();
        }
        if (h > 0) {
            $('.breadcrum-area').css({
                'position': 'relative',
                'margin-top': h + 'px',
                'background': '#fff'
            });
        } else {
            $('.breadcrum-area').css({
                'position': 'relative',
                'margin-top': '0px',
                'background': '#fff'
            });
        }
    });
});



