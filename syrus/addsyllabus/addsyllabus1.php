<?php
    include "config.php";
    $subname="subname";
    $subwt="subwt";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["subname1"];
        $totalwt=0;
        for($i=1;$i<=10;$i++){
            $totalwt+=(float)$_POST[$subwt.$i];
        }
        // echo $totalwt;
        $st="INSERT INTO syllabus(std_id,";
        for($i=1;$i<=10;$i++){
            $st.="subname".$i.",subwt".$i;
            if ($i==10){
                $st.=",threshwt,totalwt)";
                break;
            }
            $st.=",";
        }
        $st.="VALUES(".$_POST["std_id"].",";
        for($i=1;$i<=10;$i++){
            $st.="'".$_POST["subname".$i]."'".",".$_POST["subwt".$i];
            if ($i==10){
                $st.=",".$_POST["threshwt"].",".$totalwt.")";
                break;
            }
            $st.=",";
        }
        // echo $st;
        if($conn->query($st)===TRUE){
            echo "Data Added Succesfiully <br>";
        }
        else{
            echo "Already data is present if want go to update page...<br>";
        }
    }
?>