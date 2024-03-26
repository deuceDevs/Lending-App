<?php
    require '../config/dbconn.php';
    
    if(isset($_POST["submit"])){
        $lenderName = mysqli_real_escape_string($connection,$_POST["lenderName"]);
        $lenderAddress = mysqli_real_escape_string($connection,$_POST["lenderAddress"]);
        $lenderContactNo = mysqli_real_escape_string($connection,$_POST["lenderContactNo"]);
        $lenderFBAdd = mysqli_real_escape_string($connection,$_POST["lenderFBAdd"]);
        $comakerName = mysqli_real_escape_string($connection,$_POST["comakerName"]);
        $comakerAdd = mysqli_real_escape_string($connection,$_POST["comakerAdd"]);

        if($lenderName != "" && $lenderAddress !="" && $lenderContactNo !== 0 && $lenderFBAdd!= "" && $comakerName != "" && $comakerAdd != ""){

            $query = "INSERT INTO lender (lenderName,lenderAddress,lenderContactNo,lenderFBAdd,comakerName,comakerAdd)values ('$lenderName','$lenderAddress','$lenderContactNo','$lenderFBAdd','$comakerName','$comakerAdd')";
            

            if( mysqli_query($connection,$query)){
              header("Location: ../index.php");
              exit();
            }
        }
    }
    if(isset($_POST["displayData"])){
        header("Location: ../pages/displayData.php");
    }

