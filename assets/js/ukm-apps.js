/* Custom JS */
var widthScreen = $(window).width();
var heightScreen = $(window).height();

var bodyHeight = $('body').height();
var wrapperHeight = $('#wrapper').height();
var widthMainContent = $("#maincontent").width();

if(widthScreen >= 1024){
    var itemPerPage = 4;
    var widthItem = (widthMainContent / itemPerPage) - 20;
} else if(widthScreen >= 769 && widthScreen <= 1023){
    var itemPerPage = 3;
    var widthItem = (widthMainContent / itemPerPage) - 20;
} else if(widthScreen >= 481 && widthScreen <= 768){
    var itemPerPage = 2;
    var widthItem = (widthMainContent / itemPerPage) - 20;
} else if(widthScreen >= 480){
    var itemPerPage = 1;
    var widthItem = (widthMainContent / itemPerPage) - 5;
} else {
    var itemPerPage = 1;
    var widthItem = (widthMainContent / itemPerPage) - 5;
}

function loaderPage(){
    $('.loading-box').animate({'opacity': 0}, 800);
    setTimeout(function(){
        $('body').removeClass('overflow-hide');
        $('.loading-box').hide();
    }, 2000);
}

function isoLayout(){

	$('#list-item .items-ui').width(widthItem - 1);

    $('#account-pages #store #list-item .items-ui').width(widthItem - 4);

    $('#account-pages #store #list-item .btnAddItem').width(widthItem - 14);

	var $container = $('#list-item');

	$container.imagesLoaded( function(){
        $container.isotope({
          	itemSelector : '.items-ui'
        });
    });
    
	$container.infinitescroll({
        navSelector  : '#page_nav',    // selector for the paged navigation 
        nextSelector : '#page_nav a',  // selector for the NEXT link (to page 2)
        itemSelector : '.items-ui',     // selector for all items you'll retrieve
        loading: {
                finishedMsg: 'No more pages to load.',
                img: '<?php echo assets_url;?>img/loading-ukm.gif'
            },
        },

        // call Isotope as a callback
        function(newElements) {
            $('#list-item .items-ui').width(widthItem - 1);
            $('#account-pages #store #list-item .items-ui').width(widthItem - 4);
            $('#account-pages #store #list-item .btnAddItem').width(widthItem - 14);
            $container.isotope('appended', $(newElements)); 
        }
	);
}

function positionMain(){
	var widthSidebar = $("#leftbar").width();
	$("#maincontent").css({"left": widthSidebar});
}

function resizeElements(){
    var wrapperHeight = $('#wrapper').height();
    if(heightScreen < wrapperHeight){
        $("#searchbar").width(widthMainContent - 15);
    } else {
        $("#searchbar").width(widthMainContent);
    }

    if(widthScreen > 640){
        $(".sidebar").addClass("uncover visible");
    }
}

function openSearch(){
    $("#openSearch, #openSearchM").click(function(){
        var wrapperHeight = $('#wrapper').height();
        if(heightScreen < wrapperHeight){
            $("#searchbar").width(widthMainContent - 16);
        } else {
            $("#searchbar").width(widthMainContent);
        }
        $("#searchbar").toggle();
        $("#searchbar input").focus();
    });
}

function openLeftBar(){
    if(widthScreen <= 640){
        $('#leftbar').sidebar('attach events', '.launch');
    }
}

function materialUI(){
    $('select').not('.disabled').material_select();
    $('ul.tabs').tabs();
    $(".dropdown-button").dropdown({
        hover: false
    });
}

function loadJqueryAddOn(){
    $('.ui.rating-enabled').rating({
        maxRating: 5
    });

    $('.ui.rating-disabled').rating('disable');

    $('.ui-tooltip').popup();
}

function showElementAfterLogin(){
    if($.cookie('hasLogin') == "true"){
        //$('#btnUser').attr('href', 'account');
        $('#btnEmail, #btnLogout').css({'display':'block'});
    } else {
        //$('#btnUser, #btnUserM').attr('href', 'login');
        //$('#btnLogout').attr('href', 'logout');
        $('#btnEmail, #btnLogout').hide();
    }
}

function logout(){
    $('#btnLogout').click(function(){
        $.removeCookie('hasLogin', { path: '/' });
    });
}

function helpStep(){
    window.location.href = base + "product";
    $.cookie('helpStep', 'true', { path: '/' });
}

function runHelpStep(){
    introJs().setOption('showBullets', false).start().oncomplete(function(){
        $.removeCookie('helpStep', { path: '/' });
    });
}

$(window).load(function(){
    loaderPage();
    isoLayout();
	positionMain();
    resizeElements();

    if($.cookie('helpStep') == "true"){
        runHelpStep();
    }
});

$(document).ready(function(){
	positionMain();
	isoLayout();
    resizeElements();
    openSearch();
    openLeftBar();
    materialUI();
    loadJqueryAddOn();
    showElementAfterLogin();
    logout();
});

$(window).resize(function(){
	isoLayout();
	positionMain();
    resizeElements();
});

$(window).scroll(function(){

});

/* Resize Event on Firefox */
window.onresize = resizeFirefox;

function resizeFirefox() {
    isoLayout();
    positionMain();
    resizeElements();
}