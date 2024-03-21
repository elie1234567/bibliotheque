
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet"  crossorigin="anonymous">

    <title> Liste Des Etudiant</title>
    <style>

    body{
        background-color: #00374c;
        color:#ffffff;
        position: relative;
       background-repeat: no-repeat;
        background-size:100% ;
        overflow-x: hidden;
        overflow-y:scroll; 
    }
    #ni{
        position: relative;
        left:320px
    }
    </style>
</head>

<body>
       <h1 id="ni">inscriptions des etudiants</h1>
    <div class="container">
        <div class="row">
            <div class="col">
            <br>
            <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                <?php endif; ?>
                <form action="/ajouter/traitement" method="POST"class="form-group">
                <?php echo csrf_field(); ?>
 

                    <input type="hidden" name="id" value="">

                    <div class=" form-group">
                        <label for=" prenom">prenom</label>
                        <input type="text" name="prenom" id="Prenom" class="form-control" placeholder="prenom" required>
                        <small id="helpId" class="text-muted">prenom </small>
                    </div>
                    <div class=" form-group">
                        <label for="nom">nom</label>
                        <input type="text" name="nom" id="Nom" class="form-control" placeholder="nom"  required>
                        <small id="helpId" class="text-muted">nom</small>
                    </div>
                    <div class=" form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" id="Email" class="form-control" placeholder="email"  required>
                        <small id="helpId" class="text-muted">email</small>
                    </div>
                        <small id="helpId" class="text-muted">email</small>
                    </div>


                    
                    <div class="form-group">
                        <label for="code">CODE</label>
                        <input type="code" name="code" id="Code" class="form-control" placeholder="code" required>
                        <small id="helpId" class="text-muted">code</small>
                    </div>
                     
                   

                   
                    <br>
                    <button type="submit"  class="btn btn-primary">Enregistrer</button>
                    <a href="index.html" class="btn btn-danger">Revenir</a>
                </form>
                              <h1>😎</h1>
            </div>
        </div>
    </div>
</body>

</html>