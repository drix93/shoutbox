<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Shouts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="shouts form large-9 medium-8 columns content">
    <?= $this->Form->create($shout) ?>
    <fieldset>
        <legend><?= __('Add Shout') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('shout');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
