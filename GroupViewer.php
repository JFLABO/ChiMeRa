<?php
require_once('parts/ChiMeRaClassV0.php');
$UT2=new ChiMeRa_emacs_class();
 ?>
<html><head>
  <!--
    <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  	<link rel="stylesheet" href="./lib/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
  	<script src="./lib/jquery-3.3.1.min.js"></script>
  	<script src="./lib/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
  -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<?php
require_once('parts/ChiMeRaClassV0.php');
$UT2=new ChiMeRa_emacs_class();
 ?>
<Body>
  <div role="main" class="ui-content jqm-content" data-quicklinks="true">
    <div data-role="page" id="top">
    	<div data-role="header">
    		<h1>DEMOページ</h1>
    	</div>
    	<div role="main" class="ui-content">
    		<?php $UT2->show_file();?>
    	</div>
    	<div data-role="footer">
    		<a href="#" class="ui-btn ui-icon-home ui-btn-icon-left">ホーム</a>
    		<a href="#" class="ui-btn ui-icon-gear ui-btn-icon-left">設定</a>
    	</div>
    </div>
  </div>
