<?php
// create curl resource

$text=file_get_contents('http://t.52580.co/list-zuqiutuijie.html');
//去除换行及空白字元（序列化内容才需使用）
//$text=str_replace(array("r","n","t","s"), '', $text);
//取出div且id为PostContent的内容，并储存至阵列match
$regex4="/<div id=\"showGames\".*?>.*?<\/div>/ism";
preg_match_all($regex4,$text,$match);

//印出match[0]
//$table = $match;
//print_r($match);
//exit();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0039)http://t.52580.co/list-zuqiutuijie.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>足球免费推介-沈万发盘王推荐</title>
    <meta name="keywords" content="足球免费推介,沈万发盘王推荐">
    <meta name="description" content="沈万发盘王推荐">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <link href="./css/style(1).css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="./js/jquery-1.11.2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/global.js" charset="utf-8"></script>
</head>
<body><style type="text/css">
    html { background:none}
    body { background:none; padding:0;}
</style>

<?php
echo str_replace('views/swtj/imgs','image',$match[0][0]);
?>
</body></html>
