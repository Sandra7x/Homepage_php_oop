<!-- <div class="nav-bar">
<a class="navbar-brand" href="index.php">
    <img src="logo.png" alt="logo">
</a>
<nav>
    <ul class="navbar-list">
        <button><li class="navbar-btn"><a href="index.php">Sākums</a></li> </button>
        <button><li class="navbar-btn"><a href="gaujas.php">Gaujas Nacionālais parks</a></li></button>
        <button><li class="navbar-btn"><a href="kemeru.php">Ķemeru Nacionālais parks</a></li></button>
        <button><li class="navbar-btn"><a href="raznas.php">Rāznas Nacionālais parks</a></li></button>
        <button><li class="navbar-btn"><a href="sliteres.php">Slīteres Nacionālais parks</a></li></button>
    </ul>
</nav>
</div> -->
                
<div class="menu">
    <a class="navbar-brand" href="index.php">
        <img src="logo.png" alt="logo">
    </a>
    
    <?php 
        $navigation = [
            ['name'=>'Sākums', 'url'=>'index.php'],
            ['name'=>'Gaujas Nacionālais parks', 'url'=>"gaujas.php"],
            ['name'=>'Ķemeru Nacionālais parks', 'url'=>'kemeru.php'],
            ['name'=>'Rāznas Nacionālais parks', 'url'=>'raznas.php'],
            ['name'=>'Slīteres Nacionālais parks', 'url'=>'sliteres.php'],
        ];
    ?>

    <?php
        function generateMenu($navigationElements)
        {
            $html = "<nav>\n"; 
                foreach($navigationElements as $navigationElement)
                { 
                    $html .= "<button><a href='{$navigationElement['url']}'>{$navigationElement['name']}</a></button>\n";
                }
            $html .= "</nav>\n";
            return $html;
        }
    ?>
    <nav>
        <ul class="navbar-list">
            <li class="navbar-btn">
                <li>

                    <?php echo generateMenu($navigation); ?>

                </li>
            </li>
        </ul>
    </nav>
</div>