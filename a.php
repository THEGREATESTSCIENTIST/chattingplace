﻿﻿<html>
<head>
<title>
C o m i n g⠀⠀⠀⠀⠀⠀ t o g e t h e r⠀⠀⠀⠀⠀⠀ p l a c e ...............
</title>
<link rel="icon" style="width:15px; height=15px; background-color: #76FEFF; color: #76FEFF;"/>

<style>
input {
color: #76FEFF;
}

body {
font-size: 12px;
background-color: #76FEFF;

}

.main1200 {
    padding:5px;
}
.main1201 {
    padding:20px;
}

.main12 {
font-size: 21px;
text-decoration:none;
color: #76FEFF;
font-weight: bold;
background-color: white;
border: 1px solid white;
border-radius: 10px 10px;
padding: 5px;
font-weight:bold;
}

.main120 {
font-size: 25px;
text-decoration:none;
color: #76FEFF;
font-weight: bold;
background-color: white;
border: 1px solid white;
border-radius: 10px 10px;
padding: 5px;
font-weight:bold;
}

.main120 {
text-decoration:none;
color: #76FEFF;
border-radius: 5px 5px;
padding: 6px;
font-weight:bold;
vertical-align: middle;
width:1535px;
}

.main1 {
text-decoration:none;
color: white;
border-radius: 5px 5px;
padding: 5px;
font-weight:bold;
width:775px;
}

.main12 {
text-decoration:none;
color: #76FEFF;
border-radius: 5px 5px;
padding: 5px;
font-weight:bold;
vertical-align: middle;
width:895px;
}

.main2 {
color: white;
font-size:24px;
}

.main3 {
text-decoration:none;
color: #76FEFF;
font-weight: bold;
background-color: white;
border: 1px solid white;
border-radius: 5px 5px;
padding: 5px;
font-weight:bold;
width:100px;
display:block;

}

.w1 {
color: white;
}
.w2 {
color: white;
display:inline-block;
font-size:0.92vw;
}
.pwd {
color: #76FEFF;
display:inline-block;
}

.w21 {
color: white;
display:block;
}

</style>
</head>
<body>
<h1 class="main1">
</h1>
<div class="main12">
𝖂⠀𝖊⠀𝖑⠀𝖈⠀𝖔⠀𝖒⠀𝖊⠀⠀⠀ 𝖙𝖔⠀⠀ 𝖈⠀𝖔⠀𝖒⠀𝖒⠀𝖚⠀𝖓⠀𝖎⠀𝖈⠀𝖆⠀𝖙⠀ 𝖊    ⠀⠀⠀⠀⠀⠀!</div>
<h1 class="main1">
</h1>

<?php

error_reporting(0);


include("func.php");
include("data.php");

class Password extends Dobj{
var $content;
}


$dirs = array_filter(glob('*'), 'is_dir');

$cannotcreate=false;


if(count($dirs)>134) {
$cannotcreate=true;
}


if(!empty($_POST['rname'])&&($_POST['rname']!=" ")&&!empty($_POST['rname'])&$cannotcreate==false) {
$_POST['rname'] = strip_tags($_POST['rname']);
$_POST['rname']=substr($_POST['rname'],0, 100);
$_POST['rname'] = str_replace(' ', 'space21326', $_POST['rname']);
$_POST['rname'] = str_replace(',', 'comma21326', $_POST['rname']);
$_POST['rname'] = str_replace('?', 'q21326', $_POST['rname']);
$_POST['rname'] = str_replace('\'', 'ukom21326', $_POST['rname']);
mkdir($_POST['rname'], 0755);


if(!empty($_POST['password'])&&$_POST['password']!="") {
$myd=new Data();
$tabls=array();
$pwd1=new Password();
$pwd1->content=$_POST['password'];
$pwdt=array();
$pwdt[]=$pwd1;
$tabls[]=$pwdt;
$myd->dtables=$tabls;
$myd->saveobjecttable("Password");


$file = 'Password.dat';
$newfile = 'Password.dat';
if (!copy($file, $_POST['rname'].'/'.$newfile)) {
echo "Error\n";
}
chmod($_POST['rname'].'/'.$newfile, 0700);


unlink("Password.dat");
}


$file = 'a2.php';
$newfile = 'a.php';
if (!copy($file, $_POST['rname'].'/'.$newfile)) {
echo "Error\n";
}
chmod($_POST['rname'].'/'.$newfile, 0744);

$file = 'renewing.php';
$newfile = 'renewing.php';

if (!copy($file, $_POST['rname'].'/'.$newfile)) {
echo "Error\n";
}

chmod($_POST['rname'].'/'.$newfile, 0744);

$file = 'ilist.php';
$newfile = 'ilist.php';

if (!copy($file, $_POST['rname'].'/'.$newfile)) {
echo "Error\n";
}

chmod($_POST['rname'].'/'.$newfile, 0744);

$file = 'findlastmdate.php';
$newfile = 'findlastmdate.php';

if (!copy($file, $_POST['rname'].'/'.$newfile)) {
echo "Error\n";
}

chmod($_POST['rname'].'/'.$newfile, 0744);

$file = 'func.php';
$newfile = 'func.php';

if (!copy($file, $_POST['rname'].'/'.$newfile)) {
echo "Error\n";
}

chmod($_POST['rname'].'/'.$newfile, 0744);

}

$dirs = array_filter(glob('*'), 'is_dir');

if(count($dirs)>0) {
echo "<h2 class='main2'>Topics</h2>";
echo '<p class="main1201"> </p>';
}

$dirs = array_filter(glob('*'), 'is_dir');

foreach ($dirs as $file) {
$file2= str_replace('space21326', '&nbsp;', $file);
$file2= str_replace('comma21326', ',', $file2);
$file2= str_replace('q21326', '?', $file2);
$file2= str_replace('ukom21326', '\'', $file2);
if($file=="files") continue;

$dir1='//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);
$output = file_get_contents('http:'.$dir1.$file.'/findlastmdate.php');
if($output!="") {
$date12=date("d.m.Y H:i:s", strtotime($output));
$d_start = new DateTime($date12);
$currentdate = date('d.m.Y H:i:s', time());
$d_end = new DateTime($currentdate);
$diff = $d_start->diff($d_end);
$delete1=false;
if(!($diff->format('%d')<1000||$diff->format('%d')==1000&&$diff->format('%h')<1))
$delete1=true;
if($delete1) {
rrmdir('/'.$file);
continue;
}
}
echo '<a class="main120" href=\'http:'.$dir1.$file.'/a.php\'>'.$file2.'</a>';
echo '<p class="main1200"> </p>';

$path_parts = pathinfo($file.'/Msg.dat');
if(!class_exists($path_parts['filename'])) {
continue;
}
}


?>
<p style="height:50px;"> </p>

<form method="POST">
<p class="w2">
Topic:
</p>

<input name="rname"/>
</p>
<input type="submit" class="main3" value="Create"/>
</form>
<p></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p class="w1"></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</body>
</html>
