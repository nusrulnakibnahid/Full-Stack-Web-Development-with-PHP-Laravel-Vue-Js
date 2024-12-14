<?php

$questions = [
    ['question' => 'What is 5+2?', 'correct' => '7'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'When did Bangladesh gain independence?', 'correct' => '1971'],
    ['question' => 'What is Cristiano Ronaldo’s jersey number commonly known as?', 'correct' => '7'],
    ['question' => 'What is the national flower of Bangladesh?', 'correct' => 'Water Lily'],
    ['question' => 'What is the chemical symbol for water?', 'correct' => 'H2O'],
    ['question' => 'In which year did the Titanic sink?', 'correct' => '1912'],
    ['question' => 'What is the capital of Japan?', 'correct' => 'Tokyo'],
    ['question' => 'Which country does Cristiano Ronaldo represent in international football?', 'correct' => 'Portugal'],
    ['question' => 'What is the national anthem of Bangladesh?', 'correct' => 'Amar Shonar Bangla'],
];

$answers = [];

foreach($questions as $index => $question){

    echo ($index+1) . "." . $question['question'] . "\n";
    $answers[] =trim(readline("Your Answer: "));

}


//Evaluate function
function evaluateQuiz(array $questions, array $answers):int{

    $score = 0;

    foreach($questions as $index => $question){

        if($answers[$index] == $question['correct']){

            $score++;

        }

    }
    return $score;

}

 
//Score calculate part
$score = evaluateQuiz($questions, $answers);

echo "\n You scored $score out of " . count($questions) . "\n";

if($score == count($questions)){

    echo "Excellent Job Man! \n";
}elseif ($score > ($totalQuestions / 2)) {
    echo "Very Good effort!\n";
} else {
    echo "Opps! Better luck next time!\n";
}

?>
