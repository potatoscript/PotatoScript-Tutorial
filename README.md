# WebSystem
potato.js + php

# Potato.js 
|||
|----|---|
|1. | [Documentation](https://github.com/potatoscript/potato.js/wiki/2.-Documentation) | 
|2. | [YouTube Tutorial](https://github.com/potatoscript/potato.js/wiki/3.-YouTube-Tutorial)|
 
 * The JavaScript Library that turn complicated code into something more restful.\
 potato javascript is the another way of coding the web application.\
 It extend the HTML code with custom tag and integrated with other library like ChartJS, JQueryJS and AngularJS.\
 You code your objects like button, pulldown list, text box, table, menu, chart and so on\
 via providing the relevant attribute name and value inside a HTML tag (fill in a blank),\
 which let you write less code and keep code simple to save your time on building thing.\
 It is easy to learn, use and master.


* 複雑なコードをより楽しいものに変えるのJavaScriptライブラリです。\
ジャガイモJavaScriptは、カスタムタグでHTMLコードを拡張して、\
Webアプリケーションを作成するのJavaScriptです。\
関連するコードを1つの場所（htmlタグ）にグループ化して、コードの管理\
をはるかに容易にし、コードの記述を減らしてコードをシンプルに保ち、\
アプリケーションの構築時間を節約します。習得、使用、習得が簡単です。

* The basic syntax of the code is looked like this:\
コードの基本的な構文は次のようになります。\
![alt text](https://potatoscript.github.io/homepage/potato-syntax.gif "Basic syntax")


‘‘‘javascript
<potato-list-mylist
    model="model.php"
    callback="
       var table=document.getElementById('list-mylist');
       table.rows[1].cells[0].style.background='orange';
    "
  >
  </potato-list-mylist>
‘‘‘
‘‘‘
<?php
header('Content-Type:application/json');
$datalist=array();
$data=array();

$data[0]="名前";
$data[1]="個数";
array_push($datalist,$data);

$data[0]="potato";
$data[1]="1";
array_push($datalist,$data);

echo json_encode($datalist);

?>
‘‘‘

