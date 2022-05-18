<?php
    $listOl = 
        [
            'Apmeklēt kultūrvēsturiskos pieminekļus',
            'Baudīt aktīvo atpūtu',
            'Apskatīties atsegumus, klintis un alas:',
        ];
?>

    <ol>
        <?php foreach($listOl as $numerList) { ?>
            <li class='list-ol'><?php echo $numerList ?></li>
        <?php } ?> 
    </ol>
    
<div class = "databaseData">
    <?php include 'views/tableDB.php';?>
</div>