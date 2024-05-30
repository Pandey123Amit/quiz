<?php echo $this->Form->create(array('controller' => 'Quizzes', 'action' => 'submit')); ?>
<?php echo $this->Html->css('quiz'); ?>

<ul>
    <?php foreach ($data as $index => $row): ?>
        <li>
            <h4><?php echo $row['Quiz']['question']; ?></h4>
            <ul class="choices">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <li>
                        <label>
                            <input type="radio" name="option<?php echo $row['Quiz']['id']; ?>" value="<?php echo $row['Quiz']['option' . $i]; ?>">
                            <span><?php echo $row['Quiz']['option' . $i]; ?></span>
                        </label>
                    </li>
                <?php endfor; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>
<button type="submit">Submit</button>
<?php echo $this->Form->end(); ?>
