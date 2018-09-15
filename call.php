<?php

//error_reporting(0);


$url = "url for your api";
$res = file_get_contents($url);

//print $res;

$data = json_decode($res,true);

if(!isset($data)){
	print "<h1>Sorry Unable to fetch Data</h1>";
}

/*
foreach ($data[0] as $key => $value) {
	if(isset($value['Metric'])){
	# code...
		print $key." ";
		$c=0;
		foreach ($value['Metric'] as $key1 => $value1) {
			# code...
			if($c==2)
				break;
			print $value1;
			$c++; 
		}
		print "\n";
	}
	else{
			//print $key." ".$value; 
	}
}
*/
 //print_r($data);
//print $data[0]['Temperature']['Metric']['Value']."°C";

 
?>
