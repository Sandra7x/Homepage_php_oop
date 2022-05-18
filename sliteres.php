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

            <div class=" grid-item grid-item-1-sliteres">
                <?php include 'views/nav-bar.php';?>
            </div> 
        
            <div class=" grid-item grid-item-2-sliteres">
                <div class="main-img">
                    <img src="img/slīteres.jpg" alt="Slīteres">
                </div>
            </div>

            <div class=" grid-item grid-item-3-sliteres">
                <div class="title">
                    <?php $pageHeader = 'Slīteres Nacionālais parks'; ?>
                        <h1><?php echo($pageHeader); ?></h1>
                        <br>
                    <?php $pageHeaderText = 'Baltijas jūras apskalotajā Ziemeļkurzemes pussalā atrodas Slīteres Nacionālais parks, kur jūra, platlapju meži, purvi un mitraines mijas ar boreāliem mežiem un melnalkšņu dumbrājiem, radot vienreizēji krāšņu ainavu.'; ?>
                        <p><?php echo($pageHeaderText); ?></p>
                </div>
            </div>

            <hr>
            <hr>

            <div class=" grid-item grid-item-4-sliteres">
                <div class="info">
                    <h2>Mājaslapa tiek papildināta</h2>
                    <video src="video/grass.mp4" height="200" width="350" controls>
                </div>
            </div>

            <div class=" grid-item grid-item-5-sliteres">
                <?php include 'views/form.php';?>
            </div>   
        </div>     
    </body>
    
    <footer>
        <div class=" grid-item grid-item-6-sliteres">
            <div id="footer">
                <?php include 'views/footer.php';?>
            </div>
        </div>
    </footer>
</html>