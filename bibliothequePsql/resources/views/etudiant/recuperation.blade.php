
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet"  crossorigin="anonymous">
    <title> genérer emprunt</title>
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
       <h1 id="ni">genérer emprunt</h1>
    <div class="container">
        <div class="row">
            <div class="col">
            <br>
            <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                <?php endif; ?>
                <form action="/recuperation/traitement" method="POST"class="form-group">
                <?php echo csrf_field(); ?>

                     <div class="form-group">
                      <label for="emprunteur">Emprunteur</label>
                      <select name="emprunteur" id="Emprunteur" class="form-control" required>
                          <?php foreach ($emprunteur as $u) : ?>
                              <option value="<?php echo $u->id; ?><?php echo $u->nom; ?>"><?php echo $u->nom; ?></option>
                          <?php endforeach; ?>
                      </select>
                      <small id="helpId" class="text-muted">Emprunteur</small>
                     </div>
                    <div class=" form-group">
                        <label for="livre"></label>
                        <input type="text" name="livre" id="Livre" class="form-control" placeholder="livre" value="<?php echo $books->title; ?>" required>
                        <small id="helpId" class="text-muted">livre</small>
                    </div>
                    <div class=" form-group">
                        <label for="email">date emprunt</label>
                        <input type="date" name="date_emp" id="Date_emp" class="form-control" placeholder="email" value="" required>
                        <small id="helpId" class="text-muted">date emprunt</small>
                    </div>
                        <small id="helpId" class="text-muted">date emprunt</small>
                    </div>

                     <div class=" form-group">
                        <label for="email">date retour</label>
                        <input type="date" name="date_retour" id="Date_retour" class="form-control" placeholder="date_retour" value="" required>
                        <small id="helpId" class="text-muted">date emprunt</small>
                    </div>
                        <small id="helpId" class="text-muted">date emprunt</small>
                    </div>
                    
                    <br>
                    <button type="submit"  class="btn btn-primary">accepter</button>
                    <a href="/generate" class="btn btn-danger">Revenir</a>
                </form>
                              <h1>🏫🏫🏫🏫🏫🏫🏫🏫🏫</h1>
            </div>
        </div>
    </div>
</body>

</html>