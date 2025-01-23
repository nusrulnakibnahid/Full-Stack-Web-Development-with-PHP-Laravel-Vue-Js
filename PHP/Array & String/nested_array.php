<?php


//Multidimensional array or nested array
$foods = [
    'vegetables' => explode(', ', 'brinjal, brocolli, carrot, capsicum'),
    'fruits' => explode(', ', 'orange, banana, apple'),
    'drinks' => explode(', ', 'water, milk'),
];

print_r($foods);

echo "\n \n";

//add element in foods
array_push($foods['drinks'],'orange juice', 'lemon juice');

print_r($foods);

echo "\n \n";


//access any array value
echo $foods['vegetables'][2];

echo "\n \n";


//another example of access any array value:
$sample = [
    'test' => [
        'test-again' => [
            'a',
            'b',
            'c',
            'd',
        ],
    ],
];

echo $sample['test']['test-again'][2];

echo "\n \n";

//another example:
$sample2 = [
    [1, 2, 3, 4],
    [11, 22, 33, 44],
    [111, 222, 333, 444],
    [1111, 2222, 3333, [5, 6, 7]],
];

print_r($sample2);


echo $sample2[3][3][1];


?>