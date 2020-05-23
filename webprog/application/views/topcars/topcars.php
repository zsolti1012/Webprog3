<h2 align="center">The most expensive cars in the world </h2>
<div align="center">
    
    <table>
        
        
    </table>
       
</div>

<?php foreach ($cars as $car): ?>
<h3>
    <img src="/webprog/uploads/img/topcars/<?php echo $car['picture'] ?>  " width="100" style="border:5px solid gray"><?php echo $car['model'];?>
</h3>


<br>Price: <?php echo $car['price'];?> $



<?php endforeach; ?>
