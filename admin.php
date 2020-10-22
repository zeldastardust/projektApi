<?php
require_once 'includes/header.php'; ?>

<div id="container">
    <div id="exp">
        <h1>Erfarenheter</h1>
        <table class='table table-bordered table-hover'>
 
            <!-- creating our table heading -->
    <tr>
        <th class='w-10-pct'>Plats</th>
        <th class='w-10-pct'>Namn</th>
        <th class='w-10-pct'>Kategori</th>
        <th class='w-10-pct'>Start</th>
        <th class='w-10-pct'>Stop</th>
        <th class='w-10-pct'></th>
    </tr>
        </table>
        <div id="experiences">
        </div>
    </div>
    <div id="expform">

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
                        <button type="submit" id="addExp" class="btn btn-primary">Create</button>
                    </td>
                </tr>
        </form>
    </div>

        <?php include("includes/footer.php"); ?>