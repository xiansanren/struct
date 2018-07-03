<?php
error_reporting(E_ALL);
/**
 * 设计一个程序，输出所有小于等于n(n为一个大于等于2的正整数)的素数。
 * 要求：尽可能采用较优算法
 */
function isPrimeNumber($n) {
	if ($n < 2) return false;
	if ($n == 2) return true;
	$max = ceil(sqrt($n));
	for ($i=2; $i<=$max; $i++) { 
		if ($n % $i == 0) 
		{
			return false;
		}
	}
	return true;
} 

$n = array_key_exists('n', $_GET) ? $_GET['n'] : 0;
if ($n < 2) die('n为一个大于等于2的正整数');
$data = [];
for ($i=2; $i <= $n ; $i++) { 
	if (isPrimeNumber($i)) {
		$data[] = $i;
	}
}
var_dump($data);
