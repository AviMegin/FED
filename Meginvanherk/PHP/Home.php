<?php

session_start();

if(isset($_GET['logout'])){

    //Simple exit message
    $logout_message = "<div class='msgln'><span class='left-info'>User <b class='user-name-left'>". $_SESSION['name'] ."</b> has left the chat session.</span><br></div>";
    file_put_contents("log.html", $logout_message, FILE_APPEND | LOCK_EX);

    session_destroy();
    header("Location: PHP/home.php"); //Redirect the user
}

if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<script>enterName()</script>';
    }
}

function loginForm(){
    echo
    '<div id="loginform">
    <p>Please enter your name to continue!</p>
    <form action="chat.php" method="post">
      <label for="name">Name &mdash;</label>
      <input type="text" name="name" id="name" />
      <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
  </div>';
}

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Megin van Herk, Portfolio​, Outfit Ideas 2020, Work in Progress">
    <meta name="description" content="">

    <title>Portfolio Megin</title>
<link rel="stylesheet" href="CSS/Home.css" media="screen">
    <link rel="stylesheet" href="CSS/nicepage.css" media="screen">
    <script class="u-script" type="text/javascript" src="JavaScript/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="JavaScript/nicepage.js" defer=""></script>
<link rel="shortcut icon" type="image/jpg" href="favicon.ico"/>
<link rel="stylesheet" href="CSS/style.css" />

<!-- Hotjar Tracking Code for http://i430712.hera.fhict.nl/AvilionArt/Home.html -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2319004,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Alex+Brush:400">
  </head>
  <body class="u-body">
    <?php
    if(!isset($_SESSION['name'])){
        loginForm();
    }
    else {
    ?>
    <header class="u-clearfix u-header u-palette-5-dark-3 u-header" id="sec-cf9b"><div class="u-clearfix u-sheet u-valign-middle-lg u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-button-style u-nav-link u-palette-2-light-3 u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Home.php" style="padding: 10px 20px;">Home</a>
          </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-button-style u-nav-link u-palette-2-light-3 u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="About.php" style="padding: 10px 20px;">About</a>
          </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-button-style u-nav-link u-palette-2-light-3 u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Contact.php" style="padding: 10px 20px;">Contact</a>
          </li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-button-style u-nav-link u-palette-2-light-3 u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Websites.php" style="padding: 10px 20px;">Websites</a><div class="u-nav-popup"><ul class="u-h-spacing-10 u-nav u-unstyled u-v-spacing-10 u-nav-2">
          <li class="u-nav-item"><a class="u-active-palette-2-light-3 u-button-style u-hover-palette-2-light-1 u-nav-link u-palette-2-light-2" href="avilion.php">Avilion</a>
          </li><li class="u-nav-item"><a class="u-active-palette-2-light-3 u-button-style u-hover-palette-2-light-1 u-nav-link u-palette-2-light-2" href="snakegame.php">Snake game</a>
          </li><li class="u-nav-item"><a class="u-active-palette-2-light-3 u-button-style u-hover-palette-2-light-1 u-nav-link u-palette-2-light-2" href="Worktastic.php">Worktastic</a>
          </li><li class="u-nav-item"><a class="u-active-palette-2-light-3 u-button-style u-hover-palette-2-light-1 u-nav-link u-palette-2-light-2" href="Portfolio.php">Portfolio</a>
          </li><li class="u-nav-item"><a class="u-active-palette-2-light-3 u-button-style u-hover-palette-2-light-1 u-nav-link u-palette-2-light-2">......</a>
          </li><li class="u-nav-item"><a class="u-active-palette-2-light-3 u-button-style u-hover-palette-2-light-1 u-nav-link u-palette-2-light-2">......</a>
          </li></ul>
          </div>
          </li></ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                      <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-sidenav-overflow">
                          <div class="u-menu-close"></div>
                          <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html" style="padding: 10px 20px;">Home</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Websites.php" style="padding: 10px 20px;">Websites</a><div class="u-nav-popup">
            <ul class="u-h-spacing-10 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="avilion.php">Avilion</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="snakegame.php">Snake game</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Worktastic.php" >Worktastic</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Portfolio.php">Portfolio</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link">......</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link">......</a>
          </li></ul>
</div>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
        <h2 class="u-text u-text-1">Megin van Herk</h2><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1"><img src="images/1e66fbf7-6e48-42f8-846a-e4a9c5152b352.png" alt=""></span>
      </div></header>
    <section class="u-carousel u-slide u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-block-2411-1" src="" id="carousel_5926" data-interval="5000" data-u-ride="carousel">
      <ol class="u-absolute-hcenter u-carousel-indicators u-block-2411-2">
        <li data-u-target="#carousel_5926" data-u-slide-to="0" class="u-active u-gradient" style="height: 8px; background-image: linear-gradient(#f2f2f2, #db545a);"></li>
        <li data-u-target="#carousel_5926" class="u-gradient" data-u-slide-to="1" style="height: 8px; background-image: linear-gradient(#f2f2f2, #db545a);"></li>
      </ol>
      <div class="u-carousel-inner" role="listbox">
        <div class="u-active u-align-left u-carousel-item u-clearfix u-gradient u-section-1-1" src="">
          <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
            <h1 class="u-custom-font u-text u-text-body-alt-color u-title u-text-1">Portfolio </h1>
          </div>
        </div>
        <div class="skrollable skrollable-between u-align-center u-carousel-item u-clearfix u-gradient u-section-1-2">
          <div class="u-clearfix u-sheet u-valign-middle-xl u-sheet-1">
            <div alt="" class="u-expanded u-image u-image-circle u-image-1" data-image-width="1600" data-image-height="1509"></div>
            <h1 class="u-text u-text-body-alt-color u-title u-text-1"><b>Megin van herk</b>
            </h1>
            <p class="u-large-text u-text u-text-body-alt-color u-text-variant u-text-2">Student at ICT Fontys Eindhoven</p>
            <a href="About.php" data-page-id="122834876" class="u-btn u-btn-round u-button-style u-palette-2-base u-radius-50 u-btn-1">About</a>
          </div>
        </div>
      </div>
      <a class="u-absolute-vcenter u-border-2 u-border-white u-carousel-control u-carousel-control-prev u-icon-circle u-spacing-10 u-text-white u-block-2411-5" href="#carousel_5926" role="button" data-u-slide="prev">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="u-absolute-vcenter u-border-2 u-border-white u-carousel-control u-carousel-control-next u-icon-circle u-spacing-10 u-text-white u-block-2411-4" href="#carousel_5926" role="button" data-u-slide="next">
        <span aria-hidden="true">
          <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </section>
    <section class="u-clearfix u-grey-80 u-section-2" data-image-width="2000" data-image-height="1333" id="sec-c6ab">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-1">Media Design</h2>
            <p class="u-text u-text-2">As a student of the media design course at Fontys, I learn many aspects to be applied to the process of assembling a website.</p>
          </div>
        </div>
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-20 u-size-30-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-1">
                    <div class="u-container-layout u-valign-top u-container-layout-2">
                      <h3 class="u-text u-text-3">HTML</h3>
                      <p class="u-text u-text-4">A strong base of your website, starts with a good looking base HTML file. A good ground to build upon.</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-20 u-layout-cell-2">
                    <div class="u-container-layout u-valign-top u-container-layout-3">
                      <h3 class="u-text u-text-5">CSS</h3>
                      <p class="u-text u-text-6">A good looking website is the first step towards a succesful website.&nbsp;</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-20 u-layout-cell-3">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                      <h3 class="u-text u-text-7">JavaScript</h3>
                      <p class="u-text u-text-8">Beautiful, interactive features are always nice to have.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-20 u-size-30-md">
                <div class="u-layout-row">
                  <div class="u-align-left u-container-style u-image u-layout-cell u-size-60 u-image-1" src="" data-animation-name="fadeIn" data-animation-duration="1000" data-animation-delay="0">
                    <div class="u-container-layout u-valign-top u-container-layout-5" src=""></div>
                  </div>
                </div>
              </div>
              <div class="u-size-20 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-5">
                    <div class="u-container-layout u-valign-bottom u-container-layout-6">
                      <h3 class="u-text u-text-9">UX</h3>
                      <p class="u-text u-text-10">A good user experience is a good business.</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-6">
                    <div class="u-container-layout u-valign-bottom u-container-layout-7">
                      <h3 class="u-text u-text-11">Design</h3>
                      <p class="u-text u-text-12">Being able to make your own art and photography makes everything easier and more creative.</p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-20 u-layout-cell-7">
                    <div class="u-container-layout u-container-layout-8">
                      <h3 class="u-text u-text-13">Testing</h3>
                      <p class="u-text u-text-14">Receiving feedback and listening to users can only lead to good things.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-left u-clearfix u-grey-5 u-section-4" id="carousel_2468">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Upcoming features</h2>
        <h6 class="u-text u-text-2">Fill in the survey to let me know, if you have any ideas to improve this website. Such as cute little game ideas, or simple design improvements. </h6>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-top u-container-layout-1">
                  <p class="u-text u-text-3">
                                                </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-black u-clearfix u-section-6" id="sec-804c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1">
                <div class="u-container-layout u-container-layout-1"></div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h2 class="u-text u-text-1">Work in Progress</h2>
                  <p class="u-text u-text-2">Voorbeeld tekst. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer class="u-clearfix u-footer u-grey-80" id="sec-5750"><div class="u-clearfix u-sheet u-sheet-1"><span class="u-file-icon u-icon u-icon-circle u-text-palette-1-base u-icon-1"><img src="images/1e66fbf7-6e48-42f8-846a-e4a9c5152b352.png" alt=""></span>
        <div class="u-align-left u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-30 u-line-1"></div><span class="u-icon u-icon-circle u-text-palette-2-light-2 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7d45"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-7d45"><g><path d="m378.647 161.575c25.002-29.572 23.589-74.006-4.278-101.874-14.231-14.231-33.152-22.069-53.278-22.069s-39.048 7.838-53.278 22.069l-11.813 11.812-11.812-11.812c-14.231-14.231-33.153-22.069-53.278-22.069-20.126 0-39.047 7.838-53.279 22.069-27.872 27.873-29.28 72.318-4.28 101.874h-133.351v312.794h512v-312.794zm-219.802-80.661c8.564-8.565 19.952-13.282 32.065-13.282 12.112 0 23.5 4.717 32.065 13.282l33.025 33.025 33.025-33.025c8.565-8.565 19.952-13.282 32.065-13.282 12.112 0 23.5 4.717 32.065 13.282 17.68 17.681 17.68 46.45-.02 64.149l-97.135 97.485-97.155-97.504c-17.681-17.68-17.681-46.45 0-64.13zm4.013 110.661 93.142 93.475 93.142-93.476h131.318c-4.173 20.165-16.597 38.175-34.469 49.045l-189.991 115.551-189.992-115.55c-17.871-10.87-30.295-28.88-34.468-49.045zm93.142 199.709 73.175-44.505 124.402 97.59h-395.911l123.155-98.809zm-205.581-125.034 103.133 62.725-123.552 99.128v-178.14c6.046 6.207 12.883 11.704 20.419 16.287zm431.581 162.287-125.447-98.409 105.028-63.877c7.536-4.583 14.374-10.081 20.419-16.288z"></path>
</g></svg></span><span class="u-icon u-icon-circle u-text-palette-2-light-2 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55 55" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cc1a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" id="svg-cc1a" style="enable-background:new 0 0 55 55;"><path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
	c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348
	c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98
	c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033
	c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55
	c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287
	c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104
	c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1
	c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764
	l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5
	c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957
	c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545
	c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.519,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8
	s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.345-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545
	c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313
	c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z M42.459,48.132c-0.35,0.254-0.706,0.5-1.067,0.735
	c-0.166,0.108-0.331,0.216-0.5,0.321c-0.472,0.292-0.952,0.57-1.442,0.83c-0.108,0.057-0.217,0.111-0.326,0.167
	c-1.126,0.577-2.291,1.073-3.488,1.476c-0.042,0.014-0.084,0.029-0.127,0.043c-0.627,0.208-1.262,0.393-1.904,0.552
	c-0.002,0-0.004,0.001-0.006,0.001c-0.648,0.16-1.304,0.293-1.964,0.402c-0.018,0.003-0.036,0.007-0.054,0.01
	c-0.621,0.101-1.247,0.174-1.875,0.229c-0.111,0.01-0.222,0.017-0.334,0.025C28.751,52.97,28.127,53,27.5,53
	c-0.634,0-1.266-0.031-1.895-0.078c-0.109-0.008-0.218-0.015-0.326-0.025c-0.634-0.056-1.265-0.131-1.89-0.233
	c-0.028-0.005-0.056-0.01-0.084-0.015c-1.322-0.221-2.623-0.546-3.89-0.971c-0.039-0.013-0.079-0.027-0.118-0.04
	c-0.629-0.214-1.251-0.451-1.862-0.713c-0.004-0.002-0.009-0.004-0.013-0.006c-0.578-0.249-1.145-0.525-1.705-0.816
	c-0.073-0.038-0.147-0.074-0.219-0.113c-0.511-0.273-1.011-0.568-1.504-0.876c-0.146-0.092-0.291-0.185-0.435-0.279
	c-0.454-0.297-0.902-0.606-1.338-0.933c-0.045-0.034-0.088-0.07-0.133-0.104c0.032-0.018,0.064-0.036,0.096-0.054l7.907-4.313
	c1.36-0.742,2.205-2.165,2.205-3.714l-0.001-3.602l-0.23-0.278c-0.022-0.025-2.184-2.655-3.001-6.216l-0.091-0.396l-0.341-0.221
	c-0.481-0.311-0.769-0.831-0.769-1.392v-3.545c0-0.465,0.197-0.898,0.557-1.223l0.33-0.298v-5.57l-0.009-0.131
	c-0.003-0.024-0.298-2.429,1.396-4.36C21.583,10.837,24.061,10,27.5,10c3.426,0,5.896,0.83,7.346,2.466
	c1.692,1.911,1.415,4.361,1.413,4.381l-0.009,5.701l0.33,0.298c0.359,0.324,0.557,0.758,0.557,1.223v3.545
	c0,0.713-0.485,1.36-1.181,1.575l-0.497,0.153l-0.16,0.495c-0.59,1.833-1.43,3.526-2.496,5.032c-0.262,0.37-0.517,0.698-0.736,0.949
	l-0.248,0.283V39.8c0,1.612,0.896,3.062,2.338,3.782l8.467,4.233c0.054,0.027,0.107,0.055,0.16,0.083
	C42.677,47.979,42.567,48.054,42.459,48.132z"></path></svg></span><span class="u-icon u-icon-circle u-text-palette-2-light-2 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3925"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-3925" style="enable-background:new 0 0 512 512;"><g><g><path d="M437.019,74.981C388.667,26.628,324.379,0,256,0S123.333,26.628,74.981,74.981C26.628,123.333,0,187.621,0,256    s26.628,132.667,74.981,181.019C123.333,485.372,187.621,512,256,512s132.667-26.628,181.019-74.981S512,324.379,512,256    S485.372,123.333,437.019,74.981z M256,495.832C123.756,495.832,16.168,388.244,16.168,256S123.756,16.168,256,16.168    S495.832,123.756,495.832,256S388.244,495.832,256,495.832z"></path>
</g>
</g><g><g><path d="M347.845,97.011H164.155c-37.024,0-67.144,30.121-67.144,67.144v183.692c0,37.022,30.121,67.143,67.144,67.143h183.692    c37.022,0,67.143-30.121,67.143-67.144V164.155C414.989,127.131,384.869,97.011,347.845,97.011z M398.821,347.845    c0,28.108-22.868,50.976-50.976,50.976H164.155c-28.108,0-50.976-22.868-50.976-50.976V164.155    c0-28.108,22.868-50.976,50.976-50.976h183.692c28.107,0,50.975,22.868,50.975,50.976V347.845z"></path>
</g>
</g><g><g><path d="M339.402,251.22c-2.391-42.533-37.002-76.75-79.558-78.669c-49.108-2.214-89.535,38.232-87.292,87.346    c1.945,42.56,36.19,77.154,78.728,79.51c17.951,0.995,34.762-3.727,48.803-12.494c4.374-2.731,5.087-8.814,1.441-12.459    c-0.039-0.039-0.077-0.077-0.115-0.115c-2.657-2.658-6.778-3.059-9.971-1.075c-10.491,6.519-22.892,10.241-36.158,10.102    c-37.455-0.394-67.676-31.844-66.621-69.286c1.061-37.681,33.215-67.721,71.657-65.312c33.126,2.076,60.09,28.49,62.819,61.569    c1.111,13.475-1.787,26.206-7.61,37.157c-1.667,3.136-1.153,6.982,1.358,9.493c0.041,0.041,0.083,0.083,0.124,0.124    c3.773,3.773,10.154,2.886,12.675-1.816C336.664,282.269,340.301,267.197,339.402,251.22z"></path>
</g>
</g><g><g><circle cx="342.232" cy="158.989" r="21.558"></circle>
</g>
</g></svg></span><span class="u-icon u-icon-circle u-text-palette-2-light-2 u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b45c"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-b45c" style="enable-background:new 0 0 512 512;"><g><path d="M222.892,388h51.491c4.418,0,8-3.582,8-8V264.093h26.751c4.101,0,7.538-3.101,7.958-7.18l4.51-43.772   c0.232-2.252-0.501-4.498-2.019-6.179c-1.517-1.682-3.675-2.641-5.939-2.641h-31.261v-17.73c0-3.662,1.159-3.936,2.928-3.936   h27.682c4.418,0,8-3.582,8-8v-42.5c0-4.406-3.562-7.982-7.968-8L274.848,124c-26.752,0-41.029,11.77-48.295,21.643   c-10.146,13.787-11.661,29.941-11.661,38.343v20.334h-16.489c-4.418,0-8,3.582-8,8v43.772c0,4.418,3.582,8,8,8h16.489V380   C214.892,384.418,218.473,388,222.892,388z M206.402,248.093v-27.772h16.489c4.418,0,8-3.582,8-8v-28.334   c0-5.185,0.833-18.376,8.547-28.86c7.386-10.037,19.3-15.126,35.376-15.126l30.177,0.122v26.533h-19.682   c-9.421,0-18.928,6.164-18.928,19.936v25.73c0,4.418,3.582,8,8,8h30.395l-2.862,27.772h-27.533c-4.418,0-8,3.582-8,8V372h-35.491   V256.093c0-4.418-3.582-8-8-8H206.402z"></path><path d="M437.022,74.984C388.67,26.63,324.381,0,256,0C187.624,0,123.338,26.63,74.984,74.984S0,187.624,0,256   c0,68.388,26.63,132.678,74.984,181.028C123.335,485.375,187.621,512,256,512c68.385,0,132.673-26.625,181.021-74.972   C485.372,388.679,512,324.389,512,256C512,187.622,485.372,123.336,437.022,74.984z M425.708,425.714   C380.381,471.039,320.111,496,256,496c-64.106,0-124.374-24.961-169.703-70.286C40.965,380.386,16,320.113,16,256   c0-64.102,24.965-124.37,70.297-169.702C131.63,40.965,191.898,16,256,16c64.108,0,124.378,24.965,169.708,70.297   C471.037,131.628,496,191.896,496,256C496,320.115,471.037,380.387,425.708,425.714z"></path><path d="M430.038,114.969c-2.784-3.432-7.821-3.957-11.253-1.172c-3.431,2.784-3.956,7.822-1.172,11.252   C447.526,161.919,464,208.425,464,256c0,55.567-21.635,107.803-60.919,147.086C363.797,442.367,311.563,464,256,464   c-51.26,0-100.505-18.807-138.663-52.956c-3.292-2.946-8.35-2.666-11.296,0.626c-2.946,3.292-2.666,8.35,0.626,11.296   C147.763,459.745,200.797,480,256,480c59.837,0,116.089-23.297,158.394-65.601C456.701,372.094,480,315.84,480,256   C480,204.766,462.256,154.681,430.038,114.969z"></path><path d="M48,256c0-114.691,93.309-208,208-208c51.26,0,100.504,18.808,138.662,52.959c3.293,2.948,8.351,2.666,11.296-0.625   c2.947-3.292,2.667-8.35-0.625-11.296C364.237,52.256,311.203,32,256,32c-59.829,0-116.079,23.301-158.389,65.611   C55.301,139.92,32,196.171,32,256c0,51.24,17.744,101.328,49.963,141.038c1.581,1.949,3.889,2.96,6.217,2.96   c1.771,0,3.553-0.585,5.036-1.788c3.431-2.784,3.956-7.822,1.172-11.253C64.474,350.088,48,303.58,48,256z"></path>
</g></svg></span>
        <p class="u-text u-text-1"> &nbsp;i430712@student.fontys.nl</p>
        <p class="u-text u-text-2" href="mailto:meginvanherk@gmail.com">meginvanherk@gmail.com</p>
        <p class="u-text u-text-3">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1" href="https://www.instagram.com/meginismegin/">@meginismegin</a>
        </p>
        <p class="u-text u-text-4">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2" href="https://www.facebook.com/megin.vanherk.3/">Megin van Herk</a>
        </p>
        <div class="u-align-left u-border-1 u-border-white u-expanded-width u-line u-line-horizontal u-opacity u-opacity-30 u-line-2"></div>
      </div></footer>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">


      function openForm() {
        document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
        document.getElementById("myForm").style.display = "none";
      }


          // jQuery Document
          $(document).ready(function () {
              $("#submitmsg").click(function () {
                  var clientmsg = $("#usermsg").val();
                  $.post("post.php", { text: clientmsg });
                  $("#usermsg").val("");
                  return false;
              });

              function loadLog() {
                  var oldscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height before the request

                  $.ajax({
                      url: "log.html",
                      cache: false,
                      success: function (html) {
                          $("#chatbox").html(html); //Insert chat log into the #chatbox div

                          //Auto-scroll
                          var newscrollHeight = $("#chatbox")[0].scrollHeight - 20; //Scroll height after the request
                          if(newscrollHeight > oldscrollHeight){
                              $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                          }
                      }
                  });
              }

              setInterval (loadLog, 2500);

              $("#exit").click(function () {
                  var exit = confirm("Are you sure you want to end the session?");
                  if (exit == true) {
                  window.location = "chat.php?logout=true";
                  }
              });
          });
          function enterName()
  {
  alert("Please enter a name!"); // this is the message in ""
  }
      </script>


  </body>
</html>
