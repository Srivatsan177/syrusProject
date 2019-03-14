<?php
    include 'config.php';
    echo "<h1>ADD SUB</h1>";
    $std_id=$_POST["std_id"];
    $sql="SELECT ";
    for($i=1;$i<=10;$i++){
        $sql.="subname".$i.",subwt".$i;
        if($i==10){
            break;
        }
        $sql.=",";
    }
    // echo "<h1>$std_id</h1>";
    $sql.=" FROM syllabus WHERE std_id=".$std_id.";";
    // echo $sql;
    $result=$conn->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $name1="subname1";
            $name2="subname2";
            $name3="subname3";
            $name4="subname4";
            $name5="subname5";
            $name6="subname6";
            $name7="subname7";
            $name8="subname8";
            $name9="subname9";
            $name10="subname10";
            echo "
            <html>
            <body>
            <form method='post' action='addtimetableInsert.php'
                <label>Select period1 </label>
                <select name='period1'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <label>Select period2 </label>
                <select name='period2'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <label>Select period3 </label>
                <select name='period3'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <label>Select period4 </label>
                <select name='period4'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <label>Select period5 </label>
                <select name='period5'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <label>Select period6 </label>
                <select name='period6'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <label>Select period7 </label>
                <select name='period7'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <label>Select period8 </label>
                <select name='period8'>
                <option value='$row[$name1]'>$row[$name1]</option>
                <option value='$row[$name2]'>$row[$name2]</option>
                <option value='$row[$name3]'>$row[$name3]</option>
                <option value='$row[$name4]'>$row[$name4]</option>
                <option value='$row[$name5]'>$row[$name5]</option>
                <option value='$row[$name6]'>$row[$name6]</option>
                <option value='$row[$name7]'>$row[$name7]</option>
                <option value='$row[$name8]'>$row[$name8]</option>
                <option value='$row[$name9]'>$row[$name9]</option>
                <option value='$row[$name10]'>$row[$name10]</option>
                </select>
                <br><br><br>
                <button type='btn btn-primary'>submit</button>
            </form>
            </body>
            </html>
            ";
        }
    }
?>