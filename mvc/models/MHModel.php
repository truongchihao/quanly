<?php

class MHModel extends DB{

    public function MH(){
        $sql = "SELECT * FROM MON_HOC";
        return mysqli_query($this->con, $sql);
    }

       public function readmh($idmon){
        $sql = "SELECT * FROM mon_hoc WHERE IDMON='$idmon' ";

        if($stmt = mysqli_prepare($this->con, $sql)) {

            if(mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1) {

                    return mysqli_fetch_array($result, MYSQLI_ASSOC);

                }else{
                    return 'khongco';
                }
            }else{
                return 'loi';
            }
        }
    }

}
?>