<form method="POST">
    <input type="number" name="n1" required>
    <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="n2" required>
    <input type="submit" value="Calculate">
</form>

<?php
function calculator($a, $b, $op) {
    if ($op == '+') return $a + $b;
    if ($op == '-') return $a - $b;
    if ($op == '*') return $a * $b;
    if ($op == '/') return $b != 0 ? $a / $b : "Cannot divide by zero";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Result: " . calculator($_POST['n1'], $_POST['n2'], $_POST['op']);
}
?>