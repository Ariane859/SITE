<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="css/styl.css">
        <meta name="robots" content="noindex, follow">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=mPH13BBJFtg2-Ks2RdofaisC-91OBViIowcMuR5r8A2NYDq1RbHZ_REY6BJLou6Q5ZcVwdoHbIFyJkI5vPcywTm7rlbFjB-thxg4aCc5o3g" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://gc.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly9jb2xvcmxpYi5jb20vZXRjL3JlZ2Zvcm0vY29sb3JsaWItcmVnZm9ybS0xNS8"/>
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="banner-the-inscription-football-and-ball-hang-on-the-ropes-vector-illustration-image_csp45755278.jpg">
                    </div>
                <div class="col-md-6">
                <form method="POST" class="registration-form">
                <center><h2>Inscription annuelle pour le championnat</h2></center>
                <p>
                    <div class="form-row">
                        <div class="form-group">
                    <label for="categorie">Catégorie:</label>
                    <select name="categorie">
                        <option value="senior">Sénior</option>
                        <option value="junior">Junior</option>
                    </select>
            </div>
            </div>
            </p>
    
                <p>
                 <div class="form-row">
                    <div class="form-group">
                    <label for="club">Club:</label>
                    <select name="club">
                        <option value="aspacfc">ASPAC FC</option>
                        <option value="dragonsfc">DRAGONS FC</option>
                        <option value="mogasfc">MOGAS FC</option>
                        <option value="requinsfc">REQUINS FC</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="annee">Année:</label>
                    <input type="text" name="annee">
                </div>
                </div>
                </p>
                <p>
                <div class="form-row">
                    <div class="form-group">
                    <label for="nom">Nom:</label>
                    <select name="nom">
                        <option value="adimi">ADIMI</option>
                        <option value="soglo">SOGLO</option>
                        <option value="dossou">DOSSOU</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom:</label>
                    <input type="text" name="prenom">
                </div>
                </div>
                </p>
                <p>
                    <div class="form-row">
                    <div class="form-group">
                    <label for="datnaissance">Date de naissance:</label>
                    <input type="date" name="datnaissance">
                    </div>
                    <div class="form-group">
                    <label for="ville">Ville:</label>
                    <input type="text" name="ville">
                    </div>
                    </div>
                </p>
                <p>
                    <div class="form-row">
                    <div class="form-group">
                    <label for="sexe">Sexe:</label>
                    <input type="text" name="sexe">
                    </div>
                    </div>
                </p>
                <div class="form-submit">
                <p>
                    <input type="reset" name="effacer" class="submit"  value="Effacer" id="reset">
                </p>
                <p>
                    <input type="submit" name="enregistrer" class="submit" id="submit" value="Enregistrer">
            
                </p>
                </div>
        </form>
</div>
</div>
  <div>
        <?php 
    include ('connexion.inc.php');
    if(isset($_POST['enregistrer']) &&!empty($_POST['nom'])&& !empty($_POST['prenom']) && !empty($_POST['datnais']) && !empty($_POST['ville']) && !empty($_POST['sexe'] && !empty($_POST['codfil'])))
    {
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $datnais=$_POST['datnais'];
        $ville=$_POST['ville'];
        $sexe=$_POST['sexe'];
        $codfil=$_POST['codfil'];
    
    $sql= "INSERT INTO candidat(nom,prenom,datnais,ville,sexe,codfil) values(:nom,:prenom,:datnais,:ville,:sexe,:codfil)";
    $res= $connection->prepare($sql);
    $res->bindParam(':nom',$nom);
    $res->bindParam(':prenom',$prenom);
    $res->bindParam(':datnais',$datnais);
    $res->bindParam(':ville',$ville);
    $res->bindParam(':sexe',$sexe);
    $res->bindParam(':codfil',$codfil);
    $res->execute();
}
else {
    echo "Veuillez remplir tous les champs";
} 
?>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"672d889cea73da72","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.7.0","si":10}'></script>
</body>
</html>

