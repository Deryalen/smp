<?php  
include "mysql.php";
    
    $title = $_REQUEST['title'];
    $area = $_REQUEST['text'];
    $time_notes=date("Y-m-d H:i:s");
    if(strlen($title) != 0 && strlen($area) != 0){
        $result=$conn->query("INSERT INTO `notes`(`Name`, `Date`, `Text`) VALUES ('$title', '$time_notes', '$area')") or die(mysql_error());
    }
    header( 'Location: /', true, 307 );
?>