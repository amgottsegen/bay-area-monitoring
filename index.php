<?php
require 'cloudinary_src/Cloudinary.php';
require 'cloudinary_src/Uploader.php';
require 'cloudinary_src/Api.php';
include 'cloudinary_settings.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Air Watch: Bay Area</title>
  <meta content="text/html; charset=utf-8" http-equiv="content-type">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/favicon.ico" rel="icon" type="image/x-icon">
  <link href="assets/timemachine-viewer/css/jquery-ui/smoothness/jquery-ui.custom.css" media="screen" rel="stylesheet" type="text/css">
  <link href="assets/css/application.css" media="screen" rel="stylesheet" type="text/css">
  <link href="assets/css/landing.css" media="screen" rel="stylesheet" type="text/css">

  <link href="assets/css/dashboard.css" media="screen" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="assets/timemachine-viewer/js/jquery/jquery.min.js" type="text/javascript">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
  </script>
  <script src="assets/timemachine-viewer/js/jquery/jquery-ui.custom.min.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/jquery/plugins/mouse/jquery.mousewheel.min.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/util.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/videoset.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/parabolicMotion.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/timelapse.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/Math.uuid.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/snaplapse.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/snaplapseViewer.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/defaultUI.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/crossdomain_api.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/js/org/gigapan/timelapse/timelineMetadataVisualizer.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/template_includes.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/libs/change-detect/js/ThumbnailServiceAPI.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/libs/change-detect/js/TimeMachineCanvasLayer.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/libs/change-detect/js/ThumbnailTool.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/libs/change-detect/js/BoxEventHandler.js" type="text/javascript">
  </script>
  <script src="assets/timemachine-viewer/libs/change-detect/js/ChangeDetectionTool.js" type="text/javascript">
  </script>
  <script src="http://tiles.cmucreatelab.org/ecam/timemachines/shenango1/shenango1.js" type="text/javascript">
  </script>
  <script src="assets/js/jquery.xdomainrequest.min.js" type="text/javascript">
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbv3SgWdKhgZWNhHVy8QXfYFCSONWj2Jk&libraries=places" type="text/javascript">
  </script>
  <script src="Promise.js">
  </script>
  <script src="assets/js/maplabel-compiled.js" type="text/javascript">
  </script>
  <script src="assets/grapher.min.js" type="text/javascript">
  </script>
  <script src="assets/PlotManager.js" type="text/javascript">
  </script>
  <script src="map.js">
  </script>
  <script src="smell.js">
  </script>
  <script src="feeds.js">
  </script>
  <script src="assets/data-visualization-tools/js/CanvasLayer.js">
  </script>
  <script src="summaryDialog.js" type="text/javascript">
  </script>
  <script src="md5.js" type="text/javascript">
  </script>
  <script src="report.js" type="text/javascript">
  </script>
  <script src="landing.js" type="text/javascript">
  </script>
  <script src="dashboard.js" type="text/javascript">
  </script>
  <script src='jquery.min.js' type='text/javascript'></script>
  <script src='jquery.ui.widget.js' type='text/javascript'></script>
  <script src='jquery.iframe-transport.js' type='text/javascript'></script>
  <script src='jquery.fileupload.js' type='text/javascript'></script>
  <script src='jquery.cloudinary.js' type='text/javascript'></script>
</head>
<body>
  <nav class="navbar navbar-default custom-nav">
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li class="custom-nav-btn active" id="intro">
          <a class="text-uppercase custom-nav-link-active" href="#home">Introduction</a>
        </li>
        <li class="custom-nav-btn" id="richmond">
          <a class="text-uppercase custom-nav-link" href="#loc=richmond">Richmond</a>
        </li>
        <li class="custom-nav-btn" id="crockett-rodeo">
          <a class="text-uppercase custom-nav-link" href="#loc=crockett-rodeo">Crockett-Rodeo</a>
        </li>
        <li class="custom-nav-btn" id="benicia">
          <a class="text-uppercase custom-nav-link" href="#loc=benicia">Benicia</a>
        </li>
        <li class="custom-nav-btn" id="report-air" onclick="openReportDialog()">
          <a class="text-uppercase custom-nav-link">Report Smell</a>
        </li>
        <li class="custom-nav-btn" id="report" onclick="openSummaryDialog()">
          <a class="text-uppercase custom-nav-link">Print Daily Summary</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="summaryDialog" title="Print Daily Summaries">
    To print or download yesterday's air quality summary, select your community below:<br>
    <a href="reports/yesterday/Atchison_Village.html" target="_blank">Atchison Village</a><br>
    <a href="reports/yesterday/Point_Richmond.html" target="_blank">Point Richmond</a><br>
    <a href="reports/yesterday/North_Richmond.html" target="_blank">North Richmond</a><br>
    <a href="reports/yesterday/Rodeo.html" target="_blank">Rodeo</a><br>
    <br>
    Or you can browse archived air quality summaries by day <a href="reports/archived/" target="_blank">here</a>
  </div>
  <div id="reportDialog" title="Report Smell">
    <strong>How does your air smell right now?</strong>
    <form id="report-form">
       <label class="smell-label"><input type="radio" name="smell" value="1" checked><div class="smell-box"></div>1 Just Fine!</label>
       <br>
       <label class="smell-label"><input type="radio" name="smell" id="r2" value="2"><div class="smell-box"></div>2 Barely noticeable</label>
       <br>
       <label class="smell-label"><input type="radio" name="smell" value="3"><div class="smell-box"></div>3 Definitely noticeable</label>
       <br>
       <label class="smell-label"><input type="radio" name="smell" value="4"><div class="smell-box"></div>4 It's getting pretty bad</label>
        <br>
       <label class="smell-label"><input type="radio" name="smell" value="5"><div class="smell-box"></div>5 About as bad as it gets!</label>
       <br>
       <label class='textarea-label'>Describe the smell or source of odor<br>
         <input type="text" name="describe-air" placeholder="e.g. industrial, woodsmoke, rotten-eggs">
       </label>
       <br>
       <label class='textarea-label'>Any symptoms linked to odor?<br><input type="text" id="symptoms" name="symptoms" placeholder="e.g. headache, sore throat, eye irritation"></label>
       <br>
       <label class='location-label'>Current Location:<br><input id="address" type="text" name="location" placeholder="e.g. at the corner of 7th and Hensley" required></label>
       <br>
       <label class='textarea-label'>Additional comments:<br><input type="text" id="additional-comments" name="additional-comments"></label>
       <br>
       <input id="report-submit" class="report-button no-highlight" type="submit" >
    </form>
    <div id="submit-success">
      <p>Your submissions was a sucess! Thank you for reporting.</p>
       <p><a href="https://permits.baaqmd.gov/PublicForms/ComplaintWizardSelection" target="_blank">Click here to make a report to the BAAQMD.</a></p>
      <div id="submit-another-report" class="report-button no-highlight">submit another report</div>
      <div id="close-report" class="report-button no-highlight">close</div>
    </div>
  </div>

  <div class="landing" id="introduction-wrapper">
    <!-- <div class="carousel slide" data-ride="carousel" id="pics"> -->
      <!-- <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#pics"></li>
        <li data-slide-to="1" data-target="#pics"></li>
        <li data-slide-to="2" data-target="#pics"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active"><img src="assets/images/panorama_refinery.jpg"></div>
        <div class="item"><img src="assets/images/Richmond_PAN1.jpg"></div>
        <div class="item"><img src="assets/images/BENECIA_PAN_2.jpg"></div>
      </div> -->
      <div class="site-title">
        <div class="background-image"></div>
        <div class="text-center text-uppercase site-title-text">
          AIR WATCH
          <div class="subheading">
            BAY AREA
          </div>
        </div>
        <div id="carousel-padding">
          <div id="carousel-buttons">
            <div class="small-circle selected" data-img="assets/images/panorama_refinery.JPG"></div>
            <div class="small-circle" data-img="assets/images/Richmond_PAN1.jpg"></div>
            <div class="small-circle" data-img="assets/images/BENECIA_PAN_2.jpg"></div>
          </div>
        </div>
      </div>
    <!-- </div> -->
    <div class="container custom-container">
      <h2 class="text-center">Air Watch is an interactive tool for the fenceline communities of the San Francisco Bay Area to explore our air quality data.</h2><br>
      <div class="row">
        <div class="col-lg-7">
          <div class="panel">
            <h3>Get Started</h3>
            <p>To <strong>view air pollution in your community</strong>, select the corresponding tab at the top of the page.</p>
            <p>To <strong>report pollution odors</strong> to Air Watch: Bay Area, download our mobile app for <a href="https://itunes.apple.com/us/app/air-watch-bay-area/id1194566633?mt=8" target="_blank">iOS</a> or <a href="https://play.google.com/store/apps/details?id=org.cmucreatelab.smell_pgh.bay_area&hl=en" target="_blank">Android</a>. You can also file a complaint with the Bay Area Air Quality Management District <a href="https://permits.baaqmd.gov/PublicForms/ComplaintWizardSelection" target="_blank">here</a>.</p>
            <p>To <strong>print or download a daily air quality summary</strong>, click the "Print Daily Summary" tab above. To subscribe to daily summaries when air quality was worse than average, click <a href="http://groups.google.com/group/airwatchbayarea/boxsubscribe" target="_blank">here</a>.</p>
          </div>
          <div class="panel">
            <h3>Capture Incidents</h3><img class="img-responsive" src="assets/images/data-page-scrnshot.JPG"><br>
            <p>All the chemicals monitored on our site are linked with an array of adverse health effects— and are known byproducts of refinery processes. Spikes in the readings of these chemicals, paired with wind blowing from the direction of the refinery, indicate a potentially hazardous pollution event.</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="panel">
            <h3>FAQ</h3>
            <p><strong>Where does the data come from?</strong><br>
            Most of the data on our site comes from <a href="http://www.fenceline.org" target="_blank">fenceline.org</a> . Unlike fenceline.org, however, our site displays archived data as far back as May 2015. The rest comes from BAAQMD monitors or inexpensive monitors set up by community members.</p><br>
            <p><strong>Who decides what level of a given chemical constitutes a health hazard?</strong><br>
            Health limits vary widely between governmental agencies. Our site uses figures from the US National Ambient Air Quality Standards (NAAQS), the Agency for Toxic Substances and Diseases Registry (ATSDR), and the California Office of Environmental Health Hazard Assessment (OEHHA). In the interest of public health, we chose the lowest figures that were deemed hazardous for each chemical.</p><br>
            <p><strong>An air pollution event occurred in my community, but the monitors didn't pick up anything. What happened?</strong><br>
            Events that occur outside the range of the sensors may not appear on the site. What the monitors pick up depends highly on the location of the pollution source, and the wind speed and direction at the time of the event.</p><br>
            <p><strong>Why are schools included on the map?</strong><br>
            Air pollution carries higher risks for vulnerable populations—which includes children and the elderly. Because our aim is to contextualize air pollution data in how it impacts real people, we wanted residents to be able to see whether an air pollution event might impact their children.</p>
          </div>
        </div>
      </div><!--<div class="row">
        <div class="col-sm-12">
          <div class="panel">
            <!==<div class="row">
              <div class="col-sm-3 text-center">
                <h3 class="vertical-center">Stay Connected</h3>
              </div>
              <div class="col-sm-5">
                <p class="vertical-center">To sign-up for email updates about the latest features and
                improvements on our site, enter your email address here:</p>
              </div>
              <div class="col-sm-4 text-center">
                <input disabled="true">
                <span class="label label-danger" style="font-size:15px">Coming Soon!</span>
              </div>
            </div>
          </div>
        </div>
      </div>-->
      <div class="row">
        <div class="col-sm-5">
          <div class="panel" style="max-height: 650px">
            <h3>What's New</h3>
            <div class="scroll-panel" id="newFeaturesContainer"></div>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="panel">
            <h3>About Us</h3><img class="img-responsive" src="assets/images/group-photo.jpg"><br>
            <p>Air Watch is developed and maintained by the <a href="https://www.fairtechcollective.org/" target="_blank">Fair Tech Collective</a> at Drexel University in collaboration with the <a href="http://cmucreatelab.org/" target="_blank">Community Robotics, Education, and Technology Empowerment Lab</a> at Carnegie Mellon University and concerned community members from:</p>
            <ul>
              <li>Benicia Good Neighbor Steering Committee</li>
              <li>
                <a href="https://crockett-rodeo-united.com/" target="_blank">C.R.U.D.E. (Crockett-Rodeo United to Defend the Environment)</a>
              </li>
              <li>
                <a href="http://laceen.org/" target="_blank">LACEEN</a>
              </li>
              <li>
                <a href="https://csi4health.wordpress.com/" target="_blank">Community Science Institute</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- <div id="dashboard-wrapper"> -->
    <div id="timelapse_parent" class="dashboard" style="height: 0px; display:none">
      <div id="loading"><img alt="loading" height="250" id="loadingImg" src="assets/images/loading.gif" width="358"></div>
      <div id="tutorialDialog" title="A Tour for the Shenango Channel"></div>
      <div class="no-select" id="locationTitle"></div>
      <div class="timelapse_feed_embed" id="timelapse_feed">
        <div id="timeMachine" style=""></div>
      </div>
      <div class="image_feed_embed no-select" id="image_feed">
        <div class="image-zoom-wrapper image-zoom-wrapper-embed" id="stitched_image_wrapper">
          <div id="zoom-in" title="Zoom in">
            <p>+</p>
          </div>
          <div id="zoom-out" title="Zoom out">
            <p>_</p>
          </div><img alt="Latest Stitch" class="image-zoom" id="stitched_image" src="#"> <span id="image_feed_timestamp">03/09/2015 03:16 PM</span>
        </div>
      </div>
    </div><!-- end timelapse things -->
    <div class="container-fluid dashboard" style="height:calc(100% - 50px)">
      <button class="custom-button" id="help-btn" onclick="openNav()">Help</button>
      <div class="row guide-expanded" id="guide">
        <div class="col-sm-2 guide-col full-height">
          <div class="guide-icon-circle custom-button">
            <span class="glyphicon glyphicon-map-marker guide-icon" style="left:9px"></span>
          </div>
          <div class="guide-text">
            Choose a monitor on the map to see a graph of chemical levels at that location. <a data-content="&lt;ul&gt;&lt;li&gt;The numbers on the right tell you chemical concentrations in ppb unless otherwise noted.&lt;/li&gt; &lt;li&gt;When the line is in the 'red zone' it is above a health-based screening level. &lt;a href='.'&gt;&lt;i&gt;(Where do the levels come from?)&lt;/i&gt;&lt;/a&gt; &lt;/li&gt; &lt;li&gt;When there's no line, chemical levels are below the detection limit of the monitor. &lt;a href='.'&gt;&lt;i&gt;(What does that mean?)&lt;/i&gt;&lt;/a&gt; &lt;/li&gt; &lt;li&gt;When the line is in the 'gray area', chemicals have been detected in the air, and it's difficult to say whether the levels could harm you. &lt;a href='.'&gt;&lt;i&gt;(Why don't we know?)&lt;/i&gt;&lt;/a&gt; &lt;/li&gt;&lt;/ul&gt;" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="focus" tabindex="0" title="Reading the Graphs &lt;span class='dismiss-popover'&gt;&times;&lt;/span&gt;"><i class=".btn">(more)</i></a>
          </div><span class="glyphicon glyphicon-menu-right guide-arrow"></span>
        </div>
        <div class="col-sm-2 guide-col full-height">
          <div class="guide-icon-circle custom-button">
            <span class="glyphicon glyphicon-menu-hamburger guide-icon" style="left:10px"></span>
          </div>
          <div class="guide-text">
            Use the tabs on the right side of the map to open the calendar, animation menu, or legend.
          </div><span class="glyphicon glyphicon-menu-right guide-arrow"></span>
        </div>
        <div class="col-sm-2 guide-col full-height">
          <div class="guide-icon-circle custom-button">
            <span class="glyphicon glyphicon-calendar guide-icon" style="left:12px"></span>
          </div>
          <div class="guide-text">
            Choose a date on the calendar to jump to that day and see what was in the air.
          </div><span class="glyphicon glyphicon-menu-right guide-arrow"></span>
        </div>
        <div class="col-sm-2 guide-col full-height">
          <div class="guide-icon-circle custom-button">
            <span class="glyphicon glyphicon-hand-up guide-icon" style="left:9px"></span>
          </div>
          <div class="guide-text">
            Click on any peak on the graph to see on the map which direction chemicals were coming from.
          </div><span class="glyphicon glyphicon-menu-right guide-arrow"></span>
        </div>
        <div class="col-sm-2 guide-col full-height">
          <div class="guide-icon-circle custom-button">
            <span class="glyphicon glyphicon-play-circle guide-icon" style="left:11px"></span>
          </div>
          <div class="guide-text">
            Click the play button to see how wind direction changes with chemical levels. <a data-content="You can adjust the slider for faster or slower playback" data-html="true" data-placement="bottom" data-toggle="popover" data-trigger="focus" tabindex="0" title="Tip &lt;span class='dismiss-popover'&gt;&times;&lt;/span&gt;"><i>(more)</i></a>
          </div><span class="glyphicon glyphicon-menu-right guide-arrow"></span>
        </div>
        <div class="col-sm-2 guide-col full-height">
          <div class="guide-icon-circle custom-button">
            <span class="glyphicon glyphicon-share guide-icon" style="left:12px"></span>
          </div>
          <div class="guide-text">
            See a pollution event? Zoom the graph into it, and share it with our <a onclick="generateShareLink()">custom link generator.</a>
          </div>
        </div>
        <div id="dialog" title="Share a Pollution Incident">
          To link others to your current view, use this URL: <input id="shareLink" type="text">
        </div><a class="guide-dismiss" onclick="toggleGuide()">&times;</a> <span class="guide-expand glyphicon glyphicon-option-horizontal" onclick="toggleGuide()"></span>
      </div>
      <div class="row" id="dataRow" style="height:calc(100% - 150px)">
        <div class="col-md-6 custom-col full-height" id="grapher_parent">
          <table border="0" cellpadding="0" cellspacing="0" class="full-height" id="grapher">
            <tr class="grapher_row" id="dateAxisContainer">
              <td class="playContainer"><button class="axesControls custom-button" id="zoomGrapherIn" title="Zoom in the graphs"><span class="glyphicon glyphicon-plus"></span></button> <button class="axesControls custom-button" id="zoomGrapherOut" title="Zoom out the graphs"><span class="glyphicon glyphicon-minus"></span></button> <button class="axesControls custom-button" onclick="toggleYAxisAutoScaling()" title="Toggle Autoscaling of Y Axes"><span class="ui-icon ui-icon-locked" id="auto_scale_toggle_button"></span></button></td>
              <td id="dateAxis"></td>
              <td class="border"></td>
            </tr>
          </table>
        </div>
        <div class="col-md-6 custom-col full-height" id="map_parent">
          <div class="full-height" id="map-canvas"></div>
          <div class="left-collapse-menu collapsed" id="menuContainer">
            <div class="control-tab custom-button" onclick="toggleMenu(this,'#calendarMenu')" style="top: 30px">
              <span class="glyphicon glyphicon-calendar"></span>
            </div>
            <div class="control-tab custom-button" onclick="toggleMenu(this,'#playbackMenu')" style="top: 82px">
              <span class="glyphicon glyphicon-play-circle"></span>
            </div>
            <div class="control-tab custom-button" onclick="toggleMenu(this,'#legendMenu')" style="top: 134px">
              <span class="glyphicon glyphicon-info-sign"></span>
            </div>
            <div class="menu" id="calendarMenu">
              <div class="calendar-controls">
                <div id="datepicker"></div><button class="btn custom-button time-button" onclick="grapherZoomToDay()" type="button">Past 24 Hours</button> <button class="btn custom-button time-button" onclick="grapherZoomToWeek()" type="button">Past 7 Days</button> <button class="btn custom-button time-button" onclick="grapherZoomToMonth()" type="button">Past 30 Days</button>
              </div>
            </div>
            <div class="menu" id="playbackMenu">
              <div class="playBackContainer" id="playbackButtons">
                <button class="playbackBtn custom-button" id="play" style="float:left" title="Play"><span class="glyphicon glyphicon-play" id="playIcon"></span></button>
                <div id="slider" style="float:right"></div>
              </div>
              <div class="playback-help-text">
                <i>Tip: You can also play and pause using the spacebar</i>
              </div>
            </div>
            <div class="menu" id="legendMenu"></div>
          </div>
        </div>
      </div>
      <div class="row" id="fencelineInfo">
        To view our source of real-time air quality data, please visit <a href="http://www.fenceline.org">fenceline.org</a>
      </div>
    </div><!-- The overlay -->
    <div class="overlay" id="myNav">
      <!-- Button to close the overlay navigation -->
      <a class="closebtn" href="javascript:void(0)" onclick="closeNav()">&times;</a> <!-- Overlay content -->
      <div class="overlay-content">
        <iframe allowfullscreen frameborder="0" height="360" src="https://www.youtube.com/embed/urmohTX7928" width="640"></iframe>
      </div>
    </div>
  <!-- </div> -->
</body>
</html>