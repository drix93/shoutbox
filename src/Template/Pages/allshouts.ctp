

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Shouts
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Shout Out</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($shouts as $s){ ?>
                            <tr>
                                <td><?= $s->username ?></td>
                                <td><?= $this->Text->autoParagraph(h($s->shout_text)) ?></td>
                                <td><?= $s->created->nice() ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Do a shout out
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create(); ?>
                <div clas="form-group">
                        <?php 
                        echo $this->Form->input('username',[
                            'autocomplete' => 'off',
                            'class' => 'form-control',
                            'label' => _('Your name'),
                            'placeholder' => _('Your name here')
                        ]); 
                        ?>
                        <?php 
                        echo $this->Form->input('shout_text',[
                            'type' => 'textarea',
                            'class' => 'form-control'
                        ]); 
                        ?>
                        <?= $this->Form->button(__('Send Shout Out'), ['class'=> 'btn btn-success']) ?>

                </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>