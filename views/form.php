<div class="form-free-text">
    <form action="/example/views/welcome.php" method="POST">
        Vārds: <input type="text" name="name" id="name-input" placeholder="Ievadiet savu vārdu" required>
        Uzvārds: <input type="text" name="Uzvārds" id="lastname-input" placeholder="Ievadiet savu uzvārdu">
        <br>
        E-pasts: <input type="text" name="email" id="email-input" placeholder="Ievadiet savu e-pastu" required>
        <br>
        
        <label for="choose-park" >Izvēlieties tēmu</label>
                
        <select>
            <option value="another"><br></option>
            <option value="gaujas-nacionalais-parks">Gaujas Nacionālais parks</option>
            <option value="kemeru-nacionalais-parks">Ķemeru Nacionālais parks</option>
            <option value="raznas-nacionalais-parks">Rāznas Nacionālais parks</option>
            <option value="sliteres-nacionalais-parks">Slīteres Nacionālais parks</option>
            </select>
            <br>
        <textarea name="text" cols="65" rows="10" placeholder="Ierakstiet ziņu" required minlength="10"></textarea>  
        <input type="submit" value="Nosūtīt ziņu"> 
    </form>
</div>

