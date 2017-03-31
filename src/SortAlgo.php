<?php

namespace Workshop;

/**
 * This class is responsible for sorting with a custom implementation.
 */
class SortAlgo {

    /**
     * Sort algorithm.
     *
     * @param array $items   The unsorted array.
     *
     * @return array
     */
    public function sort(array $items) {
        $sorted = $items;

        return $sorted;
    }
}

/*
 * -----------------------------------------------------------------------------
 * The Transformation Priority Premise
 *
 * version #1 - original
 * -----------------------------------------------------------------------------
 *
 *  1.         ({} -> nil)         no code at all -> code that employs nil
 *  2.        (nil -> constant)    replacing nil with some value
 *  3.   (constant -> constant+)   a simple constant to a more complex constant
 *  4.   (constant -> scalar)      replacing a constant with a variable or an arg
 *  5.  (statement -> statements)  adding more unconditional statements
 *  6.  (statement -> if)          adding a conditional, splitting the execution path
 *  7.     (scalar -> array)       replacing a single value with an array
 *  8.      (array -> container)   replacing an array with a more complex data type, such as a hash or linked list
 *  9.  (statement -> recursion)   adding a recursive call to a statement
 * 10.         (if -> while)       replacing a conditional with a loop
 * 11. (expression -> function)    replacing an expression with a func or algorithm
 * 12.  (variable  -> assignment)  replacing the value of a variable,  mutating the value of a variable
 *
 * Version #2 - updated
 * -----------------------------------------------------------------------------
 *   1.                  Null - same as ({}–>nil)
 *   2.      Null to constant - same as (nil->constant)
 *   3.  Constant to variable - same as (constant->scalar)
 *   4.       Add computation - similar to (statement->statements), but essentially
 *                              adding any simple computation like 1 + 1 or 3 % 2.
 *   5.            Split flow - same as (statement->if)
 *   6.     Variable to array - same as (scalar->array)
 *   7.    Array to container - same as (array->container)
 *   8.           If to while - same as (if->while)
 *   9.               Recurse - same as (statement->recursion)
 *  10.               Iterate - new! adding an iterative loop
 *  11.                Assign - same as (variable->assignment)
 *  12.              Add case - new! adding a conditional that splits flow into more than two branches
 *
 * The takeaway from this is that there is no exhaustive list of transformations, and their
 * relative complexity is not set in stone.
 *
 * Notice how (expression->function) disappears from the first list, and how the relative position of
 * (if->while) and (statement->recursion) is swapped in the two lists.
 *
 */
