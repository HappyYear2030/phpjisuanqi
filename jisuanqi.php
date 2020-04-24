<html>
<head>
    <title>Title</title>
    <style type="text/css">
        body{align:center};
    </style>

</head>
<body>
<h2 align="center">
<form name="form1" action="index.php" method="get" >
 请输入第一个数字:<input type="text" name="v1"><br>
请输入第二个数字：<input type="text" name="v2"><br>
    <select name="select1">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="sub" type="submit" value="计算">

</form>
</h2>
<?php
if(isset($_GET["sub"]))
{
    $v1 = $_GET["v1"];
    $v2 = $_GET["v2"];
    $con = 0;
    switch ($_GET["select1"]) {
        case "+":
            $con = $v1 + $v2;
            break;
        case "-":
            $con = $v1 - $v2;
            break;
        case "*":
            $con = $v1 * $v2;
            break;
        case "/":
            $con = $v1 / $v2;
            break;
    }
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con);
    $txt = date("Y/m/d");
    fwrite($myfile, $txt);
    fclose($myfile);
}
?>
</body>
</html>