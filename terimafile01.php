<?php
    //print_r($_FILES["txFile"]);

    $posisi = "imgfile/";

    if(isset($_POST["deskripsi"])){
        $nmfile = $posisi . basename($_FILES["txFile"]["name"]);

        if($_FILES["txFile"]["size"] <= 10000){
            move_uploaded_file($_FILES["txFile"]["tmp_name"], $nmfile);
            echo '<img src="'.$nmfile.'">';
        }else{
            echo "File terlalu besar";
        }
    }