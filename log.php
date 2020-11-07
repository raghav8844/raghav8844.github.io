<?php
//Taken from bWAPP
if(isset($_POST["data"])) {
    $req_dump = $_POST["data"];
    //Avoid using the webroot to store data in an actual test...
    $file = "flash_".time()."_".rand().".log";
    $fp = fopen($file, "w");
    fwrite($fp, $req_dump);
    fclose($fp);
    echo "written";
    exit;
}
