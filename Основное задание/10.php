<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            $operationSymbol = '+';
            break;
        case 'subtract':
            $result = $num1 - $num2;
            $operationSymbol = '-';
            break;
        case 'multiply':
            $result = $num1 * $num2;
            $operationSymbol = '*';
            break;
        case 'divide':
            $result = $num2 != 0 ? $num1 / $num2 : 'Error: Division by zero';
            $operationSymbol = '/';
            break;
        default:
            $result = '';
            $operationSymbol = '';
    }
}
?>

<form method="post">
    <input type="number" name="num1" value="<?= isset($num1) ? $num1 : '' ?>" required>
    <input type="number" name="num2" value="<?= isset($num2) ? $num2 : '' ?>" required>
    <br>
    <button type="submit" name="operation" value="add">+</button>
    <button type="submit" name="operation" value="subtract">-</button>
    <button type="submit" name="operation" value="multiply">*</button>
    <button type="submit" name="operation" value="divide">/</button>
</form>

<?php
if (isset($result)) {
    echo "<p>Result: $num1 $operationSymbol $num2 = $result</p>";
}
?>
