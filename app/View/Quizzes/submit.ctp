<h2>Quiz Results</h2>
<ul>
    <?php $total =  sizeof($results); $count = 0; ?>
    <?php foreach ($results as $questionId => $result): ?>
        <?php if($result=='Correct') { ?>
        <li>Question <?php echo $questionId; ?>:
         <?php echo $result; ?></li>
         <?php $count++; ?>
        <?php } ?>
    <?php endforeach; ?>
    <h1>Total Score</h1><?php echo $count++."/".$total ?>
   
</ul>
