
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet"  crossorigin="anonymous">
    <title> update Des Etudiant</title>
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
       <h1 id="ni">🎈🎈update etudiant🎈🎈</h1>
    <div class="container">
        <div class="row">
            <div class="col">
            <br>
            <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                <?php endif; ?>
                <form action="/update/traitement" method="POST"class="form-group">
                <?php echo csrf_field(); ?>
 

                    <input type="text" name="id" style="display:none;" value="<?php echo $utilisateurs->id; ?>">

                    <div class=" form-group">
                        <label for=" prenom">prenom</label>
                        <input type="text" name="prenom" id="Prenom" class="form-control" placeholder="prenom" value="<?php echo $utilisateurs->prenom; ?>" required>
                        <small id="helpId" class="text-muted">prenom </small>
                    </div>
                    <div class=" form-group">
                        <label for="nom">nom</label>
                        <input type="text" name="nom" id="Nom" class="form-control" placeholder="nom" value="<?php echo $utilisateurs->nom; ?>" required>
                        <small id="helpId" class="text-muted">nom</small>
                    </div>
                    <div class=" form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="Email" class="form-control" placeholder="email" value="<?php echo $utilisateurs->email; ?>" required>
                        <small id="helpId" class="text-muted">email</small>
                    </div>
                        <small id="helpId" class="text-muted">email d'un étudiant</small>
                    </div>


                    
                    <div class="form-group">
                        <label for="code">code etudiant</label>
                        <input type="code" name="code" id="Code" class="form-control" placeholder="code"value="<?php echo $utilisateurs->code; ?>" required>
                        <small id="helpId" class="text-muted">code etudiant</small>
                    </div>
                    
                    <br>
                    <button type="submit"  class="btn btn-primary">Modifications</button>
                    <a href="/etudiant" class="btn btn-danger">Revenir</a>
                </form>
                              <h1>🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈🎈</h1>
            </div>
        </div>
    </div>
</body>

</html>