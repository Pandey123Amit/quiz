<?php
class QuizzesController  extends AppController
{
    public function first()
    {

    }
    public function create()
    {
        $this->loadModel('Answer');
        $this->loadModel('Quiz');
        if($this->request->is('post'))
        {
            $data = $this->request->data;  
            $answer = $data['Quiz']['answer'];
            unset($data['Quiz']['answer']);
            $this->Quiz->save($data['Quiz']);
           $a= $this->Quiz->find('all',array(
                'order'=>array('Quiz.id'=>'desc'),
                'limit'=>'1',
            ));
            //pr($a);
            $questionid = $a['0']['Quiz']['id'];
            $index= array('answer','questionid');
            $answerinfo = array($answer,$questionid);
            $finalarray =array_combine($index,$answerinfo);
           // pr($finalarray);
            //exit;
            $this->Answer->save($finalarray);
            
        }
        
        
    }
    public function takeTest()
    {
        $this->loadModel('Quiz');
        $data=$this->Quiz->find('all');
        $this->set('data',$data);
        // pr($data);
        // exit;
    }
    public function submit()
    {
        $submittedAnswers = $this->request->data;
        $this->loadModel('Quiz');
        $this->loadModel('Answer');
        $questions = $this->Answer->find('all', array(
            'contain' => array('answer')
        ));
       // pr($questions);
        // exit;
        $results = array();
        foreach ($questions as $question) {
            $questionId = $question['Quiz']['id'];
            $correctAnswer = $question['Answer']['answer'];
            if (isset($submittedAnswers['option' . $questionId]) && $submittedAnswers['option' . $questionId] == $correctAnswer) {
                $results[$questionId] = 'Correct';
            } else {
                $results[$questionId] = 'Incorrect';
            }
        }

        $this->set('results', $results);
    }
}










?>