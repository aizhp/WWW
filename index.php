<?php
header("Content-type: text/html; charset=utf-8");
echo"hello word";
$x = 3;
$y = 4;
$s=$x+$y;

echo "<hr />",$s;


function test(){
    $a=3;
    $b = "<br />hahah哈哈哈哈<br />";
    echo $b;
    global $s;

    echo $s;

}
test();
function myTest() {
    static $x=0;
    echo $x,"<br />";
    $x++;
}

myTest();
myTest();
myTest();

$array = array("1","2","3");
echo "<br />输出array",$array[0];  //echo "My car is a {$cars[0]}";
//8/12日 代码

echo "<hr />";
$zifu = "hh哈哈";
var_dump($zifu);
//数组

echo "<hr/>";
$a1 = array("哈哈哈哈","hello","123","-1.32","0.3231","10.32");
var_dump($a1);

echo "<hr/>";
class Car
{
    var
    $color;
    function Car($color = "red")
    {
        $this->color = $color;
        function what_color()
        {
            return $this->color;
        }
        //echo $color;
    }

}

















?>