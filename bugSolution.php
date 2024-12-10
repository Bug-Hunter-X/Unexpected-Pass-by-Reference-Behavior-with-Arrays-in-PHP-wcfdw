```php
<?php
function increment_array(&$array) {
  foreach ($array as &$value) {
    $value++;
  }
}

$array = [1, 2, 3];
increment_array($array);
print_r($array); // Outputs Array ( [0] => 2 [1] => 3 [2] => 4 ) 
?>
```