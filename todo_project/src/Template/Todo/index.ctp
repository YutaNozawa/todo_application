<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>My Todos</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="/todo_application/todo_project/webroot/js/todo.js"></script>
    </head>

    <body>
        <div id="container">
            <h1>Todos</h1>
            <?= $this->Form->create(null, ['url' => ['controller' => 'Todo', 'action' => 'index']]); ?>
            <?= $this->Form->text('text',['id' => "new_todo", 'placeholder' => "what needs to be done?"]); ?>
        </div>

            <ul id="todos">
                <?php foreach($todos as $todo): ?>
                <li id="todo_<?= h($todo->id); ?>" data-id="<?= h($todo->id) ?>">
                    <?= $this->Form->checkbox('check',['class' => 'update_todo', 'checked' => $todo->state == 1]); ?>
                    <span class="todo_title <?php if ($todo->state == 1) { echo "done"; } ?>"><?= h($todo->title); ?></span>
                    <div class="delete_todo">x</div>
                </li>
                <?php endforeach; ?>

                <?= $this->Form->end(); ?>
            </ul>

    </body>
</html>