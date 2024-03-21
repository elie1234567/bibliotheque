
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet" crossorigin="anonymous">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
  <link href="<?php echo asset('elie/style.css'); ?>" rel="stylesheet" crossorigin="anonymous">
  <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet"  crossorigin="anonymous">
  <style>
    .task-cards-container {
      color: #81f50c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 12px;
        position: relative;
        left:260px;
        display: flex; /* Utilisation de Flexbox */
        flex-wrap: wrap; /* Permet aux panneaux de passer à la ligne si l'espace est insuffisant */
        justify-content: center; /* Centre les panneaux horizontalement */
        gap: 4px; /* Espacement entre les panneaux */
    }
    .mo{
      text-align: center;
      color: aliceblue;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 12px;
        background-color: aliceblue;
      position:relative;
      left:290px;
      border-style:double;
      border-color: aqua;
      width: 330px;
      padding: 10px 0;
      
      
    }
    .ma{
      text-align: center;
      color: aliceblue;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 12px;
        background-color: aliceblue;
      position:relative;
      bottom:340px ;
      left:690px;
      border-style:double;
      border-color: aqua;
      width: 530px;
     
      padding: 10px 0;
      
      
    } 

    .panel {
     
        flex: 0 0 calc(19% - 10px); /* Définit la largeur de chaque panneau (50% avec un espacement de 20px) */
        margin-bottom: 20px; /* Espacement en bas de chaque panneau */
        border: 5px solid #ccc; /* Bordure pour visualiser les panneaux */
        border-radius: 65px; /* Bordure arrondie */
        padding: 20px; /* Espacement à l'intérieur du panneau */
        box-sizing: border-box; /* Inclut les bordures et les rembourrages dans la largeur et la hauteur */
    }
    .panel-modification {
     
     flex: 0 0 calc(19% - 10px); /* Définit la largeur de chaque panneau (50% avec un espacement de 20px) */
     margin-bottom: 20px; /* Espacement en bas de chaque panneau */
     border: 5px solid #ccc; /* Bordure pour visualiser les panneaux */
     border-radius: 65px; /* Bordure arrondie */
     padding: 20px; /* Espacement à l'intérieur du panneau */
     box-sizing: border-box; /* Inclut les bordures et les rembourrages dans la largeur et la hauteur */
 }
    body{
      background: var(--background);
    }
  #za{
      position: relative;
      top: 100px;
      left:-30px;
      width: 200px;
     height: 200px;
    }
    #ewa{
      position: relative;
      top: 220px;
      left:130px;
    }
    #pdf{
      position: relative;
      left:530px;
    }
  </style>
</head>
<body>
<div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header"><a id="nav-title" href="" target="_blank">Bibliothécaire:<i class="fab fa-codepen"></i></a>
    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
    <hr/>
  </div>
     <div id="formContainer"></div>
    <img id="za" src="img/R.png"   alt="">
    <div class="nav-button"><a  id="ewa" href="/home" >Logout</a></div>
    <div id="nav-content-highlight"></div>
   
  </div>
</div>
<div class="task-cards-container">
    <?php if (count($emprunts) > 0): ?>
        <?php foreach ($emprunts as $emprun) : ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>ID: <?php echo $emprun->id; ?></p>
                    <p>emprunteur: <?php echo $emprun->emprunteur; ?></p>
                    <p>livre: <?php echo $emprun->livre; ?></p>
                    <p>date emprunt: <?php echo $emprun->date_emp; ?></p>
                    <p>date retour: <?php echo $emprun->date_retour; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun emprunt trouvé pour ce livre.</p>
    <?php endif; ?>
</div>


</div>
 <!-- </div>
 <a id="pdf" href="{{ route('generatePdf') }}" class="btn btn-primary">Générer PDF</a>
</body> -->
</html>
