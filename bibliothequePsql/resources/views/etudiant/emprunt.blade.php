
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
                <h1 id="ewa"style="text">🧾EMPRUNTS🧾</h1>
                <br>
                <h1> recherche par codebar</h1>
                <br>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                     <?php endif; ?>
                     <form action="{{ route('livre.rechercher') }}" method="POST">
                    @csrf
                  <div class="col">
               <input name="textRecherche" id="textRecherche" class="form-control" type="text" placeholder="rechercher...">
                 </div>
                    <br>
                    <div class="col">
                        <input type="submit" class="btn btn-success" name="rechercher" value="Rechercher">
                    </div>
                </form>
                <a href="/books" class="btn btn-danger">Revenir</a>
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

                    <?php foreach ($livre as $boky) : ?>
                            <tr>
                                <td><?php echo $boky->id; ?></td>
                                <td><?php echo $boky->title; ?></td>
                                <td><?php echo $boky->author; ?></td>
                                <td><?php echo $boky->Date_dition; ?></td>
                                <td><p>barcode: {!! DNS2D::getBarcodeHTML($boky->barcode, 'DATAMATRIX') !!}</p>
                                 P-<?php echo $boky->barcode; ?></td>
                                
                                <td>
                                <a href="/generateEmpr/<?php echo $boky->id; ?>" class="btn btn-success">emprunter</a>
                                <a href="{{ route('livres.emprunts', $boky->title) }}" class="btn btn-warning">historique</a>

                                <!-- <a href="/presence/" class="btn btn-success">emprunt livre</a> -->

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
    document.getElementById('textRecherche').onchange = function() {
        document.getElementById('searchForm').submit();
    };
</script>

</body>

</html>