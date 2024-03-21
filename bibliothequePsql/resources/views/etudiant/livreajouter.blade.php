
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
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
    
    .ma{
      text-align: center;
      color: aliceblue;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
     font-size: 12px;
     background-color: aliceblue;
      position:fixed;
      top:90px ;
      left:290px;
      border-style:double;
      border-color: aqua;
      width: 530px;
     
      padding: 10px 0;
      
      
    } 
    .mo{
      text-align: center;
      color: aliceblue;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-size: 12px;
    background-color: aliceblue;
      position:relative;
      top:150px;
      left:890px;
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
    .p {
     
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
  </style>
</head>
<body>
<div id="nav-bar">
  <input id="nav-toggle" type="checkbox"/>
  <div id="nav-header"><a id="nav-title" href="" target="_blank">PRESENCE <i class="fab fa-codepen"></i></a>
    <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
    <hr/>
  </div>
  <div id="nav-content"> <div class="nav-button"><a href="#" >about</a></div>
    <div class="nav-button"><a href="#" >Emprunt livre</a></div>
    <div class="nav-button"><a href="#" ></a></div>
    
    <div id="formContainer"></div>
    <img id="za" src="img/R.png"   alt="">
    <div class="nav-button"><a  id="ewa" href="/home" >Logout</a></div>
    <div id="nav-content-highlight"></div>
</div>
 </div>
    <div id="panel" class="mo" style="display: none;">
        <!-- Contenu du panel -->
        <table id="lek"class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
                        <tr>
                            <th>🔑id</th>

                            <th>👳‍♀️prenom</th>

                            <th>🧾email</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($utilisateurs as $etudiant) : ?>
                            <tr>
                                <td><?php echo $etudiant->id; ?></td>
                                <td><?php echo $etudiant->prenom; ?></td>
                                <td><?php echo $etudiant->email; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
       
        
        <!-- Bouton pour fermer le panel -->
        <button class="btn btn-danger" id="fermerPanel">Cancel</button>
    </div>
    </div>
    </div>

 <div id="p" class="p ma">
<div class="container">
        <div class="row">
            <div class="col">
            <br>
            <br>
            <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                <?php endif; ?>
                <form action="/books/traitement" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titre</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titre du livre" required>
            </div>
            <div class="form-group">
                <label for="author">Auteur</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Auteur du livre" required>
            </div>
            <div class="form-group">
                <label for="Date_dition">Date d'édition</label>
                <input type="date" class="form-control" id="Date_dition" name="Date_dition" required>
            </div>
           
            <!-- <div class="form-group">
                <label for="barcode">Code-barres</label>
                <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Code-barres du livre" required>
            </div> -->
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a class="btn btn-danger afficherPanel">voir user</a>    
        </form>
               
        </div>
    </div>
       

       
    </div>
    
    <script>
          var afficherPanelBtns = document.querySelectorAll('.afficherPanel');
          var fermerPanelBtn = document.getElementById('fermerPanel');
          var panel = document.getElementById('panel');
          var panelModification = document.getElementById('panel-modification'); // Ajout de cette ligne pour obtenir l'élément correspondant au panneau de modification

          fermerPanelBtn.addEventListener('click', function() {
              panel.style.display = 'none';
              panelModification.style.display = 'none'; // Masquer le panneau de modification
          });

          afficherPanelBtns.forEach(function(btn) {
              btn.addEventListener('click', function() {
                  panel.style.display = 'block';
                  panelModification.style.display = 'none'; // Masquer le panneau de modification
              });
          });

    </script>

</body>
</html>
