<!-- src/Template/Pages/index.ctp -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <?= $this->Html->css('first') ?>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Quiz Application</h1>
        <div class="buttons">
            <?= $this->Html->link('Add Question', ['controller' => 'Quizzes', 'action' => 'create'], ['class' => 'button']) ?>
            <?= $this->Html->link('Take Test', ['controller' => 'Quizzes', 'action' => 'takeTest'], ['class' => 'button']) ?>
        </div>
    </div>
</body>
</html>
