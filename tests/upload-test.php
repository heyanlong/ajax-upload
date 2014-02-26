<?php
/**
 * yanlong_he@163.com 2014-02-26 5:12 pm Beijing time
 */
#sleep(1); 
echo json_encode(array(
    'files' => $_FILES,
    'post' => $_POST
));
