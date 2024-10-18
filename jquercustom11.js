var check_slidein = '';
var ct = 0;
var lg = 0;
var fb = 0;

/*---------------------------------------------------------------------*/

;
(function($) {

    /*================= On Document Load Start =================*/

    $(document).ready(function() {
        // Get OS add Body Class

        var os = ['mobile', 'windows', 'android'];

        var match = navigator.appVersion.toLowerCase().match(new RegExp(os.join('|')));
        // alert(match);
        if (match) {

            if (match == 'android') {
                $('body').addClass('mobile');
            } else {
                $('body').addClass(match[0]);
            }

        };
    });
})(jQuery);

var finish = '';

var temp = '0';

var one_flag = 0;

var playerkb = '';

function play_auto_on_end(idiframe) {
    const iframekb = document.getElementById(idiframe);
    playerkb = new Vimeo.Player(iframekb);

    var ds = getCookie('form_data_submit');

    if (ds == 'done') {
        // playerkb.play();
    }

    if (idiframe == 'two_acc') {
        one_flag = 1;
    }

    if (finish != 'yes') {
        // console.log(finish);
        if (one_flag == 1) {
            playerkb.play();
        }
    }
    // playerkb.play();
}
$(document).ready(function() {
    finish = getCookie('finish_all');

    var nlsubs = getCookie('nl_subs');

    if (nlsubs == 'done') {
        $('#nl-subs').show();
        $('#nls-subs').addClass('d-none');
    } else {
        $('#nls-subs').removeClass('d-none');
        $('#nl-subs').hide();
    }


    $(window).on('resize', function() {
        var header_height = $('header').innerHeight();
        var footer_height = $('footer').innerHeight();

        var total = header_height + footer_height;

        if (!$('body').hasClass('mobile')) {
            // 	$('#cf-slide-form').css('height','calc(100vh - '+total+'px)')
            //  $('#cf-slide-form').css('top',header_height+'px')


            //  $('.midle').css('height','calc(100vh - '+header_height+'px)')

            //  $('#offr-feed').css('height','calc(100vh - '+total+'px)')
            //  $('#offr-feed').css('top',header_height+'px')

            //  $('#slide-legalese').css('height','calc(100vh - '+total+'px)')

            //  $('#slide-legalese .l-height').css('height','calc(100vh - '+total+'px - 100px)')

            //  $('#slide-legalese').css('top',header_height+'px')

            //  $('#trc').css('height','calc(100vh - '+total+'px)')


            $('#cf-slide-form').css('height', '100%')
            $('#cf-slide-form').css('top', header_height + 'px')
            
            $('#cf-slide-form1').css('height', '100%')
            $('#cf-slide-form1').css('top', header_height + 'px')


            $('.midle').css('min-height', 'calc(100vh - ' + total + 'px)')

            $('#offr-feed').css('height', '100%')
            $('#offr-feed').css('top', header_height + 'px')

            $('#slide-legalese').css('height', '100%')

            $('#slide-legalese .l-height').css('height', 'calc(100vh - ' + total + 'px - 100px)')

            $('#slide-legalese').css('top', header_height + 'px')

            $('#trc').css('height', '100%')
        } else {
            $('.mobile .midle').css('min-height', 'calc(100vh - ' + header_height + 'px)')
            $('.mobile .midle').css('padding-top', header_height + 'px')

            $('.mobile #cf-slide-form').css('height', 'calc(100vh - ' + header_height + 'px)')
            $('.mobile #cf-slide-form').css('top', header_height + 'px')
            
            $('.mobile #cf-slide-form1').css('height', 'calc(100vh - ' + header_height + 'px)')
            $('.mobile #cf-slide-form1').css('top', header_height + 'px')

            $('.mobile #offr-feed').css('height', 'calc(100vh - ' + total + 'px)')
            $('.mobile #offr-feed').css('top', header_height + 'px')

            $('.mobile #slide-legalese').css('height', 'calc(100vh - ' + header_height + 'px)')

            $('.mobile #slide-legalese .l-height').css('height', 'calc(100vh - ' + header_height + 'px - 100px)')

            $('.mobile #slide-legalese').css('top', header_height + 'px')

            $('.mobile #trc').css('height', '100vh')
        }
    }).trigger('resize');

    $(".accordion-button").click(function() {

        var iframebtn = $(this).attr('data-bs-target');
        var iframed = $(iframebtn).find('iframe').attr('id');
        var videoURL = $('#' + iframed).prop('src');
        const iframe = document.getElementById(iframed);
        playerkb = new Vimeo.Player(iframe);

        if (iframed == 'two_acc') {
            one_flag = 1;
        }

        if (one_flag == 1) {
            if (finish != 'yes') {
                if ($(this).attr('aria-expanded') == 'true') {
                    playerkb.play();
                } else {
                    playerkb.pause();
                }
            }
        }

    });

    $('#expand-collapse, #expand-collapse-alt').css('display', 'none');
    $('#expand-collapse-alt2').removeClass('show-n');
    /* +++++++++++Main Video popupbefor form++++++++++++ */
    //	var iframek = document.getElementById('vidone');
    //	var playerk = new Vimeo.Player(iframek);
    //	playerk.on('ended', function() {
    //		//alert(1);

    //		$('.aftrfrm').css('display', 'block');

    // 	  	});

    /* Start  one js video end*/

    var playerwel = 'no';
    var welcometab = getCookie('welcome');

    if (welcometab == 'yes') {
        $(".check").css("display", "none");
        $('.check1').html('<img id="theImg" src="images/rgt.png" />');
        $('.whosmn').removeClass("ponter-evnt");
        $('.twos').removeClass("tmp-abs");
        // $('img.lck').css("bottom","96px");

        playerwel = 'yes';

        play_auto_on_end('one_acc');
    }

    /* first Acordian one js videoend and checked start*/
    var iframeone = document.getElementById('one_acc');
    var player_one = new Vimeo.Player(iframeone);

    player_one.on('ended', function() {

        if (playerwel != 'yes') {
            $(".check").css("display", "none");
            $('.check1').html('<img id="theImg" src="images/rgt.png" />');
            $('.whosmn').removeClass("ponter-evnt");
            $('.twos').removeClass("tmp-abs");
            // $('img.lck').css("bottom","96px");

            playerwel = 'yes';
        }

        $("#collapseOne, #collapseTwo").collapse('toggle');
        setCookie('welcome', 'yes', 365);
        play_auto_on_end('two_acc');
    });

    /* first Acordian one js videoend and checked end*/

    /*=============================== Start Acordian two js video start================================================== */

    var whotab = getCookie('who');
    if (whotab == 'yes') {
        $(".unchecktwo").css("display", "none");
        $('.checktwo').html('<img id="theImg" src="images/rgt.png" />');
        $('.whysmn').removeClass("ponter-evnt");
        $('.threes').removeClass("tmp-abs");
        $('img.lck').css("width", "100px");
        $('img.lck').css("transform", "translateY(-30%)");
        // $('img.lck').css("right","-741pxpx");

    }

    var iframetwo = document.getElementById('two_acc');
    var player_two = new Vimeo.Player(iframetwo);
    player_two.on('ended', function() {

        $(".unchecktwo").css("display", "none");
        $('.checktwo').html('<img id="theImg" src="images/rgt.png" />');
        $('.whysmn').removeClass("ponter-evnt");
        $('.threes').removeClass("tmp-abs");
        $('img.lck').css("width", "100px");
        $('img.lck').css("transform", "translateY(-30%)");
        // $('img.lck').css("right","-741pxpx");
        $("#collapseTwo, #collapseThree").collapse('toggle');
        setCookie('who', 'yes', 365);
        play_auto_on_end('three_acc');
    });


    /* Start Acordian two js video end*/

    /* ================================================== Start Acordian three js video start================== */
    var whytab = getCookie('why');
    if (whytab == 'yes') {
        $(".uncheckthree").css("display", "none");
        $('.checkthree').html('<img id="theImg" src="images/rgt.png" />');
        $('.whatsmn').removeClass("ponter-evnt");
        $('.fours').removeClass("tmp-abs");
        // $('img.lck').css("bottom","81px");
        $('img.lck').css("width", "80px");

    }

    var iframethree = document.getElementById('three_acc');
    var player_three = new Vimeo.Player(iframethree);
    player_three.on('ended', function() {

        $(".uncheckthree").css("display", "none");
        $('.checkthree').html('<img id="theImg" src="images/rgt.png" />');
        $('.whatsmn').removeClass("ponter-evnt");
        $('.fours').removeClass("tmp-abs");

        // $('img.lck').css("bottom","81px");
        $('img.lck').css("width", "80px");


        $("#collapseThree, #collapsefour").collapse('toggle');
        setCookie('why', 'yes', 365);
        play_auto_on_end('four_acc');
    });

    /* Start Acordian three js video end*/

    /*=====================================  Start Acordian four js video start====================================== */

    var whattab = getCookie('what');
    if (whattab == 'yes') {
        $(".uncheckfour").css("display", "none");
        $('.checkfour').html('<img id="theImg" src="images/rgt.png" />');
        $('.wheresmn').removeClass("ponter-evnt");
        $('.fives').removeClass("tmp-abs");
        $('img.lck').css("width", "60px");

    }
    var iframefour = document.getElementById('four_acc');
    var player_four = new Vimeo.Player(iframefour);
    player_four.on('ended', function() {

        $(".uncheckfour").css("display", "none");
        $('.checkfour').html('<img id="theImg" src="images/rgt.png" />');
        $('.wheresmn').removeClass("ponter-evnt");
        $('.fives').removeClass("tmp-abs");
        $('img.lck').css("width", "60px");

        $("#collapsefour, #collapsefive").collapse('toggle');
        setCookie('what', 'yes', 365);
        play_auto_on_end('five_acc');
    });

    /* Start Acordian four js video end*/

    /* ==================================== Start Acordian five js video start================================= */

    var wheretab = getCookie('where');
    if (wheretab == 'yes') {
        $(".uncheckfive").css("display", "none");
        $('.checkfive').html('<img id="theImg" src="images/rgt.png" />');
        $('.howsmn').removeClass("ponter-evnt");
        $('.sixs').removeClass("tmp-abs");
        $('img.lck').css("width", "30px");
    }
    var iframefive = document.getElementById('five_acc');
    var player_five = new Vimeo.Player(iframefive);
    player_five.on('ended', function() {
        $(".uncheckfive").css("display", "none");
        $('.checkfive').html('<img id="theImg" src="images/rgt.png" />');
        $('.howsmn').removeClass("ponter-evnt");
        $('.sixs').removeClass("tmp-abs");
        $('img.lck').css("width", "30px");
        $("#collapsefive, #collapsesix").collapse('toggle');
        setCookie('where', 'yes', 365);
        play_auto_on_end('six_acc');
    });

    /* Start Acordian five js video end*/

    /*  ==================================== Start Acordian six js video start ==================================== */

    var howtab = getCookie('how');
    if (howtab == 'yes') {
        $(".unchecksix").css("display", "none");
        $('.checksix').html('<img id="theImg" src="images/rgt.png" />');
        $('.whensmn').removeClass("ponter-evnt");
        $('.sevens').removeClass("tmp-abs");
        $('img.lck').css("display", "none");
    }
    var iframesix = document.getElementById('six_acc');
    var player_six = new Vimeo.Player(iframesix);
    player_six.on('ended', function() {
        $(".unchecksix").css("display", "none");
        $('.checksix').html('<img id="theImg" src="images/rgt.png" />');
        $('.whensmn').removeClass("ponter-evnt");
        $('.sevens').removeClass("tmp-abs");
        $('img.lck').css("display", "none");

        $("#collapsesix, #collapseseven").collapse('toggle');
        setCookie('how', 'yes', 365);
        play_auto_on_end('seven_acc');
    });

    /* Start Acordian six js video end*/

    /* ====================================  Start Acordian seven  js video start ==================================== */

    var whentab = getCookie('when');
    if (whentab == 'yes') {

        $(".uncheckseven").css("display", "none");
        $('.checkseven').html('<img id="theImg" src="images/rgt.png" />');
        $('.sevens').removeClass("tmp-abs");
        // 	$('.fadeouttxt').addClass("last-txt-hide");
        // $('.btnhide').addClass("lastbtnshow");

        var counter = 0;
        $("#accordionExample .accordion-item .parent_img img#theImg").each(function() {
            counter++
            //alert(counter);
        });
        if (counter == 7) {
            $('#expand-collapse, #expand-collapse-alt').css('display', 'block');
            $('#expand-collapse-alt2').addClass('show-n');
            $('a.swap-on-hover.cntctmnu').css('display', 'block');
        }
    }

    var iframeseven = document.getElementById('seven_acc');
    var player_seven = new Vimeo.Player(iframeseven);
    player_seven.on('ended', function() {

        $(".uncheckseven").css("display", "none");

        $('.checkseven').html('<img id="theImg" src="images/rgt.png" />');
        $('.sevens').removeClass("tmp-abs");


        // $('.fadeouttxt').fadeOut("last-txt-hide");

        // $(".btnhide").fadeIn(9000);

        var counter = 0;
        $("#accordionExample .accordion-item .parent_img img#theImg").each(function() {
            counter++
            //alert(counter);
        });
        if (counter == 7) {
            $('#expand-collapse, #expand-collapse-alt').css('display', 'block');
            $('#expand-collapse-alt2').addClass('show-n');
            $('a.swap-on-hover.cntctmnu').css('display', 'block');
        }

        setCookie('when', 'yes', 365);

        setCookie('finish_all', 'yes', 365);
    });

    /* ====================================  Start Acordian seven js video end  ==================================== */



});

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";

    $("#accordionExample .accordion-item .accordion-collapse").each(function() {
        var ids = $(this).find('iframe').attr('id');
        const iframekb = document.getElementById(ids);
        playerkb = new Vimeo.Player(iframekb);
        playerkb.pause();

    });

}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
};

$(window).on('load', function() {
    setTimeout(function() { // allowing 3 secs to fade out loader
        $('.loader').fadeOut('slow');
    }, 3500);
});

$(function() {
    var overlay = $();
    overlay.show();
    overlay.appendTo(document.body);
    $('.popup').show();
    $('.close').click(function() {
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
    });
    $('.x').click(function() {
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
    });
});


$(function() {
    //adding a new class on button element
    //   	$('.one').on('click', function() {
    //   		$('.fstfrm').addClass('fstfrm2');
    //   	});
    //   	$('.one').click(function() {
    //   		$('.scnfrm').addClass('scnfrm2');
    //   	});


});

$(".box-video").click(function() {
    $('iframe', this)[0].src += "&amp;autoplay=1";
    $(this).addClass('open');
});


function formcheck() {
    var fields = $(".ss-item-required")
        .find("input")
        .serializeArray();

    $.each(fields, function(i, field) {
        if (!field.value) alert(field.name + " is required");
    });
    console.log(fields);
}

$(document).ready(function() {
    var checkcookie = document.cookie;

    //console.log(checkcookie);
    var createcookieobj = checkcookie.split(/[;] */).reduce(function(result, pairStr) {
        var cookiesplit = pairStr.split("=");
        if (cookiesplit.length === 2) {
            result[cookiesplit[0]] = cookiesplit[1];
        }
        return result;
    }, {});

    if (!createcookieobj.accept_cookie) {
        // $('.fstfrm').show();
        $('.fstfrm').addClass('showpop');

    }
    //   	else {

    // $('.scnfrm').show();
    // $('.scnfrm').addClass('scnfrm2');
    var cookis_form = getCookie('form_data_submit');
    //alert(cookis_form);
    // $('.fstfrm').hide();

    //$('.aftrfrm').css('display', 'none');
    //$('.scnfrm').css('display', 'none');

    // $('.fstfrm').show();

    if (cookis_form == '') {
        // 	$('.scnfrm').addClass('scnfrm2');
        $('.scnfrm').addClass('showpop');
    }
    if (cookis_form == 'done') {
        $('.aftrfrm').css('display', 'none');
        //   $('.scnfrm').css('display', 'none');
    }
    //play_auto_on_end('one_acc');
    //   	}

});


/* playerkb.getVideoTitle().then(function(title) {
	     console.log('title:', title);
	 });*/


function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    let user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}

function accp_cookiefrm_valid() {
    var emailf = $('#exampleInputEmail1').val();
    var namevalue = $('#namevalue').val();

    if (emailf || namevalue) {

        setCookie('form_data_submit', 'done', 365);
        play_auto_on_end('one_acc');
        //return true;
        location.reload();
        return false;

    } else {
        //alert(emailf);
        return false;
    }

}

function accp_cookie() {
    //alert('h');

    var d = new Date();
    d.setTime(d.getTime() + 30 * 24 * 60 * 60 * 1000);
    var expires = "expires=" + d.toGMTString();
    document.cookie = "accept_cookie" + "=done;" + expires + ";path=/";

    $('.fstfrm').removeClass('showpop');
}

$(document).ready(function() {
    $("#nxtpg").click(function() {
        //   $('.scnfrm2').css('display','none');
        $('.scnfrm').removeClass('showpop');
        // setCookie('form_data_submit', 'done', 365);
        play_auto_on_end('one_acc');


        //location.reload();
    });


});




function expandCollapse() {
    if ($(".submenu").css('display') == 'none')

    {

        $(".submenu").show("slow");
    } else {

        $(".submenu").hide("slow");
    }

}

$(function() {
    // var chh = 'expand';
    // 	$("#expand-collapse, #expand-collapse-alt, #expand-collapse-alt2").click(function () {
    // if($(this).hasClass('mb-alt')){
    //     if(chh == 'expand'){
    //         $(this).html('<i class="fa fa-chevron-down"></i>');
    //         chh = 'collapse';
    //     }else{
    //         $(this).html('<i class="fa fa-chevron-up"></i>');
    //         chh = 'expand';
    //     }



    //    // return text === '' ? '<i class="fa fa-chevron-up"></i>' : '<i class="fa fa-chevron-down"></i>';
    //     console.log('ff')
    // }else{
    //  $(this).text(function(i, text){

    //      return text === "collapse all" ? "expand all" : "collapse all";
    //  })
    // }
    // 	});
})


//accordion-button collapsed
$(document).ready(function() {
    var chh = 'collapse';
    $("#expand-collapse, #expand-collapse-alt, #expand-collapse-alt2").click(function() {


        var counter = 0;
        var btunno = $(this).text();
        $("#accordionExample .accordion-item .accordion-collapse").each(function() {
            if (btunno != 'expand all' && chh != 'expand') {

                // $(this).addClass('show');
                $(this).removeClass('show');
                // console.log('ff');

                // console.log(chh);

                // chh = 'expand';

            } else {
                //   console.log('gg');
                $(this).addClass('show');
                //   chh = 'collapse';
                //   $(this).removeClass('show');
            }
            var ids = $(this).find('iframe').attr('id');
            const iframekb = document.getElementById(ids);
            playerkb = new Vimeo.Player(iframekb);
            playerkb.pause();


        });

        if (chh == 'expand') {
            if ($(this).hasClass('mb-alt')) {
                $(this).html('<i class="fa fa-chevron-up"></i>');
            }
            chh = 'collapse';
        } else {
            if ($(this).hasClass('mb-alt')) {
                $(this).html('<i class="fa fa-chevron-down"></i>');
            }
            chh = 'expand';
        }

        if ($(this).hasClass('mb-alt')) {
            //  console.log(chh)
            // if(chh == 'expand'){
            //     $(this).html('<i class="fa fa-chevron-down"></i>');
            //    // chh = 'collapse';
            // }else{
            //     $(this).html('<i class="fa fa-chevron-up"></i>');
            //    // chh = 'expand';
            // }



            // return text === '' ? '<i class="fa fa-chevron-up"></i>' : '<i class="fa fa-chevron-down"></i>';
            // console.log('ff')
        } else {
            // console.log('ddd')
            // console.log(text)

            if (btunno == 'expand all') {
                $(this).html('collapse all');
            } else {
                $(this).html('expand all');
            }
            //  $(this).text(function(i, text){

            //      return text === "collapse all" ? "expand all" : "collapse all";
            //  })
        }

        /*const iframekb = document.getElementById(idiframe);
        		    playerkb = new Vimeo.Player(iframekb);
                    playerkb.play();*/

        // 		if(btunno != 'expand all')
        // 		{
        // 			$("#accordionExample .accordion-item .accordion-collapse" ).each(function() {
        // 				$(this).removeClass('show');
        // 			});
        // 		}
        // 		if(btunno != 'expand all')
        // 		{
        // 			$("#accordionExample .accordion-item .accordion-collapse" ).each(function() {
        // 				$(this).removeClass('show');
        // 			});


        // 		}




    });
});




//Welcomes

$(document).ready(function() {
    $(".welcomes").click(function() {
        {
            $("#accordionExample .accordion-item .accordion-collapse").each(function() {
                $(this).removeClass('show');
            });
        }
        $("#collapseOne").addClass("show");
        play_auto_on_end('one_acc');


    });


    $(".whos").click(function() {
        {
            $("#accordionExample .accordion-item .accordion-collapse").each(function() {

                $(this).removeClass('show');


            });
        }
        $("#collapseTwo").addClass("show");
        play_auto_on_end('two_acc');
        // const iframekbt = document.getElementById('two_acc');
        //playerkbt = new Vimeo.Player(iframekbt);
        // playerkbt.play();
    });


    $(".whys").click(function() {
        {
            $("#accordionExample .accordion-item .accordion-collapse").each(function() {
                $(this).removeClass('show');
            });
        }
        $("#collapseThree").addClass("show");
        play_auto_on_end('three_acc');

    });



    $(".whats").click(function() {
        {
            $("#accordionExample .accordion-item .accordion-collapse").each(function() {
                $(this).removeClass('show');
            });
        }
        $("#collapsefour").addClass("show");
        play_auto_on_end('four_acc');

    });


    $(".wheres").click(function() {
        {
            $("#accordionExample .accordion-item .accordion-collapse").each(function() {
                $(this).removeClass('show');
            });
        }
        $("#collapsefive").addClass("show");
        play_auto_on_end('five_acc');

    });



    $(".hows").click(function() {
        {
            $("#accordionExample .accordion-item .accordion-collapse").each(function() {
                $(this).removeClass('show');
            });
        }
        $("#collapsesix").addClass("show");
        play_auto_on_end('six_acc');
    });

    $(".whens").click(function() {
        {
            $("#accordionExample .accordion-item .accordion-collapse").each(function() {
                $(this).removeClass('show');
            });
        }
        $("#collapseseven").addClass("show");
        play_auto_on_end('seven_acc');

    });

});


/*$(document).ready(function(){
  $(".logoclick").click(function(){
  alert("i am here");
  });
});*/


function slides_resize() {
    var header_height = $('header').innerHeight();
    var footer_height = $('footer').innerHeight();

    var total = header_height + footer_height;

    $('#cf-slide-form').css('height', 'calc(100vh - ' + total + 'px)');

    $('#cf-slide-form1').css('height', 'calc(100vh - ' + total + 'px)');

    $('#offr-feed').css('height', 'calc(100vh - ' + total + 'px)');

    $('#slide-legalese').css('height', 'calc(100vh - ' + total + 'px)');
}

function message_window() {
    let header_height = $('header').innerHeight();
    let footer_height = $('footer').innerHeight();

    let slide_header = $('.dark-bg').innerHeight();

    let total = header_height + footer_height + slide_header;

    return total
}

$(window).on('resize', function() {
    slides_resize()

    // alert($(window).width())

    if ($(window).width() <= 820) {
        $('body').addClass('mobile');
        $('body').removeClass('windows');
    } else {
        $('body').removeClass('mobile');
        $('body').addClass('windows');
        $('.midle').css('padding-top', '0px')
    }


    let x = message_window()

    $('#sh_message.show').css('height', 'calc(100vh - ' + x + 'px)');
})

function open_slidein11(){

    if(ct == 2){
        ct = 1;
    }else{
        ct++;

        lg = 0;
        fb = 0;
    }

    slides_resize();
    if($('#offr-feed').hasClass('show')){
        $('#offr-feed').removeClass('show');
    }
    $('#slide-legalese').removeClass('show');
    $('#cf-slide-form').toggleClass('show');
    $('#cf-slide-form1').toggleClass('show');
    $('#cf-slide-form11').toggleClass('show');

    $('#step-1 input[name="fname"]').focus();

	    navigateToFormStep('1');
	    $('.step-curr').html('1');

    if(playerkb){
	    playerkb.pause();
	}

	var head_height = $('header').innerHeight();

	if($('header').hasClass('p-fixed')){

	    if (ct % 2 === 0) { 
            $('header').removeClass('p-fixed');
            $('footer').removeClass('p-fixed');
            $('body').removeClass('no-scroll');

            $('.midle').css('top','0px'); }
        else { /* we are odd */ }

        if(check_slidein != 'open'){

        }

	   // $('header').removeClass('p-fixed');
	   // $('footer').removeClass('p-fixed');
	}
	else{
	    if (ct % 2 === 0) { 
        }
        else { 
            $('header').addClass('p-fixed');
            $('footer').addClass('p-fixed');

            // $('.midle').css('top',header_height+'px');

            $('.midle').css('top',head_height+'px');

            $('body').addClass('no-scroll');

        }

        if(check_slidein == 'open'){
            // setTimeout(function() {


    	   // }, 1500);
        }
	}

}

function open_slidein(){

    if(ct == 2){
        ct = 1;
    }else{
        ct++;

        lg = 0;
        fb = 0;
    }

    slides_resize();
    if($('#offr-feed').hasClass('show')){
        $('#offr-feed').removeClass('show');
    }
    $('#slide-legalese').removeClass('show');
    $('#cf-slide-form').toggleClass('show');

    $('#step-1 input[name="fname"]').focus();

	    navigateToFormStep('1');
	    $('.step-curr').html('1');

    if(playerkb){
	    playerkb.pause();
	}

	var head_height = $('header').innerHeight();

	if($('header').hasClass('p-fixed')){

	    if (ct % 2 === 0) { 
            $('header').removeClass('p-fixed');
            $('footer').removeClass('p-fixed');
            $('body').removeClass('no-scroll');

            $('.midle').css('top','0px'); }
        else { /* we are odd */ }

        if(check_slidein != 'open'){

        }

	   // $('header').removeClass('p-fixed');
	   // $('footer').removeClass('p-fixed');
	}
	else{
	    if (ct % 2 === 0) { 
        }
        else { 
            $('header').addClass('p-fixed');
            $('footer').addClass('p-fixed');

            // $('.midle').css('top',header_height+'px');

            $('.midle').css('top',head_height+'px');

            $('body').addClass('no-scroll');

        }

        if(check_slidein == 'open'){
            // setTimeout(function() {


    	   // }, 1500);
        }
	}

}

function close_slidein() {
    ct = 0;

    lg = 0;
    fb = 0;

    $('#cf-slide-form').removeClass('show');
    $('#cf-slide-form11').removeClass('show');

    removefix()
}

function open_feedin() {
    if (fb == 2) {
        fb = 1;
    } else {
        fb++;
        ct = 0;
        lg = 0;
    }

    if ($('#cf-slide-form').hasClass('show')) {
        $('#cf-slide-form').removeClass('show');
    }

    if ($('#cf-slide-form1').hasClass('show')) {
        $('#cf-slide-form1').removeClass('show');
    }
    $('#slide-legalese').removeClass('show');

    $('#offr-feed').toggleClass('show');

    var head_height = $('header').innerHeight();

    if ($('header').hasClass('p-fixed')) {

        if (fb % 2 === 0) {
            $('header').removeClass('p-fixed');
            $('footer').removeClass('p-fixed');
            $('body').removeClass('no-scroll');

            $('.midle').css('top', '0px');
        } else {
            /* we are odd */ }

        if (check_slidein != 'open') {

        }

        // $('header').removeClass('p-fixed');
        // $('footer').removeClass('p-fixed');
    } else {
        if (fb % 2 === 0) {} else {
            $('header').addClass('p-fixed');
            $('footer').addClass('p-fixed');

            // $('.midle').css('top',header_height+'px');

            $('.midle').css('top', head_height + 'px');

            $('body').addClass('no-scroll');

        }

        if (check_slidein == 'open') {
            // setTimeout(function() {


            // }, 1500);
        }
    }

    if (playerkb) {
        playerkb.pause();
    }
}

function close_feedin() {
    ct = 0;

    lg = 0;
    fb = 0;

    $('#offr-feed').removeClass('show');

    removefix()
}

function close_legalese() {
    ct = 0;

    lg = 0;
    fb = 0;

    $('#slide-legalese').removeClass('show');

    // reset the scroll to top
    $('#slide-legalese').scrollTop(0);
    $(".lgl").removeClass('ac');

    removefix()
}

function open_legalese(row) {

    if (lg == 2) {
        lg = 1;
    } else {
        lg++;
        fb = 0;
        ct = 0;
    }

    if (playerkb) {
        playerkb.pause();
    }

    $('#offr-feed').removeClass('show');
    $('#cf-slide-form').removeClass('show');
    $('#cf-slide-form1').removeClass('show');
    $('#cf-slide-form11').removeClass('show');

    $('#slide-legalese').toggleClass('show');

    // alert('ggg')

    $(".lgl").removeClass('ac');
    /* Temp 
    
    // get the section using data
    var section = $(row).data('section');
    // get the top of the section
    var sectionOffset = $('#slide-legalese '+section).offset();

    setTimeout(function() { // allowing x secs to fade out loader
        // alert(sectionOffset.top)
        //scroll the container        
        // $("#"+section).toggleClass('ac');
        $(".lgl").removeClass('ac');
        $(section).addClass('ac');
        // alert($( "#legalese_modal .modal-body #"+section ).offset().top + 30)
        $('#slide-legalese').animate({
            
            scrollTop: sectionOffset.top - 120
        }, "slow");
    }, 800);
    */

    var head_height = $('header').innerHeight();

    if ($('header').hasClass('p-fixed')) {

        if (lg % 2 === 0) {
            $('header').removeClass('p-fixed');
            $('footer').removeClass('p-fixed');
            $('body').removeClass('no-scroll');

            $('.midle').css('top', '0px');
        } else {
            /* we are odd */ }

        if (check_slidein != 'open') {

        }

        // $('header').removeClass('p-fixed');
        // $('footer').removeClass('p-fixed');
    } else {
        if (lg % 2 === 0) {} else {
            $('header').addClass('p-fixed');
            $('footer').addClass('p-fixed');

            // $('.midle').css('top',header_height+'px');

            $('.midle').css('top', head_height + 'px');

            $('body').addClass('no-scroll');

        }

        if (check_slidein == 'open') {
            // setTimeout(function() {


            // }, 1500);
        }
    }

}


$('#scroll-d').click(function() {
    var section = $("#startwb");
    // get the top of the section
    var sectionOffset = $(section).offset();
    // $("#startwb").animate({ scrollTop: 0 }, "slow");

    $('html,body').animate({

        scrollTop: sectionOffset.top
    }, "slow");
})


$('#cf_modal').on('submit', function(e) {
    e.preventDefault();

    $('#cf_modal')[0].reset();

    $('#sh_message').addClass('show');

    let x = message_window()

    $('#sh_message.show').css('height', 'calc(100vh - ' + x + 'px)');

    $('#cf_message').html('<h4>Thank You!<br>Your message has been sent.<br>We will get back to you as soon as possible.</h4>');

    if ($("#newslt1").prop('checked') == true) {

        setCookie('nl_subs', 'done', 365);

        setTimeout(function() { // allowing x secs to fade out loader
            $('#nl-subs').show();
            $('#nls-subs').addClass('d-none')
        }, 1000);
    }

    $('#cf_modal').addClass('d-none');
})

$('button.close').click(function() {
    setTimeout(function() {
        $('#cf_message').html('');
        $('#cf_modal').removeClass('d-none');

        $('#sh_message').removeClass('show');
        $('#sh_message').css('height', '0');
    }, 1500);

    ct = 0;

    lg = 0;
    fb = 0;
    removefix()
    $('header').removeClass('p-fixed');
    $('footer').removeClass('p-fixed');
})

$('#newslt1').click(function() {
    // var $newslt = $('.list-sort');
    if ($(this).attr('checked')) {
        $(this).removeAttr('checked');
    } else {
        $(this).attr('checked', true);
    }
});


$('.dfh').click(function() {

    var ck = getCookie('finish_all');
    if (ck == 'yes') {
        setTimeout(function() { // allowing 3 secs to fade out loader
            check_exp();
        }, 800);
    }


})


function check_exp() {
    let num = $('.df').length;
    let num1 = $('.df.show').length;

    if (num == num1) {

        $('#expand-collapse-alt2').html('<i class="fa fa-chevron-up"></i>');
        $(this).html('<i class="fa fa-chevron-down"></i>');

        $('#expand-collapse-alt').html('collapse all');
        $(this).html('expand all');
    } else if (num1 == 0) {
        $('#expand-collapse-alt2').html('<i class="fa fa-chevron-down"></i>');

        $('#expand-collapse-alt').html('expand all');
    }
}


$('#feedbackform').on('submit', function(e) {
    e.preventDefault();

    if ($('input[type=checkbox]:checked').length == 0) {
        $('#submitedline').addClass("active")
        $('#submitedline').html("<p style='color:red'>Please select atleast one checkbox</p>").fadeIn('slow') //also show a success message
    } else {
        var describes = [];
        $.each($("input[name='describes[]']:checked"), function() {
            describes.push($(this).val());
        });
        var formData = {
            tellus: $('input[name="tellus"]:checked').val(),
            recommend_number: $('input[name="recommend_number"]:checked').val(),
            tailored_number: $('input[name="tailored_number"]:checked').val(),
            experience_number: $('input[name="experience_number"]:checked').val(),
            overall_number: $('input[name="overall_number"]:checked').val(),
            describes: describes,
            howcanimprove: $("#howcanimprove").val(),
            mailreply: $("#mailreply").val()
        };

        // 		$.ajax({
        // 			type: "POST",
        // 			url: document.location.origin+"/Api/storefeedback",
        // 			data: formData,
        // 			dataType: "json",
        // 			encode: true,
        // 			success: function (data) {
        $('#feedbackform')[0].reset(); // to reset form data
        // 			}
        // 		}).done(function (data) {

        $('#submitedline').addClass("active")
        $('#submitedline').html("Thanks! That you took time to do. Thank You!!").fadeIn('slow') //also show a success message
        // 		});

    }
});

function removefix() {
    $('header').removeClass('p-fixed');
    $('footer').removeClass('p-fixed');

    $('body').removeClass('no-scroll');

    $('.midle').css('top', '0px');

    ct = 0;

    lg = 0;
    fb = 0;
}


/* Stepper Form */
/**
 * Define a function to navigate betweens form steps.
 * It accepts one parameter. That is - step number.
 */
const navigateToFormStep = (stepNumber) => {
    /**
     * Hide all form steps.
     */
    document.querySelectorAll(".form-step").forEach((formStepElement) => {
        formStepElement.classList.add("d-none");
    });
    /**
     * Mark all form steps as unfinished.
     */
    document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
        formStepHeader.classList.add("form-stepper-unfinished");
        formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
    });
    /**
     * Show the current form step (as passed to the function).
     */
    document.querySelector("#step-" + stepNumber).classList.remove("d-none");
    /**
     * Select the form step circle (progress bar).
     */
    const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
    /**
     * Mark the current form step as active.
     */
    formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
    formStepCircle.classList.add("form-stepper-active");


    //  $("#step-"+stepNumber+" input:text:visible:first").focus();
    var tp = 1;
    $('#step-' + stepNumber).find('input,textarea').each(function() {
        if (tp == '1') {
            $(this).focus();
        }
        tp++;
    });

    /**
     * Loop through each form step circles.
     * This loop will continue up to the current step number.
     * Example: If the current step is 3,
     * then the loop will perform operations for step 1 and 2.
     */
    for (let index = 0; index < stepNumber; index++) {
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector('li[step="' + index + '"]');
        /**
         * Check if the element exist. If yes, then proceed.
         */
        if (formStepCircle) {
            /**
             * Mark the form step as completed.
             */
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
            formStepCircle.classList.add("form-stepper-completed");
        }
    }
};
/**
 * Select all form navigation buttons, and loop through them.
 */
// document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
// /**
//  * Add a click event listener to the button.
//  */
//  formNavigationBtn.addEventListener("click", () => {
//     /**
//      * Get the value of the step.
//      */
//      const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));

//      /**
//      * Get the navigation of the step.
//      */
//      const step_navigate = formNavigationBtn.getAttribute("step_navigate");
//     /**
//      * Call the function to navigate to the target form step.
//      */

//      console.log(step_navigate)

//      console.log(formNavigationBtn.getAttribute("class"));

//     //  if(step_navigate == "next"){
//     //      $('form#register').find('input').each(function(){
//     //         if(!$(this).prop('required')){
//     //             console.log("NR");
//     //         } else {
//     //             console.log("IR");
//     //         }
//     //     });
//     //  }
//      navigateToFormStep(stepNumber);
//  });
// });

$('input[type=radio][name=use_time]').change(function() {
    if (this.value == 'other') {
        $('#other_use_time').removeClass('d-none');

        $("input[name='other']").removeAttr('disabled');
    } else {
        $('#other_use_time').addClass('d-none');

        $("input[name='other']").attr('disabled', true);
    }
});

$('.btn-navigate-form-step').click(function() {
    const stepNumber = $(this).attr("step_number");

    const step_navigate = $(this).attr("step_navigate");

    if (step_navigate == "next") {
        const prev_step = stepNumber - 1;
        var cont = true;
        // console.log($(section).attr('id'))
        $('#step-' + prev_step).find('input,textarea').each(function() {
            if ($(this).prop('required')) {
                if ($(this).val() == '' || $(this).val() == null) {
                    $(this).addClass('border-danger');
                    $(this).focus();
                    cont = false;
                    return false;
                } else {
                    $(this).removeClass('border-danger');
                }
            } else {
                // console.log("NR")
                $(this).removeClass('border-danger');
                navigateToFormStep(stepNumber);
            }
        });


        if ($('#step-' + prev_step + ' input[name="use_time"]').length > 0) {
            if ($("input[name='use_time']:checked").val() != '' && $("input[name='use_time']:checked").val() != undefined) {
                cont = true;
                if ($("input[name='use_time']:checked").val() == 'other') {
                    if ($("input[name='other']").val() == '') {
                        $('#step-form-messsage').html('Please fill in the required(<span style="color:red">*</span>) fields');
                        navigateToFormStep(prev_step);
                        return false;
                    } else {
                        $('#step-form-messsage').html('');
                        navigateToFormStep(stepNumber);
                    }
                }
                navigateToFormStep(stepNumber);

            } else {
                cont = false;
            }
        }

        if (cont === false) {
            $('#step-form-messsage').html('Please fill in the required(<span style="color:red">*</span>) fields');
            navigateToFormStep(prev_step);
            return false;
        }

        $('#step-' + prev_step).find('input[type="email"]').each(function() {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            var inputText = $(this).val();

                if (inputText.match(mailformat)) {
                    $(this).removeClass('border-danger');
                    navigateToFormStep(stepNumber);
                } else {
                    $(this).addClass('border-danger');
                    $(this).focus();
                    cont = false;
                    return false;
                }
            });

            if (cont === false) {
                $('#step-form-messsage').html('You have entered an invalid email address!');
                navigateToFormStep(prev_step);
                return false;
            }

            if ($('#step-' + prev_step + ' input[type="checkbox"]').length > 0) {

                // if($('input[type="checkbox"][name="monthly_cashflow[]"]:checked').length > 0)
                // {
                //     cont = true;
                //     navigateToFormStep(stepNumber);

                // }
                // else
                // {
                //     cont = false;
                // }
            }

            if (cont === false) {
                $('#step-form-messsage').html('Please select at least one option!');
                navigateToFormStep(prev_step);
                return false;
            }

            $('#step-form-messsage').html('');
            navigateToFormStep(stepNumber);



        } else {
            $('#step-form-messsage').html('');
            navigateToFormStep(stepNumber);
        }


        $('.step-curr').html(stepNumber);
    })


    $(document).ready(function() {
        $("#ContactForm").keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });

    $('#newsletter_subscribe').click(function() {
        // var $newslt = $('.list-sort');
        if ($(this).attr('checked')) {
            $(this).removeAttr('checked');
        } else {
            $(this).attr('checked', true);
        }
    });

    $('#ContactForm').on('submit', function(e) {
        e.preventDefault();
        
        var formValues = $(this).serialize();
    $.post('/tekklesia/saveData.php', formValues,
    function(data) {
        var txt = data;
        var obj = JSON.parse(txt);
        var status = obj.status;
        var message = obj.message;
    
        $('#ContactForm')[0].reset();
        $('#sh_message').addClass('show');
		
	    let x = message_window()
	
	    x = x + 42;
	
    	$('#sh_message.show').css('height','calc(100vh - '+ x +'px)');
        $('#cf_message').html('<h4><b>Thank You!</b><br>Your request has been sent.<br>We will get back to you as soon as possible.</h4>');
        if($("#newsletter_subscribe").prop('checked') == true){
            setCookie('nl_subs', 'done', 365);
    
            setTimeout(function() { // allowing x secs to fade out loader
                $('#nl-subs').show();
                $('#nls-subs').addClass('d-none')
            }, 1000);
        }
        
        setTimeout(function() { // allowing x secs to fade out loader
            // window.location.href = "startpage"
        }, 2000);
        
        $('.msfc').addClass('d-none');
    });
    })

    $('button.close').click(function() {
        removefix();
        setTimeout(function() {
            $('#cf_message').html('');
            $('#multi-step-form-container').removeClass('d-none');
            $('.msfc').removeClass('d-none');
            $('#sh_message').removeClass('show');
            $('#sh_message').css('height', '0');
        }, 1500);
    })


    $(':input[required]').on('invalid', function(e) {
        alert("Error, please check all required fields before submitting.");
    });
    /* Stepper Form */
    
$('#ContactFormOPT').on('submit', function(e){
    e.preventDefault();
    
    $('#ContactForm')[0].reset();
    
    $('#loader1').removeClass('show');
    
    $('#sh_message').addClass('show');
            
    let x = message_window()
    
    $('#sh_message.show').css('height','calc(100vh - '+ x +'px)');
    $('#cf_message').html('<h4>Thank You!<br>Your message has been sent.<br>We will get back to you as soon as possible.</h4>');
    
    $('.msfc').addClass('d-none');
    
    if($("#newslt1").prop('checked') == true){
        

        setCookie('nl_subs', 'done', 365);
        
        setTimeout(function() { // allowing x secs to fade out loader
            $('#nl-subs').show();
            $('#nls-subs').addClass('d-none')
        }, 1000);
        ;
    }
    
    setTimeout(function() { // allowing x secs to fade out loader
        // window.location.href = "startpage"
    }, 2000);
});

    
function submitForm786(url){
    //var formData = $("#ContactForm").serialize();
    var formData = {
      email: $("#email").val(),
    };

    $.ajax({
        type : 'POST',
        url  : "saveData1.php",
        data : formData,
        dataType: "json",
        encode: true,
        success :  function(data){
            //alert("Double Opt-In Button is pressed - Form will submit");
            //alert("The server says: " + response);
             console.log(data);
        }
    }).done(function (data) {
      console.log(data);
      if (data.success) {
        //$("#ContactForm").html(
        //  '<div class="alert alert-success">' + data.message + "</div>"
        //);
        //$('#double_email').attr( 'step_number','3');
        $('#cf-slide-form11').toggleClass('show');
        $('#loader1').toggleClass('show');
      } else {
        $('#double_email').attr( 'step_number','3');
      }
    });
}

function submitLoginForm786(url){
    var formData = {
      pass1: $("#pass1").val(),
      pass2: $("#pass2").val(),
      pass3: $("#pass3").val(),
      pass4: $("#pass4").val(),
    };
    
      $.ajax({
        type : 'POST',
        url  : "login.php",
        data : formData,
        dataType: "json",
        encode: true,
        success :  function(data){
            //alert("Double Opt-In Button is pressed - Form will submit");
            //alert("The server says: " + response);
            console.log(data);
        }
    }).done(function (data) {
      console.log(data);
      if (data.success) {
        //$("#ContactForm").html(
        //  '<div class="alert alert-success">' + data.message + "</div>"
        //);
        $('#cf-slide-form1').removeClass('show');
        $(".logoclick").removeAttr("onclick");
        location.reload(true)
      } else {
        $('.wrongpasscode').addClass('showerror');
        //alert("You have entered an incorrect pin");
      }
    });
    
}
function close_loader1(){
    $('#loader1').removeClass('show');
    //$('#double_email').attr( 'step_number','3');
}
function open_action1(){
    $('#cf-slide-form1').addClass('show');
    $('header').addClass('p-fixed');
    $('footer').addClass('p-fixed');
}
function close_slidein1(){
    $('#cf-slide-form1').removeClass('show');
}
$(".passcode").on("focus",function(e){
    $(this).select();
});
$(".passcode").on("mouseup",function(e){
    $(this).select();
    return false;
});
$('.passcode').keyup(function(e) {
    if (e.which == 8 || e.which == 46) {
        $(this).prev('.passcode').focus();
    }
    else {
        $(this).next('.passcode').focus();
    }
});