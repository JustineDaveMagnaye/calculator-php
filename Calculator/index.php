<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Magnaye Calculator</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #1a1a1a; 
    color: #fff; 
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.calculator {
    background-color: #363636; 
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 250px;
    text-align: center;
}

.calculator h2 {
    margin-top: 0;
}

.calculator input[type="number"] {
    width: 90%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #1a1a1a; 
    color: #fff; 
}

.calculator input[type="submit"] {
    width: 45%;
    padding: 10px;
    background-color: #d32f2f; 
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 5px;
    transition: background-color 0.3s;
}

.calculator input[type="submit"]:hover {
    background-color: #ff3d00; 
}
</style>
</head>
<body>

<div class="calculator">
    <h2>Magnaye Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required><br>
        <input type="number" name="num2" placeholder="Enter second number" required><br>
        <input type="submit" name="add" value="+">
        <input type="submit" name="subtract" value="-">
        <input type="submit" name="multiply" value="*">
        <input type="submit" name="divide" value="/">
    </form>

    <?php
    if(isset($_POST['add'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 + $num2;
        echo "<p>Result: $result</p>";
    }
    if(isset($_POST['subtract'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 - $num2;
        echo "<p>Result: $result</p>";
    }
    if(isset($_POST['multiply'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 * $num2;
        echo "<p>Result: $result</p>";
    }
    if(isset($_POST['divide'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if($num2 == 0) {
            echo "<p>Error: Division by zero</p>";
        } else {
            $result = $num1 / $num2;
            echo "<p>Result: $result</p>";
        }
    }
    ?>
</div>

</body>
</html>
