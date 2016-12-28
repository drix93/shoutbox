<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Shout'), ['action' => 'edit', $shout->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Shout'), ['action' => 'delete', $shout->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shout->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Shouts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Shout'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shouts view large-9 medium-8 columns content">
    <h3><?= h($shout->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($shout->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($shout->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($shout->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($shout->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Shout') ?></h4>
        <?= $this->Text->autoParagraph(h($shout->shout)); ?>
    </div>
</div>
