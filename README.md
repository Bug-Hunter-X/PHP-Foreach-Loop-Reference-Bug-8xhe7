# PHP Foreach Loop Reference Bug

This repository demonstrates a subtle bug related to using pass-by-reference in PHP's `foreach` loops.  The example shows how attempting to modify array values directly within the loop may not modify the original array as intended, due to how foreach handles references.

## The Problem

The `increment_array` function aims to increment each element of an array by one. However, due to the way `foreach` handles references, it operates on copies instead of the original array elements.  This results in the original array remaining unchanged.

## Solution

The solution involves using a `for` loop and directly accessing array elements using their indices.