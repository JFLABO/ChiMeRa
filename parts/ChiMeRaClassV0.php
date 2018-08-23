<?php
/**
 * ChiMeRaの関数群 試作　第1版　(Alpha-01)
 * [Framework MicroCode]
 * @link       http://pjfs.biz
 *
 * @category   internet_system
 * @package    JFLABO
 * @copyright  JFLABO 
 * @license    JFLABO  License Ver. 3.0
 * @version    a-0.3
 * @link       http://pjfs.biz
 * @access     public
 */

/**
 * ChiMeRaの関数群
 * @category   internet_system
 * @package    JFLABO
 * @copyright  JFLABO 
 * @license    JFLABO  License Ver. 3.0
 * @version    a-0.3
 */
class ChiMeRa_emacs_class{
		//分かりやすさ重視でwebディレクトリにdataファイルを置いてありますが
		//セキュリティを高めたければwebアクセス出来ないところに移動してください

private $data_source = "./data/emacs_turorial_jp.chimera";
private $data_source_b = "./data/your_note.chimera";
private $data_source_c = "./data/hinagata1.chimera";
private $data_source_d = "./data/hinagata2.chimera";
private $data_source_e = "./data/necessary_thing.chimera";
private $data_source_f = "./data/hinagata4.chimera";
private $data_source_g = "./data/hinagata5.chimera";
private $data_source_h = "./data/hinagata6.chimera";
private $data_source_i = "./data/hinagata7.chimera";
private $data_source_j = "./data/hinagata8.chimera";
private $data_source_k = "./data/hinagata9.chimera";
private $data_source_l = "./data/hinagata10.chimera";
private $data_source_m = "./data/hinagata11.chimera";
private $data_source_n = "./data/hinagata12.chimera";

function show_list(){
	  //右のメニュータイルに表示するリンクを変えたいときはここを編集してください
	  echo '<a href="./?param=JFLABO::ChiMeRa::Your Note">Your Note</a><BR>';
	  echo '<a href="./?param=EmacsTips チュートリアル 2013">Emacs Tutorial</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata">ひながた</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata2">ひながた2</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::necessary_thing">あなたに必要なもの</a><BR><BR>';

	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata4">社内ニュース</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata5">経営方針</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata6">企画部</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata7">営業部</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata8">技術部</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata9">IR情報</a><BR><br>';

	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata10">問題提起・課題</a><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata11">推薦図書</a><BR><BR>';
	  echo '<a href="./?param=JFLABO::ChiMeRa::Hinagata12">[R&D]</a><BR>';
}
	
public $title="JFLABO::ChiMeRa->EmacsTips チュートリアル 2013";
//ページタイトルを変えたいときはここを編集してください
function get_title(){
			if(isset($_GET['param'])){
					if($_GET['param']=="EmacsTips チュートリアル 2013"){
							$this->title="JFLABO::ChiMeRa->EmacsTips チュートリアル 2013";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Your Note"){
							$this->title="JFLABO::ChiMeRa->Your Note";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata"){
							$this->title="JFLABO::ChiMeRa->Hinagata";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata2"){
							$this->title="JFLABO::ChiMeRa->Hinagata2";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata3"){
							$this->title="JFLABO::ChiMeRa->necessary_thing";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata4"){
							$this->title="JFLABO::ChiMeRa->Hinagata4";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata5"){
							$this->title="JFLABO::ChiMeRa->Hinagata5";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata6"){
							$this->title="JFLABO::ChiMeRa->Hinagata6";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata7"){
							$this->title="JFLABO::ChiMeRa->Hinagata7";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata8"){
							$this->title="JFLABO::ChiMeRa->Hinagata8";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata9"){
							$this->title="JFLABO::ChiMeRa->Hinagata9";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata10"){
							$this->title="JFLABO::ChiMeRa->Hinagata10";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata11"){
							$this->title="JFLABO::ChiMeRa->Hinagata11";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata12"){
							$this->title="JFLABO::ChiMeRa->Hinagata12";
					}else{
							//
					}
			}else{
					//
			}
			return $this->title;
}

	function show_file(){
			//不正実行対策の為ファイル名は登録制　
			//安全な場合はファイル名可変に変更する案もある
			if(isset($_GET['param'])){
					if($_GET['param']=="EmacsTips チュートリアル 2013"){
							$S=file_get_contents($this->data_source);
							$this->title="JFLABO::ChiMeRa->EmacsTips チュートリアル 2013";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Your Note"){
							$S=file_get_contents($this->data_source_b);
							$this->title="JFLABO::ChiMeRa->Your Note";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata"){
							$S=file_get_contents($this->data_source_c);
							$this->title="JFLABO::ChiMeRa->Hinagata";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata2"){
							$S=file_get_contents($this->data_source_d);
							$this->title="JFLABO::ChiMeRa->Hinagata2";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::necessary_thing"){
							$S=file_get_contents($this->data_source_e);
							$this->title="JFLABO::ChiMeRa->necessary_thing";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata4"){
							$S=file_get_contents($this->data_source_f);
							$this->title="JFLABO::ChiMeRa->Hinagata4";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata5"){
							$S=file_get_contents($this->data_source_g);
							$this->title="JFLABO::ChiMeRa->Hinagata5";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata6"){
							$S=file_get_contents($this->data_source_h);
							$this->title="JFLABO::ChiMeRa->Hinagata6";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata7"){
							$S=file_get_contents($this->data_source_i);
							$this->title="JFLABO::ChiMeRa->Hinagata7";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata8"){
							$S=file_get_contents($this->data_source_j);
							$this->title="JFLABO::ChiMeRa->Hinagata8";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata9"){
							$S=file_get_contents($this->data_source_k);
							$this->title="JFLABO::ChiMeRa->Hinagata9";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata10"){
							$S=file_get_contents($this->data_source_l);
							$this->title="JFLABO::ChiMeRa->Hinagata10";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata11"){
							$S=file_get_contents($this->data_source_m);
							$this->title="JFLABO::ChiMeRa->Hinagata11";
					}elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata12"){
							$S=file_get_contents($this->data_source_n);
							$this->title="JFLABO::ChiMeRa->Hinagata12";
					}else{
							$S=file_get_contents($this->data_source);
					}
			}else{
							$S=file_get_contents($this->data_source);
			}
		
		
	  //ここから下はコンピュータさん向けの処理の依頼です。動いていれば理解しようとしなくてもいいです。
	  $sep="--- -- -- -- --";
      	  $ar_bdy=explode("\n",$S);
	  $stack_ptr;

	  //チャプタの取得
	  for($i=0;$i<count($ar_bdy);$i++){
	    $sep_d= substr($ar_bdy[$i],0,mb_strlen($sep));
	    if($sep_d==$sep){
	      $stack[]=array($i,$ar_bdy[$i-1]);
	    }
	  }

	  //チャプタブロック化
	  for($j=0;$j<count($stack);$j++){
	    if($j==count($stack)-1){
	      for($k=$stack[$j][0]+1;$k<count($ar_bdy);$k++){
		$CPT_block[$j][]=$ar_bdy[$k];
	      } 
	    }else{
	      for($k=$stack[$j][0]+1;$k<$stack[$j+1][0]-2;$k++){
		$CPT_block[$j][]=$ar_bdy[$k];
	      } 
	    }
	   }

	  //タイトルの取得

	  //ディスクリプションブロックの取得

	  //日付の取得
	    $str="";
	    $title_m="チャプターリスト(インデックス)";
	    $cpt=1;
	    foreach($stack as $val){
	      $str=$str.'<a href="#'.$cpt.'">'.$cpt.": ".$val[1]."</a><br>";
	      $cpt++;
	    }
//HTML ダンプ　ヒアドキュメント表記
echo <<< OBJ
<div style="width:650px;background-color:white;vertical-align:middle;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;">
	<div style="padding:5px 0px 0px 0px; height:5px;background-color:orange;width:100%;"></div>
    <li style="padding:15px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;text-align:left;vertical-align:middle;font-weight: bold;">$title_m</span></li>
    <hr style="height:1px;margin:1px 10px;">

<li style="padding:5px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;font-size:14px;text-align:left;vertical-align:middle;">$str</span></li><br>
</div><BR /><br />
OBJ;

	  $p=0;
	  foreach($stack as $title){
	    // $str=echo_lines($CPT_block);
	    $str="";
	    foreach($CPT_block[$p] as $val){
	      $str=$str.$val."<br>";
	    }
	    $q=$p+1;

echo <<< OBJ
<div style="width:650px;background-color:white;vertical-align:middle;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-moz-box-shadow: 1px 1px 3px #000;-webkit-box-shadow: 1px 1px 3px #000;"><a name="$q"> </a>
	<div style="padding:5px 0px 0px 0px; height:5px;background-color:orange;width:100%;"></div>
    <li style="padding:15px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;text-align:left;vertical-align:middle;font-weight: bold;">$title[1]</span></li>
    <hr style="height:1px;margin:1px 10px;">

<li style="padding:5px 5px 2px 10px;text-align:left;vertical-align:middle;list-style-type:none;">
<span style="padding:5px 10px 2px 0px;font-size:14px;text-align:left;vertical-align:middle;">$str</span></li><br>
</div><BR /><br />
OBJ;
$p++;
	  }
	}
}
