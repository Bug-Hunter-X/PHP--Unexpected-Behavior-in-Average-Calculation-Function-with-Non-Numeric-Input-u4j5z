```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = [];
echo "Average: " . calculate_average($numbers); //Output: Average: 0

$numbers = [10, 20, 30, 'a'];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will throw a warning and return 0
```