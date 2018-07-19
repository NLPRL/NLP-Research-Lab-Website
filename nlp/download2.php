<?php 
if (!empty($_GET['file'])) {
    $filename = basename ($_GET['file']);
    $filepath = "uploads/".$filename;
    if (!empty($filename) && file_exists($filepath)) {
        header("Cache-Control : public");
        header("Content-Description: File Transfer");
        header("Content-Disposition:attachement :filename=$filename");
        header("Cache-Type : application/jpg");
        header("Content-Transfer-Encoding : binary");

        readfile($filepath);
        exiit;

    
    }
}
?>