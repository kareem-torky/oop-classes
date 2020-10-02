<?php 

interface SortInterface 
{
    public function perform();
}

class BubbleSort implements SortInterface
{
    public function perform()
    {
        echo "bubble sort";
    }
}

class InsertionSort implements SortInterface
{
    public function perform()
    {
        echo "insertion sort";
    }
}

class MergeSort implements SortInterface
{
    public function perform()
    {
        echo "merge sort";
    }
}

function makeSort(SortInterface $sortingMethod)
{
    $sortingMethod->perform();
}

makeSort(new BubbleSort);
makeSort(new MergeSort);
makeSort(new InsertionSort);