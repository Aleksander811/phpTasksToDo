
<?php require "views/_partials/head.view.php";?>
<div class="container">
    <h2>Atnaujinti užduoti</h2>
    <form method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Užduoties pavadinimas" value="<?=$data['subject'];?>">
        </div>
        <div class="form-group">
            <select name="priority" class="form-control" value="<?=$data['priority'];?>">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="form-group">
            <label>Atlikimo data</label>
            <input type="date" name="date" class="form-control" value="<?=$data['dueDate'];?>">
        </div>
        <div class="form-group">
            <button type="submit" name="update">Saugoti</button>
        </div>
    </form>
</div>
<?php require "views/_partials/htmlEnd.view.php";?>
    


