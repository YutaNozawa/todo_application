<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>My Todos</title>
    </head>

    <body>
        <div id="container">
            <h1>Todos</h1>
            <?= $this->Form->create(null, ['url' => ['controller' => 'Todo', 'action' => 'index']]); ?>
            <?= $this->Form->text('text',['id' => "new_todo", 'placeholder' => "what needs to be done?"]); ?>
        </div>

            <ul>
                <li>
                    <?= $this->Form->checkbox('check1',['id' => 'check1']); ?>
                    <span>Do something</span>
                    <div class="delete_todo">x</div>
                </li>
                <li>
                    <?= $this->Form->checkbox('check2',['id' => 'check2']); ?>
                    <span class="done">Do something again!</span>
                    <div class="delete_todo">x</div>
                </li>
                <?= $this->Form->end(); ?>
            </ul>
    </body>
</html>