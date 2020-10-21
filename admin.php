<?php
include_once 'includes/header.php'; ?>

<div id="container">
    <div id="readExp">
    </div>
    <div id="create form">
<!-- HTML form for creating a experience -->
<h1 id="form h1">Lägg till erfarenhet</h1>
<form action="" method="post">

    <table class='table table-hover table-responsive table-bordered'>

        <tr>
            <td>Arbetsplats/lärosäte/Url</td>
            <td><input type='text' name='place' class='form-control' /></td>
        </tr>

        <tr>
            <td>Namn</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
        <tr>
            <td>kategori</td>
            <td><input type='text' name='category' class='form-control' /></td>
        </tr>
        <tr>
            <td>Start</td>
            <td><input type='date' name='startedu' class='form-control' /></td>
        </tr>
        <tr>
            <td>Stop</td>
            <td><input type='date' name='stopedu' class='form-control' /></td>
        </tr>
        <tr>
            
            <td>
                <button type="submit" class="btn btn-primary">Create</button>
            </td>
        </tr>
</form>
</div>
</div>
<?php include("includes/footer.php");?>
