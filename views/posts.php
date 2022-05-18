
<!--<br>
<div><h4><a class="blank-page" href="gaujas.php" target="_blank"><b>Gaujas Nacionālais parks</b></a></h4>
    <br>
    <p>Lielākais un vecākais nacionālais parks Latvijā. Tam raksturīga liela bioloģiskā daudzveidība, reljefa formu dažādība, avoti, smilšakmens atsegumi, gleznainas ainavas un savdabīgi dabas un kultūrvēstures pieminekļi.
</div>
    </p>
<div><h4><a class="blank-page" href="kemeru.php" target="_blank"><b>Ķemeru Nacionālais parks</b></a></h4>
    <br>
    <p>Tā ir ļoti daudzveidīga 38 165 ha plaša teritorija. Cilvēka darbība šo teritoriju ir skārusi salīdzinoši maz, galvenokārt tikai piekrastes zvejnieku ciemos un lauksaimniecības zemēs Slampes pusē, tāpēc parks ir mājvieta daudzām retām, gan Latvijā, gan Eiropā aizsargājamām augu un dzīvnieku sugām.
</div>
    </p>
<div><h4><a class="blank-page" href="raznas.php" target="_blank"><b>Rāznas Nacionālais parks</b></a></h4>
    <br>
    <p>Latgales vēsturiskajam novadam raksturīgās ainavas ar pilskalniem, ezeriem un mežiem, ar viensētām un baznīcām, par Latgales jūru dēvētais Rāznas ezers un dabas daudzveidība ir pamatots iemesls ikvienam apmeklēt Rāznas Nacionālo parku.
</div>
    </p>
<div><h4><a class="blank-page" href="sliteres.php" target="_blank"><b>Slīteres Nacionālais parks</b></a></h4>
    <br>
    <p>Baltijas jūras apskalotajā Ziemeļkurzemes pussalā atrodas Slīteres Nacionālais parks, kur jūra, platlapju meži, purvi un mitraines mijas ar boreāliem mežiem un melnalkšņu dumbrājiem, radot vienreizēji krāšņu ainavu.
</div>
    </p>
-->

<?php
    $posts = [
        [
            'title' => 'Gaujas Nacionālais parks', 
            'text'=> 'Lielākais un vecākais nacionālais parks Latvijā. Tam raksturīga liela bioloģiskā daudzveidība, reljefa formu dažādība, avoti, smilšakmens atsegumi, gleznainas ainavas un savdabīgi dabas un kultūrvēstures pieminekļi.',
        ],
        [
            'title' => 'Ķemeru Nacionālais parks',
            'text'=> 'Tā ir ļoti daudzveidīga 38 165 ha plaša teritorija. Cilvēka darbība šo teritoriju ir skārusi salīdzinoši maz, galvenokārt tikai piekrastes zvejnieku ciemos un lauksaimniecības zemēs Slampes pusē, tāpēc parks ir mājvieta daudzām retām, gan Latvijā, gan Eiropā aizsargājamām augu un dzīvnieku sugām.',
        ],
        [
            'title' => 'Rāznas Nacionālais parks',
            'text'=> 'Latgales vēsturiskajam novadam raksturīgās ainavas ar pilskalniem, ezeriem un mežiem, ar viensētām un baznīcām, par Latgales jūru dēvētais Rāznas ezers un dabas daudzveidība ir pamatots iemesls ikvienam apmeklēt Rāznas Nacionālo parku.',
        ],
        [
            'title' => 'Slīteres Nacionālais parks',
            'text'=> 'Baltijas jūras apskalotajā Ziemeļkurzemes pussalā atrodas Slīteres Nacionālais parks, kur jūra, platlapju meži, purvi un mitraines mijas ar boreāliem mežiem un melnalkšņu dumbrājiem, radot vienreizēji krāšņu ainavu.',
        ],
    ]
?>

<?php foreach($posts as $post) { ?>
    <div class="post">
        <div class="h4"><?php echo $post['title'] ?> </div>
        <br>
        <?php echo $post['text'] ?>
    </div>
<?php } ?>

