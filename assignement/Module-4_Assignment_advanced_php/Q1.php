<?php
$integervar=10;
$floatvar=10.5;
$stringvar="hello world";
$boolvar=true;
$aarayvar=array(1,2,3,4);

class car{
	public $color;
}
$c=new car();
$c->color="red";

var_dump($integervar,$floatvar,$stringvar,$boolvar,$car);
?>