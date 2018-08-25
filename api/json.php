<?php
$S = file_get_contents('../data/hinagata.chimera');
$data_source = "../data/emacs_turorial_jp.chimera";
//your_note.chimera　hinagata7.chimeraなどは好きな名前に変更してください。
//$data_source = "../data/your_note.chimera";
$data_source_b = "../data/your_note.chimera";
$data_source_c = "../data/hinagata.chimera";
$data_source_d = "../data/hingishyo.chimera";
$data_source_e = "../data/necessary_thing.chimera";
$data_source_f = "../data/hinagata4.chimera";
$data_source_g = "../data/hinagata5.chimera";
$data_source_h = "../data/hinagata6.chimera";
$data_source_i = "../data/hinagata7.chimera";
$data_source_j = "../data/hinagata8.chimera";
$data_source_k = "../data/hinagata9.chimera";
$data_source_l = "../data/hinagata10.chimera";
$data_source_m = "../data/hinagata11.chimera";
$data_source_n = "../data/hinagata12.chimera";
//echo $S;
if(isset($_GET['param'])){
    if($_GET['param']=="EmacsTips チュートリアル 2013"){
        //ここを書き換えるとアクセス時に使用するURLを思い通りにすることができます。
        $title="JFLABO::ChiMeRa->EmacsTips チュートリアル 2013";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Your Note"){
        $title="JFLABO::ChiMeRa->Your Note";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata"){
        $title="JFLABO::ChiMeRa->Hinagata";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata2"){
        $title="JFLABO::ChiMeRa->Hinagata2";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::necessary_thing"){
        $title="JFLABO::ChiMeRa->Hinagata3";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata4"){
        $title="JFLABO::ChiMeRa->Hinagata4";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata5"){
        $title="JFLABO::ChiMeRa->Hinagata5";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata6"){
        $title="JFLABO::ChiMeRa->Hinagata6";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata7"){
        $title="JFLABO::ChiMeRa->Hinagata7";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata8"){
        $title="JFLABO::ChiMeRa->Hinagata8";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata9"){
        $title="JFLABO::ChiMeRa->Hinagata9";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata10"){
        $title="JFLABO::ChiMeRa->Hinagata10";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata11"){
        $title="JFLABO::ChiMeRa->Hinagata11";
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata12"){
        $title="JFLABO::ChiMeRa->Hinagata12";
    }else{
        //
    }
}else{
    //
}
if(isset($_GET['param'])){
    if($_GET['param']=="EmacsTips チュートリアル 2013"){
        $S=file_get_contents($data_source);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Your Note"){
        $S=file_get_contents($data_source_b);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata"){
        $S=file_get_contents($data_source_c);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata2"){
        $S=file_get_contents($data_source_d);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::necessary_thing"){
        $S=file_get_contents($data_source_e);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata4"){
        $S=file_get_contents($data_source_f);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata5"){
        $S=file_get_contents($data_source_g);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata6"){
        $S=file_get_contents($data_source_h);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata7"){
        $S=file_get_contents($data_source_i);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata8"){
        $S=file_get_contents($data_source_j);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata9"){
        $S=file_get_contents($data_source_k);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata10"){
        $S=file_get_contents($data_source_l);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata11"){
        $S=file_get_contents($data_source_m);
    }elseif($_GET['param']=="JFLABO::ChiMeRa::Hinagata12"){
        $S=file_get_contents($data_source_n);
    }else{
        $S=file_get_contents($data_source);
    }
}else{
        $S=file_get_contents($data_source);
}
//echo $S;
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

//var_dump($stack);
//var_dump($CPT_block);
$comming_soon_or_do_it_yourself="180";
echo "{"."\n";
for ($i = 0; $i < count($stack); $i++) {
  echo "\"title\":";
    echo "\"".addslashes(str_replace('"', "&quot;", $stack[$i][1]))."\""."\n";
    echo ",";
  echo "\"body\":";
    $str="";
    foreach($CPT_block[$i] as $val){
      $str=$str.$val."\n";
    }
    echo "\"".addslashes(str_replace('"', "&quot;",$str))."\""."\n";
    echo ",";
  echo "\"priority_or_score_type_A_etc...\":";
    echo "\"".$comming_soon_or_do_it_yourself."\""."\n";
}
echo "}";

//print count($stack);
//echo $homepage;
//echo "a";
 ?>
