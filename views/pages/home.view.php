<?php require "views/_partials/head.view.php";?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                TODO app
            </div>
            <div class="card-header">
                <a href="/add-task" class="btn btn-primary">Pridėti naują užduotį</a>
            </div>
        </div>
        <table class="table table-bordered table-striped mt-3">
            <tr>
                <th>Užduoties pavadinimas</th>
                <th>Būsena</th>
                <th>Prioritetas</th>
                <th>Atlikimo data</th>
                <th>Redaguoti</th>
                <th>Šalinti</th>
            </tr>
            <?php foreach ($task->allTasks() as $data):?>
            <tr style="<?php if($data['status']==1):?> text-decoration: line-through<?php endif; ?>">
                <td><?=$data['subject'];?></td>
                <td><?=$data['status'];?></td>
                <td><?=$data['priority'];?></td>
                <td><?=$data['dueDate'];?></td>
                <td><a href="/update-task/id/<?=$data['id'];?>">Atnaujinti</a></td>
                <td><a href="/delete-task/id/<?=$data['id'];?>">Šalinti</a></td>
                <td><a href="/complete-task/id/<?=$data['id'];?>">Užbaigti užduotį</a></td>
            </tr>
            <?php endforeach;?>
            </table>
    </div>
<?php require "views/_partials/htmlEnd.view.php";?>


<!--
Paspaudus nuoroda uzbaigti uzduoti.
Uzduoties statusas duomenu bazeje yra pakeiciama is 0 i 1.
Ir uzduotis atvaizduojama kaip nubraukta.

-->