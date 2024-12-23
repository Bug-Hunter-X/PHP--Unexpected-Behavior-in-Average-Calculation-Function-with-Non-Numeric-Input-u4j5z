# PHP Average Calculation Bug
This repository demonstrates a common error in PHP when calculating the average of an array containing non-numeric values. The `calculate_average` function attempts to handle empty arrays gracefully, but it doesn't explicitly check for non-numeric values within the array.  This leads to unexpected results or warnings when such values are included.

The `bug.php` file contains the buggy implementation.  The `bugSolution.php` provides a corrected version that addresses the issue.

## How to Reproduce the Bug
1. Clone this repository.
2. Run `bug.php`.
3. Observe the output when the input array contains non-numeric elements.  You'll likely see a warning about type coercion and an incorrect average.