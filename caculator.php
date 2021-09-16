<?php
class caculator1{
    protected $giatri1;
    protected $giatri2;
    protected $ketqua;
    protected $pheptinh;
    function __construct($giatri1, $giatri2)
    {
        $this->giatri1 = $giatri1;
        $this->giatri2 = $giatri2;
    }
    function cong()
    {
        $this->ketqua = $this->giatri1+$this->giatri2;
        return $this->ketqua;
    }
    function tru()
    {
        $this->ketqua = $this->giatri1-$this->giatri2;
        return $this->ketqua;
    }
    function nhan()
    {
        $this->ketqua = $this->giatri1*$this->giatri2;
        return $this->ketqua;
    }
    function chia()
    {
        $this->ketqua = $this->giatri1/$this->giatri2;
        return $this->ketqua;
    }
    function phandu()
    {
        $this->ketqua = $this->giatri1%$this->giatri2;
        return $this->ketqua;
    }
    function chon($pheptinh)
    {
        $this->pheptinh = $pheptinh;
        switch($pheptinh){
            case "+":
                return $this->cong();
                break;
            case "-":
                return $this->tru();
                break;
            case "x":
                return $this->nhan();
                break;
            case "÷":
                return $this->chia();
                break;
            case "%":
                return $this->phandu();
                break;   
        }
    }
}
$operator = ['+','-','x','÷','%'];
if(isset($_POST['group1']) && isset($_POST['domain'])){
    $request = $_POST['group1'];
    $content = $_POST['domain'];
    foreach($operator as $value){
        if(strpos($content, $value)==true){
            $pheptinh = $value;
            $data = explode($value, $_POST['domain']);
            $giatri1 = (float)$data[0];
            $giatri2 = (float)$data[1];
        }
    }
}
// $maytinh = new caculator1($giatri1, $giatri2);
// $ketqua =  $maytinh->chon($pheptinh);
class multiValue{
    protected $arrNum = [];
    protected $arrOpr = [];
    protected $result;
    function __construct($arrNum, $arrOpr){
        $this->arrNum = $arrNum;
        $this->arrOpr = $arrOpr;
    }
    function processMath(){
        $this->result = $this->arrNum[0];
        for($i = 0; $i<count($this->arrOpr); $i++){
            switch($this->arrOpr[$i]){
                case "+":
                    $this->result += ($this->arrNum[$i+1]);
                    break;
                case "-":
                    $this->result -= ($this->arrNum[$i+1]);
                    break;
                case "x":
                    $this->result *= ($this->arrNum[$i+1]);
                    break;
                case "/":
                    $this->result /= ($this->arrNum[$i+1]);
                    break;
                case "%":
                    $this->result %= ($this->arrNum[$i+1]);
                    break;
                case "+-":
                    $this->result += ($this->arrNum[$i+1]*(-1));
                    break; 
                case "--":
                    $this->result += ($this->arrNum[$i+1]);
                    break;
                case "x-":
                    $this->result *= ($this->arrNum[$i+1]*(-1));
                    break;
                case "/-":
                    $this->result /= ($this->arrNum[$i+1]*(-1));
                    break;
            }
        }
        return $this->result;
    }
}
if(isset($_POST['group1']) && isset($_POST['domain'])){
    $content = $_POST['domain'];
    $oprArr = [];
    $numArr = [];
    preg_match_all('/\D+/', $content, $oprArr);
    preg_match_all('!\d+!', $content, $numArr);
    if(count($numArr[0]) == count($oprArr[0])){
        if($oprArr[0][0]==="-"){
            $numArr[0][0] *= (-1);
            array_shift($oprArr[0]);
        } else {
            array_shift($oprArr[0]);
        }
    }
    print_r($oprArr[0]);
    echo "<br>";
    print_r($numArr[0]);
}
$maytinh = new multiValue($numArr[0],$oprArr[0]);
$ketqua = $maytinh->processMath();
?>