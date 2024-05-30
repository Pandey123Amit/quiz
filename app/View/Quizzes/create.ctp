<!-- src/Template/Quizzes/add.ctp -->
<div class="quizzes form content">
    <?= $this->Form->create(['controller'=>'Quizzez','action'=>'create']) ?>
    <fieldset>
        <legend><?= __('Add Quiz') ?></legend>
        <?php
            echo $this->Form->input('question', ['label' => 'Question']);
            echo $this->Form->input('option1', ['label' => 'Option 1']);
            echo $this->Form->input('option2', ['label' => 'Option 2']);
            echo $this->Form->input('option3', ['label' => 'Option 3']);
            echo $this->Form->input('option4', ['label' => 'Option 4']);
            echo $this->Form->input('answer', ['label' => 'Answer']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
