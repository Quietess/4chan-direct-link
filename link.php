<?php
$data = json_decode(file_get_contents('http://a.4cdn.org/vg/catalog.json'), true);
 
foreach((array)$data as $result) {
    foreach ($result['threads'] as $thread){
        if (strpos($thread['sub'], 'RuneScape General') !== false) { //you can change RuneScape General to whatever your general usually has in the subject field
            echo '<a href="http://boards.4chan.org/vg/thread/' . $thread['no'] . '">/rsg/</a>'; //make sure to change /rsg/ to whatever it is
            }
        }
    }
?>