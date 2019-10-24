<?php
echo "Введите номер квартиры - ";
$handle = fopen("php://stdin", "r");
$room = fgets ($handle);

$room_etag = 4;
$etag = 5;
$otver_pod = ceil($room/($etag*$room_etag));
if ($room >($etag*$room_etag)) {
	$otver_etag = ceil(($room - $otver_pod*($etag*$room_etag))/$room_etag);
}
else $otver_etag = ceil($room/$room_etag);

echo "Ваш подъезд - $otver_pod" . PHP_EOL . "Поднимайтесь на - $otver_etag этаж";