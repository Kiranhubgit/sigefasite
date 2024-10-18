<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex,nofollow">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="preload" href="Ebrima-Bold.woff2" as="font" type="font/woff2" crossorigin>
        <link rel="stylesheet" href="media.css">
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.1/magnific-popup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.1/magnific-popup.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/all.css">
        <title>Tekklesia</title>
    </head>
 
    <body class="stk startpg">
        <!--fstfrm strt-->
        <!-- <div id="loader" class="scnfrm">
            <div class='popup once'>
                <div class='cnt223'>
                    <div class="wrap">
                        <div class="box-video">
                            <div class="">
                                <div class="video-container">
                                    <div class="panel-body">
                                        <iframe id="vidone" src="https://player.vimeo.com/video/641467347?"
                                            width="100%" height="100%" frameborder="0"
                                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                        <div id="spanid" style="text-align:left;">
                                        </div>
                                        <div> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aftrfrm pt-2">
                            <form id="firstvidpop" class="loadfrm scndstp" method="POST" onsubmit="return accp_cookiefrm_valid();">
                                <div class="mb-3 mx-lg-5 ">
                                    <input type="text" class="form-control" id="namevalue" placeholder="NAME" required>
                                </div>
                                <div class="mb-3 mx-lg-5 ">
                                    <input type="email" class="form-control" placeholder="EMAIL" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <input type="submit"  class=" btn btn-orng mx-auto text-center d-block
                                    text-uppercase mb-3"   value="I WANT A TICKET TO RIDE">
                            </form>
                            <div class="mx-auto d-flex justify-content-center" id="play-button"><a href="javascript:void(0);" id="nxtpg" class="trd btn mx-auto text-center d-inline-block
                                text-uppercase  trd fw-bold">I'd like to learn more first <i class="fa fa-angle-right" style="font-size:30px"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--fstfrm end-->
        <?php if($get_session=='7-7-7-7') { ?>
                                
        <!--cooki strt-->
        <div id="loader" class="fstfrm cooki">
            <div class='popup ' id="popuplink">
                <a href='' class='fst close d-block mb-3 text-end'>
                <i class="bi bi-x-circle-fill "></i>
                </a>
                
                <div class="bg-blu p-lg-5 p-3  mx-2  rounded text-dark text-center ">
                    <p class=" pt-lg-3 h2"><span class="d-lg-block">This site uses cookies</span> to help you have <span class="d-lg-block">the best experience possible.</span></p>
                    <img src="images/allright.png" class="img-fluid d-block mx-auto pb-3">
                    <a href="javascript:void(0)" onclick="accp_cookie()" class="okbtn d-inline-block mx-auto text-decoration-none text-center px-2 one mb-lg-3">ok!</a>
                </div>
                
                <!--<div class="bg-blu p-3  mx-2  rounded text-dark text-center ">-->
                <!--    <p class="pb-3 pt-lg-3 ">This site uses cookies to help you <br>have the best experience possible.</p>-->
                <!--    <img src="images/allright.png" class="img-fluid d-block mx-auto pb-3">-->
                <!--    <a href="javascript:void(0)" onclick="accp_cookie()" class="okbtn d-inline-block mx-auto text-decoration-none text-center px-2 one mb-lg-3">ok!</a>-->
                <!--</div>-->
            </div>
        </div>
        <!--cooki end-->
        <?php } ?>
        <!--double OptIn start -->
        <div id="loader1" class="scnfrm1">
            <div class='popup once'>
                <div id="multi-step-form-container">
                        <div class="" id="play-button">
                            <a href="#" onclick="close_loader1()" class="trd btn"><img src="assets/images/close-icon.png"></a>
                        </div>
                        <form id="ContactFormOPT" name="ContactFormOPT" enctype="multipart/form-data" method="POST">
                            
                            <section class="">
                                <div class="form-q">
                                    <h2 class="font-normal ytr-title"><strong>Good News!</strong> You already registered this email with us. This grants you the <span><strong>SPEED PASS</strong> <i>(skiping steps 3-5)</i></span> to sharing what's on your mind. <strong>IF</strong> you would like us to reply, <strong>THEN</strong> just ask us a question down below.</h2>
                                     <!--And please do invite them.-->
                                    <!-- Step 5 input fields -->
                                    <div class="mt-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="5" name="imagine_help" id="imagine_help" required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="form-n">
                                    <div class="d-flex align-items-center justify-content-between"> 
                                        <div class="col-md-12 text-center">
                                            <button class="button submit-btn" type="submit">Send Now</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                        
                        <div id="step-form-messsage"></div>
                        
                        <!--<div class="st-navs text-center">-->
                        <!--    <div class="nv-box">-->
                        <!--        <span class="step-curr">1</span> of 5-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
            </div>
        </div>
        <!--double OptIn end -->
        <main class="allht">
            <header class="py-2 py-lg-0">
                <div class="container-fluid px-100">
                    <div class="row ">
                        <div class="col-12">
                            <div class="d-flex align-items-center tpbar">
                                <div class="px-md-3 px-0 px-lg-0 st-0">
                                    <a href="https://www.sigefa.com/" class="logoclick"> <img src="images/nav-left-logo.png" class="img-fluid logo logo-top"></a>
                                </div>
                                <div class="text-center mx-auto px-md-3 px-2 st-0">
                                    <div class="d-flex align-items-center cntrtxt">
                                        <h2 class="text-center mx-auto title">tekklesia</h2>
                                        <!--<p class="ptxt pb-0 mb-0 text-center mb-none">Visionary Training Center</p>-->
                                    </div>
                                </div>
                                <div id="mySidenav" class="sidenav  ">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                    <a class="swap-on-hover welcomes" onclick="closeNav()">
                                    <span class="me-3">
                                    <img src="images/ione.png" class="swap-on-hover__front-image">
                                    <img src="images/ioner.png" class="swap-on-hover__back-image">
                                    </span>Welcome TO... </a>
                                    <a  class="swap-on-hover whos whosmn ponter-evnt" onclick="closeNav()">
                                    <span class="me-3">
                                    <img src="images/itwo.png" class="swap-on-hover__front-image">
                                    <img src="images/itwored.png" class="swap-on-hover__back-image">
                                    </span>
                                    <span class="txtred">Who </span>we are </a>
                                    <a  class="swap-on-hover whys  whysmn ponter-evnt" onclick="closeNav()">
                                    <span class="me-3">
                                    <img src="images/ithree.png" class="swap-on-hover__front-image">
                                    <img src="images/ithreer.png" class="swap-on-hover__back-image">
                                    </span>
                                    <span class="txtred"> Why </span> we exist </a>
                                    <a   class="swap-on-hover whats  whatsmn ponter-evnt" onclick="closeNav()">
                                    <span class="me-3">
                                    <img src="images/ifour.png" class="swap-on-hover__front-image">
                                    <img src="images/ifourr.png" class="swap-on-hover__back-image">
                                    </span>
                                    <span class="txtred">What </span> we do </a>
                                    <a    class="swap-on-hover  wheres wheresmn ponter-evnt" onclick="closeNav()">
                                    <span class="me-3">
                                    <img src="images/ifive.png" class="swap-on-hover__front-image">
                                    <img src="images/ifiver.png" class="swap-on-hover__back-image">
                                    </span>
                                    <span class="txtred">Where </span>we are </a>
                                    <a  class="swap-on-hover hows howsmn ponter-evnt" onclick="closeNav()">
                                    <span class="me-3">
                                    <img src="images/isix.png" class="swap-on-hover__front-image">
                                    <img src="images/isixr.png" class="swap-on-hover__back-image">
                                    </span>
                                    <span class="txtred">How </span>it works </a>
                                    <a   class="swap-on-hover whens  whensmn ponter-evnt" onclick="closeNav()" >
                                    <span class="me-3">
                                    <img src="images/iseven.png" class="swap-on-hover__front-image">
                                    <img src="images/isevenr.png" class="swap-on-hover__back-image">
                                    </span>
                                    <span class="txtred">When </span>to start </a>
                                </div>
                                <!--<div class="px-md-3 px-2 px-lg-0 ">-->
                                <!--    <i class="bi bi-list" onclick="openNav()"></i>-->
                                <!--</div>-->
                                
                                <div class="mb-none">
                                    <p class="ptxt pb-0 mb-0 text-center mb-none">Visionary <br>Training Center</p>
                                </div>
                                <!--<div class="px-md-3 px-2 px-lg-0 st-0 connectbtn1">
                                    <button class="btn orngjoin px-lg-4 " id="slidein-form" onclick="open_slidein()" type="button">CONNECT</button>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="pb-4 slidf" id="cf-slide-form">
                <div class="container-fluid">
                    <div class="dark-bg row">
                        <div class="container allow">
                            <div class="row py-2 ">
                                <div class="col-md-12">
                                    
                                    <div class="position-relative">
                                    <!--<h4 class="text-center mx-auto modal-title text-white">We love hearing from you!</h4>-->
                                    <h4 class="modal-title" id="contact_formlabel">Talk to us. <br> We love hearing from you!</h4>
                                    <button type="button" class="close position-absolute text-end stk-close" >
                                    <span aria-hidden="true" onclick="close_slidein()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
                                    </button>    
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="container allow">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <!--<form method="POST" id="askqueform">-->
                                <!--    <h5 id="askqueformsuccess"></h5>-->
                                    <!--<p style="margin-top: 10px; font-size:16px">Talk to Us.</p>-->
                                <!--    <h4>Talk to Us.</h4>-->
                                <!--    <p>-->
                                <!--    </p>-->
                                <!--    <div class="row">-->
                                <!--        <div class="col-md-6">-->
                                <!--            <div class="input-group mb-3">-->
                                <!--                <label class="d-block w-100 m-0 mb-1 h6"><h4>Name*</h4></label>-->
                                <!--                <input type="text" class="form-control rounded-0" name="askque-name" placeholder="Your Name Here" aria-label="Username" required="">-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="col-md-6">-->
                                <!--            <div class="input-group mb-3">-->
                                <!--                <label class="d-block w-100 m-0 mb-1 h6"><h4>Email*</h4></label>-->
                                <!--                <input type="email" class="form-control rounded-0" name="askque-email" placeholder="yourname@email.com" aria-label="email" required="">-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="row">-->
                                <!--        <div class="col-md-6">-->
                                <!--            <div class="input-group mb-3">-->
                                <!--                <label class="d-block w-100 m-0 mb-1 h6"><h4>Phone*</h4></label>-->
                                <!--                <input type="text" class="form-control rounded-0" name="askque-number" placeholder="Your Phone Number Here" aria-label="number" required="">-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="col-md-6">-->
                                <!--            <div class="input-group mb-3">-->
                                <!--                <label class="d-block w-100 m-0 mb-1 h6"><h4>Subject*</h4></label>-->
                                <!--                <select class="form-control rounded-0" name="askque-choose" aria-label="opt">-->
                                <!--                    <option value="Select One" disabled="disabled" selected=""> Select One</option>-->
                                <!--                    <option value="Join Team">Join Team</option>-->
                                <!--                    <option value="I'm an Investor">I'm an Investor</option>-->
                                <!--                    <option value="I'm a Founder">I'm a Founder</option>-->
                                <!--                    <option value="I'm a Student">I'm a Student</option>-->
                                <!--                    <option value="General Inquiry">General Inquiry</option>-->
                                <!--                    <option value="Other">Other</option>-->
                                <!--                </select>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="row">-->
                                <!--        <div class="col-md-12">-->
                                <!--            <div class="input-group mb-3">-->
                                <!--                <label class="d-block w-100 m-0 mb-1 h6"><h4>Ask your Question*</h4></label>-->
                                <!--                <textarea class="form-control rounded-0" cols="40" rows="2" name="askque-message" aria-label="message" placeholder="Ask your Question"></textarea>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>-->
                                <!--    <div class="row align-items-center">-->
                                <!--        <div class="col-md-4">-->
                                <!--            <div class="input-group">-->
                                <!--                <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--        <div class="col-md-8">-->
                                <!--            <div class="input-group  form-check">-->
                                <!--                <input type="checkbox" id="checktnc4" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">-->
                                <!--                <label for="checktnc4"> Yes Please keep in loop with Updates</label>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</form>-->
                                <div id="sh_message">
        						<div id="cf_message" class="text-center"></div>
        						</div>
                                <!--<form method="POST" action="#" id="cf_modal">-->
                                
                                <!--    <div class="row mb-2">-->
                                <!--        <div class="col-md-12">-->
                                <!--            <div class="form-group">-->
                                <!--                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name*" required="">-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                    
                                <!--    <div class="row mb-2">-->
                                <!--        <div class="col-md-12">-->
                                <!--            <div class="form-group">-->
                                <!--                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email*" required="">-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                    
                                <!--    <div class="row mb-2">-->
                                <!--        <div class="col-md-12">-->
                                <!--            <div class="form-group">-->
                                <!--                <input type="number" class="form-control" name="contact" id="contact" placeholder="Enter Phone No.*" required="">-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="row mb-2">-->
                                <!--        <div class="col-md-12">-->
                                <!--            <div class="form-group">-->
                                <!--                <textarea class="form-control" rows="5" name="message" placeholder="What's on your mind?*" required=""></textarea>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="row mb-2">-->
                                <!--        <div class="col-md-6">-->
                                <!--            <div class="form-check" id="nls-subs">-->
                                <!--                <input class="form-check-input" type="checkbox" value="" id="newslt1" checked="">-->
                                <!--                <label class="form-check-label" for="newslt1">-->
                                <!--                Yes please add me to the Tekklesia Newsletter-->
                                <!--                </label>-->
                                <!--            </div>-->
                                            
                                <!--            <div id="nl-subs">-->
                                <!--                <label>You have already subscribed to the Tekklesia Newsletter</label>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                        
                                <!--        <div class="col-md-6 text-end">-->
                                <!--            <p class="text-danger"><span class="text-grey">*</span> Required Fields</p>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--    <div class="row mb-2">-->
                                        
                                <!--    </div>-->
                                <!--    <div class="row">-->
                                <!--        <div class="col-md-3">-->
                                <!--            <button type="submit" class="btn btn-orange orngjoin"> <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; SEND</button>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</form>-->
                                
                                <div id="multi-step-form-container" class="msfc">
                                    <!-- Form Steps / Progress Bar -->
                                    <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                                        <!-- Step 1 -->
                                        <li class="text-center form-stepper-list form-stepper-active" step="1">
                                            <a class="mx-2">
                                                <span class="form-stepper-circle">
                                                    <span>1</span>
                                                </span>
                                            </a>
                                        </li>
                                        <!-- Step 2 -->
                                        <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                                            <a class="mx-2">
                                                <span class="form-stepper-circle text-muted">
                                                    <span>2</span>
                                                </span>
                                            </a>
                                        </li>
                                        <!-- Step 3 -->
                                        <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                                            <a class="mx-2">
                                                <span class="form-stepper-circle text-muted">
                                                    <span>3</span>
                                                </span>
                                            </a>
                                        </li>
                        
                                        <!-- Step 4 -->
                                        <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                                            <a class="mx-2">
                                                <span class="form-stepper-circle text-muted">
                                                    <span>4</span>
                                                </span>
                                            </a>
                                        </li>
                                        <!-- Step 5 -->
                                        <li class="form-stepper-unfinished text-center form-stepper-list" step="5">
                                            <a class="mx-2">
                                                <span class="form-stepper-circle text-muted">
                                                    <span>5</span>
                                                </span>
                                            </a>
                                        </li>
                                        <!-- Step 6 -->
                                        <!--<li class="form-stepper-unfinished text-center form-stepper-list" step="6">-->
                                        <!--    <a class="mx-2">-->
                                        <!--        <span class="form-stepper-circle text-muted">-->
                                        <!--            <span>6</span>-->
                                        <!--        </span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                        
                                        <!-- Step 7 -->
                                        <!--<li class="form-stepper-unfinished text-center form-stepper-list" step="7">-->
                                        <!--    <a class="mx-2">-->
                                        <!--        <span class="form-stepper-circle text-muted">-->
                                        <!--            <span>7</span>-->
                                        <!--        </span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!-- Step 8 -->
                                        <!--<li class="form-stepper-unfinished text-center form-stepper-list" step="8">-->
                                        <!--    <a class="mx-2">-->
                                        <!--        <span class="form-stepper-circle text-muted">-->
                                        <!--            <span>8</span>-->
                                        <!--        </span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!-- Step 9 -->
                                        <!--<li class="form-stepper-unfinished text-center form-stepper-list" step="9">-->
                                        <!--    <a class="mx-2">-->
                                        <!--        <span class="form-stepper-circle text-muted">-->
                                        <!--            <span>9</span>-->
                                        <!--        </span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                        
                                        <!-- Step 10 -->
                                        <!--<li class="form-stepper-unfinished text-center form-stepper-list" step="10">-->
                                        <!--    <a class="mx-2">-->
                                        <!--        <span class="form-stepper-circle text-muted">-->
                                        <!--            <span>10</span>-->
                                        <!--        </span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!-- Step 11 -->
                                        <!--<li class="form-stepper-unfinished text-center form-stepper-list" step="11">-->
                                        <!--    <a class="mx-2">-->
                                        <!--        <span class="form-stepper-circle text-muted">-->
                                        <!--            <span>11</span>-->
                                        <!--        </span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                        <!-- Step 12 -->
                                        <!--<li class="form-stepper-unfinished text-center form-stepper-list" step="12">-->
                                        <!--    <a class="mx-2">-->
                                        <!--        <span class="form-stepper-circle text-muted">-->
                                        <!--            <span>12</span>-->
                                        <!--        </span>-->
                                        <!--    </a>-->
                                        <!--</li>-->
                                    </ul>
                                    <!-- Step Wise Form Content -->
                                    
                                    <form id="ContactForm" name="ContactForm" enctype="multipart/form-data" method="POST">
                                        <!-- Step 1 Content -->
                                        <section id="step-1" class="form-step">
                                            <div class="form-q">
                                                <h2 class="font-normal">Name<sup>*</sup></h2>
                                                <!-- Step 1 input fields -->
                                                <div class="mt-3">
                        
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="">
                                                            </div>
                                                        </div>
                        
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="form-n">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="col-md-4">
                                                        <button class="button btn-navigate-form-step btn-previous disabled" type="button" disabled=""><i class="fas fa-long-arrow-left"></i>&nbsp; <span>Previous</span></button>
                                                    </div>
                                                    
                                                    <div class="st-navs text-center col-md-4">
                                                        <div class="nv-box">
                                                            <span class="step-curr">1</span> of 5
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4 text-end">
                                                        <button class="button btn-navigate-form-step next" type="button" step_navigate="next" step_number="2"><span>Next</span> &nbsp;<i class="fas fa-long-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 2 Content, default hidden on page load. -->
                                        <section id="step-2" class="form-step d-none">
                                            <div class="form-q">
                                                <!-- Step 2 input fields -->
                                                <div class="">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <h2 class="font-normal">Email<sup>*</sup></h2>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" required="">
                                                            </div>
                                                            
                                                            <div class="custom-control custom-checkbox">
                                                                <div class=" d-flex align-items-baseline" id="nls-subs">
                                                                    <input type="checkbox" class="custom-control-input me-2" name="newsletter_subscribe" id="newsletter_subscribe" checked>
                                                                    <label class="custom-control-label" for="newsletter_subscribe">Yes please add me to the <b>Tekklesia Newsletter.</b><br>(<i>You can unsubscribe at any time. We will never sell your email. We hate spam as we imagine you do too.</i>)</label>
                                                                </div>
                                                                
                                                                
                                                                <div id="nl-subs" style="display: none;">
                                                                    <label>You have already subscribed to the <b>Tekklesia Newsletter.</b><br>(<i>You can unsubscribe at any time. We will never sell your email. We hate spam as we imagine you do too.</i>)</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="form-n">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="col-md-4">
                                                        <button class="button btn-navigate-form-step btn-previous" type="button" step_navigate="prev" step_number="1"><i class="fas fa-long-arrow-left"></i>&nbsp; <span>Previous</span></button>
                                                    </div>
                                                    
                                                    <div class="st-navs text-center col-md-4">
                                                        <div class="nv-box">
                                                            <span class="step-curr">1</span> of 5
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4 text-end">
                                                        <button class="button btn-navigate-form-step" id="double_email" onclick="submitForm786('saveData1.php')" type="button" step_navigate="next" step_number="2"><span>Next</span> &nbsp;<i class="fas fa-long-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 3 Content, default hidden on page load. -->
                                        <section id="step-3" class="form-step d-none">
                                            <div class="form-q">
                                                <!--<h2 class="font-normal"></h2>-->
                                                <!-- Step 3 input fields -->
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <h2 class="font-normal">Phone No.<sup>*</sup></h2>
                                                                <input type="number" class="form-control" name="phone_no" id="phone_no" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="form-n">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="col-md-4">
                                                        <button class="button btn-navigate-form-step btn-previous" type="button" step_navigate="prev" step_number="2"><i class="fas fa-long-arrow-left"></i>&nbsp; <span>Previous</span></button>
                                                    </div>
                                                    
                                                    <div class="st-navs text-center col-md-4">
                                                        <div class="nv-box">
                                                            <span class="step-curr">1</span> of 5
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4 text-end">
                                                        <button class="button btn-navigate-form-step" type="button" step_navigate="next" step_number="4"><span>Next</span> &nbsp;<i class="fas fa-long-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                        
                                        <!-- Step 4 Content -->
                                        <section id="step-4" class="form-step d-none">
                                            <div class="form-q">
                                                <h2 class="font-normal">Would a 2-hour, no-cost, deep-dive coaching experience be a bad use of your time?<sup>*</sup></h2>
                                                <!-- Step 4 input fields -->
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="radio" class="custom-control-input" name="use_time" id="yes" value="yes">
                                                                <label class="custom-control-label" for="yes">Yes</label>
                                                            </div>
                                                    
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="radio" class="custom-control-input" name="use_time" id="no" value="no">
                                                                <label class="custom-control-label" for="no">No</label>
                                                            </div>
                                                            
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="radio" class="custom-control-input" name="use_time" id="other" value="other">
                                                                <label class="custom-control-label" for="other">Other</label>
                                                            </div>
                                                            
                                                            <div class="form-group d-none" id="other_use_time">
                                                                <input type="text" class="form-control" name="other" placeholder="Please specify" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="form-n">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="col-md-4">
                                                        <button class="button btn-navigate-form-step btn-previous" type="button" step_navigate="prev" step_number="3"><i class="fas fa-long-arrow-left"></i>&nbsp; <span>Previous</span></button>
                                                    </div>
                                                    
                                                    <div class="st-navs text-center col-md-4">
                                                        <div class="nv-box">
                                                            <span class="step-curr">1</span> of 5
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4 text-end">
                                                        <button class="button btn-navigate-form-step" type="button" step_navigate="next" step_number="5"><span>Next</span> &nbsp;<i class="fas fa-long-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Step 5 Content, default hidden on page load. -->
                                        <section id="step-5" class="form-step d-none">
                                            <div class="form-q">
                                                <h2 class="font-normal">How do you imagine we (my team and I) might be able to help you?<sup>*</sup></h2>
                                                 <!--And please do invite them.-->
                                                <!-- Step 5 input fields -->
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="imagine_help" id="imagine_help" required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                            <div class="form-n">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="col-md-4">
                                                        <button class="button btn-navigate-form-step btn-previous" type="button" step_navigate="prev" step_number="4"><i class="fas fa-long-arrow-left"></i>&nbsp; <span>Previous</span></button>
                                                    </div>
                                                    
                                                    <div class="st-navs text-center col-md-4">
                                                        <div class="nv-box">
                                                            <span class="step-curr">1</span> of 5
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-4 text-end">
                                                        <button class="button submit-btn" type="submit">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                    
                                    <div id="step-form-messsage"></div>
                                    
                                    
                                    <!--<div class="st-navs text-center">-->
                                    <!--    <div class="nv-box">-->
                                    <!--        <span class="step-curr">1</span> of 5-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           
            <section class="pb-4 slidf" id="offr-feed">
                <div class="container-fluid">
                    <div class="dark-bg row">
                        <div class="container allow">
                            <div class="row py-2 ">
                                <div class="col-md-12">
                                    
                                    <div class="position-relative">
                                    <h4 class="modal-title" id="myModalLabel">YOUR VOICE MATTERS</h4>
                                    <!--<h4>We'd love to learn more about your experiences on TEKKLESIA.com and how we can improve!</h4>-->
                                    <h4>We'd love to learn more about how we can improve TEKKLESIA.com</h4>
                                    
                                    <button type="button" class="close position-absolute text-end stk-close" >
                                    <span aria-hidden="true" onclick="close_feedin()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
                                    </button>
                                    
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="container allow">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <form method="POST" action="#" id="feedbackform">
                                    <div class="row mb-2">
            							<div class="col-md-12">
            								<div class="form-group">
            									<textarea class="form-control" rows="5" name="lklv_about" id="lklv_about" placeholder="What do you like or love about TEKKLESIA.com?" required=""></textarea>
            								</div>
            							</div>
            						</div>
            						
            						<div class="row mb-2">
            							<div class="col-md-12">
            								<div class="form-group">
            									<textarea class="form-control" rows="5" name="howcanimprove" id="howcanimprove" placeholder="How can we improve TEKKLESIA.com?" required=""></textarea>
            								</div>
            							</div>
            						</div>
            						
            						<div class="row mb-2">
            							<div class="col-md-12">
            								<div class="form-group">
            									<textarea class="form-control" rows="5" name="mailreply" id="mailreply" placeholder="Would you like me to reply? If so, enter your email." required=""></textarea>
            								</div>
            							</div>
            						</div>
                                    <!--<div class="fb6">-->
                                    <!--    <h4>What do you like or love about TEKKLESIA.com?</h4>-->
                                    <!--    <textarea type="text" name="lklv_about" id="lklv_about" required=""></textarea>-->
                                    <!--</div>-->
                                    <!--<div class="fb7">-->
                                    <!--    <h4>How can we improve TEKKLESIA.com?</h4>-->
                                    <!--    <textarea type="text" name="howcanimprove" id="howcanimprove" required=""></textarea>-->
                                    <!--</div>-->
                                    <!--<div class="fb8">-->
                                    <!--    <h4>Would you like me to reply? If so, enter your email.</h4>-->
                                    <!--    <textarea type="text" name="mailreply" id="mailreply" required=""></textarea>-->
                                    <!--</div>-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 id="submitedline"></h4>
                                        </div>
                                    </div>
                                    <!--<input class="btn-orange text-uppercase" type="submit" value="Be Heard">-->
                                    <input class="fbsubmit1" type="submit" value="Be Heard">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="pb-4 slidf" id="slide-legalese">
                <div class="container-fluid">
                    <div class="dark-bg row">
                        <div class="container allow">
                            <div class="row py-2 ">
                                <div class="col-md-12">
                                    
                                    <div class="position-relative">
                                        <h4 class="modal-title" id="myModalLabel">LEGALESE</h4>
                                        
                                        <button type="button" class="close position-absolute text-end stk-close" >
                                        <span aria-hidden="true" onclick="close_legalese()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
                                        </button>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="container pt-4 allow">
                        <div class="l-height">
                            <div class="row mb-4 lgl ac" id="terms">
                                <div class="col-md-12">
                                    <h4 class="">1. Terms</h4>
                                    <p>By accessing this School, you are agreeing to be bound by these Terms of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this School are protected by applicable copyright and trademark law.</p>
                                </div>
                            </div>
                            <div class="row mb-4 lgl" id="policies">
                                <div class="col-md-12">
                                    <h4 class="">2. Policies</h4>
                                    <p>By accessing this School, you are agreeing to be bound by these Terms of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this School are protected by applicable copyright and trademark law.</p>
                                </div>
                            </div>
                            <div class="row mb-4 lgl" id="disclaimers">
                                <div class="col-md-12">
                                    <h4 class="">3. Disclaimers</h4>
                                    <p>The materials on the School’s website are provided 'as is'. The School makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, the School does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</p>
                                </div>
                            </div>
                            <div class="row mb-4 lgl" id="limitations">
                                <div class="col-md-12">
                                    <h4 class="">4. Limitations</h4>
                                    <p>In no event shall the School be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on the School’s website, even if the School or an authorized of the School has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
                                </div>
                            </div>
                            <div class="row mb-4 lgl" id="license">
                                <div class="col-md-12">
                                    <h4 class="">5. Use License</h4>
                                    <p>Permission is granted to temporarily download one copy of any downloadable materials on the School’s website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license, you may not: modify or copy the materials; use the materials for any commercial purpose, or for any public display (commercial or non-commercial); attempt to decompile or reverse engineer any software contained on the School’s web site; remove any copyright or other proprietary notations from the materials; or transfer the materials to another person or 'mirror' the materials on any other server. This license shall automatically terminate if you violate any of these restrictions and may be terminated by Company at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format. Awareness Academy has a 30-day 100% money back guarantee policy. If you ever feel unhappy with a purchase, you can request a refund within 30 days. Awareness Academy has the right to terminate any course membership at any time, for any reason. 'Lifetime' access to a course (one time purchase; subscription; or payment plan) refers to the 'life' of the course or website.</p>
                                </div>
                            </div>
                            <div class="row mb-4 lgl" id="revisions">
                                <div class="col-md-12">
                                    <h4 class="">6. Revisions And Errdata</h4>
                                    <p>The materials appearing on the School’s website may include technical, typographical, or photographic errors. The School does not warrant that any of the materials on its web site are accurate, complete, or current. The School may make changes to the materials contained on its web site at any time without notice. The School does not, however, make any commitment to update the materials.</p>
                                </div>
                            </div>
                            <div class="row mb-4 lgl" id="links">
                                <div class="col-md-12">
                                    <h4 class="">7. Links</h4>
                                    <p>The School has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by the School of the site. Use of any such linked website is at the user's own risk.</p>
                                </div>
                            </div>
                            <div class="row mb-4 lgl" id="governing">
                                <div class="col-md-12">
                                    <h4 class="">8. Governing Law</h4>
                                    <p>Any claim relating to the School’s website shall be governed by the laws of the School Owner’s home jurisdiction without regard to its conflict of law provisions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php if($get_session=='7-7-7-7') { ?>
            <section id="trc" class="pc-none position-relative">
                <div class="position-absolute trc-holder">
                    <h2>Visionary</h2>
                    <h2>Training</h2>
                    <h2>Center</h2>
                </div>

                <div class="position-absolute trc-gf">
                    <a href="javascript:void(0)" id="scroll-d"><img src="images/giphy.webp" width="70"></a>
                </div>      
            </section>
            <section class="midle position-relative" id="startwb">
                <div class="acd">
                    <div class="accordion " id="accordionExample">
                        <!-- <div onclick="expandCollapse()" id="expand-collapse" >Expand All</div> -->
                        <!--<button class="pc-none" id="expand-collapse" type="button" >collapse all</button>-->
                        <div class="accordion-item " >
                            <h2 class="accordion-header dfh play-button" id="headingOne">
                                <button id="play-button" class="accordion-button px-100 videoModalTriger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="d-flex justify-content-between w-100 pr10">
                                        <div class="d-flex align-items-center">
                                            <div class="ac-ig">
                                                <img src="images/fst.png" class="me-2 licn">
                                            </div>
                                            <span class="brwn d-inline-block">Welcome&nbsp;</span> TO... 
                                        </div>
                                        <div class="parent_img">
                                            <a class="mb-none" id="expand-collapse-alt" type="button">collapse all</a>
                                            <a class="pc-none mb-alt" id="expand-collapse-alt2" type="button">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <span class="check "> <img class="mgr" src="images/sqr.png"></span>
                                            <span class="check1 "> </span>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse df collapse submenu fstdflt show  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body ">
                                    <div class="mxw">
                                        <p class="mb-0">The Ultimate...</p>
                                        <h2>Collaborative Community</h2>
                                        <p class="mb-0 text-md-center text-strat">For Start Up Success </p>
                                        <div class="step-1-right-vid video-com rounded my-3">
                                            <div class="box-video">
                                                <div class="postr rounded">
                                                    <iframe class="rounded"  style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;background-position: center; " id="one_acc" src="https://player.vimeo.com/video/641467347?" width="100%"  height="360" frameborder="0"  allow="autoplay;" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="position-relative">
                            <div class="accordion-item  tmp-abs twos button2">
                                <h2 class="accordion-header dfh" id="headingTwo" >
                                    <button class="accordion-button px-100 collapsed video-btn2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex justify-content-between w-100 pr10">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="ac-ig">
                                                    <img src="images/a2.png" class="me-2 licn">
                                                </div>
                                                <span class="brwn d-inline-block">Who&nbsp;</span> we are
                                            </div>
                                            <div class="parent_img"><span class="unchecktwo "> <img class="mgr" src="images/sqr.png"></span>
                                                <span class="checktwo "> </span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse df collapse submenu" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="position-relative ">
                                                    <div class="stroke-text-class">
                                                        <p class="stroktxt">
                                                            <strong>P</strong>eople <span class="txtup">
                                                            <strong data-v-3f255962="">T</strong>he </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="step-1-right-vid video-com rounded my-3">
                                                    <div class="box-video ">
                                                        <!--   <div class="bg-video" style="background-image: url(images/man.png);">
                                                            <div class="bt-play"></div>
                                                            </div> -->
                                                        <div class="video-container">
                                                            <iframe class="rounded "  style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; " id="two_acc" width="100%" height="100%" src="https://player.vimeo.com/video/641467347?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tmp-abs threes">
                                <h2 class="accordion-header dfh" id="headingThree">
                                    <button class="accordion-button px-100 collapsed video-btn3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="d-flex justify-content-between w-100 pr10">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="ac-ig">
                                                    <img src="images/a3.png" class="me-2 licn">
                                                </div>
                                                <span class="brwn d-inline-block">why&nbsp;</span> we exist 
                                            </div>
                                            <div class="parent_img"><span class="uncheckthree "> <img class="mgr" src="images/sqr.png"></span>
                                                <span class="checkthree "> </span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse df collapse submenu" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-6">
                                                <div class="position-relative ">
                                                    <div class="stroke-text-class">
                                                        <p class="stroktxt">
                                                            <strong>P</strong>urpose <span class="txtup">
                                                            <strong data-v-3f255962="">T</strong>he </span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="step-1-right-vid video-com rounded my-3">
                                                    <div class="box-video">
                                                        <!--    <div class="bg-video" style="background-image: url(images/man.png);">
                                                            <div class="bt-play"></div>
                                                            </div> -->
                                                        <div  class="video-container rounded">
                                                            <iframe class="rounded"  style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; "  id="three_acc" width="100%" height="100%" src="https://player.vimeo.com/video/641467347?"
                                                                frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tmp-abs fours">
                                <h2 class="accordion-header dfh" id="headingfour">
                                    <button class="accordion-button px-100 collapsed video-btn4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        <div class="d-flex justify-content-between w-100 pr10">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="ac-ig">
                                                    <img src="images/a4.png" class="me-2 licn">
                                                </div>
                                                <span class="brwn d-inline-block">what&nbsp;</span> we do  
                                            </div>
                                            <div class="parent_img" ><span class="uncheckfour "> <img class="mgr" src="images/sqr.png"></span>
                                                <span class="checkfour "> </span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse df collapse submenu" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="row gy-5 align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="position-relative ">
                                                        <div class="stroke-text-class">
                                                            <p class="stroktxt">
                                                                <strong>P</strong>roblem <span class="txtup">
                                                                <strong data-v-3f255962="">T</strong>he </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="step-1-right-vid video-com rounded my-3">
                                                        <div class="box-video">
                                                            <!--    <div class="bg-video" style="background-image: url(images/man.png);">
                                                                <div class="bt-play"></div>
                                                                </div> -->
                                                            <div class="video-container">
                                                                <iframe class="rounded"  style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; "   id="four_acc" width="100%" height="100%" src="https://player.vimeo.com/video/641467347?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tmp-abs fives">
                                <h2 class="accordion-header dfh" id="headingfive">
                                    <button class="accordion-button px-100 collapsed video-btn5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        <div class="d-flex justify-content-between w-100 pr10">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="ac-ig">
                                                    <img src="images/a5.png" class="me-2 licn">
                                                </div>
                                                <span class="brwn d-inline-block">where&nbsp;</span> we are 
                                            </div>
                                            <div class="parent_img"><span class="uncheckfive "> <img class="mgr" src="images/sqr.png"></span>
                                                <span class="checkfive "> </span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse df collapse submenu" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="row gy-5 align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="position-relative ">
                                                        <div class="stroke-text-class">
                                                            <p class="stroktxt extra">
                                                                <strong>P</strong>lace<span class="txtup">
                                                                <strong data-v-3f255962="">T</strong>he </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="step-1-right-vid video-com rounded my-3">
                                                        <div class="box-video">
                                                            <!--  <div class="bg-video" style="background-image: url(images/man.png);">
                                                                <div class="bt-play"></div>
                                                                </div> -->
                                                            <div class="video-container">
                                                                <iframe class="rounded"  style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; "   id="five_acc" width="100%" height="100%" src="https://player.vimeo.com/video/641467347?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tmp-abs sixs">
                                <h2 class="accordion-header dfh" id="headingsix">
                                    <button class="accordion-button px-100 collapsed video-btn6" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        <div class="d-flex justify-content-between w-100 pr10">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="ac-ig">
                                                    <img src="images/a6.png" class="me-2 licn">
                                                </div>
                                                <span class="brwn d-inline-block">how&nbsp;</span> it works 
                                            </div>
                                            <div class="parent_img"><span class="unchecksix "> <img class="mgr" src="images/sqr.png"></span>
                                                <span class="checksix "> </span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse df collapse submenu" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="row gy-5 align-items-center">
                                                <div class="col-lg-6">
                                                    <div class="position-relative ">
                                                        <div class="stroke-text-class">
                                                            <p class="stroktxt">
                                                                <strong>P</strong>rocess <span class="txtup">
                                                                <strong data-v-3f255962="">T</strong>he </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="step-1-right-vid video-com rounded my-3">
                                                        <div class="box-video">
                                                            <!-- <div class="bg-video" style="background-image: url(images/man.png);">
                                                                <div class="bt-play"></div>
                                                                </div> -->
                                                            <div class="video-container">
                                                                <iframe class="rounded"  style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; "  id="six_acc" width="100%" height="100%" src="https://player.vimeo.com/video/641467347?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item tmp-abs sevens">
                                <h2 class="accordion-header dfh" id="headingseven">
                                    <button class="accordion-button px-100 collapsed video-btn7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                        <div class="d-flex justify-content-between w-100 pr10">
                                            <div class="d-flex align-items-center">
                                                
                                                <div class="ac-ig">
                                                    <img src="images/a7.png" class="me-2 licn">
                                                </div>
                                                <span class="brwn d-inline-block">when&nbsp;</span> to start
                                            </div>
                                            <div class="parent_img"><span class="uncheckseven"> <img class="mgr" src="images/sqr.png"></span>
                                                <span class="checkseven"> </span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseseven" class="accordion-collapse df collapse submenu" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="">
                                            <div class="row gy-5 align-items-center ">
                                                <div class="col-lg-6">
                                                    <div class="position-relative ">
                                                        <div class="stroke-text-class ">
                                                            <p class="stroktxt">
                                                                <strong>P</strong>oint <span class="txtup">
                                                                <strong data-v-3f255962="">T</strong>he </span>
                                                            </p>
                                                        </div>
                                                        <!-- <div class="row justify-content-center py-5  btnhide">
                                                            <div class="col-12 mx-auto">
                                                              <div class="d-flex  justify-content-start lastbtn mx-100">
                                                              
                                                                <button type="button" class="btn  px-5 py-3   btn-red dlay  text-uppercase" data-bs-toggle="modal" data-bs-target="#survey2">get started now!</button>
                                                                          </div>
                                                            </div>
                                                            </div> -->
                                                        <div class="row  py-5 mbpy-5">
                                                            <div class="col-12">
                                                                <div class="d-flex  justify-content-start lastbtn mx-100">
                                                                    <!--<button type="button" class="btn  px-5 py-3   btn-red dlay  text-uppercase" data-bs-toggle="modal" data-bs-target="#survey2">get started now!</button>-->
                                                                    <button type="button" class="btn  px-5 py-3   btn-red dlay  text-uppercase" onclick="open_slidein()">Connect</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="step-1-right-vid video-com rounded my-3">
                                                        <div class="box-video">
                                                            <!-- <div class="bg-video" style="background-image: url(images/man.png);">
                                                                <div class="bt-play"></div>
                                                                </div> -->
                                                            <div class="video-container">
                                                                <iframe class="rounded"  style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; "   id="seven_acc" width="100%" height="100%" src="https://player.vimeo.com/video/641467347?" frameborder="0" allowfullscreen="allowfullscreen" ></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--     <div class="row justify-content-center py-5">
                                                <div class="col-12 mx-auto">
                                                  <div class="d-flex  justify-content-start lastbtn mx-100">
                                                  
                                                    <button type="button" class="btn  px-5 py-3   btn-red btn-outline-light  text-uppercase" data-bs-toggle="modal" data-bs-target="#survey2">get started now!</button>
                                                </div>
                                                </div>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <img class="img-fluid lck"  src="images/lock.png">
                        </div>
                    </div>
                </div>
                
            
            </section>
            <?php } ?>
            <div class="ftp-connect-btn"><a class="btn orngjoin px-lg-4 " id="slidein-form" onclick="open_slidein()" type="button"><i class="fa fa-phone" aria-hidden="true"></i></a></div>
              
            <footer class="px-100 bgdblu py-2 text-white text-center text-uppercase <?php if($get_session!='7-7-7-7') {echo"ftp-fixed"; }?>">
                <div class="container">
                    <div class="row align-items-center justify-content-center  gy-2">
                        <!--     <div class="col-lg-4 col-md-12 text-lg-start">
                            <small>© 2021 tekklesia.com. All Rights Reserved.</small>
                            </div>
                            <div class="col-lg-4 col-md-12">
                            <div class="d-flex align-items-center justify-content-lg-start justify-content-center ">
                              <p class="pe-3 mb-0 pb-0">powered by </p>
                              <img src="images/clock.png">
                            </div>
                            </div>
                            <div class="col-lg-3 col-md-6 px-lg-0">
                            <div class="d-flex justify-content-between btnflx">
                              <div class="btn-group dropup">
                               
                                <button type="button" class="btn ps-0 bg-transperent dropdown-toggle text-white text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">legalese</button>
                                
                                <ul class="p-0 list-unstyled dropdown-menu">
                            <li><a href="#" class="dropdown-item d-block"  data-bs-toggle="modal" data-bs-target="#term">Terms</a></li>
                            <li>
                                    <hr class="dropdown-divider">
                                  </li>
                            <li><a href="#" class="dropdown-item d-block" data-bs-toggle="modal" data-bs-target="#policy">Policies</a></li>
                            <li>
                                    <hr class="dropdown-divider">
                                  </li>
                            <li><a href="#" class="dropdown-item d-block" data-bs-toggle="modal" data-bs-target="#disclaimer">Disclaimers</a></li>
                            <li>
                                    <hr class="dropdown-divider">
                                  </li>
                            <li><a href="#" class="dropdown-item d-block" data-bs-toggle="modal" data-bs-target="#limits">Limitations</a></li>
                            <li>
                                    <hr class="dropdown-divider">
                                  </li>
                            <li><a href="#" class="dropdown-item d-block" data-bs-toggle="modal" data-bs-target="#license">Use License</a></li>
                            <li>
                                    <hr class="dropdown-divider">
                                  </li>
                            <li><a href="#" class="dropdown-item d-block" data-bs-toggle="modal" data-bs-target="#revision">Revisions and Errata</a></li>
                            <li>
                                    <hr class="dropdown-divider">
                                  </li>
                            <li><a href="#" class="dropdown-item d-block" data-bs-toggle="modal" data-bs-target="#links">Links</a></li>
                            <li>
                                    <hr class="dropdown-divider">
                                  </li>
                            <li><a href="#" class="dropdown-item d-block" data-bs-toggle="modal" data-bs-target="#governing">Governing Law</a></li>
                            </ul>
                              </div>
                              <div>
                                <button type="button" class="btn btn-outline-light  text-uppercase" data-bs-toggle="modal" data-bs-target="#survey">OFFER FEEDBACK</button>
                              </div>
                            </div>
                            </div>  -->
                        <div class="col-md-12">
                            <div class="pb-lg-0 copyright-outer">
                                <div class="copyright">
                                    <span class="copyrighttext">&copy; 2023-2024 Beyond Tekklesia.com </span>
                                    <span class="copyright-reserved">All Rights Reserved.</span>
                                    <span class="legalesebtn"><button onclick="open_legalese(this)" type="button" class="btn ps-0 bg-transperent txtwht legal p-0 text-uppercase">Legalese</button> | <button onclick="open_feedin()" type="button" class="btn ps-0 bg-transperent txtwht legal p-0 text-uppercase">Feedback</button></span>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Modal -->
            <!-- <div class="modal fade links" id="term" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog bigmdl " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fw-bold" id="myModalLabel">Terms</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>By accessing this School, you are agreeing to be bound by these Terms of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these
                                terms, you are prohibited from using or accessing this site. The materials contained in this School are protected by applicable copyright and trademark law.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Modal -->
            <!-- modal policy -->
            <!-- <div class="modal fade links" id="policy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog bigmdl " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Policies</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>By accessing this School, you are agreeing to be bound by these Terms of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these
                                terms, you are prohibited from using or accessing this site. The materials contained in this School are protected by applicable copyright and trademark law.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- modal policy -->
            <!-- modal disclaimer -->
            <!-- <div class="modal fade links" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog bigmdl " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Disclaimer</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>The materials on the School’s website are provided 'as is'. The School makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions
                                of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, the School does not warrant or make any representations concerning the accuracy, likely results,
                                or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- modal disclaimer -->
            <!-- modal limits -->
            <!-- <div class="modal fade links" id="limits" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Limits</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>In no event shall the School be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on the School’s website,
                                even if the School or an authorized of the School has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability
                                for consequential or incidental damages, these limitations may not apply to you.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- modal limits -->
            <!-- modal license -->
            <!-- <div class="modal fade links" id="license" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog bigmdl " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">License</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Permission is granted to temporarily download one copy of any downloadable materials on the School’s website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this
                                license, you may not: modify or copy the materials; use the materials for any commercial purpose, or for any public display (commercial or non-commercial); attempt to decompile or reverse engineer any software contained on the
                                School’s web site; remove any copyright or other proprietary notations from the materials; or transfer the materials to another person or 'mirror' the materials on any other server. This license shall automatically terminate if
                                you violate any of these restrictions and may be terminated by Company at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession
                                whether in electronic or printed format. Awareness Academy has a 30-day 100% money back guarantee policy. If you ever feel unhappy with a purchase, you can request a refund within 30 days. Awareness Academy has the right to terminate
                                any course membership at any time, for any reason. 'Lifetime' access to a course (one time purchase; subscription; or payment plan) refers to the 'life' of the course or website.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- modal license -->
            <!-- modal revision -->
            <!-- <div class="modal fade links" id="revision" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Revision</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>The materials appearing on the School’s website may include technical, typographical, or photographic errors. The School does not warrant that any of the materials on its web site are accurate, complete, or current. The School may
                                make changes to the materials contained on its web site at any time without notice. The School does not, however, make any commitment to update the materials.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- modal revision -->
            <!-- modal links -->
            <!-- <div class="modal fade links" id="links" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Links</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>The School has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by the School of the site. Use of any such linked
                                website is at the user's own risk.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- modal links -->
            <!-- modal governing -->
           <!--  <div class="modal fade links" id="governing" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Governing</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Any claim relating to the School’s website shall be governed by the laws of the School Owner’s home jurisdiction without regard to its conflict of law provisions.</p>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- modal governing -->
        </main>
        <!-- feedback Modal -->
        <div class="modal fade" id="survey" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content surv">
                    <div class="modal-header d-flex justify-content-between">
                        <div>
                            <h4 class="modal-title" id="myModalLabel">Your Voice Matters</h4>
                            <p>We'd love to learn more about your experiences on TEKKLESIA.com and how we can improve!</p>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#" id="feedbackform11">
                            <div class="fb6">
                                <h4>What would you like or love about TEKKLESIA.com?</h4>
                                <textarea type="text" name="lklv_about" id="lklv_about" required=""></textarea>
                            </div>
                            <div class="fb7">
                                <h4>How can we improve TEKKLESIA.com?</h4>
                                <textarea type="text" name="howcanimprove" id="howcanimprove" required=""></textarea>
                            </div>
                            <div class="fb8">
                                <h4>Would you like us to reply? If so, enter your email.</h4>
                                <textarea type="text" name="mailreply" id="mailreply" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <h4 id="submitedline"></h4>
                            </div>
                            <input class="fbsubmit" type="submit" value="Be Heard">
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div> -->
                </div>
            </div>
        </div>
        <!-- feedback Modal -->
        <!-- buton click form open Modal -->
        <div class="modal fade" id="survey2" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog wth" role="document">
                <div class="modal-content surv">
                    <div class="modal-header d-flex justify-content-between">
                        <div class="mx-auto text-center">
                            <h4  class="text-center mx-auto modal-title text-white">We love hearing from you!</h4>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" type="button" class="cls btn text-white" data-bs-dismiss="modal">×</span>
                        </button>
                    </div>
                    <!-- ===================mobile forms ======================== -->
                    <div class="modal-body row formstabs d-lg-none d-block">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item card-header">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class=" noicn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    General Inquiry
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form method="POST" id="generalinquiry">
                                            <h5 id="generalformsuccess"></h5>
                                            <p style="margin-top: 10px; font-size:16px">Basically if nothing else in the menu applies to you, hit me here.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="your-name" placeholder="Your Name Here" aria-label="Username" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>
                                                        <input type="email" class="form-control rounded-0" name="your-email" placeholder="yourname@email.com" aria-label="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="your-number" placeholder="Your Phone Number Here" aria-label="number" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>
                                                        <textarea class="form-control rounded-0" cols="40" rows="1" name="your-message" aria-label="message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-group  form-check">
                                                        <input type="checkbox" id="checktnc1" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">
                                                        <label for="checktnc1"> Yes Please keep in loop with Updates</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item card-header">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class=" noicn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Join Team
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <form method="POST" id="jointeamform">
                                            <h5 id="jointeamformsuccess"></h5>
                                            <p style="margin-top: 10px; font-size:16px">We'd love to hear more about your interest in joining the team.  <a href="https://conversionclock.com/contact" target="_blank" style="color:red">Click here to checkout what being on our team is all about.</a></p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="jointeam-name" placeholder="Your Name Here" aria-label="Username" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>
                                                        <input type="email" class="form-control rounded-0" name="jointeam-email" placeholder="yourname@email.com" aria-label="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="jointeam-number" placeholder="Your Phone Number Here" aria-label="number" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Subject*</b></label>
                                                        <select class="form-control rounded-0" name="your-choose" aria-label="opt">
                                                            <option selected="" value="Select One" disabled="disabled"> Select One</option>
                                                            <option value="Intern">Intern</option>
                                                            <option value="Paid Staff">Paid Staff</option>
                                                            <option value="Project Based">Project Based</option>
                                                            <option value="Joint Venture">Joint Venture</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>
                                                        <textarea class="form-control rounded-0" cols="40" rows="2" name="jointeam-message" aria-label="message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-group  form-check">
                                                        <input type="checkbox" id="checktnc2" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">
                                                        <label for="checktnc2"> Yes Please keep in loop with Updates</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item card-header">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="noicn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    an investor
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body ">
                                        <form method="POST" id="askcjform">
                                            <h5 id="askcjformsuccess"></h5>
                                            <p style="margin-top: 10px; font-size:16px">If you’re looking to get me to keynote your conference and speak to your employees, the best way to get in touch is right here.</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="askcj-name" placeholder="Your Name Here" aria-label="Username" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>
                                                        <input type="email" class="form-control rounded-0" name="askcj-email" placeholder="yourname@email.com" aria-label="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="askcj-number" placeholder="Your Phone Number Here" aria-label="number" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Subject*</b></label>
                                                        <select class="form-control rounded-0" name="askcj-choose" aria-label="opt">
                                                            <option value="Select One" selected="" disabled="disabled"> Select One</option>
                                                            <option value="Keynote">Keynote</option>
                                                            <option value="Podcast">Podcast</option>
                                                            <option value="Training">Training</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Tell me more about your specific desired outcome</b></label>
                                                        <textarea class="form-control rounded-0" cols="40" rows="2" name="askcj-message" aria-label="message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-group  form-check">
                                                        <input type="checkbox" id="checktnc3" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">
                                                        <label for="checktnc3"> Yes Please keep in loop with Updates</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item card-header">
                                <h2 class="accordion-header" id="flush-headingfour">
                                    <button class="noicn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                    A founder
                                    </button>
                                </h2>
                                <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body ">
                                        <form method="POST" id="askqueform">
                                            <h5 id="askqueformsuccess"></h5>
                                            <p style="margin-top: 10px; font-size:16px">Hit me with your best questions!</p>
                                            <p>
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="askque-name" placeholder="Your Name Here" aria-label="Username" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>
                                                        <input type="email" class="form-control rounded-0" name="askque-email" placeholder="yourname@email.com" aria-label="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="askque-number" placeholder="Your Phone Number Here" aria-label="number" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Subject*</b></label>
                                                        <select class="form-control rounded-0" name="askque-choose" aria-label="opt">
                                                            <option value="Select One" disabled="disabled" selected=""> Select One</option>
                                                            <option value="Personal Branding">Personal Branding</option>
                                                            <option value="Professional Branding">Professional Branding</option>
                                                            <option value="Life Decision">Life Decision</option>
                                                            <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>
                                                        <textarea class="form-control rounded-0" cols="40" rows="2" name="askque-message" aria-label="message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-group  form-check">
                                                        <input type="checkbox" id="checktnc4" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">
                                                        <label for="checktnc4"> Yes Please keep in loop with Updates</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item card-header">
                                <h2 class="accordion-header" id="flush-headingfive">
                                    <button class="noicn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                    A student
                                    </button>
                                </h2>
                                <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body ">
                                        <form method="POST" id="hireform">
                                            <h5 id="hireformsuccess"></h5>
                                            <p style="margin-top: 10px; font-size:16px">Conversion Clock is a Culture Creation Company with an objective of positioning you so that those you serve and serve with are attracted to you and request to work with you. <a href="https://conversionclock.com/service" target="_blabnk" style="color:red">Learn about how our digital agency might be able to help.</a> </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="hireform-name" placeholder="Your Name Here" aria-label="Username" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>
                                                        <input type="email" class="form-control rounded-0" name="hireform-email" placeholder="yourname@email.com" aria-label="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>
                                                        <input type="text" class="form-control rounded-0" name="hireform-number" placeholder="Your Phone Number Here" aria-label="number" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3">
                                                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>
                                                        <textarea class="form-control rounded-0" cols="40" rows="2" name="hireform-message" aria-label="message"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>
                                            <div class="row align-items-center">
                                                <div class="col-md-4">
                                                    <div class="input-group">
                                                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="input-group  form-check">
                                                        <input type="checkbox" id="checktnc5" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">
                                                        <label for="checktnc5"> Yes Please keep in loop with Updates</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--    =====================mobile forms end================== -->
                    <div class="modal-body row formstabs d-lg-block d-none">
                        <div class="align-items-start  ">
                            <!--d-flex -->
                            <div class="" id="" role="" aria-labelledby="">
                                <form method="POST" id="askqueform">
                                    <h5 id="askqueformsuccess"></h5>
                                    <p style="margin-top: 10px; font-size:16px">Talk to Us.</p>
                                    <p>
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>
                                                <input type="text" class="form-control rounded-0" name="askque-name" placeholder="Your Name Here" aria-label="Username" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>
                                                <input type="email" class="form-control rounded-0" name="askque-email" placeholder="yourname@email.com" aria-label="email" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>
                                                <input type="text" class="form-control rounded-0" name="askque-number" placeholder="Your Phone Number Here" aria-label="number" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <label class="d-block w-100 m-0 mb-1 h6"><b>Subject*</b></label>
                                                <select class="form-control rounded-0" name="askque-choose" aria-label="opt">
                                                    <option value="Select One" disabled="disabled" selected=""> Select One</option>
                                                    <option value="Join Team">Join Team</option>
                                                    <option value="I'm an Investor">I'm an Investor</option>
                                                    <option value="I'm a Founder">I'm a Founder</option>
                                                    <option value="I'm a Student">I'm a Student</option>
                                                    <option value="I'm a Student">I'm a Student</option>
                                                    <option value="General Inquiry">General Inquiry</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>
                                                <textarea class="form-control rounded-0" cols="40" rows="2" name="askque-message" aria-label="message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>
                                    <div class="row align-items-center">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="input-group  form-check">
                                                <input type="checkbox" id="checktnc4" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">
                                                <label for="checktnc4"> Yes Please keep in loop with Updates</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!--<div class="nav flex-column nav-pills me-3 col-lg-3 " id="v-pills-tab" role="tablist" aria-orientation="vertical">-->
                            <!--    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">General Inquiry</button>-->
                            <!--    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Join Team</button>-->
                            <!--    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">an investor</button>-->
                            <!--    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">A founder</button>-->
                            <!--    <button class="nav-link" id="v-pills-student-tab" data-bs-toggle="pill" data-bs-target="#v-pills-student" type="button" role="tab" aria-controls="v-pills-student" aria-selected="false">A student</button>-->
                            <!--</div>-->
                            <!--<div class="tab-content col-lg-9 px-lg-3" id="v-pills-tabContent ">-->
                            <!--    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">-->
                            <!--        <form method="POST" id="generalinquiry">-->
                            <!--            <h5 id="generalformsuccess"></h5>-->
                            <!--            <p style="margin-top: 10px; font-size:16px">Basically if nothing else in the menu applies to you, hit me here.</p>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="your-name" placeholder="Your Name Here" aria-label="Username" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>-->
                            <!--                        <input type="email" class="form-control rounded-0" name="your-email" placeholder="yourname@email.com" aria-label="email" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="your-number" placeholder="Your Phone Number Here" aria-label="number" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>-->
                            <!--                        <textarea class="form-control rounded-0" cols="40" rows="1" name="your-message" aria-label="message"></textarea>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>-->
                            <!--            <div class="row align-items-center">-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-group">-->
                            <!--                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-8">-->
                            <!--                    <div class="input-group  form-check">-->
                            <!--                        <input type="checkbox" id="checktnc1" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">-->
                            <!--                        <label for="checktnc1"> Yes Please keep in loop with Updates</label>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </form>-->
                            <!--        <div class="modal-footer">-->
                            <!--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">-->
                            <!--        <form method="POST" id="jointeamform">-->
                            <!--            <h5 id="jointeamformsuccess"></h5>-->
                            <!--            <p style="margin-top: 10px; font-size:16px">We'd love to hear more about your interest in joining the team.  <a href="https://conversionclock.com/contact" target="_blank" style="color:red">Click here to checkout what being on our team is all about.</a></p>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="jointeam-name" placeholder="Your Name Here" aria-label="Username" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>-->
                            <!--                        <input type="email" class="form-control rounded-0" name="jointeam-email" placeholder="yourname@email.com" aria-label="email" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="jointeam-number" placeholder="Your Phone Number Here" aria-label="number" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Subject*</b></label>-->
                            <!--                        <select class="form-control rounded-0" name="your-choose" aria-label="opt">-->
                            <!--                            <option selected="" value="Select One" disabled="disabled"> Select One</option>-->
                            <!--                            <option value="Intern">Intern</option>-->
                            <!--                            <option value="Paid Staff">Paid Staff</option>-->
                            <!--                            <option value="Project Based">Project Based</option>-->
                            <!--                            <option value="Joint Venture">Joint Venture</option>-->
                            <!--                            <option value="Other">Other</option>-->
                            <!--                        </select>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-12">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>-->
                            <!--                        <textarea class="form-control rounded-0" cols="40" rows="2" name="jointeam-message" aria-label="message"></textarea>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>-->
                            <!--            <div class="row align-items-center">-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-group">-->
                            <!--                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-8">-->
                            <!--                    <div class="input-group  form-check">-->
                            <!--                        <input type="checkbox" id="checktnc2" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">-->
                            <!--                        <label for="checktnc2"> Yes Please keep in loop with Updates</label>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </form>-->
                            <!--        <div class="modal-footer">-->
                            <!--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">-->
                            <!--        <form method="POST" id="askcjform">-->
                            <!--            <h5 id="askcjformsuccess"></h5>-->
                            <!--            <p style="margin-top: 10px; font-size:16px">If you’re looking to get me to keynote your conference and speak to your employees, the best way to get in touch is right here.</p>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="askcj-name" placeholder="Your Name Here" aria-label="Username" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>-->
                            <!--                        <input type="email" class="form-control rounded-0" name="askcj-email" placeholder="yourname@email.com" aria-label="email" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="askcj-number" placeholder="Your Phone Number Here" aria-label="number" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Subject*</b></label>-->
                            <!--                        <select class="form-control rounded-0" name="askcj-choose" aria-label="opt">-->
                            <!--                            <option value="Select One" selected="" disabled="disabled"> Select One</option>-->
                            <!--                            <option value="Keynote">Keynote</option>-->
                            <!--                            <option value="Podcast">Podcast</option>-->
                            <!--                            <option value="Training">Training</option>-->
                            <!--                            <option value="Other">Other</option>-->
                            <!--                        </select>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-12">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Tell me more about your specific desired outcome</b></label>-->
                            <!--                        <textarea class="form-control rounded-0" cols="40" rows="2" name="askcj-message" aria-label="message"></textarea>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>-->
                            <!--            <div class="row align-items-center">-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-group">-->
                            <!--                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-8">-->
                            <!--                    <div class="input-group  form-check">-->
                            <!--                        <input type="checkbox" id="checktnc3" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">-->
                            <!--                        <label for="checktnc3"> Yes Please keep in loop with Updates</label>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </form>-->
                            <!--        <div class="modal-footer">-->
                            <!--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">-->
                            <!--        <form method="POST" id="askqueform">-->
                            <!--            <h5 id="askqueformsuccess"></h5>-->
                            <!--            <p style="margin-top: 10px; font-size:16px">Hit me with your best questions!</p>-->
                            <!--            <p>-->
                            <!--            </p>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="askque-name" placeholder="Your Name Here" aria-label="Username" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>-->
                            <!--                        <input type="email" class="form-control rounded-0" name="askque-email" placeholder="yourname@email.com" aria-label="email" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="askque-number" placeholder="Your Phone Number Here" aria-label="number" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Subject*</b></label>-->
                            <!--                        <select class="form-control rounded-0" name="askque-choose" aria-label="opt">-->
                            <!--                            <option value="Select One" disabled="disabled" selected=""> Select One</option>-->
                            <!--                            <option value="Personal Branding">Personal Branding</option>-->
                            <!--                            <option value="Professional Branding">Professional Branding</option>-->
                            <!--                            <option value="Life Decision">Life Decision</option>-->
                            <!--                            <option value="Other">Other</option>-->
                            <!--                        </select>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-12">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>-->
                            <!--                        <textarea class="form-control rounded-0" cols="40" rows="2" name="askque-message" aria-label="message"></textarea>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>-->
                            <!--            <div class="row align-items-center">-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-group">-->
                            <!--                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-8">-->
                            <!--                    <div class="input-group  form-check">-->
                            <!--                        <input type="checkbox" id="checktnc4" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">-->
                            <!--                        <label for="checktnc4"> Yes Please keep in loop with Updates</label>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </form>-->
                            <!--        <div class="modal-footer">-->
                            <!--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="tab-pane fade" id="v-pills-student" role="tabpanel" aria-labelledby="v-pills-settings-tab">-->
                            <!--        <form method="POST" id="hireform">-->
                            <!--            <h5 id="hireformsuccess"></h5>-->
                            <!--            <p style="margin-top: 10px; font-size:16px">Conversion Clock is a Culture Creation Company with an objective of positioning you so that those you serve and serve with are attracted to you and request to work with you. <a href="https://conversionclock.com/service" target="_blabnk" style="color:red">Learn about how our digital agency might be able to help.</a> </p>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Name*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="hireform-name" placeholder="Your Name Here" aria-label="Username" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Email*</b></label>-->
                            <!--                        <input type="email" class="form-control rounded-0" name="hireform-email" placeholder="yourname@email.com" aria-label="email" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Phone*</b></label>-->
                            <!--                        <input type="text" class="form-control rounded-0" name="hireform-number" placeholder="Your Phone Number Here" aria-label="number" required="">-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-6">-->
                            <!--                    <div class="input-group mb-3">-->
                            <!--                        <label class="d-block w-100 m-0 mb-1 h6"><b>Your Message*</b></label>-->
                            <!--                        <textarea class="form-control rounded-0" cols="40" rows="2" name="hireform-message" aria-label="message"></textarea>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <p style="font-size:14px">By clicking “Send,” I agree to receive marketing communications from TEKKLESIA.com. I am aware that I can unsubscribe at any time. </p>-->
                            <!--            <div class="row align-items-center">-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-group">-->
                            <!--                        <button class="btn contactpopupsubmit rounded-0" type="submit" value="SEND"><i class="fa fa-envelope" aria-hidden="true"></i> SEND</button>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-8">-->
                            <!--                    <div class="input-group  form-check">-->
                            <!--                        <input type="checkbox" id="checktnc5" name="terms[]" value="Yes Please keep in loop with Updates" checked="checked" required="">-->
                            <!--                        <label for="checktnc5"> Yes Please keep in loop with Updates</label>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </form>-->
                            <!--        <div class="modal-footer">-->
                            <!--            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div> -->
                </div>
            </div>
        </div>
        <!-- buton click form open Modal end-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://player.vimeo.com/api/player.js"></script>
        <script src="jquercustom.js"></script>
        <!--<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>-->
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            -->
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
            -->
    </body>
</html>