<pre><?php
$str = file_get_contents("https://nld.com.vn");
preg_match_all('{src="https://(.*).(jpg|png)"} ',$str,$arr);
unset($arr[1]);

unset($arr[2]);
$newarr = [];
foreach($arr as $arr){
    $sss = preg_replace('/src="|"/','', $arr); 
    array_push($newarr,$sss);
}
 print_r($newarr);
?>