```php
<?php
function increment_by_one(&$number) {
  $number++;
}

$number = 10;
increment_by_one($number);
echo $number; // Outputs 11

$array = [1, 2, 3];
increment_by_one($array[0]);
echo $array[0]; // Outputs 2

increment_by_one($array);
// Notice that this does not change the array value
echo $array[0]; // Outputs 2
?>
```