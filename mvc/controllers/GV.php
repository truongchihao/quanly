<?php
class GV extends Controller{

    public function __construct(){

        $this->PCModel = $this->model("PCModel");
    }


    function Home(){

        //View

        $this->view("GV", [
            "Page"=>"rong",
        ]);
    }

    function LOP($idgv){

        //View
        $idgv=preg_quote($idgv);

        $this->view("GV", [
            "Page"=>"TABLEGVLOP",
            "GVLOP" => $this->PCModel->dslop($idgv),
        ]);
    }

    function LOPDAY($idgv, $idlop){

        //View
        $idgv=preg_quote($idgv);
        $idlop=preg_quote($idlop);
        
        $result = $this->PCModel->LOPDAY($idgv, $idlop);
        $row = mysqli_fetch_array($result);

        $this->view("GV", [
            "Page"=>"LOPDAY",
            "LOPDAY"=>$row,
        ]);
    }
}
?>