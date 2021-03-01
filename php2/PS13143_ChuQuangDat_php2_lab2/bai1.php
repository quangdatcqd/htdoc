<pre><?php
$str = file_get_contents("https://vnexpress.net");
preg_match_all('{href="https://(.*).html"}',$str,$arr);
unset($arr[1]);
$newarr = [];
foreach($arr as $arr){
    $sss = preg_replace('/href="|"/','', $arr); 
    array_push($newarr,$sss);
}
print_r($newarr);
 
?>