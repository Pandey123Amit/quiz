<?php


class Quiz extends AppModel {
    public $useTable = 'quizzes';
    public $hasOne = array(
        'Answer' => array(
            'className' => 'Answer',
            'foreignKey'=>'questionid',
            'dependent' => true
        )
    );

}




?>