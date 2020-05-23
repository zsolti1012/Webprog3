
<!-- first click here to print -->

<div class="container">
    <div class="jumbotron">
        
        <h1><p><?php echo $vehicle?></p></h1>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>Model</th>
            
            <th>Description</th>
            <th>Manufactured</th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $n) : ?>
        <tr>
            <td><?= $n['model']; ?></td>
            <td><?= $n['description']; ?></td>
            <td><?= $n['age']; ?></td>
      
        </tr>
        <?php endforeach ?>
        </tbody>
    </table>


        <a href="<?= base_url() ?>phpexcel/download/<?php echo $vehicle?>" class="btn btn-success" >Download .xls file</a>

</div>
