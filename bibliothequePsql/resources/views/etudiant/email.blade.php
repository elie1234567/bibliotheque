
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
       <h1 id="ni">ENVOYER EMAIL OU PETITE MESSAGE</h1>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                <?php endif; ?>
                <form action="/email/traitement" method="POST"class="form-group">
                <?php echo csrf_field(); ?>
                       <div class=" form-group">
                        <label for=" idem">id emprunt</label>
                        <input type="text" name="idem" id="Idem" class="form-control" placeholder="idem" style="  width: 200px;" required>
                        <small id="helpId" class="text-muted">id emprunt </small>
                    </div>
                    <div class=" form-group">
                        <label for="nom">nom</label>
                        <input type="text" name="nom" id="Nom" class="form-control" placeholder="nom" style="  width: 200px; "  required>
                        <small id="helpId" class="text-muted">nom</small>
                    </div>
                    <div class=" form-group">
                        <label for="discution">Ecrire message</label>
                        <input type="text" name="discution" id="Discution" class="form-control" placeholder="discution" style="  width: 400px; height:400px"  required>
                        <small id="helpId" class="text-muted">discution</small>
                    </div>
                    

                     <br>
                    <button type="submit"  class="btn btn-primary">evoyer</button>
                    <a href="/books" class="btn btn-danger">REVENIR</a>
                </form>
                              <h1>😎</h1>
            </div>
        </div>
    </div>
</body>

</html>