<?php
require './arraySort.php';

class BubbleSort implements arraySort{
    /**
     * if replaced : true
     * if not replaced :false
     * default value : true
     * @var Boolean $swapped - if array element is replaced 
     */
    protected $swapped = true;
    /**
     * @var Array $Array  - unsorted or sorted array
     */
    protected $Array = array();
    /**
     * @var Boolean $sorted - if array is sorted
     */
    protected $sorted = false;
    /**
     * @param array $unsortedArray  - un sorted array
     */
    public function setUnsortedArray(array $unsortedArray) {
        $this->Array = $unsortedArray;
    }
    /**
     * if $this->sorted === true method return sorted array
     * else return false
      * @return array ? boolean
     */
    public function getSortedArray() {
        if($this->sorted===true and is_array($this->Array)){
        return $this->Array;
        }
        return false;
    }
    /**
     * Sort array with Bubble Sort algorithm
     */
    public function sort() {
        $j = 0;
        $tmp = null;
        while ($this->swapped) {
            $this->swapped = false;
            $j++;
            for ($i = 0;$i < count($this->Array) - $j;$i++) {
                if ($this->Array[$i] > $this->Array[$i + 1]) {
                    $tmp = $this->Array[$i];
                    $this->Array[$i] = $this->Array[$i + 1];
                    $this->Array[$i + 1] = $tmp;
                    $this->swapped = true;
                }        
            }
        }
        $this->sorted=true;
    }

}
$unsortedArray = [5, 1, 12, -5, 16];
$bubbleSorter = new BubbleSort();
$bubbleSorter->setUnsortedArray($unsortedArray);
$bubbleSorter->sort();
print_r($bubbleSorter->getSortedArray()); 
 