<?php
    require_once "./caculator.php";    
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
                <button name="group1" type="button" class="item calculation" value="chia">/</button>
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