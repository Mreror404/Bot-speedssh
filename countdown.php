<?php
function create($p, $asw) {
//$u = $_GET["u"];
	error_reporting(0);
	ini_set('max_execution_time', 0);
	date_default_timezone_set("Asia/Jakarta");
	$tgl = date("d-M");
	$date = date("d-M-Y H:i:s");
	function acak($panjang)
	{
		$karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
		$string = '';
		for ($i = 0; $i < $panjang; $i++) {
			$pos = rand(0, strlen($karakter)-1);
			$string .= $karakter{$pos};
		}
		return $string;
	}

	function acak1($panjang)
	{
		$karakter= 'abcdefghijklmnopqrstuvwxyz123456789';
		$string = '';
		for ($i = 0; $i < $panjang; $i++) {
			$pos = rand(0, strlen($karakter)-1);
			$string .= $karakter{$pos};
		}
		return $string;
	}

	if($asw>100) $asw = 100;
	for ($i=0; $i < $asw; $i++) {
		include './tes.php';
		$cookie1 = $cookies["PHPSESSID"];
		$u = acak(5);
		$w = array("79", "81", "83", "85", "87", "89", "91", "93", "95", "305", "307", "309", "311", "313", "315", "317", "319", "321", "323", "529", "531", "533", "221", "225", "227", "229", "231", "233", "235", "237", "239", "241", "245", "243", "247");
		$sid = rand(0, count($w)-1);
		$s = $w[$sid];
		$date = date("d-M-Y H:i:s");
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'https://www.speedssh.com/create-ssl-30-days.php');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "serverid=".$s."&username=".$u."&password=".$p."");
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

		$headers = array();
		$headers[] = 'Connection: keep-alive';
		$headers[] = 'Accept: */*';
		$headers[] = 'Sec-Fetch-Dest: empty';
		$headers[] = 'X-Requested-With: XMLHttpRequest';
		$headers[] = 'User-Agent: Mozilla/4.0 (Windows; U; Windows NT 5.0; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.33 Safari/532.0';
		$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
		$headers[] = 'Origin: https://www.speedssh.com';
		$headers[] = 'Sec-Fetch-Site: same-origin';
		$headers[] = 'Sec-Fetch-Mode: cors';
		$headers[] = 'Referer: https://www.speedssh.com/create-ssl-server-30-days/222104/server-us-3-ssl/tls-30-days';
		$headers[] = 'Accept-Language: en-US,en;q=0.9';
		$headers[] = 'Cookie: PHPSESSID='.$cookie1.'; counter=1; __gads=ID=bdf7b5be51d4dd4b:T=1586461629:S=ALNI_Mbz7qLGyc8HaaN13-jFzsIkcO8x1A; HstCfa3553281=1586461630785; HstCla3553281=1586461630785; HstCmu3553281=1586461630785; HstPn3553281=1; HstPt3553281=1; HstCnv3553281=1; HstCns3553281=1; _ga=GA1.2.1236185269.1586461629; _gid=GA1.2.2089861706.1586461631; _gat_gtag_UA_127726492_1=1; __dtsu=51A0158646163335BF89B4D1ED74FE4D';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

		$res = curl_exec($ch);
		$res2 = str_replace("<br>","\n",$res);
		//$res2 .= str_replace("<b>", "", $res1);
		if (curl_errno($ch)) {
			echo 'Error: ' . curl_error($ch);
			die("\nCheck Your Internet Connection!");
		}

		if(preg_match("/maximum/i", $res)) {
			echo "\n[$i] OPSS!! You Have Reached Maximum Account Today on server : $s!\n\n"; }
			elseif(preg_match("/HellCome/i", $res)) {
				echo "\n[$i] OPSS!! Your Session ID Has Blocking From Server!\n\n";
			}
			elseif(preg_match("/slowly/i", $res)) {
				echo "\n[$i] OPSS!! You Can Create Again In 1 Minutes\n\n";
				sleep(60);
			} elseif(preg_match("/Failed/i", $res)) {
				die("\n[$i] Check Your Internet Connection!\n"); }
				elseif(preg_match("/resolve/i", $res)) {
					die("\n[$i] Check Your Internet Connection!\n"); }
					elseif(preg_match("/Administrator/i", $res)) {
						echo "\n[$i] Something Went Wrong on Server : $s!\n"; }
						elseif(preg_match("/Cant Connect/i", $res)) {
						 echo "$res2"; }
						elseif(preg_match("/Username already exists/i", $res)) {
							echo "\n[$i] Username already exists\n"; }
						else {
							echo "[$i] $res2\n\n";
							$cetak = "
							$date\n
							$res2
							========================================\n\n";
							$fopen = fopen("ssh-log ".$tgl.".php", "a");
							fwrite($fopen, $cetak);
							fclose($fopen);
							curl_close($ch); } } }

							function tes() {
								date_default_timezone_set("Asia/Jakarta");
								$jam = date("H");
								$j = date("H:i:s");
								if($jam >= "00") {
									system("cls");
									create(123, 100); }
									else {
										system("cls");
										echo $j;
										sleep(1); } }
										while (true) {
											tes(); }
											?>