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

            <div class=" grid-item grid-item-1-kemeru">
                <?php include 'views/nav-bar.php';?>
            </div>
               

            <div class=" grid-item grid-item-2-kemeru"> 
                <div class="main-img">
                    <img src="img/kemeri.jpg" alt="Ķemeri">
                </div>
            </div>

            <div class=" grid-item grid-item-3-kemeru"> 
                <div class="title">
                    <?php $pageHeader = 'Ķemeru Nacionālais parks'; ?>
                        <h1><?php echo($pageHeader); ?></h1>
                        <br>
                    <?php $pageHeaderText = 'Ķemeru nacionālais parkam ir 38 165 ha plaša teritorija. Cilvēka darbība šo teritoriju ir skārusi salīdzinoši maz, galvenokārt tikai piekrastes zvejnieku ciemos un lauksaimniecības zemēs Slampes pusē, tāpēc parks ir mājvieta daudzām retām, gan Latvijā, gan Eiropā aizsargājamām augu un dzīvnieku sugām.'; ?>
                        <p><?php echo($pageHeaderText); ?></p>
                </div>
            </div>

            <hr>
            <hr>
            <div class=" grid-item grid-item-4-kemeru"> 
                <div class="info">
                    <h2>Mājaslapa tiek papildināta</h2>
                </div>
            </div>
            
            <div class=" grid-item grid-item-5-kemeru">
                <?php include 'views/form.php';?>
            </div>
        </div>
    </body>

    <footer>
        <div class=" grid-item grid-item-6-kemeru">
            <div id="footer">
                <?php include 'views/footer.php';?>
            </div>
        </div>
    </footer>
    
</html>