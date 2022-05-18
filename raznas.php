<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Nacionālie parki Latvijā</title>
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
        <style>
            <?php include 'css/styles.php'; ?>
            <?php include 'css/table.php'; ?>
            <?php include 'css/text.php'; ?>
            <?php include 'css/grid.php'; ?>
        </style>
    </head>

    <body>

        <div class="grid-container"> 

            <div class=" grid-item grid-item-1-raznas">
                <?php include 'views/nav-bar.php';?>
            </div>
      
            <div class=" grid-item grid-item-2-raznas"> 
                <div class="main-img">
                    <img src="img/raznas.jpg" alt="Rāznas">
                </div>
            </div>
            <div class=" grid-item grid-item-3-raznas"> 
                <div class="title">
                    <?php $pageHeader = 'Rāznas Nacionālais parks'; ?>
                        <h1><?php echo($pageHeader); ?></h1>
                        <br>
                    <?php $pageHeaderText = 'Latgales vēsturiskajam novadam raksturīgās ainavas ar pilskalniem, ezeriem un mežiem, ar viensētām un baznīcām, par Latgales jūru dēvētais Rāznas ezers un dabas daudzveidība ir pamatots iemesls ikvienam apmeklēt Rāznas Nacionālo parku.'; ?>
                        <p><?php echo($pageHeaderText); ?></p>
                </div>
            </div>

                <hr>
                <hr>
            <div class=" grid-item grid-item-4-raznas">
                <div class="info">
                    <h2>Mājaslapa tiek papildināta</h2>
                </div>
            </div>

            <div class=" grid-item grid-item-5-raznas">
            <?php include 'views/form.php';?>
            </div>
        </div>      
    </body>

    <footer>
        <div class=" grid-item grid-item-6-raznas">
            <div id="footer">
                <?php include 'views/footer.php';?>
            </div>
        </div>
    </footer>
</html>