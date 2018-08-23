# ChiMeRa[キメラ]
安心して快適に暮らせる社会を構築する為のシステム　

安全第一　品質向上　四季平安

目次化された研究レポートのまとめ、作詞、作文用システム

必要な情報が簡単に整理できてポンと出てくるシステム

運用も直感的で習得しやすい

php-mbstringをサーバに導入してください

インストール方法　[はじめかた]

1. cd your_www_projects

2. git clone https://github.com/JFLABO/ChiMeRa.git

エディタはEmacsまたはviでサーバ上でファイルを書き換えます。
次のファイルを書き換えてみてください。
ChiMeRa/data/your_note.chimera

#追加開発機能：

#アダプタを作成しました。JSON XML

 ChiMeRa/api/xmlapi.php?param=ファイル名

 ChiMeRa/api/json.php?param=ファイル名

#日付を含むとアトリビュートが出る


部門間の情報のやり取り最新の取り組みについて情報共有、認識合わせを行うシステム
※改変自由

研究論文共有、組織意思疎通ツールとして

伝えたいこと、ポエムを手軽にできるだけ直感的で高速に

綴るために作られました。

ローカルコンピュータ（イントラ）、またはＶＰＳサーバ、ラズベリーパイなどで動作します。

キーボードをＢｌｕｅｔｏｏｔｈ接続したスマートホンからsshでサーバに接続してEmacsの練習をしている人もいます。

インターネットにつながらないところでの取材、作文に便利です。活動記録、ネタ帳として

文章はＪＳＯＮ、ＸＭＬで別システムに自動接続することができます。

コンピュータが壊れて使えなくなる前に　./data/XX.chimera　と　自分でとった写真など 

./img/ディレクトリをＤＶＤなどに記録しておいてください。





GrpouWork API e.g.)

  http://your_server_uri/~author/ChiMeRa/api/json.php?param=JFLABO::ChiMeRa::necessary_thing
  
  apache UserDir ディレクティブのmodとPHPを有効にしてskelでインストールすることをお勧めします。
  UserDir public_html
