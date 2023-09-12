<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="enter your number" ><br>
        <input type="number" name="num2" placeholder="enter your number" ><br>
        <select name="calculation" id="">
            <option value="addition">Addition</option>
            <option value="subtraction">subtraction</option>
            <option value="multiplication">multiplication</option>
            <option value="division">division</option>
        </select>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $calculation = $_POST["calculation"];
    
    if($calculation==addition){
        $result = $num1 + $num2;
        echo "Result: $result";
    }
    elseif($calculation==subtraction){
        $result = $num1 - $num2;
        echo "Result: $result";
    }
    elseif($calculation==multiplication){
        $result = $num1 * $num2;
        echo "Result: $result";
    }
    else{
        $result = $num1 / $num2;
        if($num2==0)
        echo "Result: No result";
        else{
        echo "Result: $result";   
        }
    }
}
    ?>
</body>
</html>