<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temparature Converter</title>
    <style>
  <?php include "styles.css" ?>
    </style>
</head>
<div class="container">
        <h2>Temparature Converter</h2>
        <form method="post" action="">
            <input type="number" name="temp" placeholder="Enter temparature" required><br>
            <select name="operation">
                <option value="celcius to farenhite">celcius to farenhite</option>
                <option value="farenhite to celcius">farenhite to celcius</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temp = $_POST["temp"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "celcius to farenhite":
                        $result = ($temp*1.8)+32;
                        echo "Result: $result";
                        break;
                    case "farenhite to celcius":
                        $result = ($temp-32)*(5/9);
                        echo "Result: $result";
                        break;

                }
            }
            ?>
        </div>
    </div>
</body>
</html>