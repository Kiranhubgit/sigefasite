<?php
session_start();
$get_session = $_SESSION["psscod"];
if($get_session!='7-7-7-7') {
    header("Location: ");
}
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.1/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/0.9.1/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!--<link rel="stylesheet" type="text/css" href="assets/css/fullpage.css" />-->
	<title>Sigefa</title>

	<style type="text/css">
		body{
			font-family: 'AutopromPro';
			color: #06255c;
		}
        #header {
            background: #060a25;
            width: 100%;
            z-index: 999;
            /* position: relative; */
            border-bottom: 1px solid #b9b9b9;
        }
        body.light-bg.light-mode #header {
            background: white;
        }
        body.light-bg.light-mode h1.text-clr {
            color: black;
        }
        body.light-bg.light-mode #footer {
            background-color: white;
            border-top: 1px solid #b9b9b9;
        }
        body.light-bg.light-mode .copyright {
            color: black;
        }
        body.light-bg.light-mode .legalesebtn {
            color: black;
        }
        h2{
            color: white;
        }
        body.light-bg.light-mode h2 {
            color: black;
        }
        body.light-bg.light-mode p {
            color: #333;
        }
        body.light-bg.light-mode .slidf h4 {
            color: black;
        }
		iframe {
            border: 1px solid white;
        }
        body.light-bg.light-mode .lck {
            background: no-repeat;
        }
        .light-mode .brwn.d-inline-block strong {
            color: black;
        }
        .light-mode .brwn.d-inline-block {
            color: #eb0000 !important;
            font-weight: 600;
        }
        section#cf-slide-form{
            position: fixed;
            width: 100%;
            /* background: #fff; */
            background: #060a25;
            color: white;
            border-top: 1px solid #787a89;
            z-index: 112;
            left: -100%;
            transition: 0.5s ease-in-out;
            overflow: auto;
        }
        body.light-bg.light-mode section#cf-slide-form {
            background: #fff;
            color: black;
        }
        body.light-bg.light-mode .modal-title {
            color: #060a25;
        }
		.full-section{
    		background-color: #020822 !important;
    		text-align: center;
    		height: 100vh;
    	}
    	
    	#fullpage{
            position: absolute;
            width: 100%;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
    	}

    	body.light-mode .section{
    		background-color: #fff !important;
    	}
    	
    	body.light-mode .full-section{
    	    background-color: #fff !important;
    	}

    	.light-section{
    		display: none;
    	}

    	body.light-mode .light-section{
    		display: block;
    	}

    	body.light-mode .dark-section{
    		display: none;
    	}

        .box {
		    margin: 3em auto;
		    max-width: 800px;
		    padding: 4em;
		    width: 60%;
		    background: rgb(245 158 235);
		}

		/* #ld_mode {
		    position: fixed;
		    top: 20px;
		    right: 20px;
		    z-index: 9;
		    padding: 5px 10px;
		} */
        #ld_mode {
            position: absolute;
            right: 1px;
            top: 50%;
            transform: translateY(-50%);
            margin-right: -51px;
        }
		.main {
            z-index: 99;
        }
		.fp-watermark {
		    display: none;
		}

		h1, h2, h3, h4, h5, h6{
			margin: 0;
		}
		
		.light-bg {
            background: #fff !important;
            /*height: 100vh;*/
        }
        
        .midle{
            position: relative;
            background: #fff;
        }
		
		header .eye {
            border-radius: 50%;
            display: block;
            position: relative;
            height: 31px;
            width: 31px;
        }
        
        header .eye:after {
            content: " ";
            background: #fff;
            border-radius: 50%;
            position: absolute;
            bottom: 11px;
            right: 6px;
            width: 6px;
            height: 6px;
        }
		
		/* Chrome, Safari, Edge, Opera */
        input[type=number]::-webkit-outer-spin-button,
        input[type=number]::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
        
        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }

		#footer {
		    display: block;
		    background: #060a25;
		    padding: 15px;
		    position: relative;
		    width: 100%;
		    z-index: 999;
            border-top: 1px solid #b9b9b9;
		}

		/*header {*/
		/*    position: sticky;*/
		/*    top: 0;*/
		/*    width: 100%;*/
		/*    background: #060a25;*/
		/*    padding: 15px;*/
		/*}*/

		.text-white{
			color: #fff;
		}

		.s-name h1 {
		    font-family: "AutopromPro";
		    font-size: 60px;
		    line-height: 70px;
		    color: #fff;
		    margin: 0;
		}

		ul.attn {
		    list-style-type: none;
		}

		.attn li {
		    font-size: 30px;
		    line-height: 38px;
		    margin-bottom: 20px;
		}

		.btn-orange, .btn-orange:hover {
            background: #fc7e00;
            color: #fff;
            font-family: "AutopromPro";
            font-size: 24px;
            padding: 8px 24px;
            outline: 0;
            box-shadow: none;
        }

		h2 {
		    font-size: 30px;
		    line-height: 38px;
	        /* color: #06255c; */
            color: white;
		}

		section#cf-slide-form, section#slide-legalese {
		    position: fixed;
		    border-top: 1px solid #fff;
		    width: 100%;
		    /* background: #fff; */
            background: #060a25;
            color: white;
		    z-index: 999;
		    left: -100%;
		    transition: 0.5s ease-in-out;
		    overflow: auto;
		}
        body.light-bg.light-mode section#cf-slide-form {
            background: #fff;
            color: black;
        }
        body.light-bg.light-mode section#slide-legalese {
            background: #fff;
            color: black;
        }
        #multi-step-form-container {
            margin-top: 0rem !important;
            border: 1px solid #b9b9b9;
        }
        body.light-bg.light-mode #multi-step-form-container {
            border: 0.1px solid #b9b9b9;
        }

		section#cf-slide-form.show, section#slide-legalese.show {
		    left: 0%;
		    transition: 0.5s ease-in-out;
		}

		.dark-bg {
            background: #060a25;
            color: #fff;
        }
        
        .slidf h4 {
            font-size: 30px;
        }
        
        button.close, button.close:hover {
            color: #fff;
            opacity: 1;
            /*width: 5%;*/
            right: 0;
            outline: 0;
            box-shadow: none !important;
        }
        .copyright span {
            font-size: 14px;
            text-transform: uppercase;
        }
        /*#cf-slide-form .container {*/
        /*    max-width: 1140px !important;*/
        /*}*/
        
        .cl-btn {
            font-size: 34px;
            line-height: 20px;
        }
        
        .stk-close {
            top: 50%;
            transform: translateY(-50%);
        }
        
        span.text-grey {
            color: grey;
        }
        
        .form-check input[type=checkbox] {
            width: 20px;
            height: 20px;
            outline: 0;
            box-shadow: none;
        }
        
        .form-check label {
            margin-top: 2px !important;
            margin-left: 6px !important;
        }
        
        .mt-6{
            margin-top: 5rem !important;
        }
        
        .cursor-pointer{
            cursor:pointer;
        }
        
        div#cf_message {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
        }
        
        #sh_message.show{
            height: calc(100vh - 111px - 150px);
            position: relative;
        }
        
        .l-height {
            overflow: auto;
            overflow-x: hidden;
            padding-right: 10px;
        }
        
        /* width */
        .l-height::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        .l-height::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px !important;
            background: #ffffff !important;
        }
        /* Handle */
        .l-height::-webkit-scrollbar-thumb {
            background: #060a25 !important;
            border-radius: 10px;
        }
        /* Handle on hover */
        .l-height::-webkit-scrollbar-thumb:hover {
            background: #060a25 !important;
        }
        
        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .hamburger {
            opacity: 0;
            visibility: hidden;
        }
        .legalesebtn h5 {
            font-size: 14px!important;
            line-height: unset!important;
            display: inline-block;
            padding-left: 10px;
        }
        @media only screen and (min-width:768px){
            .copyright {
                text-align: left;
            }   
            .legalesebtn {
                float: right!important;
            }
        }
        @media (min-width: 501px) and (max-width: 767px) {
            .legalesebtn {
                float: right!important;
            }
            #footer {
                padding: 0px 15px;
            }
        }
        @media only screen and (max-width: 500px) {
            .middle_title {
                padding-left: 15px;
            }
            .copyrighttext {
                display: block;
            }
            .copyright {
                text-align: center;
            }
            .legalesebtn {
                padding-left: 10px;
            }
            #header {
                min-height: 89px;
            }
            #footer {
                padding: 0px;
                min-height: 62px;
            }
        }
	</style>
</head>
<body class="light-bg">
<!-- cooki strt -->
        <div id="loader" class="fstfrm fstfrm2 cooki">
            <div class='popup ' id="popuplink">
                <a href='' class='fst close d-block mb-3 text-end'>
                <i class="bi bi-x-circle-fill "></i>
                </a>
                <div class="bg-blu p-lg-5 p-3  mx-2  rounded text-dark text-center ">
                    <p class=" pt-lg-3 h2"><span class="d-lg-block">This site uses cookies</span> to help you have <span class="d-lg-block">the best experience possible.</span></p>
                    <img src="images/allright.png" class="img-fluid d-block mx-auto pb-3">
                    <a href="javascript:void(0)" onclick="accp_cookie()" class="okbtn d-inline-block mx-auto text-decoration-none text-center px-2 one mb-lg-3">OK!</a>
                </div>
            </div>
        </div>
        <!--cooki end -->
<!--double OptIn start -->
<div id="loader1" class="scnfrm1">
<div class='popup once'>
    <div id="multi-step-form-container">
            <div class="" id="play-button">
                <a href="#" onclick="close_loader1()" class="trd btn"><img src="assets/images/imagesclose-icon.png"></a>
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




<section class="pb-4 slidf" id="cf-slide-form">
    <div class="container-fluid p-0">
        <div>
            <div class="container allow">
                <div class="row position-relative py-2 pmr-2">
                    <div class="col-md-12">
                        <!--<h4 class="text-center mx-auto modal-title text-white">We love hearing from you!</h4>-->
                        <!-- <h4 class="modal-title" id="contact_formlabel">Talk to us. <br> We love hearing from you!</h4> -->
                        <h4 class="modal-title" id="contact_formlabel">Talk to us. We love hearing from you!</h4>
                    </div>

                    <!-- <button type="button" class="close btn position-absolute text-end stk-close">
                    	<span aria-hidden="true" onclick="close_slidein()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
                    </button> -->

                    <div class="dark-section">
                        <button type="button" class="close btn position-absolute text-end stk-close">
                            <span aria-hidden="true" onclick="close_slidein()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
                        </button>
                    </div>
                    <div class="light-section">
                        <button type="button" class="close btn position-absolute text-end stk-close">
                            <span aria-hidden="true" onclick="close_slidein()" type="button" class="cl-btn white"><img src="assets/images/close-icon.png"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="container allow">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div id="sh_message">
					<div id="cf_message" class="text-center"></div>
					</div>
					
					<div id="multi-step-form-container" class="twostepform frm-outerdiv">
                        <!-- Form Steps / Progress Bar -->
                        
                        <!-- Step Wise Form Content -->
                        <form id="ContactForm" name="ContactForm" enctype="multipart/form-data" method="POST">
                            <!-- Step 1 Content -->
                            <section id="step-1" class="form-step">
                                
                                <div class="col-md-12 frm-name-field">
                                    <div class="form-q">
                                        <h2 class="font-normal">Name<sup>*</sup></h2>
                                        <!-- Step 1 input fields -->
                                        <div class="mt-3">
                
                                            <div class="row">
                                                <div class="col-md-6 frm-fname">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                                                    </div>
                                                </div>
                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required>
                                                    </div>
                                                </div>

                                            <!-- ...FOR EMAIL ID ..... -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h2 class="font-normal">Email<sup>*</sup></h2>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com" required>
                                                </div>
                                                
                                                <div class="custom-control custom-checkbox">
                                                    <div class=" d-flex align-items-baseline" id="nls-subs">
                                                        <input type="checkbox" class="custom-control-input me-2" name="newsletter_subscribe" id="newsletter_subscribe" checked>
                                                        <label class="custom-control-label" for="newsletter_subscribe">Yes please add me to the <b>Sigefa Newsletter.</b><br>(You can unsubscribe at any time. We will never sell your email. We hate spam as we imagine you do too.)</label>
                                                    </div>
                                                    
                                                    
                                                    <div id="nl-subs" style="display: none;">
                                                        <label>You have already subscribed to the <b>Sigefa Newsletter.</b><br>(You can unsubscribe at any time. We will never sell your email. We hate spam as we imagine you do too.)</label>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                            <!-- FOR PHONE NUMBER..... -->

                                            <div class="form-group">
                                                    <h2 class="font-normal">Phone No.<sup>*</sup></h2>
                                                    <input type="number" class="form-control" name="phone_no" id="phone_no" required>
                                            </div>

                                             
                                            <!-- QUERY SECTION........ -->
                                            <div class="form-group">
                                                <h2 class="font-normal">How do you imagine we (my team and I) might be able to help you?<sup>*</sup></h2>
                                                <div class="mt-3">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="imagine_help" id="imagine_help" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="clear">&nbsp;</div>
                                <div class="form-n frm-frststp-submit">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="col-md-4">
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <button class="button submit-btn" type="submit">Send</button>
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
                                                    <textarea class="form-control" name="imagine_help" id="imagine_help" required></textarea>
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

<section class="slidf" id="slide-legalese">
    <div class="container-fluid p-0">
        <div>
            <div class="container allow">
                <div class="row position-relative py-2 pmr-2 mm-0">
                    <div class="col-md-12">
                        <h4 class="modal-title" id="myModalLabel">LEGALESE</h4>
                    </div>
                    <!-- <button type="button" class="close btn position-absolute text-end stk-close">
                    	<span aria-hidden="true" onclick="close_legalese()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
                    </button> -->

                    <div class="dark-section">
                        <button type="button" class="close btn position-absolute text-end stk-close">
                            <span aria-hidden="true" onclick="close_legalese()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
                        </button>
                    </div>
                    <div class="light-section">
                        <button type="button" class="close btn position-absolute text-end stk-close">
                            <span aria-hidden="true" onclick="close_legalese()" type="button" class="cl-btn white"><img src="assets/images/close-icon.png"></span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="container pt-4 allow">
            <div class="l-height">
                <div class="row mb-4 lgl" id="terms">
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
                        <p>The materials on the School’s Sigefa are provided 'as is'. The School makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties, including without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights. Further, the School does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Sigefa or otherwise relating to such materials or on any sites linked to this site.</p>
                    </div>
                </div>
                <div class="row mb-4 lgl" id="limitations">
                    <div class="col-md-12">
                        <h4 class="">4. Limitations</h4>
                        <p>In no event shall the School be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on the School’s Sigefa, even if the School or an authorized of the School has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
                    </div>
                </div>
                <div class="row mb-4 lgl" id="license">
                    <div class="col-md-12">
                        <h4 class="">5. Use License</h4>
                        <p>Permission is granted to temporarily download one copy of any downloadable materials on the School’s Sigefa for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license, you may not: modify or copy the materials; use the materials for any commercial purpose, or for any public display (commercial or non-commercial); attempt to decompile or reverse engineer any software contained on the School’s web site; remove any copyright or other proprietary notations from the materials; or transfer the materials to another person or 'mirror' the materials on any other server. This license shall automatically terminate if you violate any of these restrictions and may be terminated by Company at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format. Awareness Academy has a 30-day 100% money back guarantee policy. If you ever feel unhappy with a purchase, you can request a refund within 30 days. Awareness Academy has the right to terminate any course membership at any time, for any reason. 'Lifetime' access to a course (one time purchase; subscription; or payment plan) refers to the 'life' of the course or Sigefa.</p>
                    </div>
                </div>
                <div class="row mb-4 lgl" id="revisions">
                    <div class="col-md-12">
                        <h4 class="">6. Revisions And Errdata</h4>
                        <p>The materials appearing on the School’s Sigefa may include technical, typographical, or photographic errors. The School does not warrant that any of the materials on its web site are accurate, complete, or current. The School may make changes to the materials contained on its web site at any time without notice. The School does not, however, make any commitment to update the materials.</p>
                    </div>
                </div>
                <div class="row mb-4 lgl" id="links">
                    <div class="col-md-12">
                        <h4 class="">7. Links</h4>
                        <p>The School has not reviewed all of the sites linked to its Sigefa and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by the School of the site. Use of any such linked Sigefa is at the user's own risk.</p>
                    </div>
                </div>
                <div class="row mb-4 lgl" id="governing">
                    <div class="col-md-12">
                        <h4 class="">8. Governing Law</h4>
                        <p>Any claim relating to the School’s Sigefa shall be governed by the laws of the School Owner’s home jurisdiction without regard to its conflict of law provisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-4 slidf" id="cf-feedback-form">
	<div class="container-fluid p-0">
		<div class="dark-bg">
			<div class="container allow">
				<div class="row position-relative py-2 pmr-2">
					<div class="col-md-12">
						<!--<h4 class="text-center mx-auto modal-title text-white">We love hearing from you!</h4>-->
						<h4 class="modal-title" id="contact_formlabel">Your Voice Matters <br>We'd love to learn more about your experiences on Sigefa.com and how we can improve!</h4>
					</div>
					<button type="button" class="close btn position-absolute text-end stk-close">
						<span aria-hidden="true" onclick="close_feedback()" type="button" class="cl-btn white"><img src="assets/images/close-icon-white.png"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="container allow">
			<div class="row mt-3 position-relative">
				<div class="col-md-12">
					<!--<div id="sh_message">-->
					<!--<div id="cf_message" class="text-center"></div>-->
					<!--</div>-->
					<form action="#" id="feedbackform">
                        <div class="fb1">
                            <h4>Please tell us why you are reaching out?(one reason per submission)</h4>
                            <div class="splitopt">
                                <span>
                                <input type="radio" name="tellus" id="Praise" value="Praise" required="">
                                <label for="Praise">Praise</label><br>
                            </span>
                                <span>
                                <input type="radio" name="tellus" id="Suggestion" value="Suggestion" required="">
                                <label for="Suggestion">Feature Request or Suggestion</label><br>
                            </span>
                                <span>
                                <input type="radio" name="tellus" id="experience" value="Bad experience" required="">
                                <label for="experience">Bad experience</label><br>
                           </span>
                                <span>
                                <input type="radio" name="tellus" id="issue" value="Technical issue" required="">
                                <label for="issue">Technical issue</label><br>
                            </span>
                                <!--<span>-->
                                <!--    <input type="radio" name="tellus" id="quality">-->
                                <!--    <label for="quality">Product quality or selection</label>-->
                                <!--</span>-->
                            </div>
                        </div>
                        <div class="fb2">
                            <h4>How likely are you to recommend Sigefa.com to a friend or colleague?</h4>
                            <input type="radio" name="recommend_number" id="one" value="1" required="">
                            <label for="one">1</label>
                            <input type="radio" name="recommend_number" id="two" value="2" required="">
                            <label for="two">2</label>
                            <input type="radio" name="recommend_number" id="three" value="3" required="">
                            <label for="three">3</label>
                            <input type="radio" name="recommend_number" id="four" value="4" required="">
                            <label for="four">4</label>
                            <input type="radio" name="recommend_number" id="five" value="5" required="">
                            <label for="five">5</label>
                            <input type="radio" name="recommend_number" id="six" value="6" required="">
                            <label for="six">6</label>
                            <input type="radio" name="recommend_number" id="seven" value="7" required="">
                            <label for="seven">7</label>
                            <input type="radio" name="recommend_number" id="eight" value="8" required="">
                            <label for="eight">8</label>
                            <input type="radio" name="recommend_number" id="nine" value="9" required="">
                            <label for="nine">9</label>
                            <input type="radio" name="recommend_number" id="ten" value="10" required="">
                            <label for="ten">10</label>
                        </div>
                        <div class="fb3">
                            <h4>I feel the Sigefa.com Sigefa is personalized (tailored) to me?</h4>
                            <input type="radio" name="tailored_number" id="one1" value="1" required="">
                            <label for="one1">1</label>
                            <input type="radio" name="tailored_number" id="two2" value="2" required="">
                            <label for="two2">2</label>
                            <input type="radio" name="tailored_number" id="three3" value="3" required="">
                            <label for="three3">3</label>
                            <input type="radio" name="tailored_number" id="four4" value="4" required="">
                            <label for="four4">4</label>
                            <input type="radio" name="tailored_number" id="five5" value="5" required="">
                            <label for="five5">5</label>
                            <input type="radio" name="tailored_number" id="six6" value="6" required="">
                            <label for="six6">6</label>
                            <input type="radio" name="tailored_number" id="seven7" value="7" required="">
                            <label for="seven7">7</label>
                            <input type="radio" name="tailored_number" id="eight8" value="8" required="">
                            <label for="eight8">8</label>
                            <input type="radio" name="tailored_number" id="nine9" value="9" required="">
                            <label for="nine9">9</label>
                            <input type="radio" name="tailored_number" id="ten10" value="10" required="">
                            <label for="ten10">10</label>
                        </div>
                        <div class="fb4">
                            <h4>Please rate your overall experience with Sigefa.com?</h4>
                            <input type="radio" name="experience_number" id="exrate1" value="1" required="">
                            <label for="exrate1">1</label>
                            <input type="radio" name="experience_number" id="exrate2" value="2" required="">
                            <label for="exrate2">2</label>
                            <input type="radio" name="experience_number" id="exrate3" value="3" required="">
                            <label for="exrate3">3</label>
                            <input type="radio" name="experience_number" id="exrate4" value="4" required="">
                            <label for="exrate4">4</label>
                            <input type="radio" name="experience_number" id="exrate5" value="5" required="">
                            <label for="exrate5">5</label>
                            <input type="radio" name="experience_number" id="exrate6" value="6" required="">
                            <label for="exrate6">6</label>
                            <input type="radio" name="experience_number" id="exrate7" value="7" required="">
                            <label for="exrate7">7</label>
                            <input type="radio" name="experience_number" id="exrate8" value="8" required="">
                            <label for="exrate8">8</label>
                            <input type="radio" name="experience_number" id="exrate9" value="9" required="">
                            <label for="exrate9">9</label>
                            <input type="radio" name="experience_number" id="exrate10" value="10" required="">
                            <label for="exrate10">10</label>
                        </div>
                        <div class="fb5">
                            <h4>Overall, the Sigefa.com Sigefa is easy to use?</h4>
                            <input type="radio" name="overall_number" id="Overall1" value="1" required="">
                            <label for="Overall1">1</label>
                            <input type="radio" name="overall_number" id="Overall2" value="2" required="">
                            <label for="Overall2">2</label>
                            <input type="radio" name="overall_number" id="Overall3" value="3" required="">
                            <label for="Overall3">3</label>
                            <input type="radio" name="overall_number" id="Overall4" value="4" required="">
                            <label for="Overall4">4</label>
                            <input type="radio" name="overall_number" id="Overall5" value="5" required="">
                            <label for="Overall5">5</label>
                            <input type="radio" name="overall_number" id="Overall6" value="6" required="">
                            <label for="Overall6">6</label>
                            <input type="radio" name="overall_number" id="Overall7" value="7" required="">
                            <label for="Overall7">7</label>
                            <input type="radio" name="overall_number" id="Overall8" value="8" required="">
                            <label for="Overall8">8</label>
                            <input type="radio" name="overall_number" id="Overall9" value="9" required="">
                            <label for="Overall9">9</label>
                            <input type="radio" name="overall_number" id="Overall10" value="10" required="">
                            <label for="Overall10">10</label>
                        </div>
                        <div class="fb6">
                            <h4>Which of the following best describes you?</h4>
                            <input type="checkbox" name="describes[]" id="describe" value="This is my first visit to Sigefa.com">
                            <label for="describe1">This is my first visit to Sigefa.com</label><br>
                            <input type="checkbox" name="describes[]" id="describe" value="I am a returning visitor">
                            <label for="describe2">I am a returning visitor</label><br>
                            <input type="checkbox" name="describes[]" id="describe" value="I went through 15 sections of the Sigefa.com">
                            <label for="describe3">I went through all the sections of the Sigefa.com</label><br>
                        </div>
                        <div class="fb7">
                            <h4>How can we improve Sigefa.com?</h4>
                            <textarea type="text" name="howcanimprove" id="howcanimprove" required=""></textarea>
                        </div>
                        <div class="fb8">
                            <h4>Would you like us to reply? If so, enter your email.</h4>
                            <textarea type="text" name="mailreply" id="mailreply" required=""></textarea>
                        </div>
                        <div class="col-md-12">
                            <h4 id="submitedline"></h4>
                        </div>
                        <input class="btn-orange" type="submit" value="Be Heard">
                        <!--fbsubmit-->


                    </form>
				</div>
			</div>
		</div>
	</div>
</section>

<header id="header">
    <!-- big_menu ends -->
    <div class="top_nav">
        <div class="container" id="main-head">
            <div class="top_nav_wrapper">
                <nav class="navbar navbar-expand-lg p-0 justify-content-between">

                    <!-- <a class="navbar-brand" href="https://www.sigefa.com"><img src="sigefa-logo.png" width="133" height="59"></a> -->

                    <div class="dark-section">
                    <a class="navbar-brand" href="https://www.sigefa.com"><img src="sigefa-logo.png" width="133" height="59"></a>
                    </div>
                    <div class="light-section">
                        <a class="navbar-brand" href="https://www.sigefa.com"><img src="assets/images/sigefa-logo-drk.png" width="133" height="59"></a>
                    </div>

                    <div class="middle_title text-center w-100">
                        <!--<h1>I See A New U.S. of A.</h1>-->
                        <h1 class="text-clr" >The Science of Progress</h1>
                        <!--<h4></h4>-->
                        <div class="" id="ld_mode">
    	                    <img src="assets/images/darkimg.png" class="img-fluid drkimg " id="myImg" onclick="myFunction()">
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--<section class="main midle py-4">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-12 text-center">
				<h2 class="text-uppercase">The 6 simple steps</h2>
				<h2 class="text-uppercase">To accomplish your goals much faster</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8 offset-md-2 fpc-video">
				<iframe width="100%" height="350" src="https://www.youtube.com/embed/61QSHrOuGEA" title="Countdown Timer 10 seconds with Sound Effect 4K Free Download" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>

		<div class="row mb-4 fpc-connect">
			<div class="col-md-12 text-center">
				<h2><span id="slidein-form" onclick="open_slidein()" class="text-uppercase btn btn-orange">Let's Connect</span></h2>
			</div>
		</div>
		<div class="row fpc-donwload-img">
			<div class="col-md-12 text-center">
				<a href="assets/images/sigefa-image.pdf" target="_blank">Download Image</a>
			</div>
		</div>
	</div>
</section>
-->
<section class="midle position-relative ">
                <div class="container-fluid pd-rl-0">
                    <div class="row ">
                        <div class="col-12 px-0">
                            <div class="acd">
                                <div class="accordion accoscrol" id="accordionExample">
                                    <!-- accodian one start -->
                                    <div class="container">
                                        <div class="row ">
                                            <div class="col-12">
                                                <div class="accordion-item ">
                                                    <h2 class="accordion-header dfh play-button apt" id="headingOne">
                                                        <button id="play-button" class="accordion-button videoModalTriger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            <div class="d-flex justify-content-between align-items-center  w-100 pr10">
                                                                <div class="d-flex align-items-center intro"> Intro Welcome to S.I.G.E.F.A.</div>
                                                                <div class="b-hold">
                                                                    <a type="button" class="mb-3 me-1 btn btn-info btn-sty dnone" id="expand" onclick="expand_all()">Expand All</a>
                                                                    <a type="button" class="mb-3 me-1 btn btn-info btn-sty dnone" id="collapse" onclick="collapse_all()">Collapse All</a>
                                                                </div>
                                                                <div class="parent_img">
                                                                    <div class="form-group">
                                                                        <input type="checkbox" class="check1" disabled="">
                                                                        <label></label>
                                                                    </div>
                                                                    
                                                                    <input type="checkbox" class="form-control c-check" checked="" disabled="" style="">
                                                                    
                                                                    <span class="check ">
                                                                    <i class="bi bi-app mgr"></i>
                                                                    </span>
                                                                    <span class="check1 your-image"> </span>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse df collapse submenu fstdflt show  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body ">
                                                            <div class="row pad-hundred g-4 mx-2 align-items-center text-center acco-inner-body">
                                                                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                    <div>
                                                                        <h3>LOREM IPSUM DOLOR.</h3>
                                                                        <p>Sed ut perspiciatis unde</p>
                                                                    </div>
                                                                    <div class="step-1-right-vid video-com rounded my-3">
                                                                        <div class="box-video ">
                                                                            <div class="video-container">
                                                                                <iframe class="rounded" style="" id="one_acc" src="https://player.vimeo.com/video/46926279?h=ba7556abf4&byline=0" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay">
                                                                                </iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="position-relative">
                                        <img class="img-fluid lck" src="assets/images/lock.png">
                                        <!-- accodian two start -->
                                        <div class="position-relative  twos ">
                                            <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="accordion-item  button2">
                                                            <h2 class="accordion-header dfh" id="headingTwo">
                                                                <button class="accordion-button collapsed video-btn2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    <div class="d-flex justify-content-between align-items-center  w-100 pr10">
                                                                        <div class="d-flex align-items-center flex-wrap accor-width">
                                                                            <span class="brwn d-inline-block"><strong>#1.</strong> SET </span> your measurable goal.
                                                                        </div>
                                                                        <div class="parent_img">
                                                                            <div class="form-group">
                                                                            <input type="checkbox" class="checktwo" disabled="">
                                                                            <label></label>
                                                                        </div>
                                                                        <span class="unchecktwo "><i class="bi bi-app mgr"></i></span>
                                                                            <span class="checktwo your-image"> </span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse df collapse submenu" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body sect">
                                                                    <div class="row pad-hundred g-4   mx-2 text-center align-items-center acco-inner-body">
                                                                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                            <div>
                                                                                <h3 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</h3>
                                                                            </div>
                                                                            <div class="step-1-right-vid video-com rounded ">
                                                                                <div class="box-video ">
                                                                                    <div class="video-container">
                                                                                        <iframe class="rounded " style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; " id="two_acc" width="100%" height="100%" src="https://player.vimeo.com/video/46926279?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- accodian three start -->
                                        <div class="position-relative threes">
                                            <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="accordion-item  ">
                                                            <h2 class="accordion-header dfh" id="headingThree">
                                                                <button class="accordion-button collapsed video-btn3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    <div class="d-flex justify-content-between align-items-center  w-100 pr10">
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <span class="brwn d-inline-block"><strong>#2.</strong> IDENTIFY</span> the hole.
                                                                        </div>
                                                                        <div class="parent_img">
                                                                            <div class="form-group">
                                                                                <input type="checkbox" class="checkthree" disabled="">
                                                                                <label></label>
                                                                            </div>
                                                                            <span class="uncheckthree "><i class="bi bi-app mgr"></i></span>
                                                                            <span class="checkthree your-image"> </span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            
                                                            <div id="collapseThree" class="accordion-collapse df collapse submenu" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body sect">
                                                                    <div class="row pad-hundred g-4 text-center  mx-2  align-items-center acco-inner-body">
                                                                        <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                                <div>
                                                                                    <h3>Lorem ipsum dolor sit amet, consectetur .</h3>
                                                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit vde.</p>
                                                                                </div>
                                                                                <div class="step-1-right-vid video-com rounded ">
                                                                                <div class="box-video">
                                                                                    <div class="video-container rounded">
                                                                                        <iframe class="rounded" style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; " id="three_acc" width="100%" height="100%" src="https://player.vimeo.com/video/46926279?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- accodian four start -->
                                        <div class=" fours position-relative">
                                            <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="accordion-item ">
                                                            <h2 class="accordion-header dfh" id="headingfour">
                                                                <button class="accordion-button collapsed video-btn4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                                                    <div class="d-flex justify-content-between align-items-center  w-100 pr10">
                                                                        <div class="d-flex align-items-center flex-wrap">
                                                                            <span class="brwn d-inline-block"><strong>#3.</strong> GUESS</span> what solution is the best.
                                                                        </div>
                                                                        <div class="parent_img">
                                                                            <div class="form-group">
                                                                                <input type="checkbox" class="checkfour" disabled="">
                                                                                <label></label>
                                                                            </div>
                                                                            <span class="uncheckfour "> <i class="bi bi-app mgr"></i></span>
                                                                            <span class="checkfour your-image"> </span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapsefour" class="accordion-collapse df collapse submenu" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body sect">
                                                                    <div class="">
                                                                        <div class="row pad-hundred g-4   mx-2 text-center align-items-center acco-inner-body">
                                                                            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                                <div>
                                                                                    <h3>Lorem ipsum dolor.</h3>
                                                                                    <p>Sed ut perspiciatis unde</p>
                                                                                </div>
                                                                                <div class="step-1-right-vid video-com rounded ">
                                                                                    <div class="box-video">
                                                                                        <div class="video-container">
                                                                                            <iframe class="rounded" style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; " id="four_acc" width="100%" height="100%" src="https://player.vimeo.com/video/46926279?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--<div class="col-md-6 col-lg-4  ">-->
                                                                            <!--    <div><img src="assets/images/The-5-Freedoms.jpg" class="img-fluid whtbdr ms-lg-auto  d-block"></div>-->
                                                                            <!--</div>-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- accodian five start -->
                                        <div class="position-relative  fives ">
                                            <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="accordion-item ">
                                                            <h2 class="accordion-header dfh" id="headingfive">
                                                                <button class="accordion-button collapsed video-btn5" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                                                    <div class="d-flex justify-content-between align-items-center  w-100 pr10">
                                                                        <div class="d-flex align-items-center  flex-wrap"> <span class="brwn d-inline-block"><strong>#4.</strong> EXPERIMENT</span> to put your idea to the test. </div>
                                                                        <div class="parent_img">
                                                                            <div class="form-group">
                                                                                <input type="checkbox" class="checkfive" disabled="">
                                                                                <label></label>
                                                                            </div>
                                                                            <span class="uncheckfive "> <i class="bi bi-app mgr"></i></span>
                                                                            <span class="checkfive your-image"> </span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapsefive" class="accordion-collapse df collapse submenu" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body sect">
                                                                    <div class="">
                                                                        <div class="row pad-hundred g-4  text-center  align-items-center acco-inner-body">
                                                                            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                                <div>
                                                                                    <h3>Lorem ipsum dolor</h3>
                                                                                    <p>Sed ut perspiciatis unde</p>
                                                                                </div>
                                                                                <div class="step-1-right-vid video-com rounded ">
                                                                                    <div class="box-video">
                                                                                        <div class="video-container">
                                                                                             <iframe class="rounded" style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; " id="five_acc" width="100%" height="100%" src="https://player.vimeo.com/video/46926279?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- accodian six start -->
                                        <div class="position-relative  sixs">
                                            <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="accordion-item ">
                                                            <h2 class="accordion-header dfh" id="headingsix">
                                                                <button class="accordion-button collapsed video-btn6" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                                    <div class="d-flex justify-content-between align-items-center  w-100 pr10">
                                                                        <div class="d-flex align-items-center flex-wrap "><span class="brwn d-inline-block"><strong>#5.</strong> FAIL</span> in some way shape or form. </div>
                                                                        <div class="parent_img">
                                                                            <div class="form-group">
                                                                                <input type="checkbox" class="checksix" disabled="">
                                                                                <label></label>
                                                                            </div>
                                                                            <span class="unchecksix "> <i class="bi bi-app mgr"></i></span>
                                                                            <span class="checksix your-image"> </span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapsesix" class="accordion-collapse df collapse submenu" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body sect">
                                                                    <div class="">
                                                                        <div class="row pad-hundred g-4 text-center  mx-2  align-items-center acco-inner-body">
                                                                            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                                <div>
                                                                                    <h3>Lorem ipsum dolor.</h3>
                                                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                                                                    <p>At vero eos et accusamus et iusto odio dignissimos.</p>
                                                                                </div>
                                                                                <div class="step-1-right-vid video-com rounded">
                                                                                    <div class="box-video">
                                                                                        <div class="video-container">
                                                                                            <iframe class="rounded" style="background-image:url(images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; " id="six_acc" width="100%" height="100%" src="https://player.vimeo.com/video/46926279?" frameborder="0" allowfullscreen="allowfullscreen" allow="autoplay"></iframe>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- accodian seven start -->
                                        <div class="position-relative  sevens">
                                            <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="accordion-item ">
                                                            <h2 class="accordion-header dfh" id="headingseven">
                                                                <button class="accordion-button collapsed video-btn7" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                                    <div class="d-flex justify-content-between align-items-center w-100 pr10">
                                                                        <div class="d-flex align-items-center  flex-wrap ">
                                                                            <span class="brwn d-inline-block"><strong>#6.</strong> ASSESS</span> what you've learned that's outside of the norm.
                                                                        </div>
                                                                        <div class="parent_img">
                                                                            <div class="form-group">
                                                                                <input type="checkbox" class="checkseven" disabled="">
                                                                                <label></label>
                                                                            </div>
                                                                            <span class="uncheckseven"><i class="bi bi-app mgr"></i></span>
                                                                            <span class="checkseven your-image"> </span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapseseven" class="accordion-collapse df collapse submenu" aria-labelledby="headingseven" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body sect">
                                                                    <div class="">
                                                                        <div class="row pad-hundred g-4 text-center  align-items-center acco-inner-body">
                                                                            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                                <div>
                                                                                    <h3>At vero eos et accusamus et iusto odio dignissimos ducimus?</h3>
                                                                                    <p>Check out our offer to you.</p>
                                                                                </div>
                                                                                <div class="step-1-right-vid video-com rounded ">
                                                                                    <div class="box-video">
                                                                                        <div class="video-container">
                                                                                            <iframe class="rounded" style="background-image:url(./images/man.png);background-size:contain;background-repeat: no-repeat;    background-position: center; " id="seven_acc" width="100%" allow="autoplay" height="100%" src="https://player.vimeo.com/video/46926279?" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- accodian eight start -->
                                        <div class="position-relative   eights  ">
                                            <div class="container">
                                                <div class="row ">
                                                    <div class="col-12">
                                                        <div class="accordion-item pb-0">
                                                            <h2 class="accordion-header dfh" id="headingeight">
                                                                
                                                                <!--mb-0  -->
                                                                <button class="accordion-button collapsed video-btn8" type="button" data-bs-toggle="collapse" data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                                                    <div class="d-flex justify-content-between align-items-center w-100 pr10">
                                                                        <!--Your FREE e-Books!-->
                                                                        <div class="d-flex align-items-center  flex-wrap ">Conclusion contact us. </div>
                                                                        <div class="parent_img">
                                                                            <div class="form-group">
                                                                                <input type="checkbox" class="checkeight" disabled="">
                                                                                <label></label>
                                                                            </div>
                                                                            <span class="uncheckeight"> <i class="bi bi-app mgr"></i></span>
                                                                            <span class="checkeight your-image"> </span>
                                                                        </div>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapseeight" class="accordion-collapse df collapse submenu" aria-labelledby="headingeight" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="">
                                                                        <div class="row pad-hundred g-4 text-center  align-items-center acco-inner-body">
                                                                            <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 px-lg-0">
                                                                                <div>
                                                                                    <h3 class="">Might it make sense for us to work together? </h3>
                                                                                    <!--pb-3-->
                                                                                </div>
                                                                                <div class="step-1-right-vid video-com rounded ">
                                                                                    <div class="box-video">
                                                                                        <div class="video-container">
                                                                                            <iframe class="rounded" style="" id="eight_acc" allow="autoplay" width="100%" height="100%" src="https://player.vimeo.com/video/46926279?" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <button class="btn btn-orange orngjoin px-lg-4 mt-4 slbg" onclick="open_slidein()" type="button">CONNECT</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container text-end">
                                        <div class="row">
                                            <div class="b-hold">
                                            </div>
                                            <div class="col-md-12">
                                                <div class="col-md-6 text-center frst-pg-downld-btn">

                                    				<!-- <a href="assets/images/sigefa-image.pdf" target="_blank"><img src="assets/images/download-btn1.png"></a> -->

                                                    <div class="dark-section">
                                                        <a href="assets/images/sigefa-image.pdf" target="_blank"><img src="assets/images/download-btn1.png"></a>
                                                    </div>
                                                    <div class="light-section">

                                                        <!-- <a href="assets/images/sigefa-image.pdf" target="_blank"><img src="assets/images/download-drk.png"></a> -->

                                                        <a href="assets/images/sigefa-image.pdf" target="_blank">
                                                                <img src="assets/images/download-drk.png" alt="Download" style="width: 62px; height: 46px;">
                                                        </a>

                                                    </div>                                            

                                    			</div>
                                    			<div class="col-md-6 frst-pg-returntop">
                                                    <a type="button" class="mt-3 mb-3 btn btn-info btn-sty dnone" id="expand1" onclick="expand_all()">Expand All</a>
                                                    <a type="button" class="mt-3 mb-3 btn btn-info btn-sty dnone" id="collapse1" onclick="collapse_all()">Collapse All</a>
                                                    
                                                    <!--<div class="container text-end mb-2 show-mobile">-->
                                                        <img onclick="expand_all()" class="show-mobile1" id="expand3" src="assets/images/expand.png" width="25">
                                                        <img onclick="collapse_all()" class="show-mobile1" id="collapse3" src="assets/images/collapse.png" width="25">
                                                    <!--</div>-->
                                                    <button type="button" class="mt-3 mb-3 btn btn-info btn-sty" onclick="scroll_top()">Return To Top</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- inner eight accodian three end -->
                            <!-- accodian eight end -->
                        </div>
                    </div>
                </div>
            </section>
<footer id="footer">
	<div class="container">
        <div class="row align-items-center justify-content-center gy-2">
            <div class="col-md-12 p-0">
                <div class="pb-lg-0 copyright-outer">
                    <div class="copyright">
                        <span class="copyrighttext">© 2023-2024 & Beyond Sigefa.com </span><span class="copyright-reserved">All Rights Reserved.</span><span class="legalesebtn"><h5 class="cursor-pointer" onclick="open_legalese()">Legalese</h5></span>
                        <span class="legalesebtn"><h5 class="cursor-pointer" onclick="open_slidein()">Connect</h5></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--<script type="text/javascript" src="assets/js/fullpage.js"></script>-->
<!--<script type="text/javascript" src="assets/js/examples.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://player.vimeo.com/api/player.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
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
    
    if(idiframe == 'two_acc'){
        one_flag = 1;
    }
    
    if(finish != 'yes'){
        // console.log(finish);
        if(one_flag == 1){
            playerkb.play();
        }
    }
    // playerkb.play();
}

function scroll_top() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
}
$(document).ready(function() {
    finish = getCookie('finish_all');
    
    var nlsubs = getCookie('nl_subs');
    
    if(nlsubs == 'done'){
        $('#nl-subs').show();
        $('#nls-subs').addClass('d-none');
    }else{
        $('#nls-subs').removeClass('d-none');
        $('#nl-subs').hide();
    }
    
    $(window).on('resize', function () {
			    
	    let x = message_window()
	
	    $('#sh_message.show').css('height','calc(100vh - '+ x +'px)');
	
		resize_window()
		
	})
	
	function resize_window(){
		let header_height = $('header').innerHeight();
		let footer_height = $('footer').innerHeight();

		let total = header_height + footer_height + 1 + 1;

		$('.midle').css('min-height','calc(100vh - '+total+'px)')
		
		$('#slide-legalese').css('top',header_height+'px')
		$('#cf-slide-form').css('top',header_height+'px')
	}
    
    $(".accordion-button").click(function() {
        playerkb.pause();
        
        var iframebtn = $(this).attr('data-bs-target');
        var iframed = $(iframebtn).find('iframe').attr('id');
        var videoURL = $('#' + iframed).prop('src');
        const iframe = document.getElementById(iframed);
        playerkb = new Vimeo.Player(iframe);
        
        if(iframed == 'two_acc'){
            one_flag = 1;
        }
        
        var conc_tab_ck = getCookie('conclusion');
        
        if(conc_tab_ck == 'yes'){
            
        }else{
            if(one_flag == 1){
                if(finish != 'yes'){
                    if ($(this).attr('aria-expanded') == 'true') {
                        playerkb.play();
                    } else {
                        playerkb.pause();
                    }
                }
            }
        }
        
        
        
    });
    $('#expand-collapse').css('display', 'none');
    /* +++++++++++Main Video popupbefor form++++++++++++ */
    /*var iframek = document.getElementById('vidone');
		  	var playerk = new Vimeo.Player(iframek);
		  	playerk.on('ended', function() {
		


		  		$('.aftrfrm').css('display', 'block');
		  	

		  	});*/
    /* Start  one js video end*/
    var playerwel = 'no';
    var welcometab = getCookie('welcome');
    if (welcometab == 'yes') {
        $(".check").css("display", "none");
        $('.check1').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.check1').attr('checked',true);
        $('.whosmn').removeClass("ponter-evnt");
        $('.twos').removeClass("tmp-abs");
        // $('img.lck').css("bottom", "161px");

        $('img.lck').css("transform", "translateY(-30%)");
        playerwel = 'yes';
        play_auto_on_end('one_acc');
    }else{
        $('.twos').addClass("tmp-abs");
    }
    /* first Acordian one js videoend and checked start*/
    var iframeone = document.getElementById('one_acc');
    var player_one = new Vimeo.Player(iframeone);
    player_one.on('ended', function() {
        if (playerwel != 'yes') {
            $(".check").css("display", "none");
            $('.check1').html('<img id="theImg" src="assets/images/rgt.png" />');
            $('.check1').attr('checked',true);
            $('.whosmn').removeClass("ponter-evnt");
            $('.twos').removeClass("tmp-abs");
            // $('img.lck').css("bottom", "161px");

            $('img.lck').css("transform", "translateY(-30%)");
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
        $('.checktwo').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checktwo').attr('checked',true);
        $('.whysmn').removeClass("ponter-evnt");
        $('.threes').removeClass("tmp-abs");
        // $('img.lck').css("width", "145px");
        // $('img.lck').css("bottom", "113px");

        $('img.lck').css("transform", "translateY(-15%)");
        // $('img.lck').css("right", "-741pxpx");
    }else{
        $('.threes').addClass("tmp-abs");
    }
    var iframetwo = document.getElementById('two_acc');
    var player_two = new Vimeo.Player(iframetwo);
    player_two.on('ended', function() {
        $(".unchecktwo").css("display", "none");
        $('.checktwo').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checktwo').attr('checked',true);
        $('.whysmn').removeClass("ponter-evnt");
        $('.threes').removeClass("tmp-abs");
        // $('img.lck').css("width", "145px");
        // $('img.lck').css("bottom", "113px");

        $('img.lck').css("transform", "translateY(-15%)");
        // $('img.lck').css("right", "-741pxpx");
        $("#collapseTwo, #collapseThree").collapse('toggle');
        setCookie('who', 'yes', 365);
        play_auto_on_end('three_acc');
    });
    /* Start Acordian two js video end*/
    /* ================================================== Start Acordian three js video start================== */
    var whytab = getCookie('why');
    if (whytab == 'yes') {
        $(".uncheckthree").css("display", "none");
        $('.checkthree').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkthree').attr('checked',true);
        $('.whatsmn').removeClass("ponter-evnt");
        $('.fours').removeClass("tmp-abs");
        $('img.lck').css("transform", "translateY(-5%)");
        $('img.lck').css("width", "100px");
    }else{
        $('.fours').addClass("tmp-abs");
    }
    var iframethree = document.getElementById('three_acc');
    var player_three = new Vimeo.Player(iframethree);
    player_three.on('ended', function() {
        $(".uncheckthree").css("display", "none");
        $('.checkthree').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkthree').attr('checked',true);
        $('.whatsmn').removeClass("ponter-evnt");
        $('.fours').removeClass("tmp-abs");
        $('img.lck').css("transform", "translateY(-5%)");
        $('img.lck').css("width", "100px");
        $("#collapseThree, #collapsefour").collapse('toggle');
        setCookie('why', 'yes', 365);
        play_auto_on_end('four_acc');
    });
    /* Start Acordian three js video end*/
    /*=====================================  Start Acordian four js video start====================================== */
    var whattab = getCookie('what');
    if (whattab == 'yes') {
        $(".uncheckfour").css("display", "none");
        $('.checkfour').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkfour').attr('checked',true);
        $('.wheresmn').removeClass("ponter-evnt");
        $('.fives').removeClass("tmp-abs");
        // $('img.lck').css("bottom", "141px");
        // $('img.lck').css("width", "100px");

        $('img.lck').css("transform", "translateY(0%)");
        $('img.lck').css("bottom", "5%");
    }else{
        $('.fives').addClass("tmp-abs");
    }
    var iframefour = document.getElementById('four_acc');
    var player_four = new Vimeo.Player(iframefour);
    player_four.on('ended', function() {
        $(".uncheckfour").css("display", "none");
        $('.checkfour').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkfour').attr('checked',true);
        $('.wheresmn').removeClass("ponter-evnt");
        $('.fives').removeClass("tmp-abs");
        // $('img.lck').css("bottom", "141px");
        // $('img.lck').css("width", "100px");

        $('img.lck').css("transform", "translateY(0%)");
        $('img.lck').css("bottom", "5%");
        if ($(window).width() > 1260) {
            // location.reload(true);
            // $('img.lck').css("bottom", "130px");
        } else { // location.reload(true);
            $('img.lck').css("bottom", "27px");
        }
        $(window).resize(function() {
            if ($(window).width() > 1260) {
                // location.reload(true);
                // $('img.lck').css("bottom", "130px");
            } else {
                // location.reload(true);
                $('img.lck').css("bottom", "27px");
            }
        });
        //onresize_chek_height();
        $("#collapsefour, #collapsefive").collapse('toggle');
        setCookie('what', 'yes', 365);
        play_auto_on_end('five_acc');
    });
    /* Start Acordian four js video end*/
    /* ==================================== Start Acordian five js video start================================= */
    var wheretab = getCookie('where');
    if (wheretab == 'yes') {
        // if ($(window).width() > 1260) {
        //     $('img.lck').css("bottom", "200px");
        // } else {
        //     $('img.lck').css("bottom", "27px");
        // }
        // $(window).resize(function() {
        //     if ($(window).width() > 1260) {
        //         $('img.lck').css("bottom", "200px");
        //     } else {
        //         $('img.lck').css("bottom", "27px");
        //     }
        // });
        $(".uncheckfive").css("display", "none");
        $('.checkfive').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkfive').attr('checked',true);
        $('.howsmn').removeClass("ponter-evnt");
        $('.sixs').removeClass("tmp-abs");
        $('img.lck').css("width", "80px");

        $('img.lck').css("bottom", "2%");
    }else{
        $('.sixs').addClass("tmp-abs");
    }
    var iframefive = document.getElementById('five_acc');
    var player_five = new Vimeo.Player(iframefive);
    player_five.on('ended', function() {
        $(".uncheckfive").css("display", "none");
        $('.checkfive').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkfive').attr('checked',true);
        $('.howsmn').removeClass("ponter-evnt");
        $('.sixs').removeClass("tmp-abs");
        $('img.lck').css("width", "80px");

        $('img.lck').css("bottom", "2%");
        $("#collapsefive, #collapsesix").collapse('toggle');
        setCookie('where', 'yes', 365);
        play_auto_on_end('six_acc');
        // if ($(window).width() > 1260) {
        //     $('img.lck').css("bottom", "160px");
        // } else {
        //     $('img.lck').css("bottom", "25px");
        // }
        // $(window).resize(function() {
        //     if ($(window).width() > 1260) {
        //         $('img.lck').css("bottom", "160px");
        //     } else {
        //         $('img.lck').css("bottom", "25px");
        //     }
        // });
    });
    /* Start Acordian five js video end*/
    /*  ==================================== Start Acordian six js video start ==================================== */
    var howtab = getCookie('how');
    if (howtab == 'yes') {
        // if ($(window).width() > 1260) {
        //     $('img.lck').css("bottom", "160px");
        // } else {
        //     $('img.lck').css("bottom", "25px");
        // }
        // $(window).resize(function() {
        //     if ($(window).width() > 1260) {
        //         $('img.lck').css("bottom", "160px");
        //     } else {
        //         $('img.lck').css("bottom", "25px");
        //     }
        // });
        $(".unchecksix").css("display", "none");
        $('.checksix').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checksix').attr('checked',true);
        $('.whensmn').removeClass("ponter-evnt");
        $('.sevens').removeClass("tmp-abs");
        //$('img.lck').css("bottom","187px");
        $('img.lck').css("width", "40px");

        $('img.lck').css("bottom", "1%");
    }else{
        $('.sevens').addClass("tmp-abs");
    }
    var iframesix = document.getElementById('six_acc');
    var player_six = new Vimeo.Player(iframesix);
    player_six.on('ended', function() {
        $(".unchecksix").css("display", "none");
        $('.checksix').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checksix').attr('checked',true);
        $('.whensmn').removeClass("ponter-evnt");
        $('.sevens').removeClass("tmp-abs");
        //$('img.lck').css("bottom","187px");
        $('img.lck').css("width", "40px");

        $('img.lck').css("bottom", "1%");
        $("#collapsesix, #collapseseven").collapse('toggle');
        setCookie('how', 'yes', 365);
        play_auto_on_end('seven_acc');
    });
    /* Start Acordian six js video end*/
    /* ====================================  Start Acordian seven  js video start ==================================== */
    var whentab = getCookie('when');
    if (whentab == 'yes') {
        $(".uncheckseven").css("display", "none");
        $('.checkseven').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkseven').attr('checked',true);
        $('img.lck').css("display", "none");
        $('.eights').removeClass("tmp-abs");
    }else{
        $('.eights').addClass("tmp-abs");
    }
    var iframeseven = document.getElementById('seven_acc');
    var player_seven = new Vimeo.Player(iframeseven);
    player_seven.on('ended', function() {
        $(".uncheckseven").css("display", "none");
        $('.checkseven').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkseven').attr('checked',true);
        $('img.lck').css("display", "none");
        $('.eights').removeClass("tmp-abs");
        $("#collapseseven, #collapseeight").collapse('toggle');
        setCookie('when', 'yes', 365);
        
        // $('#expand').show();
        // $('#expand1').show();
        
        // setCookie('_expandall', 'yes', 365);
        
        play_auto_on_end('inn-one-acc');
    });
    /* ====================================  Start Acordian seven js video end  ==================================== */
    
    /* ====================================  Start Acordian eight  js video start ==================================== */
    var conc_tab = getCookie('conclusion');
    if (conc_tab == 'yes') {
        $(".uncheckeight").css("display", "none");
        $('.checkeight').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkeight').attr('checked',true);
        // $('img.lck').css("display", "none");
        // $('.eights').removeClass("tmp-abs");
    }
    var iframeeight = document.getElementById('eight_acc');
    var player_eight = new Vimeo.Player(iframeeight);
    player_eight.on('ended', function() {
        $(".uncheckeight").css("display", "none");
        $('.checkeight').html('<img id="theImg" src="assets/images/rgt.png" />');
        $('.checkeight').attr('checked',true);
        // $('img.lck').css("display", "none");
        // $('.eights').removeClass("tmp-abs");
        // $("#collapseeight, #collapseeight").collapse('toggle');
        setCookie('conclusion', 'yes', 365);
        
        $('#expand').show();
        $('#expand1').show();
        
        $('#expand2').show();
        
        $('#collapse2').hide();
        
        $('.show-mobile').addClass('show');
        
        $('#collapse3.show-mobile1').removeClass('show');
        $('#expand3.show-mobile1').addClass('show');
        
        setCookie('finish_all', 'yes', 365);
        
        setCookie('_expandall', 'yes', 365);

    });

    $(document).ready(function(){
        var _expandall = getCookie('_expandall');
        if (_expandall == 'yes') {
            $('#expand').show();
            $('#expand1').show();
            
            $('#expand2').show();
            $('#collapse2').hide();
            
            $('#expand3.show-mobile1').addClass('show');
            $('#collapse3').removeClass('show');
            $('.show-mobile').addClass('show');
        }
    })
    
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
    $('.one').on('click', function() {
        $('.fstfrm').addClass('fstfrm2');
    });
    $('.one').click(function() {
        $('.scnfrm').addClass('scnfrm2');
    });
});
$(".box-video").click(function() {
    $('iframe', this)[0].src += "&amp;autoplay=1";
    $(this).addClass('open');
});

function formcheck() {
    var fields = $(".ss-item-required").find("input").serializeArray();
    $.each(fields, function(i, field) {
        if (!field.value) alert(field.name + " is required");
    });
    // console.log(fields);
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
        $('.fstfrm').removeClass('fstfrm2');
    } else {
        var cookis_form = getCookie('form_data_submit');
        if (cookis_form == '') {
            $('.scnfrm').addClass('scnfrm2');
        }
        if (cookis_form == 'done') {
            $('.aftrfrm').css('display', 'block');
            $('.scnfrm').removeClass('scnfrm2');
        }
    }
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
    // 	  $('.scnfrm ').show();
    $('.scnfrm').addClass('scnfrm2');
}
$(document).ready(function() {
    $("#nxtpg").click(function() {
        $('.scnfrm').removeClass('scnfrm2');
        $('#loader1').removeClass('show');
        $('.scnfrm').hide();
        $('.scnfrm1').hide();
        play_auto_on_end('one_acc');
    });
});

function expandCollapse() {
    if ($(".submenu").css('display') == 'none') {
        $(".submenu").show("slow");
    } else {
        $(".submenu").hide("slow");
    }
}
//accordion-button collapsed
$(document).ready(function() {
    // $("#expand-collapse").click(function() {
    //     var counter = 0;
    //     var btunno = $(this).text();
    //     $("#accordionExample .accordion-item .accordion-collapse").each(function() {
    //         if (btunno != 'expand all') {
    //             $(this).addClass('show');
    //         }
    //         var ids = $(this).find('iframe').attr('id');
    //         const iframekb = document.getElementById(ids);
    //         playerkb = new Vimeo.Player(iframekb);
    //         playerkb.pause();
    //     });
    //     //accordion-button expand
    //     $(document).ready(function() {
    //         $("#expand-collapse").click(function() {
    //             var counter = 0;
    //             var btunno = $(this).text();
    //             $("#accordionExample .accordion-item .accordion-collapse").each(function() {
    //                 if (btunno == 'expand all') {
    //                     $("#accordionExample .accordion-item .accordion-collapse").each(function() {
    //                         $(this).removeClass('show');
    //                     });
    //                 }
    //                 if (btunno == 'expand all') {
    //                     $("#accordionExample .accordion-item .accordion-collapse").each(function() {
    //                         $(this).removeClass('show');
    //                     });
    //                 }
    //                 var ids = $(this).find('iframe').attr('id');
    //                 const iframekb = document.getElementById(ids);
    //                 playerkb = new Vimeo.Player(iframekb);
    //                 playerkb.pause();
    //             });
    //         });
    //     });
    // });
});
//accordion-button expand
$(document).ready(function() {
    $("#expand").click(function() {
        var counter = 0;
        var btunno = $(this).text();
        $("#accordionExample .accordion-item .accordion-collapse").each(function() {
            $(this).addClass('show');
            var ids = $(this).find('iframe').attr('id');
            const iframekb = document.getElementById(ids);
            playerkb = new Vimeo.Player(iframekb);
            playerkb.pause();
            
            /**Temp Test expand/collapse**/
            // $("#accordionExample .accordion-item .accordion-collapse").each(function() {
            //     $(this).removeClass('show');
            // });
        });
    });
});
// =======================inner acodian custo   ==========================  
$('.accordion__header').click(function(e) {
    e.preventDefault();
    $(this).parent('.accordion-inr').find('> *').removeClass('is-active');
    var currentIsActive = $(this).hasClass('is-active');
    
    if (currentIsActive != 1) {
        $(this).addClass('is-active');
        $(this).next('.accordion__body').addClass('is-active');
    }
    else{
        
        // $(this).addClass('is-active');
        // $('#'+$(this).attr('data-attr')).addClass('is-active');
    }
    
    
});
// =======================inner acodian custo end  ==========================  
// =======================light dark mode  ==========================  
function myFunction() {
    var element = document.body;
    element.classList.toggle("light-mode");
    var image = document.getElementById('myImg');
    if (image.src.match("images/darkimg.png")) {
        image.src = "images/new-moon.png";
        $('.brand-logo').attr("src", "assets/images/blulogo.png");
        
        $('#expand2,#expand3').attr("src", "assets/images/dark-expand.png");
        $('#collapse2,#collapse3').attr("src", "assets/images/dark-collapse.png");
        //  =======================light dark mode border form change ==========================  
        $(' #nav-contact-tab').click(function() {
            $('button#nav-home-tab').css('border-left', '1px solid #060a25');
            $('button#nav-home-tab').css('border-right', '1px solid #060a25');
            $('button#nav-profile-tab').css('border-right', '0px');
        });
        $('#nav-profile-tab').click(function() {
            $('button#nav-home-tab').css('border-left', '1px solid #060a25');
            $('button#nav-home-tab').css('border-right', '0px');
        });
        $(' #nav-home-tab').click(function() {
            $('button#nav-profile-tab').css('border-right', '1px solid #060a25');
        });
        $(' #pills-profile-tab').click(function() {
            $('button#pills-home-tab').css('border-right', '0px');
        });
        // =======================light dark mode border form change  ==========================  
    } else {
        image.src = "images/darkimg.png";
        $('.brand-logo').attr("src", "assets/images/whtlogo.png");
        
        $('#expand2,#expand3').attr("src", "assets/images/expand.png");
        $('#collapse2,#collapse3').attr("src", "assets/images/collapse.png");
        
        $('#nav-contact-tab').click(function() {
            $('button#nav-home-tab').css('border-left', '1px solid #fff');
            $('button#nav-home-tab').css('border-right', '1px solid #fff');
            $('button#nav-profile-tab').css('border-right', '0px');
        });
        $('#nav-profile-tab').click(function() {
            $('button#nav-home-tab').css('border-left', '1px solid #fff');
            $('button#nav-home-tab').css('border-right', '0px');
        });
        $('#nav-home-tab').click(function() {
            $('button#nav-profile-tab').css('border-right', '1px solid #fff');
            //$('button#nav-home-tab').css('border-right','0px');
        });
        $('#pills-profile-tab').click(function() {
            $('button#pills-home-tab').css('border-right', '0px');
        });
    }
}
// =======================light dark mode  ========================== 



//  $("button").click(function(){
// 	alert($("p").hasClass("intro"));
//   });
// =======================light dark mode check image toggle  ==========================  
$(document).ready(function() {
    var flag = 0;
    $(".drkimg").click(function() {
        if (flag == 0) {
            $(".your-image img").attr("src", "assets/images/rgt-light.png");
            flag = 1;
        } else if (flag == 1) {
            $(".your-image img").attr("src", "assets/images/rgt.png");
            flag = 0;
        }
    });
});
// =======================light dark mode check image toggle  ==========================  
//.accordion-button::after
$(document).ready(function() {
    var flag2 = 0;
    $(".drkimg").click(function() {
        if (flag2 == 0) {
            $('.accordion-button').addClass('loaded');
            $('.accordion__toggle').addClass('loaded');
            $(".inrtgl").removeClass("loaded");
            flag2 = 1;
        } else if (flag2 == 1) {
            $('.accordion-button').removeClass('loaded');
            $('.accordion__toggle').removeClass('loaded');
            $(".inrtgl").removeClass("loaded");
            flag2 = 0;
        }
    });
});
// =======================accodian sub title  ========================== 
/* $(".accordion__header").click(function(){
	if ($('.accordion__header ').hasClass('is-active')){
	alert('yes');
	playerkb.play();
	} else {
		alert('no');


		
		{
			playerkb.pause();
		}
	}
  });*/
$('#headingeight').click(function() {
    if ($('#collapseeight').hasClass('show')) {
        $(".accordion-inr .accordion__body").each(function(i) {
            if ($(this).hasClass('is-active')) {
                //console.log('Active_child');
                var ids = $(this).find('iframe').attr('id');
                const iframekb = document.getElementById(ids);
                playerkb = new Vimeo.Player(iframekb);
                playerkb.play();
            } else {
                //console.log('DEactive_child');
                var ids = $(this).find('iframe').attr('id');
                
                if(ids){
                    const iframekb = document.getElementById(ids);
                    playerkb = new Vimeo.Player(iframekb);
                    playerkb.pause();
                }
                
            }
        });
    } else {
        $(".accordion-inr .accordion__body").each(function(i) {
            //console.log('DEactive_child');
            var ids = $(this).find('iframe').attr('id');
            
            
            if(ids !== undefined){
                const iframekb = document.getElementById(ids);
                playerkb = new Vimeo.Player(iframekb);
                playerkb.pause();
            }
            
        });
    }
});
$('.accordion__header').click(function() {
    $(".accordion-inr .accordion__body").each(function(i) {
        if ($(this).hasClass('is-active')) {
            // console.log('Active_child');
            var ids = $(this).find('iframe').attr('id');
            
            if(ids !== undefined){
                const iframekb = document.getElementById(ids);
                playerkb = new Vimeo.Player(iframekb);
                playerkb.play();
            }
            
        } else {
            //console.log('DEactive_child');
            //	$(this).children('iframe').pause();
            var ids = $(this).find('iframe').attr('id');
            if(ids){
                const iframekb = document.getElementById(ids);
                playerkb = new Vimeo.Player(iframekb);
                playerkb.pause();
            }
            
        }
    });
});
$('#nav-contact-tab').click(function() {
    $('button#nav-home-tab').css('border-left', '1px solid #fff');
    $('button#nav-home-tab').css('border-right', '1px solid #fff');
    $('button#nav-profile-tab').css('border-right', '0px');
});
$('#nav-profile-tab').click(function() {
    $('button#nav-home-tab').css('border-left', '1px solid #fff');
    $('button#nav-home-tab').css('border-right', '0px');
});
$('#nav-home-tab').click(function() {
    $('button#nav-profile-tab').css('border-right', '1px solid #fff');
    //$('button#nav-home-tab').css('border-right','0px');
});
$('#pills-profile-tab').click(function() {
    $('button#pills-home-tab').css('border-right', '0px');
});

function expand_all(){
    
    // console.log('hh');
    // collapse_all();
    
    // setTimeout(function() { // allowing 3 secs to fade out loader
        $('.accordion-button').removeClass('collapsed');
        $('.accordion-collapse').addClass('show');
    // }, 300);
    
    $('#expand').hide();
    $('#collapse').show();
    
    $('#expand1').hide();
    $('#collapse1').show();
    
    $('.show-mobile').addClass('show');
    
    $('#expand2').hide();
    $('#collapse2').show();
    
    $('#collapse3.show-mobile1').addClass('show');
    $('#expand3').removeClass('show');
}

function collapse_all(){
    $('.accordion-button').addClass('collapsed');
    $('.accordion-collapse').removeClass('show');
    
    $('#expand').show();
    $('#collapse').hide();
    
    $('#expand1').show();
    $('#collapse1').hide();
    
    $('.show-mobile').addClass('show');
    $('#expand2').show();
    $('#collapse2').hide();
    
    $('#collapse3.show-mobile1').removeClass('show');
    $('#expand3.show-mobile1').addClass('show');
    
    // setTimeout(function() { // allowing 3 secs to fade out loader
    //     $('.accordion-button').toggleClass('collapsed');
    //     $('.accordion-collapse').toggleClass('show');
    // }, 300);
}

$('.dfh').click(function(){
    
    var ck = getCookie('conclusion');
    if(ck == 'yes'){
        setTimeout(function() { // allowing 3 secs to fade out loader
            check_exp();
        }, 800);
    }
    
    
})

function check_exp(){
    let num = $('.df').length;
    let num1 = $('.df.show').length;

    console.log(num);
    console.log(num1);
    if(num == num1){
        $('#expand').hide();
        $('#collapse').show();
        
        $('#expand1').hide();
        $('#collapse1').show();
        
        $('.show-mobile').addClass('show');
        $('#expand2').hide();
        $('#collapse2').show();
        
        $('#expand3.show-mobile1').removeClass('show');
        $('#collapse3.show-mobile1').addClass('show');
    }
    else if(num1 == 0){
        $('#expand').show();
        $('#collapse').hide();
        
        $('#expand1').show();
        $('#collapse1').hide();
        
        $('.show-mobile').addClass('show');
        $('#expand2').show();
        $('#collapse2').hide();
        
        $('#collapse3.show-mobile1').removeClass('show');
        $('#expand3.show-mobile1').addClass('show');
    }
}

function expand_all1(){
    collapse_all1();
    
    setTimeout(function() { // allowing 3 secs to fade out loader
        $('.accordion__header').toggleClass('is-active');
        $('.accordion__body').toggleClass('is-active');
    }, 300);
    
    $('#expand2').hide();
    $('#collapse2').show();
    
    $('#expand3').removeClass('show');
    $('#collapse3').show();
}

function collapse_all1(){
    $('.accordion__header').removeClass('is-active');
    $('.accordion__body').removeClass('is-active');
    
    $('#expand2').show();
    $('#collapse2').hide();
    
    $('#expand3').show();
    $('#collapse3').removeClass('show');
    
    // setTimeout(function() { // allowing 3 secs to fade out loader
    //     $('.accordion-button').toggleClass('collapsed');
    //     $('.accordion-collapse').toggleClass('show');
    // }, 300);
}
/* Delete 99%
$('.sch').click(function(){
    check_exp();
})

function check_exp(){
    let num2 = $('.scb').length;
    let num3 = $('.scb.is-active').length;

    // console.log(num);
    // console.log(num1);
    if(num2 == num3){
        $('#expand2').hide();
        $('#collapse2').show();
        
        $('#expand3').removeClass('show');
        $('#collapse3').show();
    }
    else if(num3 == 0){
        $('#expand2').show();
        $('#collapse2').hide();
        
        $('#expand3').show();
        $('#collapse3').removeClass('show');
    }
}

*/
$('.join-btn').click(function(){
    $('.scnfrm').show();
})



//start

    $( window ).on("load", function() {
        // $('.dark-section img').attr('src', 'assets/images/sigefa-dark.gif');
        // $('.light-section img').attr('src', 'assets/images/sigefa-light.gif');
    });

	var playerkb;
	
// 	var myFullpage = new fullpage('#fullpage', {
//         sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
//           scrollBar: true

//     });

    function myFunction() {
	    var element = document.body;
	    element.classList.toggle("light-mode");
	    var image = document.getElementById('myImg');
	    if (image.src.match("assets/images/darkimg.png")) {
	        image.src = "assets/images/lightimg.png";
	        $('.brand-logo').attr("src", "assets/images/blulogo.png");
	        
	        $('#expand2,#expand3').attr("src", "assets/images/dark-expand.png");
	        $('#collapse2,#collapse3').attr("src", "assets/images/dark-collapse.png");
	        //  =======================light dark mode border form change ==========================  
	        $(' #nav-contact-tab').click(function() {
	            $('button#nav-home-tab').css('border-left', '1px solid #060a25');
	            $('button#nav-home-tab').css('border-right', '1px solid #060a25');
	            $('button#nav-profile-tab').css('border-right', '0px');
	        });
	        $('#nav-profile-tab').click(function() {
	            $('button#nav-home-tab').css('border-left', '1px solid #060a25');
	            $('button#nav-home-tab').css('border-right', '0px');
	        });
	        $(' #nav-home-tab').click(function() {
	            $('button#nav-profile-tab').css('border-right', '1px solid #060a25');
	        });
	        $(' #pills-profile-tab').click(function() {
	            $('button#pills-home-tab').css('border-right', '0px');
	        });
	        // =======================light dark mode border form change  ==========================  
	    } else {
	        image.src = "assets/images/darkimg.png";
	        $('.brand-logo').attr("src", "assets/images/whtlogo.png");
	        
	        $('#expand2,#expand3').attr("src", "assets/images/expand.png");
	        $('#collapse2,#collapse3').attr("src", "assets/images/collapse.png");
	        
	        $('#nav-contact-tab').click(function() {
	            $('button#nav-home-tab').css('border-left', '1px solid #fff');
	            $('button#nav-home-tab').css('border-right', '1px solid #fff');
	            $('button#nav-profile-tab').css('border-right', '0px');
	        });
	        $('#nav-profile-tab').click(function() {
	            $('button#nav-home-tab').css('border-left', '1px solid #fff');
	            $('button#nav-home-tab').css('border-right', '0px');
	        });
	        $('#nav-home-tab').click(function() {
	            $('button#nav-profile-tab').css('border-right', '1px solid #fff');
	            //$('button#nav-home-tab').css('border-right','0px');
	        });
	        $('#pills-profile-tab').click(function() {
	            $('button#pills-home-tab').css('border-right', '0px');
	        });
	    }
	}
	
	$("body").mousemove(function (t) {
    	
    });

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
	$(document).ready(function() {
		resize_window()

		var nlsubs = getCookie('nl_subs');
    
	    if(nlsubs == 'done'){
	        $('#nl-subs').show();
	        $('#nls-subs').addClass('d-none');
	    }else{
	        $('#nls-subs').removeClass('d-none');
	        $('#nl-subs').hide();
	    }

	    $(window).on('resize', function () {
			    
		    let x = message_window()
		
		    $('#sh_message.show').css('height','calc(100vh - '+ x +'px)');
		
			resize_window()
			
		})

	});

	function resize_window(){
		let header_height = $('header').innerHeight();
	    let footer_height = $('footer').innerHeight();
	    
	    let total = header_height + footer_height;

	    $('.midle').css('min-height','calc(100vh - '+total+'px)')
	}
	
	function message_window(){
	    let header_height = $('header').innerHeight();
		let footer_height = $('footer').innerHeight();
		
		let slide_header = $('.dark-bg').innerHeight();

		let total = header_height + footer_height + slide_header;
		
		return total
	}
	
	function slides_resize(){
        var header_height = $('header').innerHeight();
        var footer_height = $('footer').innerHeight();
        
        var total = header_height + footer_height;
        
        $('#cf-slide-form').css('height', 'calc(100vh - '+total+'px)');
        
        $('#slide-legalese').css('height', 'calc(100vh - '+total+'px)');
        
        $('#cf-feedback-form').css('height', 'calc(100vh - '+total+'px)');
        
        $('#cf-slide-form').css('top', header_height+'px');
        
        $('#slide-legalese').css('top', header_height+'px');
        
        $('#cf-feedback-form').css('top', header_height+'px');
        
        
        if($('header').hasClass('p-fixed')){
            $('header').removeClass('p-fixed');
            $('footer').removeClass('p-fixed');
            
            $('.midle').css('top','0px');
        }else{
            
            setTimeout(function() {    
    	        $('header').addClass('p-fixed');
                $('footer').addClass('p-fixed');
            
                $('.midle').css('top',header_height+'px');
    	    }, 1000);
            
        }
        if(getCookie('how') != '' && getCookie('welcome') != '' && getCookie('who') != '' && getCookie('why') != '' && getCookie('what') != '' && getCookie('where') != '' && getCookie('when') != '' && getCookie('conclusion') != ''){
        $('img.lck').addClass("d-none");
    }else{
        $('img.lck').removeClass("d-none");
    }
    }
    
    function removefix(){
        $('header').removeClass('p-fixed');
        $('footer').removeClass('p-fixed');
        
        $('.midle').css('top','0px');
    }

	function open_slidein(){
	    slides_resize();
	    
	    $('#cf-feedback-form').removeClass('show');
	    $('#slide-legalese').removeClass('show');
	    $('#cf-slide-form').toggleClass('show');
	    var hh = message_window();
		var sh = $('.dark-bg').innerHeight();
		
		var rr = hh - sh;
		$('#cf-slide-form').css('min-height','calc(100vh - '+rr+'px)');
	    
	    $('#step-1 input[name="fname"]').focus();
	    
	    navigateToFormStep('1');
	    $('.step-curr').html('1');
	    
	    if(playerkb){
		    playerkb.pause();
		}
	}

	function close_slidein(){
	    removefix();
	    $('#cf-slide-form').removeClass('show');
	    $('.twostepform').removeClass('d-none');
	    
	    $('html, body').animate({
            scrollTop: $("header").offset().top
        }, 0);
	}

	$('#cf_modal').on('submit', function(e){
	    e.preventDefault();
	    
	    $('#cf_modal')[0].reset();
	    $('#sh_message').addClass('show');
			
		let x = message_window()
		
		$('#sh_message.show').css('height','calc(100vh - '+ x +'px)');
	    $('#cf_message').html('<h4>Thank You!<br>Your message has been sent.<br>We will get back to you as soon as possible.</h4>');
	    if($("#newslt1").prop('checked') == true){
	        setCookie('nl_subs', 'done', 365);

	        setTimeout(function() { // allowing x secs to fade out loader
	            $('#nl-subs').show();
	            $('#nls-subs').addClass('d-none')
	        }, 1000);
	    }
	    
	    setTimeout(function() { // allowing x secs to fade out loader
            // window.location.href = "startpage"
        }, 2000);
	    
	    $('#cf_modal').addClass('d-none');
	})

	$('button.close').click(function(){
	    removefix();
	    setTimeout(function() {
	        $('#cf_message').html('');
	        $('#cf_modal').removeClass('d-none');
	        $('#sh_message').removeClass('show');
			$('#sh_message').css('height','0');
	    }, 1500);
	})

	$('#newslt1').click(function() {
	    // var $newslt = $('.list-sort');
	    if ($(this).attr('checked')) {
	        $(this).removeAttr('checked');
	    } else {
	        $(this).attr('checked', true);
	    }
	});
	
	function open_legalese(){
	    slides_resize();
	    $('#cf-slide-form').removeClass('show');
	    $('#cf-feedback-form').removeClass('show');
	    $('#slide-legalese').toggleClass('show');
	   // $('#slide-legalese').css('height','100%');
	    
	    var hh = message_window();
		var sh = $('.dark-bg').innerHeight();
		
		var rr = hh - sh;
		$('#slide-legalese').css('min-height','calc(100vh - '+rr+'px)');
	    
	    let header_height = $('header').innerHeight();
		let footer_height = $('footer').innerHeight();

		let total = header_height + footer_height;
	    
	    $('#slide-legalese .l-height').css('height','calc(100vh - '+total+'px - 100px)')
	    
	    if(playerkb){
		    playerkb.pause();
		}
	}
	
	function close_legalese(){
    	$('#slide-legalese').removeClass('show');
    	removefix();
    	$('html, body').animate({
            scrollTop: $("header").offset().top
        }, 0);
    }
    
    function open_feedback(){
        slides_resize();
            
        $('#cf-slide-form').removeClass('show');
        $('#slide-legalese').removeClass('show');
        
        $('#cf-feedback-form').toggleClass('show');
        // $('#slide-legalese').css('height','100%');
        
        var hh = message_window();
        var sh = $('.dark-bg').innerHeight();
        
        var rr = hh - sh;
        $('#cf-feedback-form').css('height','calc(100vh - '+rr+'px)');
        
        let header_height = $('header').innerHeight();
        let footer_height = $('footer').innerHeight();
        
        let total = header_height + footer_height;
        
        $('#cf-feedback-form #feedbackform').css('height','calc(100vh - '+total+'px - 218px)')
        
        if(playerkb){
            playerkb.pause();
        }
    }

    function close_feedback(){
        $('#cf-feedback-form').removeClass('show');
        removefix()
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
     $('#step-'+stepNumber).find('input,textarea').each(function(){
        if(tp == '1'){
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
    }else{
        $('#other_use_time').addClass('d-none');
        
        $("input[name='other']").attr('disabled',true);
    }
});

$('.btn-navigate-form-step').click(function(){
    const stepNumber = $(this).attr("step_number");
    
    const step_navigate = $(this).attr("step_navigate");
    
    if(step_navigate == "next"){
        const prev_step = stepNumber - 1;
        var cont = true;
        // console.log($(section).attr('id'))
        $('#step-'+prev_step).find('input,textarea').each(function(){
            if($(this).prop('required')){
                if($(this).val() == '' || $(this).val() == null){
                    $(this).addClass('border-danger');
                    $(this).focus();
                    cont = false;
                    return false;
                }else{
                    $(this).removeClass('border-danger');
                }
            }else{
                // console.log("NR")
                $(this).removeClass('border-danger');
                navigateToFormStep(stepNumber);
            }
        });
        
        
        if($('#step-'+prev_step+' input[name="use_time"]').length > 0){
            if($("input[name='use_time']:checked").val() != '' && $("input[name='use_time']:checked").val() != undefined)
            {
                cont = true;
                if($("input[name='use_time']:checked").val() == 'other'){
                    if($("input[name='other']").val() == ''){
                        $('#step-form-messsage').html('Please fill in the required(<span style="color:red">*</span>) fields');
                        navigateToFormStep(prev_step);
                        return false;
                    }else{
                        $('#step-form-messsage').html('');
                        navigateToFormStep(stepNumber);
                    }
                }
                navigateToFormStep(stepNumber);
                
            }
            else
            {
                cont = false;
            }
        }
        
        if (cont === false) {
            $('#step-form-messsage').html('Please fill in the required(<span style="color:red">*</span>) fields');
            navigateToFormStep(prev_step);
            return false;
        }
        
        $('#step-'+prev_step).find('input[type="email"]').each(function(){
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            
            var inputText = $(this).val();

            if(inputText.match(mailformat))
            {
                $(this).removeClass('border-danger');
                navigateToFormStep(stepNumber);
            }
            else
            {
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
        
        if($('#step-'+prev_step+' input[type="checkbox"]').length > 0){
            
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
        
        
        
    }else{
        $('#step-form-messsage').html('');
        navigateToFormStep(stepNumber);
    }
    
    
    $('.step-curr').html(stepNumber);
})


$(document).ready(function() {
  $("#ContactForm").keydown(function(event){
    if(event.keyCode == 13) {
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


$('#ContactForm').on('submit', function(e){
    e.preventDefault();
    
    var formValues = $(this).serialize();
    $.post('/saveData.php', formValues,
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
        
        $('.twostepform').addClass('d-none');
    });
})

$('button.close').click(function(){
    removefix();
    setTimeout(function() {
        $('#cf_message').html('');
        $('#multi-step-form-container').removeClass('d-none');
        $('#sh_message').removeClass('show');
		$('#sh_message').css('height','0');
    }, 1500);
})


$(':input[required]').on('invalid', function(e){
    alert("Error, please check all required fields before submitting.");
});
/* Stepper Form */


$("#ar-cl").click(function() {
    $('html, body').animate({
        scrollTop: $("header").offset().top
    }, 2000);
});

$(document).ready(function(){
    setTimeout(function() {
        $('html, body').animate({
            scrollTop: $("header").offset().top
        }, 2000);
    }, 6000);
})

$(function() {
    var overlay = $();
    overlay.show();
    overlay.appendTo(document.body);
    $('.popup').show();
    $('.close').click(function() {
        // $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
    });
    $('.x').click(function() {
        $('.popup').hide();
        overlay.appendTo(document.body).remove();
        return false;
    });
});

$('#ContactFormOPT').on('submit', function(e){
    e.preventDefault();
    
    $('#ContactForm')[0].reset();
    
    $('#loader1').removeClass('show');
    
    $('#sh_message').addClass('show');
            
    let x = message_window()
    
    $('#sh_message.show').css('height','calc(100vh - '+ x +'px)');
    $('#cf_message').html('<h4>Thank You!<br>Your message has been sent.<br>We will get back to you as soon as possible.</h4>');
    
    if($("#newslt1").prop('checked') == true){
        

        setCookie('nl_subs', 'done', 365);
        
        setTimeout(function() { // allowing x secs to fade out loader
            $('#nl-subs').show();
            $('#nls-subs').addClass('d-none')
        }, 1000);
        ;
    }
    
    
    $('#cf_modal').addClass('d-none');
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
    }).done(function (data) {
      console.log(data);
      if (data.success) {
        //$('#double_email').attr( 'step_number','3');
        $('#cf-slide-form11').toggleClass('show');
        $('#loader1').toggleClass('show');
      } else {
        $('#double_email').attr( 'step_number','3');
      }
    });
} 

function close_loader1(){
    $('#loader1').removeClass('show');
    //$('#double_email').attr( 'step_number','3');
}
function open_action1(){

    $('#cf-slide-form1').addClass('show');
}
function close_slidein1(){
    $('#cf-slide-form1').removeClass('show');
}


</script>
</body>
</html>