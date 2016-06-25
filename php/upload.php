<?php

function pre() {
    print "<pre>";
}


function leesBestand() {
    $regels = array();
    if (isset($_FILES['file'])) {
        if ($_FILES["file"]["error"] > 0) {
            echo "Error: " . $_FILES["file"]["error"] . "<br />";
        } elseif ($_FILES["file"]["type"] !== "text/plain") {
            echo "File must be a .txt";
        } else {
            $regels = FILE($_FILES["file"]["tmp_name"]);
         
        }
      
    }
    return $regels;
}
$regels  = leesBestand();
pre(); print_r($regels); 
?>


