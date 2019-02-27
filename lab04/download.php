<?php
// if(isset($_REQUEST["file"])){
//     // Get parameters
//     $file = urldecode($_REQUEST["file"]); // Decode URL-encoded string
//     $filepath = "images/" . $file;
    
//     // Process download
//     if(file_exists($filepath)) {
//         header('Content-Description: File Transfer');
//         header('Content-Type: application/octet-stream');
//         header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
//         header('Expires: 0');
//         header('Cache-Control: must-revalidate');
//         header('Pragma: public');
//         header('Content-Length: ' . filesize($filepath));
//         flush(); // Flush system output buffer
//         readfile($filepath);
//         exit;
//     }
// }

$file = "csv-template.csv";
$filepath = "./storages/template/" . $file;


if(file_exists($filepath)) {
    header('Content-type: application/csv');
    header('Content-Disposition: attachment; filename='.$filepath);
    flush(); // Flush system output buffer
    readfile($filepath);
    exit;
} else {
    header("Location: ./index1.php");
    die();
}
?>