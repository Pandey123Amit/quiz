<?php


class Answer extends AppModel {
    public $useTable = 'answers';
    public $belongsTo = array(
        'Quiz' => array(
            'className' => 'Quiz',
            'foreignKey' => 'questionid'
        )
    );
}





?>