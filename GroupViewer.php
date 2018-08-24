<html><head>
    <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  	<link rel="stylesheet" href="./lib/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css">
  	<script src="./lib/jquery-3.3.1.min.js"></script>
  	<script src="./lib/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<?php
require_once('parts/ChiMeRaClassV0.php');
$UT2=new ChiMeRa_emacs_class();
 ?>
<Body>
  <div role="main" class="ui-content jqm-content">
    <div data-role="header" data-theme="b">
       <a href="index.html" class="ui-btn ui-btn-a ui-btn-left">Home</a>
       <a href="help.htmll" class="ui-btn ui-btn-a ui-btn-right">About</a>
    </div>
		<div data-demo-html="true">
			<a href="#" class="ui-btn">Anchor</a>
		</div>
    <?php
    //スマートホン向け情報共有ツール（ビューアー）
    //JSONを読んでスマートホン向けに表示して情報共有する
    $UT2->show_file();?>
  </div>
  <div data-role="footer">
  		<h4>Footer content</h4>
  	</div><!-- /footer -->
