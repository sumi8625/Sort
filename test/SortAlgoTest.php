<?php

namespace Test\Workshop;

use Workshop\SortAlgo;

/**
 * Testing custom Sort algorithm.
 */
class SortAlgoTest extends \PHPUnit_Framework_TestCase
{
    /** @var \Workshop\SortAlgo */
    private $sortAlgo;

    /**
     * Setup.
     */
    public function setUp()
    {
        $this->sortAlgo = new SortAlgo();
    }

    /**
     * Run test cases on our custom sort algorithm.
     *
     * @param [] $expected   The sorted array what we should get as output.
     * @param [] $unsorted   The unsorted input array what we will pass to algo.
     *
     * @dataProvider provideArrays
     */
    public function testAlgoReturnSortedArray($expected, $unsorted) {

        $sortedArray = $this->sortAlgo->sort($unsorted);

        $this->assertSame($expected, $sortedArray);
    }

    /**
     * Data provider for testing the sort algorithm.
     *
     * @return array
     */
    public function provideArrays()
    {
        // expected | unsorted
        return [
            [
                [], []
            ],
            [
                [1], [1]
            ],
            [
                [1, 2], [1, 2]
            ],
//            [
//                [1, 2], [2, 1]
//            ],
//            [
//                [1, 2, 3], [1, 2, 3]
//            ],
//            [
//                [1, 2, 3], [2, 1, 3]
//            ],
//            [
//                [1, 2, 3], [1, 3, 2]
//            ],
//            [
//                [1, 2, 3], [3, 1, 2]
//            ],
//            [
//                [1, 2, 3], [3, 2, 1]
//            ],
//            [
//                [1, 2, 3, 4, 5, 6], [1, 2, 5, 6, 3, 4]
//            ],
        ];
    }
}
