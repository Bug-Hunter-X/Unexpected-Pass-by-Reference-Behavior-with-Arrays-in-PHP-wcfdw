# PHP Unexpected Pass-by-Reference with Arrays
This example demonstrates a common pitfall in PHP: pass-by-reference behavior with arrays.  While passing array elements by reference works as expected, directly modifying the array itself through a reference may not produce the intended result.
The `bug.php` file contains the problematic code, showcasing the unexpected outcome. The `bugSolution.php` file offers a potential solution.
This is a subtle but important distinction that can lead to difficult-to-debug issues in larger PHP projects.