<?php
$name = "Nahid";

$string01 = "my name is $name \n \t";
echo $string01;
echo "\n";

//heredoc:
$heredoc = <<<EOD
data 1 heredoc
new line {$name} \n
more text
EOD;
echo $heredoc;
echo "\n \n \n \n ";

// nowdoc:
$nowdoc = <<<'EOD'
data 2 nowdoc
new line {$name} 
more text
EOD;

echo $nowdoc;

?>