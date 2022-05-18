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

            <div class=" grid-item grid-item-1-gaujas">
                <?php include 'views/nav-bar.php';?>
            </div>
        
            <div class=" grid-item grid-item-2-gaujas">
                    <div class="main-img">
                        <img src="img/gauja.jpg" alt="Gauja">
                    </div>
            </div>

            <div class=" grid-item grid-item-3-gaujas">
                <div class="gaujas-title">
                    <?php $pageHeader = 'Gaujas Nacionālais parks'; ?>
                        <h1><?php echo($pageHeader); ?></h1>
                        <br>
                    <?php $pageHeaderText = 'Parks ir izveidots 1973. gadā. Tas vairāk nekā 90 tūkstošu hektāru platībā aizsargā Gaujas senielejas krāšņāko posmu no Valmieras līdz Murjāņiem.
                    Lai visā pilnībā izbaudītu parka burvību, ar vienu dienu nepietiks!'; ?>
                        <p><?php echo($pageHeaderText); ?></p>
                    </div>
            </div>
                
            <hr>
            <hr>    
            <div class=" grid-item grid-item-4-gaujas">
                    <h3>Iespējas:</h3>
                    <br>
                    <?php include 'views/list-ol.php';?>
            </div>
            <div class=" grid-item grid-item-5-gaujas">
                    <div class="active-links">
                        <p><u>Informācija par aktīvo atpūtu:</u></p>
                        <br>
                
                        <ul>
                            <li class="list2">AERODIUM
                                <p>
                                    <a href="https://www.aerodium.lv/lv" target="_blank">
                                    <button class="links"><b>AERODIUM mājaslapa</b></button></a>
                                </p>
                            </li>    
                        
                            <li class="list2">ZĒRGLIS
                                <p>
                                    <a href="https://siguldaadventures.com/zipline?msclkid=248fd66abf1c11ecabf31124fe345696" target="_blank">
                                    <button class="links"><b>ZĒRGLIS mājaslapa</b></button></a>
                                </p>
                            </li> 

                            <li class="list2">Vairāk info par aktīvās atpūtas iespējām Siguldā - mājaslapa https://siguldaadventures.com
                                <p>
                                    <a href="https://siguldaadventures.com/" target="_blank">
                                    <button class="links"><b>Siguldaadventures.com</b></button></a>
                                </p>
                            </li>                 
                        </ul>
                    </div>    
                    <br>
                              
                   
                    <iframe width="360" height="215" alignment="left" src="https://www.youtube.com/embed/BzjBBhbr7S4"
                    title="YouTube video player" frameborder="4" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                    </iframe>   
               
            
          
            </div>
        </div>
    </body>

    <footer>
        <div class=" grid-item grid-item-6-gaujas">
            <div id="footer">
                <?php include 'views/footer.php';?>
            </div>
        </div>
    </footer>

</html>