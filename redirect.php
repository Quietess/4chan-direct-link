<?php
$data = json_decode(file_get_contents('http://a.4cdn.org/vg/catalog.json'), true);
 
foreach((array)$data as $result) {
    foreach ($result['threads'] as $thread){
        if (strpos($thread['sub'], 'RuneScape General') !== false) { //you can change RuneScape General to whatever your general usually has in the subject field
            echo '<meta HTTP-EQUIV="REFRESH" content="0; url=http://boards.4chan.org/vg/thread/' . $thread['no'] . '">'; //make sure to change /rsg/ to whatever it is
            }
        }
    }
?>