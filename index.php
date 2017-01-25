<?php

$url = 'https://api.rasp.yandex.net/v1.0/search/?apikey=9fe9c897-58dc-41a3-b52a-b5201c491fd8&format=json&from=c38&to=c2&lang=ru&page=1&date=2017-01-25';//&transport_types=

echo file_get_contents($url);

?>