<?php 
$url = "https://speedssh.com/"; 
$curlObj = curl_init(); 
curl_setopt($curlObj,  CURLOPT_URL,  $url); 
curl_setopt($curlObj,  CURLOPT_RETURNTRANSFER,  1); 
curl_setopt($curlObj,  CURLOPT_HEADER,  1); 
curl_setopt($curlObj,  CURLOPT_SSL_VERIFYPEER,  false); 
$result = curl_exec($curlObj); 
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', 
          $result,  $match_found); 
   
$cookies = array(); 
foreach($match_found[1] as $item) { 
    parse_str($item,  $cookie); 
    $cookies = array_merge($cookies,  $cookie); 
} 
curl_close($curlObj); 
?> 