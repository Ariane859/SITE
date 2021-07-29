<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Saisissez vos coordonnées</title>
        <link rel="stylesheet" href="css/styl.css">
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row h-100">
                <div class="col-md-6">
        <form method="POST" action="liste.php">
                <h2>Vos coordonnées</h2>
                <p>
                    <label for="nom">Nom:</label>
                    <input type="text" name="nom" required>
                </p>
                <p>
                    <label for="prenom">Prenom:</label>
                    <input type="text" name="prenom" required>
                </p>
                <p>
                    <label for="datnais">Date de naissance:</label>
                    <input type="date" name="datnais" required>
                </p>
                <p>
                    <label for="ville">Ville:</label>
                    <select name="ville" required>
                        <option value=""></option>
                        <option value="cotonou">Cotonou<option>
                        <option value="porto">Porto-Novo<option>
                        <option value="ouidah">Ouidah<option>
                        <option value="abomey_calavi">Abomey-Calavi<option>
                        <option value="parakou">Parakou<option>
                        <option value="djougou">Djougou<option>
                        <option value="bohicon">Bohicon<option>
                        <option value="natitingou">Natitingou<option>
                        <option value="savè">Savè<option>
                        <option value="abomey">Abomey<option>
                        <option value="nikki">Nikki<option>
                        <option value="lokossa">Lokossa<option>
                        <option value="kandi">Kandi<option>
                        <option value="covè">Covè<option>
                        <option value="malanville">Malanville<option>
                        <option value="pobè">Pobè<option>
                    </select>
                </p>
                <p>
                    <label for="sexe">Sexe:</label>
                    <select name="sexe">
                        <option value="F">Féminin</option>
                        <option value="M">Masculin</option>
                    </select>
                </p>
                <p>
                    <label for="codfil">Filière:</label>
                    <select name="codfil">
                        <option value="SIL">SIL</option>
                        <option value="AGE">AGE</option>
                        <option value="AGRO">AGRO</option>
                        <option value="RIT">RIT</option>
                    </select>
                </p>
                <p>
                    <input type="reset" name="effacer" value="Effacer">
                </p>
                <p>
                    <input type="submit" name="enregistrer" value="Enregistrer">
                </p>
        </form>
</div>
<div class="col-md-6">
        <img src="16_Fotolia_198661316_Subscription_Monthly_M.jpg">
</div>
        <div>
</div>
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
    </body>
</html>

