<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
</head>

<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

/* GENERAL RESETS */
* {
    margin: 0;
    padding: 0;
}
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}
a {
    color: #666;
    text-decoration: none;
}
a:hover {
    color: #4FDA8C;
}

/* BODY */
body {
    position: relative;
    color: #666;
    font: 16px/26px "Raleway", sans-serif;
    text-align: center;
    height: 100%;
    background: -moz-linear-gradient(270deg, rgba(34,46,64,1) 0%, rgba(81,195,184,1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(34,46,64,1)), color-stop(100%, rgba(81,195,184,1)));
    background: -webkit-linear-gradient(270deg, rgba(34,46,64,1) 0%, rgba(81,195,184,1) 100%);
    background: linear-gradient(180deg, rgba(34,46,64,1) 0%, rgba(81,195,184,1) 100%);
    overflow:hidden;
}

/* BUTTON */
a.button {
    position: absolute;
    left: 20px;
    top: 20px;
    height: auto;
    padding: .8rem 1.0rem;
    font-size: .8rem;
    line-height: normal;
    text-transform: uppercase;
    font-family: 'Proxima Nova', sans-serif;
    font-weight: 700;
    letter-spacing: 0;
    border-radius: 0;
    border: 1px solid #2D515C;
    text-decoration: none;
    color: #fff;
    background-color: transparent;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
a.button:hover {
    border-color: #2D515C;
    color: #fff;
    padding: 1.0rem 3.2rem;
}
@media only screen and (min-width: 22em) {
    a.button {
        padding: 1.0rem 2.8rem;
        font-size: 1.0rem;
    }
}

/* LOGIN */
.login {
    margin: 0;
    width: 100%;
    height: 100%;
    min-height: 100vh;
}

/* WRAP */
.wrap {
    position: static;
    margin: auto;
    width: 100%;
    height: auto;
    overflow: hidden;
}
.wrap:after {
  content: "";
  display: table;
  clear: both;
}

/* LOGO */
.logo {
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    width: 40px;
    height: 40px;
    background: #4FC1B7;
}
.logo img {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 30px;
}
.logo a {
    width: 100%;
    height: 100%;
    display: block;
}

/* USER (FORM WRAPPER) */
.user {
    position: relative;
    z-index: 0;
    float: none;
    margin: 0 auto;
    padding-top: 40px;
    width: 100%;
    height: 100vh;
    overflow: auto;
    background: -moz-linear-gradient(48deg, rgba(42,46,54,1) 0%, rgba(97,107,125,1) 100%);
    background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(42,46,54,1)), color-stop(100%, rgba(97,107,125,1)));
    background: -webkit-linear-gradient(48deg, rgba(42,46,54,1) 0%, rgba(97,107,125,1) 100%);
    background: linear-gradient(42deg, rgba(42,46,54,1) 0%, rgba(97,107,125,1) 100%);
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    border-top: 1px solid #4FC1B7;
}
.user .actions {
    margin: 1em 0 0;
    padding-right: 10px;
    width: 100%;
    display: block;
    text-align: center;
}
.user .actions a {
    margin: 1em 0;
    width: 90px;
    display: inline-block;
    padding: .2em 0em;
    background-color: #5C6576;
    border: none;
    color: #999;
    cursor: pointer;
    text-align: center;
    font-size: .8em;
    border-radius: 30px 0 0 30px;
    -webkit-box-shadow: 0px 0px 27px -9px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 27px -9px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 27px -9px rgba(0,0,0,0.75);
}
.user .actions a:last-child {
    color: #fff;
    border-radius: 0 30px 30px 0;
    background-color: #28A55F;
    background: -moz-linear-gradient(270deg, rgba(105,221,201,1) 0%, rgba(78,193,182,1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(105,221,201,1)), color-stop(100%, rgba(78,193,182,1)));
    background: -webkit-linear-gradient(270deg, rgba(105,221,201,1) 0%, rgba(78,193,182,1) 100%);
    background: linear-gradient(180deg, rgba(105,221,201,1) 0%, rgba(78,193,182,1) 100%);
}

/* TERMS */
@keyframes show_terms {
    0% {
        opacity: 0;
        -webkit-transform: translateY(-110%);
        -moz-transform: translateY(-110%);
        -o-transform: translateY(-110%);
        transform: translateY(-110%);
    }
    100% {
        opacity: 1;
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
    }
}
@keyframes hide_terms {
    0% {
        -webkit-transform: translateY(0);
        -moz-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        opacity: 1;
    }
    100% {
        -webkit-transform: translateY(-110%);
        -moz-transform: translateY(-110%);
        -o-transform: translateY(-110%);
        transform: translateY(-110%);
        opacity: 0;
    }
}
.terms, .recovery {
    position: absolute;
    z-index: 3;
    margin: 40px 0 0;
    padding: 1.5em 1em;
    width: 100%;
    height: calc(100% - 40px);
    border-radius: 0;
    background: #fff;
    text-align: left;
    overflow: auto;
    will-change: transform;
    -webkit-transform: translateY(-110%);
    -moz-transform: translateY(-110%);
    -o-transform: translateY(-110%);
    transform: translateY(-110%);
    opacity: 0;
    border-radius: 0;
}
.terms.open, .recovery.open {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    animation: show_terms .5s .2s 1 ease normal forwards;
}
.terms.closed, .recovery.closed {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
    opacity: 1;
    animation: hide_terms .6s .2s 1 ease normal forwards;
}
.terms p, .recovery p {
    margin: 1em 0;
    font-size: .9em;

}
.terms h3, .recovery h3 {
    margin: 2em 0 .2em;
}
.terms p.small {
    margin: 0 0 1.5em;
    font-size: .8em;
}

.recovery form .input {
    margin: 0 0 .8em 0;
    padding: .8em 2em 10px 0;
    width: 100%;
    display: inline-block;
    background: transparent;
    border: 0;
    border-bottom: 1px solid #5A6374;
    outline: 0;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    color: #666;
}
.recovery form .button {
    margin: 1em 0;
    padding: .2em 3em;
    width: auto;
    display: block;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    font-size: .8em;
    border-radius: 0px;
    background: rgba(62,181,169,1) 0%;
}
.form-wrap form .button:hover {
    background-color: #4FDA8C;
}
.recovery p.mssg {
    opacity: 0;
    -webkit-transition: opacity 1s .5s ease;
    -moz-transition: opacity 1s .5s ease;
    -o-transition: opacity 1s .5s ease;
    transition: opacity 1s .5s ease;
}
.recovery p.mssg.animate {
    opacity: 1;
}

/* CONTENT */
.content {
    position: fixed;
    z-index: 1;
    float: none;
    margin: 0 auto;
    width: 100%;
    height: 40px;
    background: -moz-linear-gradient(90deg, rgba(62,181,169,1) 0%, rgba(111,226,204,1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(111,226,204,1)), color-stop(100%, rgba(62,181,169,1)));
    background: -webkit-linear-gradient(90deg, rgba(62,181,169,1) 0%, rgba(111,226,204,1) 100%);
    background: linear-gradient(0deg, rgba(62,181,169,1) 0%, rgba(111,226,204,1) 100%);
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    overflow: hidden;
}

/* TOGGLE */
#toggle-wrap {
    position: absolute;
    z-index: 4;
    top: 40px;
    right: 17px;
    width: 80px;
    height: 1px;
}
#toggle-terms span {
  background: #fff;
  border-radius: 0;
}
/* TOGGLE TERMS */
#toggle-terms {
    position: absolute;
    z-index: 4;
    right: 0;
    top: 0;
    width: 40px;
    height: 40px;
    margin: auto;
    display: block;
    cursor: pointer;
    background: rgba(0, 0, 0, 0.1);
    border-radius: 100%;
    opacity: 0;
    -webkit-transform: translate(-6px, 20px);
    -moz-transform: translate(-6px, 20px);
    -o-transform: translate(-6px, 20px);
    transform: translate(-6px, 20px);
}
/* CIRCLE EFFECT */
#toggle-terms:after {
    position: absolute;
    width: 100%;
    height: 100%;
    pointer-events: none;
    border-radius: 50%;
    content: '';
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
}
#toggle-terms:before {
    speak: none;
    display: block;
    -webkit-font-smoothing: antialiased;
}
#toggle-terms {
    box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.2);
    -webkit-transition: color 0.3s ease;
    -moz-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    transition: color 0.3s ease;
}
#toggle-terms:after {
    top: 0px;
    left: 0px;
    padding: 0;
    z-index: -1;
    background: rgba(0, 0, 0, 0.2);
    -webkit-transition: -webkit-transform 0.2s, opacity 0.3s;
    -moz-transition: -moz-transform 0.2s, opacity 0.3s;
    -o-transition: -o-transform 0.2s, opacity 0.3s;
    transition: transform 0.2s, opacity 0.3s;
}
#toggle-terms.closed {
    color: rgba(0, 0, 0, 0.2);
}
#toggle-terms.closed:after {
    -webkit-transform: scale(1.6);
    -moz-transform: scale(1.6);
    -ms-transform: scale(1.6);
    transform: scale(1.6);
    opacity: 0;
}

/* CLOSE ANIMATION*/
@keyframes show_close {
    0% {
        opacity: 0;
        -webkit-transform: translate(-6px, -100px);
        -moz-transform: translate(-6px, -100px);
        -o-transform: translate(-6px, -100px);
        transform: translate(-6px, -100px);
    }
    100% {
        opacity: 1;
        -webkit-transform: translate(-6px, 20px);
        -moz-transform: translate(-6px, 20px);
        -o-transform: translate(-6px, 20px);
        transform: translate(-6px, 20px);
    }
}
@keyframes hide_close {
    0% {
        opacity: 1;
    }
    100% {
        opacity: 0;
    }
}
#toggle-terms.open {
    animation: show_close .4s .5s 1 ease normal forwards;
}
#toggle-terms.closed {
    animation: hide_close .2s .0s 1 ease normal forwards;
}
#toggle-terms:hover {
    background: rgba(0, 0, 0, 0.4);
}

/* TOGGLE TERMS CROSS */
#toggle-terms #cross {
    position: absolute;
    z-index: 4;
    height: 100%;
    width: 100%;
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
}
#toggle-terms.open #cross {
    -webkit-transition-delay: .9s;
    -moz-transition-delay: .9s;
    -o-transition-delay: .9s;
    transition-delay: .9s;
    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -o-transition-duration: .2s;
    transition-duration: .2s;
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
}
#toggle-terms.open #cross span {
    position: absolute;
    z-index: 4;
    -webkit-transition-delay: 0s;
    -moz-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transition-duration: 0s;
    -moz-transition-duration: 0s;
    -o-transition-duration: 0s;
    transition-duration: 0s;
}
#toggle-terms.open #cross span:nth-child(1) {
    top: 15%;
    left: 19px;
    height: 70%;
    width: 1px;
}
#toggle-terms.open #cross span:nth-child(2) {
    left: 15%;
    top: 19px;
    width: 70%;
    height: 1px;
}
#toggle-terms #cross span:nth-child(1) {
    height: 0;
    -webkit-transition-delay: .625s;
    -moz-transition-delay: .625s;
    -o-transition-delay: .625s;
    transition-delay: .625s;
}
#toggle-terms #cross span:nth-child(2) {
    width: 0;
    -webkit-transition-delay: .375s;
    -moz-transition-delay: .375s;
    -o-transition-delay: .375s;
    transition-delay: .375s;
}

/* SLIDESHOW */
#slideshow {
    position: relative;
    margin: 0 auto;
    width: 100%;
    height: 100%;
    padding: 10px;
    border-radius: 10px 0 0 10px;
}
#slideshow h2 {
    margin: .0em auto .0em auto;
    text-align: center;
    font-size: 1.4em;
    color: #fff;
    line-height: .5em;
}
#slideshow p {
  color: #fff;
  display: none;
}
#slideshow div {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 1em 3em;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
#slideshow .one {
    background-image: url("http://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/dots.png");
    background-repeat: no-repeat;
    background-position: 0% 50%;
}
#slideshow .two {
    background-image: url("http://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/gears.png");
    background-repeat: no-repeat;
    background-position: 0% 50%;
}
#slideshow .three {
    background-image: url("http://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/splat.png");
    background-repeat: no-repeat;
    background-position: 0% 5%;
}
#slideshow .four {
    background-image: url("http://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/ray.png");
    background-repeat: no-repeat;
    background-position: 0% 50%;
}

/* FORM ELEMENTS */
input {
    font: 16px/26px "Raleway", sans-serif;
}
.form-wrap {
    width: 100%;
    margin: 2em auto 0;
}
.form-wrap a {
    color: #ccc;
    padding-bottom: 4px;
    border-bottom: 1px solid #5FD1C1;
}
.form-wrap a:hover {
    color: #fff;
}
.form-wrap .tabs {
    overflow: hidden;
}
.form-wrap .tabs * {
    -webkit-transition: .25s ease-in-out;
    -moz-transition: .25s ease-in-out;
    -o-transition: .25s ease-in-out;
    transition: .25s ease-in-out;
}


.form-wrap .tabs h3 {
    float: left;
    width: 50%;
}
.form-wrap .tabs h3 a {
    padding: 0.5em 0;
    text-align: center;
    font-weight: 400;
    display: block;
    color: #999;
    border: 0;
 }
.form-wrap .tabs h3 a.active {
    color: #ccc;
}
.form-wrap .tabs h3 a.active span {
    padding-bottom: 4px;
    border-bottom: 1px solid #5FD1C1;
}
.form-wrap .tabs-content {
    padding: 1.5em 3em;
    text-align: left;
    width: auto;
}
.help-action {
    padding: .4em 0 0;
    font-size: .93em;
}
.form-wrap .tabs-content div[id$="tab-content"] {
    display: none;
}
.form-wrap .tabs-content .active {
    display: block !important;
}
.form-wrap form .input {
    margin: 0 0 .8em 0;
    padding: .8em 2em 10px 0;
    width: 100%;
    display: inline-block;
    background: transparent;
    border: 0;
    border-bottom: 1px solid #5A6374;
    outline: 0;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    color: #fff;
}
.form-wrap form .button {
    margin: 1em 0;
    padding: .2em 3em;
    width: auto;
    display: block;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    font-size: .8em;
    border-radius: 30px;
  /*  background: -moz-linear-gradient(270deg, rgba(105,221,201,1) 0%, rgba(78,193,182,1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(105,221,201,1)), color-stop(100%, rgba(78,193,182,1)));
    background: -webkit-linear-gradient(270deg, rgba(105,221,201,1) 0%, rgba(78,193,182,1) 100%);
    background: linear-gradient(180deg, rgba(105,221,201,1) 0%, rgba(78,193,182,1) 100%);*/
    -webkit-box-shadow: 0px 0px 37px -9px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 37px -9px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 37px -9px rgba(0,0,0,0.75);
}
.form-wrap form .button:hover {
    background-color: #4FDA8C;
}
.form-wrap form .checkbox {
    margin: 1em 0;
    padding: 20px;
    visibility: hidden;
    text-align: left;
}
.form-wrap form .checkbox:checked + label:after {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
}
.form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer;
}
.form-wrap form label[for]:before {
    position: absolute;
    width: 17px;
    height: 17px;
    top: 0px;
    left: -14px;
    content: '';
    border: 1px solid #5A6374;
}
.form-wrap form label[for]:after {
    position: absolute;
    top: 1px;
    left: -10px;
    width: 15px;
    height: 8px;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    content: '';
    background-color: transparent;
    border: solid #67DAC6;
    border-width: 0 0 3px 3px;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
}
.form-wrap .help-text {
    margin-top: .6em;
}
.form-wrap .help-text p {
    text-align: left;
    font-size: 14px;
}

/* MEDIUM VIEWPORT */
@media only screen and (min-width: 40em) {
    /* GLOBAL TRANSITION */
    * {
      /*transition: .25s ease-in-out;*/
    }
    /* WRAP */
    .wrap {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 600px;
        height: 500px;
        margin: auto;
        border-radius: 10px;
    }
    /* LOGO */
    .logo {
        top: 10px;
        left: 10px;
        width: 40px;
        height: 40px;
        background: none;
    }
    .logo img {
        width: 100%;
    }
    @keyframes show_close {
        0% {
            opacity: 0;
            -webkit-transform: translate(-6px, -100px);
            -moz-transform: translate(-6px, -100px);
            -o-transform: translate(-6px, -100px);
            transform: translate(-6px, -100px);
        }
        100% {
            opacity: 1;
            -webkit-transform: translate(-6px, 18px);
            -moz-transform: translate(-6px, 18px);
            -o-transform: translate(-6px, 18px);
            transform: translate(-6px, 18px);
        }
    }
    /* TOGGLE WRAP */
    #toggle-wrap {
        top: 60px;
        right: calc(50% + 17px);
        height: 80px;
        overflow: hidden;
    }
    #toggle-wrap.closed {
        width: 50%;
    }
    /* TOGGLE TERMS */
    #toggle-terms {
        opacity: 1;
        -webkit-transform: translate(-6px, -100px);
        -moz-transform: translate(-6px, -100px);
        -o-transform: translate(-6px, -100px);
        transform: translate(-6px, -100px);
    }
    #toggle-terms.closed {
        opacity: 1;
        -webkit-transform: translate(-6px, 18px);
        -moz-transform: translate(-6px, 18px);
        -o-transform: translate(-6px, 18px);
        transform: translate(-6px, 18px);
    }

    /* SLIDESHOW */
    #slideshow h2 {
        margin: 4.5em 0 1em;
        font-size: 2em;
    }
    #slideshow h2 span {
        padding: 5px 0;
        border: solid #B6EDE3;
        border-width: 1px 0;
    }
    #slideshow p {
     display: block;
    font-size: 20px;
    color: green;
    padding-bottom: 15px;
    }
    #slideshow div {
        -webkit-background-size: auto;
        -moz-background-size: auto;
        -o-background-size: auto;
        background-size: auto;
    }
    #slideshow .one {
        background-position: 50% 130%;
    }
    #slideshow .two {
        background-position: 50% 200%;
    }
    #slideshow .three {
        background-position: 50% 300%;
    }
    #slideshow .four {
        background-position: -40% -80%;
    }

    /* CONTENT */
    .content, .content.full {
        position: relative;
        float: left;
        width: 50%;
        height: 500px;
        -webkit-box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        -moz-box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        border-radius: 10px 0 0 10px;
    }
    /* TERMS */
    .terms, .recovery {
        position: absolute;
        width: 50%;
        height: 440px;
        float: left;
        margin: 60px 0 0;
        -webkit-box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        -moz-box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        border-radius: 0 0 0 10px;
    }
    /* USER (FORM WRAPPER) */
    .user {
        padding-top: 0;
        float: left;
        width: 50%;
        height: 500px;
        -webkit-box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        -moz-box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        box-shadow: -3px 0px 45px -6px rgba(56,75,99,0.61);
        border-radius: 0 10px 10px 0;
        border: 0;
    }
    .user .actions {
        margin: 0;
        text-align: right;
    }
    /* FORM ELEMENTS */
    .form-wrap {
        margin: 3em auto 0;
    }
    .form-wrap .tabs-content {
        padding: 1.5em 2.5em;
    }
    .tabs-content p {
        position: relative;
    }
    /* ARROW */
    .tabs-content .fa {
        position: absolute;
        top: 8px;
        left: -16px;
        display: block;
        font-size: .8em;
        color: #fff;
        opacity: .3;
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
        -webkit-transition: transform .3s .3s ease, opacity .6s .0s ease;
        -moz-transition: transform .3s .3s ease, opacity .6s .0s ease;
        -o-transition: transform .3s .3s ease, opacity .6s .0s ease;
        transition: transform .3s .3s ease, opacity .6s .0s ease;
    }
    .tabs-content .fa.active {
        -webkit-transform: translate(-3px, 0);
        -moz-transform: translate(-3px, 0);
        -o-transform: translate(-3px, 0);
        transform: translate(-3px, 0);
        opacity: .8;
    }
    .tabs-content .fa.inactive {
        -webkit-transform: translate(0, 0);
        -moz-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0);
        opacity: .3;
    }
}
/* LARGE VIEWPORT */
@media only screen and (min-width: 60em) {
    /* WRAP */
    .wrap {
        width: 900px;
        height: 550px;
    }
    /* CONTENT */
    .content, .content.full {
        height: 550px;
    }
    .terms, .recovery {
        height: 490px;
    }
    /* SLIDESHOW */
    #slideshow h2 {
        margin: 4em 0 1em;
        font-size: 3em;
    }
    #slideshow .four {
        background-position: -82% -330%;
    }
    /* USER (FORM WRAPPER) */
    .user {
        height: 550px;
    }
    .form-wrap {
        margin: 5em auto 0;
    }
    .form-wrap .tabs-content {
        padding: 1.5em 4.9em;
    }
}
.content
{
    background: #ffc0dd;
    opacity: 0.9;
}
.director_form
{
    display: none;
}



/* CSS */
.element {
  opacity: 0.0;
  transform: scale(0.95) translate3d(0,100%,0);
  transition: transform 400ms ease, opacity 400ms ease;
}
.element.active {
  opacity: 1.0;
  transform: scale(1.0) translate3d(0,0,0);
}
.element.inactive {
  opacity: 0.0;
  transform: scale(1) translate3d(0,0,0);
}
.form-wrap .tabs h3 a.active span
{
    border-bottom: 1px solid yellow;
}
.form-wrap a
{
    border-bottom: 1px solid yellow;
}
.rounded-btn
{
    margin: 0 auto;
    background-color: green;
    padding: 0.7em 5.8em;
    margin-top: 25px;
    box-shadow: unset;
    border: unset;
    border-radius: 18px;
    color: #fff;
    font-weight: bold;
}
alert alert-success
{
    background-color: green;
}
.pad40
{
        padding: 40px;
}
.form-wrap {
    margin: 1em auto 0;
}
.padtop10
{
        padding-top: 10px;
}
.pad20
{
        padding: 20px;
}
.home-link
{
    position: absolute;
    bottom: 50px;
    text-align: center;
    /*left: 0;*/
    /*right: 0;*/
    border-bottom: 1px solid green;
}
.register-links
{
    position: absolute !important;
    top: 30% !important;
}


</style></head><body>
        <!-- LOGIN MODULE -->
        <div class="login" style="background-image: url('<?php echo base_url()?>assets/images/director_banner.jpg');">
            <div class="wrap">
                <!-- TOGGLE -->
                <div id="toggle-wrap">
                    <div id="toggle-terms">
                        <div id="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <!-- TERMS -->
                <div class="terms">
                    <h2>dp Terms of Service</h2>
                    <p class="small">Last modified: September 23, 2017</p>
                    <h3>Welcome to dp</h3>
                    <p>By using our Services, you are agreeing to these terms. Please read them carefully.</p>
                    <p>Our Services are very diverse, so sometimes additional terms or product requirements (including age requirements) may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>
                    <h3>Using our Services</h3>
                    <p>You must follow any policies made available to you within the Services.</p>
                    <p>Using our Services does not give you ownership of any intellectual property rights in our Services or the content you access. You may not use content from our Services unless you obtain permission from its owner or are otherwise permitted by law. These terms do not grant you the right to use any branding or logos used in our Services. Don’t remove, obscure, or alter any legal notices displayed in or along with our Services.</p>
                    <p>In connection with your use of the Services, we may send you service announcements, administrative messages, and other information. You may opt out of some of those communications.</p>
                    <h3>Your dp Account</h3>
                    <p>You may need a dp Account in order to use some of our Services. You may create your own dp Account, or your dp Account may be assigned to you by an administrator, such as your employer or educational institution. If you are using a dp Account assigned to you by an administrator, different or additional terms may apply and your administrator may be able to access or disable your account.</p>
                    <p>To protect your dp Account, keep your password confidential. You are responsible for the activity that happens on or through your dp Account. Try not to reuse your dp Account password on third-party applications.</p>
                    <h3>Privacy and Copyright Protection</h3>
                    <p>dp’s privacy policies explain how we treat your personal data and protect your privacy when you use our Services. By using our Services, you agree that dp can use such data in accordance with our privacy policies.</p>
                    <p>We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers according to the process set out in the U.S. Digital Millennium Copyright Act.</p>
                    <p>We provide information to help copyright holders manage their intellectual property online. If you think somebody is violating your copyrights and want to notify us, you can find information about submitting notices and dp’s policy about responding to notices in our Help Center.</p>
                    <h3>Modifying and Terminating our Services</h3>
                    <p>We are constantly changing and improving our Services. We may add or remove functionalities or features, and we may suspend or stop a Service altogether.</p>
                    <p>You can stop using our Services at any time, although we’ll be sorry to see you go. dp may also stop providing Services to you, or add or create new limits to our Services at any time.</p>
                    <p>We believe that you own your data and preserving your access to such data is important. If we discontinue a Service, where reasonably possible, we will give you reasonable advance notice and a chance to get information out of that Service.</p>
                    <h3>Our Warranties and Disclaimers</h3>
                    <p>We provide our Services using a commercially reasonable level of skill and care and we hope that you will enjoy using them. But there are certain things that we don’t promise about our Services.</p>
                    <p>OTHER THAN AS EXPRESSLY SET OUT IN THESE TERMS OR ADDITIONAL TERMS, NEITHER dp NOR ITS SUPPLIERS OR DISTRIBUTORS MAKE ANY SPECIFIC PROMISES ABOUT THE SERVICES. FOR EXAMPLE, WE DON’T MAKE ANY COMMITMENTS ABOUT THE CONTENT WITHIN THE SERVICES, THE SPECIFIC FUNCTIONS OF THE SERVICES, OR THEIR RELIABILITY, AVAILABILITY, OR ABILITY TO MEET YOUR NEEDS. WE PROVIDE THE SERVICES “AS IS”.</p>
                    <p>SOME JURISDICTIONS PROVIDE FOR CERTAIN WARRANTIES, LIKE THE IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. TO THE EXTENT PERMITTED BY LAW, WE EXCLUDE ALL WARRANTIES.</p>
                    <h3>Liability for our Services</h3>
                    <p>WHEN PERMITTED BY LAW, dp, AND dp’S SUPPLIERS AND DISTRIBUTORS, WILL NOT BE RESPONSIBLE FOR LOST PROFITS, REVENUES, OR DATA, FINANCIAL LOSSES OR INDIRECT, SPECIAL, CONSEQUENTIAL, EXEMPLARY, OR PUNITIVE DAMAGES.</p>
                    <p>TO THE EXTENT PERMITTED BY LAW, THE TOTAL LIABILITY OF dp’S, AND ITS SUPPLIERS AND DISTRIBUTORS, FOR ANY CLAIMS UNDER THESE TERMS, INCLUDING FOR ANY IMPLIED WARRANTIES, IS LIMITED TO THE AMOUNT YOU PAID US TO USE THE SERVICES (OR, IF WE CHOOSE, TO SUPPLYING YOU THE SERVICES AGAIN).</p>
                    <p>IN ALL CASES, dp, AND ITS SUPPLIERS AND DISTRIBUTORS, WILL NOT BE LIABLE FOR ANY LOSS OR DAMAGE THAT IS NOT REASONABLY FORESEEABLE.</p>
                    <h3>About these Terms</h3>
                    <p>We may modify these terms or any additional terms that apply to a Service to, for example, reflect changes to the law or changes to our Services. You should look at the terms regularly. We’ll post notice of modifications to these terms on this page. We’ll post notice of modified additional terms in the applicable Service. Changes will not apply retroactively and will become effective no sooner than fourteen days after they are posted. However, changes addressing new functions for a Service or changes made for legal reasons will be effective immediately. If you do not agree to the modified terms for a Service, you should discontinue your use of that Service.</p>
                    <p>If you do not comply with these terms, and we don’t take action right away, this doesn’t mean that we are giving up any rights that we may have (such as taking action in the future).</p>
                    <p>The laws of California, U.S.A., excluding California’s conflict of laws rules, will apply to any disputes arising out of or relating to these terms or the Services. All claims arising out of or relating to these terms or the Services will be litigated exclusively in the federal or state courts of Santa Clara County, California, USA, and you and dp consent to personal jurisdiction in those courts.</p>
                    <p>For information about how to contact dp, please visit our contact page.</p>
                </div>

                <!-- RECOVERY -->
                <div class="recovery">
                    <h2>Password Recovery</h2>
                    <p>Enter either the <strong>email address</strong> or <strong>username</strong> on the account and <strong>click Submit</strong></p>
                    <p>We'll email instructions on how to reset your password.</p>
                    <form class="recovery-form" action="<?php echo base_url('welcome/check_artist_login');?>" method="post">
                        <input type="text" class="input" id="username" placeholder="Enter Email or Username Here">
                        <input type="submit" class="button" value="Submit">
                    </form>
                    <p class="mssg">An email has been sent to you with further instructions.</p>
                </div>

                <!-- SLIDER -->
                <div class="content">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="#"><img src="https://res.cloudinary.com/dpcloudinary/image/upload/v1506186248/logo.png" alt=""></a>
                    </div>
                    <!-- SLIDESHOW -->
                    <div id="slideshow">
                            <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <div class="register-links">
                                    <h4 style="color: green;padding-bottom: 15px;">If Already Registered,</h4>
                                   <a href="<?php echo base_url('Welcome/common_login'); ?>"><p>  <i class="fa fa-user" aria-hidden="true"></i>  Login </p></a>
                                  
                                   <a  href="<?php echo base_url(); ?>" style="">
                                    <p style="color: red;"><i class="fa fa-home" aria-hidden="true"></i> Go To Home</p>
                                 </a>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LOGIN FORM -->
                <div class="user">
                    <!-- ACTIONS
                    <div class="actions">
                        <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
                    </div>
                    -->
                    <div class="form-wrap">
                        <!-- TABS -->
                        <div class="tabs">
                       
                        <!--   tab name -->
                    </div>
                        <!-- TABS CONTENT -->
                        
<!--Artist Login-->
       <!--                 <div class="tabs-content">
                         
                            <div id="login-tab-content" class="active">
            <form class="login-form" action="<?php //echo base_url('welcome/check_artist_login'); ?>" method="post">

            <input type="text" class="input" id="email_id" name="email_id" autocomplete="off" placeholder="Email or Username">
            <input type="password" class="input" id="password" name="password" autocomplete="off" placeholder="Password">

                            <div class="help-action">
                            <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="forgot" href="#">Forgot your password?</a></p>
                            </div> -->
                                    
                                <!--    <input type="submit" class="button" value="Login"> -->
                                    
                   <!--         <button type="submit" class="btn btn-default btn-block">Login</button>
                            </form>-->
                                <!--<div class="help-action">
                                    <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a class="forgot" href="#">Forgot your password?</a></p>
                                </div>-->
                        <!--    </div> -->
<!--Director Login -->
               

<!-- TABS CONTENT SIGNUP -->
 
                           
                          <!--Director sign up -->
             <div class="row">
                <div class="col-lg-12">
                                <div id="signup-tab-content">
                                   <h3 class="signup-tab" >
                                        <a class="sign-up" href="#signup-tab-content"><span>Sign Up</span></a>
                                    </h3>
                                <div class="artist_form pad40 " >
                                               
                        <form class="signup-form" action="<?php echo base_url('welcome/register/'); ?>" method="post" enctype="multipart/form-data">
                      

                          <!-- <label><input type="radio" name="logintype" id="artist1"> Male</label> -->
                            <!-- <label><input type="radio" name="logintype" id="director1"> Male</label> -->



                        <input type="text" class="input" name="user_name" id="user_name" autocomplete="off" placeholder="Username" required>
                        <input type="text" class="input" name="mobile" id="mobile" autocomplete="off" placeholder="mobile" required>
                        <input type="email" class="input" name="email" id="email" autocomplete="off" placeholder="Email" required>
                        <input type="password" class="input" name="pass2" id="pass2" autocomplete="off" placeholder="Password" required>
                                    
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="margin: 0 auto;    text-align: center;">
                                           <button type="submit" class="btn btn-default rounded-btn" >Register</button>
                                        </div>
                                    </div>

                                   <!--  <div class="col-lg-12 text-center">
                                        <p class="text-center" style="text-align: center;">Or</p>
                                    </div> -->
                                   <!--   <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <input type="submit" class="button" value="Sign Up With Google" style="margin:0 auto;margin-bottom: 20px;background-color: green;">
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                            <input type="submit" class="button" value="Sign Up With Facebook" style="margin:0 auto;margin-bottom: 20px;background-color: green;">
                                        </div>
                                    </div> -->
                        
                                </form>

                                <div class="help-action">
                                    <div class="col-lg-12 text-center">
                                      <p style="text-align: center;"><a class="agree" href="<?php echo base_url('views/terms_conditions')?>">Terms of service</a></p>
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
       
<div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>



    </body>
   
    
<script type="text/javascript">

    $(document).ready(function(){
    $(".check-male").click(function(){
        $("#male").prop("checked", true);
    });
    $(".check-female").click(function(){
        $("#female").prop("checked", true);
    });
});

    function showdirector()
    {
        // alert(1);
        $( ".director_form" ).show();
        $(".artist_form").hide();
        //document.getElementById('artist').checked=false;
    }
     function showArtist()
    {
        // alert(1);
        $( ".director_form" ).hide();
        $(".artist_form").show();
        //document.getElementById('director').checked=false;

    }


</script>


<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script >/* LOGIN - MAIN.JS - dp 2017 */


// LOGIN TABS
$(function() {
    var tab = $('.tabs h3 a');
    tab.on('click', function(event) {
        event.preventDefault();
        tab.removeClass('active');
        $(this).addClass('active');
        tab_content = $(this).attr('href');
        $('div[id$="tab-content"]').removeClass('active');
        $(tab_content).addClass('active');
       
         $( ".director_form" ).hide();

    });
});

// SLIDESHOW
$(function() {
    $('#slideshow > div:gt(0)').hide();
    // setInterval(function() {
    //     $('#slideshow > div:first')
    //     .fadeOut(1000)
    //     .next()
    //     .fadeIn(1000)
    //     .end()
    //     .appendTo('#slideshow');
    // }, 3850);
});

// CUSTOM JQUERY FUNCTION FOR SWAPPING CLASSES
(function($) {
    'use strict';
    $.fn.swapClass = function(remove, add) {
        this.removeClass(remove).addClass(add);
        return this;
    };
}(jQuery));

// SHOW/HIDE PANEL ROUTINE (needs better methods)
// I'll optimize when time permits.
// $(function() {
//  $('.agree,.forgot, #toggle-terms, .log-in, .sign-up').on('click', function(event) {
//      event.preventDefault();
//      var terms = $('.terms'),
//         recovery = $('.recovery'),
//         close = $('#toggle-terms'),
//         arrow = $('.tabs-content .fa');
//      if ($(this).hasClass('agree') || $(this).hasClass('log-in') || ($(this).is('#toggle-terms')) && terms.hasClass('open')) {
//          if (terms.hasClass('open')) {
//              terms.swapClass('open', 'closed');
//              close.swapClass('open', 'closed');
//              arrow.swapClass('active', 'inactive');
//          } else {
//              if ($(this).hasClass('log-in')) {
//                  return;
//              }
//              terms.swapClass('closed', 'open').scrollTop(0);
//              close.swapClass('closed', 'open');
//              arrow.swapClass('inactive', 'active');
//          }
//      }
//      else if ($(this).hasClass('forgot') || $(this).hasClass('sign-up') || $(this).is('#toggle-terms')) {
//          if (recovery.hasClass('open')) {
//              recovery.swapClass('open', 'closed');
//              close.swapClass('open', 'closed');
//              arrow.swapClass('active', 'inactive');
//          } else {
//              if ($(this).hasClass('sign-up')) {
//                  return;
//              }
//              recovery.swapClass('closed', 'open');
//              close.swapClass('closed', 'open');
//              arrow.swapClass('inactive', 'active');
//          }
//      }
//  });
// });

// DISPLAY MSSG
$(function() {
    $('.recovery .button').on('click', function(event) {
        event.preventDefault();
        $('.recovery .mssg').addClass('animate');
        setTimeout(function() {
            $('.recovery').swapClass('open', 'closed');
            $('#toggle-terms').swapClass('open', 'closed');
            $('.tabs-content .fa').swapClass('active', 'inactive');
            $('.recovery .mssg').removeClass('animate');
        }, 2500);
    });
});

// DISABLE SUBMIT FOR DEMO
$(function() {
    $('.button').on('click', function(event) {
        $(this).stop();
        event.preventDefault();
        return false;
    });
});
//# sourceURL=pen.js

</script>
</body></html>