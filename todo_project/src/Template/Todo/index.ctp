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

            <ul id="#todos">
                <?php foreach($todos as $todo): ?>
                <li>
                    <?= $this->Form->checkbox('check1',['class' => 'update_todo', 'checked' => $todo->state == 1]); ?>
                    <span class="<?php if ($todo->state == 1) { echo "done"; } ?>"><?= h($todo->title); ?></span>
                    <div class="delete_todo">x</div>
                </li>
                <?php endforeach; ?>

                <?= $this->Form->end(); ?>
            </ul>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="todo.js"></script
    </body>
</html>