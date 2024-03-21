
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="<?php echo asset('elie/bootstrap.min.css'); ?>" rel="stylesheet"  crossorigin="anonymous">
    <title>Liste des users</title>
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="col">
                <h1 id="ewa"style="text">🤷‍♂️liste des users</h1>
                <br>
                <a type="button" href="/ajouter" name="addetudiant" id="addetudiant" class="btn btn-primary btn-lg btn-block">inscription des clients</a>
                <a type="button" href="/booksa" name="livre" id="livre" class="btn btn-success">ajout livre</a>
                <br>
                <br>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                     <?php endif; ?>
                <form action="etudiant/rechercher" method="POST">
                <?php echo csrf_field(); ?> 
                    <div class="col">
                    
                        <input name="textRecherche" id="textRecherche" class="form-control" type="text" placeholder="rechercher...">
                  
                    </div>
                    <br>
                    <div class="col">
                        <input type="submit" class="btn btn-success" name="rechercher" value="Rechercher">
                    </div>
                </form>
                <br>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                     <?php endif; ?>

                <table id="lek"class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>🔑id</th>

                            <th>👳‍♀️prenom</th>

                            <th>👳‍♀️Nom</th>

                            <th>🧾email</th>
                            
                            <th>code</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($utilisateurs as $etudiant) : ?>
                            <tr>
                                <td><?php echo $etudiant->id; ?></td>
                                <td><?php echo $etudiant->prenom; ?></td>
                                <td><?php echo $etudiant->nom; ?></td>
                                <td><?php echo $etudiant->email; ?></td>
                                <!-- <td><?php echo $etudiant->code; ?></td> -->
                                
                                <td>
                                <a href="/updateetudiant/<?php echo $etudiant->id; ?>" class="btn btn-success">Modifier</a>
                                <a href="/deleteetudiant/<?php echo $etudiant->id; ?>" class="btn btn-warning">Supprimer</a>
                                <!-- <a href="/presence/" class="btn btn-success">emprunt livre</a> -->

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>