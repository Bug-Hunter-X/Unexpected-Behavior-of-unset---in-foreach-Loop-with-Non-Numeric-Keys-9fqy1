# PHP Foreach Loop and unset() with Non-Numeric Keys

This example demonstrates an uncommon bug in PHP related to the behavior of `unset()` within a `foreach` loop when dealing with arrays that have non-numeric keys.  Modifying an array while iterating over it using `foreach` can lead to unexpected results.

The `bug.php` file showcases the issue, while `bugSolution.php` provides a corrected approach.

## Bug Description

When `unset()` is used inside a `foreach` loop to remove elements from an array with non-numeric keys, the loop might skip elements because the keys are reindexed during the process, leading to potential data loss or incorrect results. This is especially true if the loop relies on the key's order or value.

## Solution

The solution involves using a different approach to iterate through and modify the array, ensuring that the `unset()` operation does not interfere with the iteration process.