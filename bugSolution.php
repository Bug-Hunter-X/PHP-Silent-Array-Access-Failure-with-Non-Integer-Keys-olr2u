The solution is to ensure that you are using the correct key type when accessing array elements. Since the keys in this array are strings, the access must be done with a string key.

```php
<?php
$data = ['a' => 1, 'b' => 2, 'c' => 3];
$key = 'a';

// Correct access using string key
$value = $data[$key]; // Access using the string key 'a'

echo $value; //Outputs 1

//Another example of accessing an element in the array using string key
$key2 = "b";
$value2 = $data[$key2];
echo "\n".$value2; //Outputs 2

?>
```