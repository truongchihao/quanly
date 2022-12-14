<?php

class PCModel extends DB{
    
       function readpc(){
        $sql = "SELECT *
        FROM lop as l, phan_cong as pc, giao_vien as gv, mon_hoc as mh
        WHERE l.IDLOP = pc.IDLOP AND pc.IDGV = gv.IDGV AND gv.IDMON = mh.IDMON";
        
        return mysqli_query($this->con, $sql);
       }

       public function InsertPC($idgv, $idlop){
              $sql = "INSERT INTO PHAN_CONG (IDGV, IDLOP)
              VALUES('$idgv', '$idlop')";
      
              $result = false;
              if( mysqli_query($this->con, $sql)) {
                  $result = true;
              }
              return json_encode($result);
       }

       function dslop($idgv){
              $sql = "SELECT *
              FROM lop as l, phan_cong as pc, giao_vien as gv
              WHERE l.IDLOP = pc.IDLOP AND pc.IDGV = gv.IDGV and gv.IDGV ='$idgv'";
              
              return mysqli_query($this->con, $sql);
       }

       function lopday($idgv, $idlop){
              $sql = "SELECT *
              FROM lop as l, phan_cong as pc, giao_vien as gv
              WHERE l.IDLOP = pc.IDLOP AND pc.IDGV = gv.IDGV and gv.IDGV ='$idgv' AND l.IDLOP = '$idlop'";
              
              return mysqli_query($this->con, $sql);
       }

       function dslophoc($idhs){
              $sql = "SELECT *
              FROM lop as l, phan_cong as pc, hoc_sinh as hs, mon_hoc as mh, giao_vien as gv
              WHERE l.IDLOP = pc.IDLOP AND l.IDLOP = hs.IDlop and pc.IDGV = gv.IDGV and gv.IDMON =mh.IDMON and hs.IDHS ='$idhs'";
              
              return mysqli_query($this->con, $sql);
       }

}
?>