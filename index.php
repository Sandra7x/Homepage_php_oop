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
            
            <div class="grid-item grid-item-1">
                <?php include 'views/nav-bar.php'; ?>
            </div>
                
            <div class=" grid-item grid-item-2">    
                <div class="main-img">
                    <img src="img/forest.jpg" alt="Forest">
                </div>
            </div>
            
            <div class=" grid-item grid-item-3">
                <div class="index-title">
                    <?php $pageHeader = 'Nacionālie parki Latvijā'; ?>
                        <h1><?php echo($pageHeader); ?></h1>
                        <br>
                    <?php $pageHeaderText = 'Nacionālajos parkos tiek aizsargātas unikālas dabas vērtības.Tajos ir sastopami reti putni un dažādi savvaļas dzīvnieki. Parkos iespējams redzēt visas Latvijas koku sugas, sākot no dažādiem lapkokiem līdz skujkokiem - eglēm un priedēm.'; ?>
                        <p><?php echo($pageHeaderText); ?></p>
                </div>
            </div>

            <hr>
            <hr>          
            <div class=" grid-item grid-item-4">
                    <h3>Latvijā ir četri nacionālie parki:</h3>
            </div>

            <div class=" grid-item grid-item-5">
                <div class="content">
                    <?php include 'views/posts.php'; ?>
                </div>
            </div>       
                         
        
        </div>    
    

</body>

    <footer>
    
    <div class=" grid-item grid-item-6">
        <div id="footer">
            <?php include 'views/footer.php';?>
         </div>
    </div>
    </footer>

</html>