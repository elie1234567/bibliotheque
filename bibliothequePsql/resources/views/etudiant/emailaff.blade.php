
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
                <h1 id="ewa"style="text">email</h1>
    
                <br>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                     <?php endif; ?>
                <br>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>
                    </div>
                     <?php endif; ?>

                <table id="lek"class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>🔑id emprunt</th>

                            <th>👳‍♀️Nom</th>

                            <th>🧾email</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($emails as $em) : ?>
                            <tr>
                                <td><?php echo $em->id; ?></td>
                                <td><?php echo $em->idem; ?></td>
                                <td><?php echo $em->discution; ?></td>

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