<?php
class caculator{
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
$maytinh = new caculator($giatri1, $giatri2);
$ketqua =  $maytinh->chon($pheptinh);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="calculator">
        <form method="POST" action="" id="MyForm">
            <div class="result">
                <input class= "content" type="text" id="domain" name="domain" value="<?php
                if(!empty($ketqua)){
                    echo $ketqua;
                }
                ?>"/>
            </div>
            <div class="button">
                <button name="group1" type="button" class="item system" value="xoa">AC</button>
                <button name="group1" type="button" class="item system" value=""></button>
                <button name="group1" type="button" class="item system" value="phandu">%</button>
                <button name="group1" type="button" class="item calculation" value="chia">÷</button>
                <button name="group2" type="button" class="item number" value="7">7</button>
                <button name="group2" type="button" class="item number" value="8">8</button>
                <button name="group2" type="button" class="item number" value="9">9</button>
                <button name="group1" type="button" class="item calculation" value="nhan">x</button>
                <button name="group2" type="button" class="item number" value="4">4</button>
                <button name="group2" type="button" class="item number" value="5">5</button>
                <button name="group2"  type="button" class="item number" value="6">6</button>
                <button name="group1" type="button" class="item calculation" value="tru">-</button>
                <button name="group2" type="button" class="item number" value="1">1</button>
                <button name="group2" type="button" class="item number" value="2">2</button>
                <button name="group2" type="button" class="item number" value="3">3</button>
                <button name="group1" type="button" class="item calculation" value="cong">+</button>
                <button name="group2" type="button" class="item number khong" value="0">0</button>
                <button name="group2" type="button" class="item number" value=".">.</button>
                <button name="group1" class="item calculation" type="submit" value="result"/>=</button>
            </div>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html