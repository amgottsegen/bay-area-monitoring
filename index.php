<!DOCTYPE html>
<?php
  $http_origin = $_SERVER['HTTP_ORIGIN'];
  $allowed_domains = array(
    'http://localhost',
    'https://localhost',
    'http://air-watch-bay-area-staging.herokuapp.com',
    'https://air-watch-bay-area-staging.herokuapp.com',
    'http://www.airwatchbayarea.org',
    'https://www.airwatchbayarea.org',
    'https://doc-08-7c-sheets.googleusercontent.com',
  );

  if (in_array($http_origin, $allowed_domains))
  {  
      header("Access-Control-Allow-Origin: $http_origin", false);
  }
?>
<html lang="en">
<head>
  <title>Air Watch: Bay Area</title>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta name="google-site-verification" content="tTjpNm-VuCKD_LkM9Rql7ybgPVxCPhYUgqK1XMlk3bQ" />
  <meta property="og:image" content="https://www.airwatchbayarea.org/img/logo_with_background.png" />
  <meta property="og:url" content="https://www.airwatchbayarea.org" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Air Watch Bay Area" />
  <meta property="og:description" content="An interactive tool for the frontline communities of the San Francisco Bay Area to explore our air quality." />
  <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/favicon.ico" rel="icon" type="image/x-icon">
  <link href="assets/jquery-ui/smoothness/jquery-ui.custom.css" media="screen" rel="stylesheet" type="text/css">
  <!-- Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-102327241-1', 'auto');
  ga('send', 'pageview');
  /**
  * Function that tracks a click on an outbound link in Analytics.
  * This function takes a valid URL string as an argument, and uses that URL string
  * as the event label. Setting the transport method to 'beacon' lets the hit be sent
  * using 'navigator.sendBeacon' in browser that support it.
  */
  var trackOutboundLink = function(url) {
     ga('send', 'event', 'outbound', 'click', url, {
       'transport': 'beacon',
       'hitCallback': function(){document.location = url;}
     });
  }
  </script>
  <!-- End Google Analytics -->
  <!-- Custom Fonts -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="assets/css/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <!-- Theme CSS -->
  <style type="text/css">
      @font-face { font-family: SanFranciscoText-Semibold; src: url('assets/css/fonts/SanFranciscoText-Semibold.otf'); }
      @font-face { font-family: SanFranciscoText-Bold; src: url('assets/css/fonts/SanFranciscoText-Bold.otf'); }
      @font-face { font-family: SanFranciscoText-Regular; src: url('assets/css/fonts/SanFranciscoText-Regular.otf'); }
  </style>
  <link rel="stylesheet" href="assets/jquery/jquery.form.min.css"/>
  <link href="assets/css/agency.css" rel="stylesheet">

  <link href="assets/css/application.css" media="screen" rel="stylesheet" type="text/css">

  <link href="assets/css/dashboard.css" media="screen" rel="stylesheet" type="text/css">
  <link href="assets/css/user-reports.css" media="screen" rel="stylesheet" type="text/css">
  <link href="assets/css/resources-for-action.css" media="screen" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="localization/lang-en.css">
  <link rel="stylesheet" type="text/css" href="localization/lang-es.css">
  <script src="assets/jquery/jquery.min.js" type="text/javascript">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <script src="assets/jquery/jquery-ui.custom.min.js" type="text/javascript">
  </script>
  <script src="assets/jquery/jquery.mousewheel.min.js" type="text/javascript">
  </script>
  <script src="assets/jquery/jquery.xdomainrequest.min.js" type="text/javascript">
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZuOqKr7onchQX0np-fCgwrx5c0VK11Os&libraries=places" type="text/javascript">
  </script>
  <script src="assets/js/Promise.js">
  </script>
  <script src="assets/jquery/jquery.form.min.js">
  </script>
  <script src="assets/jquery/jquery.localize.min.js">
  </script>
  <script src="language.js">
  </script>
  <script src='assets/js/spin.min.js' type='text/javascript'>
  </script>
  <script src='assets/js/dateFormat.js' type='text/javascript'>
  </script>
  <script src="globalFunctions.js" type="text/javascript">
  </script>
  <script src="assets/js/maplabel-compiled.js" type="text/javascript">
  </script>
  <script src="assets/js/grapher.min.js" type="text/javascript">
  </script>
  <script src="assets/js/PlotManager.js" type="text/javascript">
  </script>
  <script src="map.js">
  </script>
  <script src="smell.js">
  </script>
  <script src="feeds.js">
  </script>
  <script src="assets/js/CanvasLayer.js">
  </script>
  <script src="assets/js/md5.js" type="text/javascript">
  </script>
  <script src="report.js" type="text/javascript">
  </script>
  <script src="assets/js/agency.min.js"></script>
  <script src="dashboard.js" type="text/javascript">
  </script>
  <script src='assets/jquery/jquery.ui.widget.js' type='text/javascript'>
  </script>
  <script src='assets/jquery/jquery.iframe-transport.js' type='text/javascript'>
  </script>
  <script src='assets/jquery/jquery.fileupload.js' type='text/javascript'>
  </script>
  <script src='assets/jquery/jquery.cloudinary.js' type='text/javascript'>
  </script>
  <script src='upload.js' type='text/javascript'>
  </script>
  <script src='user-reports.js' type='text/javascript'>
  </script>
  <script src='resources4action.js' type='text/javascript'>
  </script>
</head>
<body>
  <nav id="site-nav" class="navbar navbar-custom">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle navbar-toggler-right" data-toggle="collapse" data-target="#myNavbar">
          <span style="color: white">Menu</span>
        </button>
         <a class="navbar-brand page-scroll" href="#home">Air&nbsp;Watch <span style="color:#f7b733">Bay&nbsp;Area</span></a>
         <ul style="display: inline-block; margin: 7.5px 0px;" class="nav navbar-nav navbar-right">
           <li class="" id="language-tab">
              <a class="language text-uppercase no-highlight" href="#" data-lang='es'>Español</a>
              <a class="language text-uppercase no-highlight" href="#" data-lang='en'>English</a>
            </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li id="home-tab">
            <a class="text-uppercase no-highlight" href="#home" data-localize="menu.home">Home</a>
          </li>
          <li class="dropdown" id="view-air-quality-tab">
            <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" href="#" data-localize="menu.air-quality">Air Quality&nbsp;<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#loc=bay-area" data-localize="bay-area">Bay Area</a></li>
              <li><a href="#loc=richmond">Richmond</a></li>
              <li><a href="#loc=crockett-rodeo">Crockett-Rodeo</a></li>
              <li><a href="#loc=benicia">Benicia</a></li>
              <li><a href="#loc=vallejo">Vallejo</a></li>
              <li><a href="#loc=martinez">Martinez</a></li>
            </ul>
          </li>
          <li class="" id="report-pollution-tab">
            <a class="text-uppercase no-highlight" href="#report-pollution" data-localize="menu.report-pollution">Report Pollution</a>
          </li>
          <li class="" id="user-reports-tab">
            <a class="text-uppercase no-highlight" href="#user-reports" data-localize="menu.user-reports">User Reports</a>
          </li>
          <li class="" id="resources-for-action-tab">
            <a class="text-uppercase no-highlight" href="#resources-for-action" data-localize="menu.resources-for-action">Resources for Action</a>
          </li>
          <li class="" id="help-tab">
            <a class="text-uppercase no-highlight user-guide-link" href="https://docs.google.com/document/d/1RL5MGzxdswD37jXnv-9_Skl638ntj7_2OR87YZtcOoM/pub" target="_blank" data-localize="menu.user-guide">User Guide</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="home-page">
   <!-- Header -->
    <!-- Header -->
    <!-- Header -->
    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text" style="width:76%; margin: 0 12%">
              <img style="margin-bottom: 5%" src="img/logo+text.svg" class="img-reponsive"/>
                <div style="text-shadow: 0px 0px 20px #162946" class="intro-lead-in" data-localize="title.sub">Learn more about air quality in the San Francisco Bay Area and report air pollution. Use our interactive tool to know how air pollution affects your community, especially pollution from oil refineries.</div>
                <a href="https://www.facebook.com/AirWatchBayArea/?ref=br_rs" target="_blank" class="btn btn-xl text-gettingstarted" style="background-color: rgb(66, 103, 178); color: white; border: none;padding:15px 25px" data-localize="title.fb">Join our Facebook page </a><br>
                <a onclick="jumpToGetStarted()" class="page-scroll btn btn-xl" style="border-color: #f7b733; background-color: #f7b733; color: white;padding:15px 25px; letter-spacing: 1px;" data-localize="title.get-started">GET STARTED</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-search
                   fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading" data-localize="service.view-air-quality">View Air Quality in Your Community</h4>
                    <a href="#loc=bay-area" class="btn btn-xl text-gettingstarted" style="margin-bottom: 0px;" data-localize="bay-area">Bay Area&nbsp;</a><br/>
                    <a href="#loc=richmond" class="btn btn-xl text-gettingstarted" style="margin-bottom: 0px;">Richmond&nbsp;</a><br/>
                    <a href="#loc=crockett-rodeo" class="btn btn-xl text-gettingstarted" style="margin-bottom: 0px;">Crockett-Rodeo&nbsp;</a><br/>
                    <a href="#loc=benicia" class="btn btn-xl text-gettingstarted" style="margin-bottom: 0px;">Benicia&nbsp;</a><br/>
                    <a href="#loc=vallejo" class="btn btn-xl text-gettingstarted" style="margin-bottom: 0px;">Vallejo&nbsp;</a><br/>
                    <a href="#loc=martinez" class="btn btn-xl text-gettingstarted" style="margin-bottom: 0px;">Martinez&nbsp;</a><br/>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-exclamation fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading" data-localize="service.report-pollution">Report Pollution to Air Watch</h4>
                    <a href="#report-pollution" class="btn btn-xl text-gettingstarted" data-localize="service.report-start">Start a report online </a>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-text-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading" data-localize="service.user-reports">User Reports</h4>
                    <a href="#user-reports" class="btn btn-xl text-gettingstarted" data-localize="service.user-view">View user-submitted reports </a>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-flag-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading" data-localize="service.resources-for-action">Resources for Action</h4>
                    <a href="#resources-for-action" class="btn btn-xl text-gettingstarted" data-localize="service.resources-view">View resources for action </a><br>
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <section style="padding: 50px 0;">
      <div class="container">
            <div class="row">
                <div class="col-lg-12 bg-light-gray" style="text-align: center;border-radius: 5px">
                  <div class="col-lg-4" style="margin:auto; padding: 10px; float: none; width: 80%">
                    <img class="img-responsive" src="img/logo.svg" style="padding: 5% 40% 0% 40%;"/>
                    <h4 class="service-heading" style="font-weight: normal;">Report pollution odor events through the <a href="https://smellmycity.org">Smell My City</a> app right when they happen.
                    </h4>
                    <video preload="" controls="" autoplay="" loop="" muted="" playsinline="" class="image-responsive" id="demo-video" style="max-width: 200px;">
                      <source src="https://smellmycity.org/vid/demo.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                    <div style="margin:auto;width:100%; min-width: 200px; max-width: 400px;">
                      <a href="https://apps.apple.com/us/app/smell-mycity/id1299801253" target="_blank"><img class="img-responsive" src="img/appstore.svg" width="40%" style="display:inline;"/></a>
                      <a href="https://play.google.com/store/apps/details?id=org.cmucreatelab.smellmycity&hl=en_US" target="_blank"><img class="img-responsive" src="img/googleplay.png" width="45%" style="display:inline"/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
              <div class="col-lg-7 col-sm-6">
                <hr class="section-heading-spacer" style="margin-top:0px"/>
                <div class="clearfix"></div>
                <h2 class="section-heading" data-localize="faq.title">faq</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-5 col-sm-6">
                <h3 style="color: #FD9453; text-transform:none;margin:25px 0" data-localize="faq.data-q">Where does the information on this website come from?</h3>
                <p class="service-heading" data-localize="faq.data-a">Most of the information comes from <a style='color: #FD9453;' href='https://fenceline.org'>fenceline.org</a>. Our site is different because it lets you see information from as far back as May 2015.<br>We also show information from air monitors set up by community members.</p>
                <h3 style="color: #FD9453; text-transform:none;margin:25px 0" data-localize="faq.health-hazard-q">How do you decide what is a dangerous amount of a chemical in the air?</h3>
                <p class="service-heading" data-localize="faq.health-hazard-a">Different groups have different standards for unhealthy amounts of various chemicals. Air Watch Bay Area uses standards from government agencies, especially the US National Ambient Air Quality Standards (NAAQS), the Agency for Toxic Substances and Diseases Registry (ATSDR), and the California Office of Environmental Health Hazard Assessment (OEHHA). For each chemical we measure, we use the lowest amount that is considered dangerous. In other words, we pick the strictest standards from the experts.</p>
              </div>
              <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <h3 style="color: #FD9453; text-transform:none;margin:25px 0" data-localize="faq.pollution-event-q">An air pollution event happened in my community, but the air monitors didn’t pick up anything. What happened?</h3>
                <p class="service-heading" data-localize="faq.pollution-event-a">Air pollution events can happen in a community but be too far from a monitor to be sensed. This can mean they don't appear on the site. What the monitors can pick up depends on where the pollution came from and the wind's speed and direction when it happened.</p>
                <h3 style="color: #FD9453; text-transform:none;margin:25px 0" data-localize="faq.schools-q">Why are schools and day-care centers included on the map?</h3>
                <p class="service-heading" data-localize="faq.schools-a">Air pollution is more dangerous for certain people, including children and older people. We show schools and day-care centers on the map so people can see how air pollution will affect them and their families.</p>
              </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
      <div class="container">
          <div class="row">
              <div class="col-lg-7 col-sm-6">
                  <hr class="section-heading-spacer" style="margin-top:0px"/>
                    <div class="clearfix"></div>
                    <h2 class="section-heading" data-localize="about.title">about</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-sm-6">
                    <p class="service-heading" data-localize="about.info">Air Watch is developed and maintained by the <a style="color: #FD9453;" href="https://www.fairtechcollective.org/">Fair Tech Collective</a> (contact: <a href="mailto:airwatchbayarea&#x40;gmail.com">airwatchbayarea&#x40;gmail.com</a>) at Drexel University in collaboration with the <a style="color: #FD9453;" href="https://cmucreatelab.org/">Community Robotics, Education, and Technology Empowerment Lab</a> at Carnegie Mellon University and concerned community members from:</p>
          <ul style="list-style-type: none; color:#FD9453;line-height:30px; padding: 0;">
            <li><a style="margin-bottom: 0; font-size: .95em" href="https://www.sustainablebenicia.org/about" class="btn btn-xl text-gettingstarted">Benicia Good Neighbor Steering Committee&nbsp;</a></li>
            <li><a style="margin-bottom: 0; font-size: .95em" href="https://crockett-rodeo-united.com/" class="btn btn-xl text-gettingstarted">Crockett-Rodeo United to Defend the Environment&nbsp;</a></li>
            <li><a style="margin-bottom: 0; font-size: .95em" href="https://rodeocitizensassociation.org/" class="btn btn-xl text-gettingstarted">Rodeo Citizens Association&nbsp;</a></li>
            <li><a style="margin-bottom: 0; font-size: .95em" href="https://laceen.org/" class="btn btn-xl text-gettingstarted">LACEEN&nbsp;</a></li>
            <li><a style="margin-bottom: 0; font-size: .95em" href="https://csi4health.wordpress.com/" class="btn btn-xl text-gettingstarted">Community Science Institute&nbsp;</a></li>
          </ul>
                </div>
                <div class="col-lg-4 col-lg-offset-1 col-sm-6" style="border-radius: 5px;background: no-repeat url('img/group-photo.jpg') 50% / 100%;">
                    <img class="img-responsive" style="vertical-align: top;width: 100%;opacity: 0;" src="img/group-photo.jpg"/>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright" data-localize='footer.copyright'>Copyright &copy; Air Watch Bay Area 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="mailto:airwatchbayarea&#x40;gmail.com" style="color:#f7b733" data-localize='footer.contact'>Contact: airwatchbayarea&#x40;gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a class="page-scroll" href="#page-top" style="color:#f7b733" data-localize:"back-to-top" data-localize='footer.back-to-top'>Back to Top</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
  </div>

  <div class="container-fluid dashboard-page full-height">
      <nav id="loc-nav" class="navbar navbar-default">
        <ul class="nav navbar-nav">
          <li class="custom-nav-btn" id="bay-area-tab">
            <a class="text-uppercase custom-nav-link no-highlight" href="#loc=bay-area" data-localize="bay-area">Bay Area</a>
          </li>
          <li class="custom-nav-btn" id="richmond-tab">
            <a class="text-uppercase custom-nav-link no-highlight" href="#loc=richmond">Richmond</a>
          </li>
          <li class="custom-nav-btn" id="crockett-rodeo-tab">
            <a class="text-uppercase custom-nav-link no-highlight" href="#loc=crockett-rodeo">Crockett-Rodeo</a>
          </li>
          <li class="custom-nav-btn" id="benicia-tab">
            <a class="text-uppercase custom-nav-link no-highlight" href="#loc=benicia">Benicia</a>
          </li>
          <li class="custom-nav-btn" id="vallejo-tab">
            <a class="text-uppercase custom-nav-link no-highlight" href="#loc=vallejo">Vallejo</a>
          </li>
          <li class="custom-nav-btn" id="martinez-tab">
            <a class="text-uppercase custom-nav-link no-highlight" href="#loc=martinez">Martinez</a>
          </li>
        </ul>
      </nav>
      <div id="map_parent" class="row">
        <div class="full-height" id="map-canvas"></div>
      </div>
      <div id="calendarMenu" class="calendar-controls">
        <div id="datepicker"></div><button class="btn custom-button time-button" onclick="grapherZoomToDay()" type="button" data-localize="dashboard.past-24-hours">Past 24 Hours</button> <button class="btn custom-button time-button" onclick="grapherZoomToWeek()" type="button" data-localize="dashboard.past-7-days">Past 7 Days</button> <button class="btn custom-button time-button" onclick="grapherZoomToMonth()" type="button" data-localize="dashboard.past-30-days">Past 30 Days</button>
      </div>
      <div id="grapher_toolbar" class="row">
        <h4 class="timeline_toolbar_label" data-localize="dashboard.timeline-toolbar">Timeline Toolbar:</h4>
        <span id="grapher_zoom" class="grapher-tool-icon" data-localize="dashboard.zoom">
          <span id="zoomGrapherOut" title="zoom out" class="fa-stack fa-2x">
            <i class="fa fa-square fa-stack-2x text-primary"></i>
            <i class="fa fa-search-minus fa-stack-1x fa-inverse"></i>
          </span>
          <span id="zoomGrapherIn" title="zoom in" class="fa-stack fa-2x">
            <i class="fa fa-square fa-stack-2x text-primary"></i>
            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
          </span>
        </span>
        <span id="play" title="play/pause" class="grapher-tool-icon" data-localize="dashboard.play-pause">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-play fa-stack-1x fa-inverse"></i>
            </span>
        </span>
        <span id="calendar" title="calendar" class="grapher-tool-icon" data-localize="dashboard.calendar">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
            </span>
        </span>
        <span id="share" title="share" class="grapher-tool-icon" onclick="generateShareLink()" data-localize="dashboard.share">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-share-square-o fa-stack-1x fa-inverse"></i>
            </span>
        </span>
        <div id="dialog" title="Share a Pollution Incident" data-localize="dashboard.share-dialogue">
          <span data-localize="dashboard.share-link">To link others to your current view, use this URL:</span><br><a id="shareLink" href="#"></a>
        </div>
        <a class="user-guide-link" href="https://docs.google.com/document/d/1RL5MGzxdswD37jXnv-9_Skl638ntj7_2OR87YZtcOoM/pub" target="_blank">
          <span id="help" title="help" class="grapher-tool-icon" data-localize="dashboard.help">
          <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-question fa-stack-1x fa-inverse"></i>
          </span>
          </span>
        </a>
      </div>
      <div id="grapher_parent" class="row">
        <table border="0" cellpadding="0" cellspacing="0" id="grapher">
          <tr class="grapher_row" id="dateAxisContainer">
            <td><div id="slider-wrapper" title="speed" class="grapher-tool-icon" data-localize="dashboard.playback-speed">
          <div id="slider"></div>
        </div></td>
            <td id="dateAxis"></td>
            <td class="border"></td>
          </tr>
        </table>
      </div>
    </div>

  <div id="report-pollution-page" class="resource-container">
    <div class="note" style="text-align: center; margin: 15px;">
      <img src="img/smell-my-city.png" style="position: relative; display:inline; height: 50px;"/>
      <h3 style="position: relative; font-weight: 50; display:inline;">
          Download&nbsp;the&nbsp;Smell&nbsp;My&nbsp;City&nbsp;App
      </h3>
      <h4 style="font-weight: 500;">
         Air Watch Bay Area is joining forces with the <a href="https://smellmycity.org">Smell&nbsp;My&nbsp;City</a> app to manage your pollution odor reports. Download the Smell My City app today!
      </h4>
      <div style="margin:auto;width:100%; min-width: 200px; max-width: 400px;">
        <a href="https://apps.apple.com/us/app/smell-mycity/id1299801253" target="_blank" rel="noopener noreferrer" style="margin:auto;width:100%; min-width: 200px; max-width: 400px;">
          <img src="img/appstore.svg" width="40%" style="display:inline;"/>
        </a>
        <a href="https://play.google.com/store/apps/details?id=org.cmucreatelab.smellmycity&hl=en_US" target="_blank" rel="noopener noreferrer" style="margin:auto;width:100%; min-width: 200px; max-width: 400px;">
          <img src="img/googleplay.png" width="45%" style="display:inline"/>
        </a>
      </div>
   </div>
    <h2 style="margin-bottom: 0; padding-bottom: 0" data-localize="report.title">Report a Pollution Incident</h2>
    <h2 style="margin-top: 0; font-size: 25px; color: gray; font-weight: 500" data-localize="report.subtitle">(i.e. flaring, odor, residue, health symptoms)</h2>
    <p class="note" data-localize="report.title-note">When you report to Air Watch Bay Area, you contribute to a <a href="#user-reports" class="underline">publicly visible "paper&nbsp;trail" of incidents.</a><br>Having this paper trail enables community members to hold Bay Area Air Quality Management District accountable.</p>

    <?php if ($_SERVER['HTTP_HOST'] != "www.airwatchbayarea.org"): ?>
      <p class="note error">THIS IS THE STAGING SITE! Reports will go to a fake server so feel free to test away.</p>
    <?php endif; ?>

    <form id="report-form">
      <div class="report-form-section">
        <!-- <label>
          <strong class="emphasis" data-localize="report.photo">Upload Photo of Incident (optional)</strong>
          <p data-localize="report.photo-multiple">Please select multiple photos one at a time.</p>
        </label>
        <input id="file-upload" class="upload_field" type="file" name="file" style="color:transparent;">
        <p class='num-file-status' data-localize="report.file-status">0</p>
        <div class="thumbnails"></div> -->

        <!-- <label class='textarea-label photo-upload'>
          <strong>Caption:</strong>
          <textarea id="caption" name="caption"></textarea>
        </label>

        <label class='textarea-label photo-upload'>
          <strong>When did this photo occur?</strong>
          <input type="datetime-local" id="photo-date" name="photo-date">
        </label> -->
        <label>
          <strong class="emphasis" data-localize="report.categories">Indicate the categories of the incident you are reporting (<i>check all that apply</i>):</strong>
        </label>
        <label class="no-highlight" style="display: inline-block;">
          <input type="checkbox" name="tag" value="odor" checked>
          <div class="tag-label" data-localize="report.categories-odor"></div>
        </label>
        <label class="no-highlight" style="display: inline-block;">
          <input type="checkbox" name="tag" value="flaring">
          <div class="tag-label" data-localize="report.categories-flaring"></div>
        </label>
        <label class="no-highlight" style="display: inline-block;">
          <input type="checkbox" name="tag" value="residue">
          <div class="tag-label" data-localize="report.categories-residue"></div>
        </label>
        <label class="no-highlight" style="display: inline-block;">
          <input type="checkbox" name="tag" value="coal">
          <div class="tag-label" data-localize="report.categories-coal"></div>
        </label>
        <label class="no-highlight" style="display: inline-block;">
          <input type="checkbox" name="tag" value="health">
          <div class="tag-label" data-localize="report.categories-health"></div>
        </label>
        <br>
        <label class="no-highlight" style="display: inline-block;">
          <input type="checkbox" name="tag" value="other" style="display: inline-block;">
          <div class="tag-label" data-localize="report.categories-other"><input type="text" name="tag-other" />​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​</div>
        </label>
      </div>
      <div class="report-form-section">
        <label>
          <strong class="emphasis required" data-localize="report.odor-rating">How bad is the odor, if any?</strong>
        </label>
        <label>
          <input type="radio" name="smell" value="1" checked>
          <div class="smell-label">
          <div class="smell-box"></div>
          <span data-localize="report.odor-rating-1">1 - Just Fine!</span></div>
        </label>
        <label>
          <input type="radio" name="smell" value="2">
          <div class="smell-label">
          <div class="smell-box"></div>
          <span data-localize="report.odor-rating-2">2 - Barely noticeable</span></div>
        </label>
        <label>
          <input type="radio" name="smell" value="3">
          <div class="smell-label">
          <div class="smell-box"></div>
          <span data-localize="report.odor-rating-3">3 - Definitely noticeable</span></div>
        </label>
        <label>
          <input type="radio" name="smell" value="4">
          <div class="smell-label">
          <div class="smell-box"></div>
          <span data-localize="report.odor-rating-4">4 - It's getting pretty bad</span></div>
        </label>
        <label>
          <input type="radio" name="smell" value="5">
          <div class="smell-label">
          <div class="smell-box"></div>
          <span data-localize="report.odor-rating-5">5 - About as bad as it gets!</span></div>
        </label>

        <label class='location-label'>
          <strong class="emphasis required" data-localize="report.address">What is the cross street or address of the odor or incident?</strong><br><input class="required" type="text" id="address"  name="location" placeholder="e.g. at the corner of 7th and Hensley" emphasis required data-localize="report.address-input"/>
        </label>

        <label class='textarea-label'>
          <strong data-localize="report.describe-odor">Describe the odor and/or incident:</strong>
          <textarea name="describe-air" value="" placeholder="e.g. flaring, residue, exhaust, sulfur, wood smoke, rotten-eggs" data-localize="report.describe-odor-input"></textarea>
        </label>

        <label class='textarea-label'>
          <strong data-localize="report.symptoms">What health symptoms are you experiencing, if any? </strong>
          <textarea id="symptoms" name="symptoms" placeholder="e.g. headache, sore throat, eye irritation" data-localize="report.symptoms-input"></textarea>
        </label>

        <label class='textarea-label'>
          <strong data-localize="report.additional-comments">Additional comments:</strong>
          <textarea id="additional-comments" name="additional-comments"></textarea>
        </label>
      </div>
      <input id="report-submit" class="report-button no-highlight" type="submit" >
      <div class="progress_wrapper photo-upload">
      <div class="progress_bar">
        <div class="progress_text">
      </div></div></div>
    </form>

    <div id="uploading" class="uploading note" data-localize="report.uploading">
      Uploading your report...
      <div id="upload-spinner"></div>
    </div>

    <div id="upload-error" class="error note">
      <p id="upload-error-message"></p>
      <p id="error-resolution"></p>
      <p data-localize="report.upload-error">If you cannot resolve this error, please take screenshots of your entire report and email <a href="mailto:airwatchbayarea&#x40;gmail.com?Subject=AWBA Error Report" target="_top">airwatchbayarea&#x40;gmail.com</a> and we will get back to you shortly!</p>
    </div>

    <div id="submit-success">
      <p class="success note" data-localize="report.upload-success">Your submission was a success! Thank you for reporting.<br><a href="https://permits.baaqmd.gov/PublicForms/ComplaintWizardSelection" class="underline" onclick="trackOutboundLink('https://permits.baaqmd.gov/PublicForms/ComplaintWizardSelection');">Click here to make a report to the BAAQMD site.</a>
      </p>
      <a href="#user-reports"><div class="report-button no-highlight" data-localize="report.view-submission">view submission</div></a>
      <div id="submit-another-report" class="report-button no-highlight" data-localize="report.submit-another">submit another report</div>
    </div>
    <p class="note" data-localize="report.note-bottom">You should also report this pollution event to BAAQMD through <a href='https://permits.baaqmd.gov/PublicForms/ComplaintWizardSelection' class='underline' onclick="trackOutboundLink('https://permits.baaqmd.gov/PublicForms/ComplaintWizardSelection');">its&nbsp;website</a>. We cannot send your report to BAAQMD.</p>
  </div>

  <div class="full-page full-height" id="user-reports-page">
    <div class="back-to-top report-button no-highlight" onclick="scrollToTop()" data-localize="footer.back-to-top">Back To Top</div>
    <div id="photos-container" class="resource-container">
      <div class="note" style="text-align: center; margin: 15px;">
        <img src="img/smell-my-city.png" style="position: relative; display:inline; height: 50px;"/>
        <h3 style="position: relative; font-weight: 50; display:inline;">
            Download Smell&nbsp;My&nbsp;City&nbsp;Reports
        </h3>
        <h4 style="font-weight: 500;">
           Air Watch Bay Area is joining forces with the <a href="https://smellmycity.org">Smell&nbsp;My&nbsp;City</a> app to manage your pollution odor reports. Visit the <a href="https://smellmycity.org/data">Smell My City website</a> to download reports from Smell My City.
        </h4>
      </div>
      <h2 data-localize="user-reports.title">User Reports:</h2>
      <div id="reports-toolbar">
        <label>
          <span data-localize="user-reports.sort-by">Sort by:</span>
          <select name="sort">
            <option value="posted" data-localize="user-reports.posted-date">Posted Date</option>
            <!-- <option value="when">When It Occured</option> -->
            <option value="type" data-localize="user-reports.pic-on-top">Pictures On Top</option>
            <option value="smell_value" data-localize="user-reports.odor-severity">Odor Severity</option>
          </select>
        </label>
        <br>
        <label>
          Show:
        </label>
        <label>
          <input type="radio" name="filter" value="" checked>
          <div class="tag-label" data-localize="user-reports.all">All</div>
        </label>
        <label>
          <input type="radio" name="filter" value="odor">
          <div class="tag-label" data-localize="user-reports.odor">Odor</div>
        </label>
        <label>
          <input type="radio" name="filter" value="flaring">
          <div class="tag-label" data-localize="user-reports.flaring">Flaring</div>
        </label>
        <label>
          <input type="radio" name="filter" value="residue">
          <div class="tag-label" data-localize="user-reports.residue">Residue</div>
        </label>
        <label>
          <input type="radio" name="filter" value="health">
          <div class="tag-label" data-localize="user-reports.health">Health</div>
        </label>
        <label>
          <input type="radio" name="filter" value="Coal">
          <div class="tag-label" data-localize="user-reports.coal">Coal</div>
        </label>
        <label>
          <input type="radio" name="filter" value="other">
          <div class="tag-label" data-localize="user-reports.other​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​">Other​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​</div>
        </label>
        <h5 class="result-count">0 of 0 (loading...)</h5>
      </div>
      <div id="posts"></div>
      <div id="spinner"></div>
      <h4 style="text-align: center;" data-localize="user-reports.scroll-load">(Scroll Down to Load More)</h4>
    </div>
  </div>

    <div class="full-page full-height" id="resources-for-action-page">
      <div class="back-to-top report-button no-highlight" onclick="scrollToTop()" data-localize="footer.back-to-top">Back To Top</div>
      <div class="resource-container">
        <h2 data-localize="resources-for-action.title">Resources for Action</h2>
      <nav role="navigation" class="table-of-contents">
         <ul>
        </ul>
        <div id="resources-spinner"></div>
      </nav>
      </div>
    </div>
</body>
</html>