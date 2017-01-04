<?php
date_default_timezone_set('Asia/Kolkata');
$time=date("H");
if($time>5 && $time<12){
  echo "Good Morning....!!!";
}else if($time>=12 && $time<15){
  echo "Gud Aftrnoon....!!!";
}else if($time>=15 && $time<19){
  echo "Good Evning....!!!";
}else{
  echo "Good Night....!!!";
}
$id=''; //ID of your location
$app_id = ''; // App ID at openweathermap.org
$url="http://api.openweathermap.org/data/2.5/weather?id=".$id."&lang=en&units=metric&APPID=".$app_id;
$json=file_get_contents($url);
$data=json_decode($json,true);
$name=$data['name'];
$temp=$data['main']['temp'];
  echo "&nbsp today is &nbsp".$temp."&deg;C";
if($temp<0){
  echo "&nbsp Too Cold in &nbsp<b>".$name."</b> Soo kep Safe Yourself";
}else if($temp>0 && $temp<10){
  echo "&nbsp very Cold  in &nbsp<b>".$name."</b> Soo stay Hot";
}else if($temp>=10 && $temp<15){
  echo "&nbsp Cold in &nbsp<b>".$name."</b> So stay Warm";
}else if($temp>=15 && $temp<23){
  echo "&nbsp Medium in &nbsp<b>".$name."</b> So stay healthy";
}else if($temp>=23 && $temp<30){
  echo "&nbsp Little Hot in &nbsp<b>".$name."</b> So stay Cool";
}else if($temp>=30 && $temp<40){
  echo "&nbsp Warm in &nbsp<b>".$name."</b> So stay Cold";
}else if($temp>=40){
  echo "&nbsp Very hot in &nbsp<b>".$name."</b> So stay Chilled";
}
?>
