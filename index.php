<?php 
require_once('parts/ChiMeRaClassV0.php');
$UT2=new ChiMeRa_emacs_class();
$Title=$UT2->get_title();
//$Title="JFLABO::TechBlog（ジェイエフラボのテックブログ）　->Emacsチュートリアル 2013";
$Title_min="JFLABO::ChiMeRa";
///ChiMeRa/api/json.php?param=JFLABO::ChiMeRa::Hinagata2　で記事をjsonフォーマットに変換する機能を追加しました
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="今度のお休みどこいこう">
<link rel="shortcut icon" href="parts/favicon.ico">
<meta name="keywords" content="JFLABO,tabirepo,PJFS,pcraft,JFラボ,旅レポ,ジェイエフラボ,Emacs">

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="parts/tbrp3.css" type="text/css" media="screen" />

<title><?php echo $Title;?></title>

</head>
<body class="oneColLiqCtrHdr">
<div id="container">
  <div id="header">
<h1 class="style1"><?php echo $Title_min;?></h1>
  <!-- end #header --></div>
<div id="line">
<div align="right" class="style5">　</div>
<!-- end #header --></div>
<?php readfile('parts/cmd_tb.html') ;?>
<!-- end #header --></div>
  <div id="mainContent">
    <table width="906" border="0" cellpadding="1" cellspacing="1" bordercolor="#999999" bgcolor="#666666">
      <tr>
        <td width="899" colspan="2" align="center" background="parts/efbar.jpg" bgcolor="#333333">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="center" bgcolor="#333333" style="color:white;">
		JFLABO::ChiMeRa　ジェエフラボのキメラ 試作版[a-0.3]<br>
コンセプト・理念など：例)いい状態を長く維持する<BR>
社内通信：業務に役に立ちそうな事柄を集約<BR>
</td>
      </tr>
      <tr>
        <td colspan="2" background="parts/efbar.jpg" bgcolor="#333333">&nbsp;</td>
      </tr>
     </table>
     <BR />
    <table width="909" height="18" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="655" valign="top" align="left">
        
<?php $UT2->show_file();?>
        </td>
        <td width="251" valign="top" >

<div id="nav" style="background-color:white;display:inline-block;height:515px;width:246px;text-align:center;vertical-align:top;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;">
    <div style="padding:5px 0px 2px 0px; height:5px;background-color:black;width:100%;"></div>
    <BR>
NAVI
    <div class="btn_top">ページ上部へ</div><BR>
<?php 
	    //右メニュー部分の生成
	    //ChiMeRa/parts/ChiMeRaClassV0.php
	    $UT2->show_list();
	    ?>

</div>    
         </td></table><BR><BR>

<script type="text/javascript">
var nav    = $('#nav'),
    offset = nav.offset();
$(window).scroll(function () {
  if($(window).scrollTop() > offset.top - 20) {
    nav.addClass('fixed');
  } else {
    nav.removeClass('fixed');
  }
});

$(function() {
	//ページ内スクロール
	$(".btn_sample").click(function () {
		var i = $(".btn_sample").index(this)
		var p = $(".content").eq(i).offset().top;
		$('html,body').animate({ scrollTop: p }, 'fast');
		return false;
	});
	//ページ上部へ戻る
	$(".btn_top").click(function () {
		$('html,body').animate({ scrollTop: 0 }, 'fast');
		return false;
	});
});

</script>

  <!-- end #mainContent --></div>
  <div id="footer">
  <div align="right"><span class="style2">powered by JFLABO</span>
  </div>
<!-- end #footer --></div>
<!-- end #container --></div>
</body>
</html>
