<?php
include "mysql.php";
    if(isset($_POST['sub'])){
        echo "<head><link rel='stylesheet' href='styles.css'</head>";
        $result = $conn->query("SELECT * FROM `notes`");
        while ($row = mysqli_fetch_array($result)) {
            echo $row['id']."<div class='shownote'><p>Name: ".$row['Name']."<p>Text: ".$row['Text']."<hr/></div>";
        }
    }
?>