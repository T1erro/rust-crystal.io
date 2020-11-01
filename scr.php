<?php if ($_GET["get"] == "inf"){
echo file_get_contents("RustCrystal/".$_GET["file"]);
} elseif ($_GET["get"] == "gt"){ $path = $_GET["path"]; $len = mb_strlen(file_get_contents($path)); echo $len; }
$rootpath = './RustCrystal';
$fileinfos = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($rootpath)
);
$arr = [];
foreach($fileinfos as $pathname => $fileinfo) {
if (!$fileinfo->isFile()) continue;
$item = str_replace("./","",$pathname); $lastItem = str_replace("\\","/",$item); array_push($arr,$lastItem);
}
echo implode("|",$arr);
?>