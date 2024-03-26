<?php
// Создаем ассоциативный массив с ключами от 1 до 10 и значениями - квадратами этих чисел
$numbersSquared = [];
for ($i = 1; $i <= 10; $i++) {
    $numbersSquared[$i] = $i * $i;
}

// Выводим массив на экран
foreach ($numbersSquared as $key => $value) {
    echo "Ключ: $key, Значение: $value\n";
}
?>
