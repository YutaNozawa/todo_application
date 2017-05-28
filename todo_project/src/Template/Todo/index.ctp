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
            <?= $this->Form->text('text',['placefolder' => "what needs to be done?"]); ?>
        </div>

            <ul>
                <li>
                    <?= $this->Form->checkbox('check1',['id' => 'check1']); ?>
                    <span>Do something</span>
                    <div>x</div>
                </li>
                <li>
                    <?= $this->Form->checkbox('check2',['id' => 'check2']); ?>
                    <span>Do something again!</span>
                    <div>x</div>
                </li>
                <?= $this->Form->end(); ?>
            </ul>
    </body>
</html>