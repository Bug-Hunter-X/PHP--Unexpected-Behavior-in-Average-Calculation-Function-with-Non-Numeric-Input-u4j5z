```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  //Filter out non-numeric values before calculation
  $numericNumbers = array_filter($numbers, 'is_numeric');
  if(empty($numericNumbers)){
    return 0.0; //Handle array with only non-numeric values
  }
  $sum = array_sum($numericNumbers);
  $count = count($numericNumbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = [];
echo "Average: " . calculate_average($numbers); //Output: Average: 0

$numbers = [10, 20, 30, 'a'];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 20

$numbers = ['a', 'b', 'c'];
echo "Average: " . calculate_average($numbers); // Output: Average: 0
```