```php
<?php
function increment_array_correct(&$arr) {
  for ($i = 0; $i < count($arr); $i++) {
    $arr[$i]++;
  }
}

$numbers = [1, 2, 3];
increment_array_correct($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
?>
```