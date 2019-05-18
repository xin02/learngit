<?php
//2019.5.18
/*echo "HelloWord!";
$a = 5;
$b = 4;
$c = $a - $b;
echo "<br>";
echo $c;
$d = 5;
function mytest(){
	global $d;
	$y = 10;
	echo "<p>测试函数内变量</p>";
	echo "变量 d 为: $d";
	echo "<br>";
	echo "变量 y 为: $y";
}
mytest();
echo "<p>测是函数外变量:<p>";
echo "变量 d 为: $d";
echo "<br>";
echo "变量 y 为: $y";
echo "$GLOBALS[a]";
print_r($GLOBALS);*/


/*$x = 5;
$y =10;

function myTest(){
	$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
myTest();
echo $y;*/

/*
function myTest(){
	static $x = 0;
	echo $x;
	$x++;
	echo PHP_EOL;
}
myTest();
myTest();
myTest();*/
/*
function myTest($x){
	echo $x;
}
myTest(6);
echo "<h1>PHP 很有趣!</h1>";
echo "Hello world!<br>";
echo "我要学 PHP!<br>";
echo "这是一个", "字符串，", "使用了", "多个", "参数。";*/
$txt1 = "学习PHP";
$txt2 = "RUNOOB.COM";
$cars = array("Volvo","BMW","Toyota");

echo "txt1";
echo "<br>";
echo "在 $txt2 学习PHP ";
echo "<br>";
echo "我的车的品牌是 {$cars[0]} ";
$a = print "<br>";
print($a);
echo "<br>$txt1"." ","$txt2";
echo "<br>";
print($txt1);
echo "<br>";

$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
?>
