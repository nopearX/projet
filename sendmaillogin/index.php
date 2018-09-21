<?php
    include '_inc.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="../css/stylecss.css">
    <style>
        /* body {
            padding-top: 50px;
        } */
        .starter-template {
            padding-top: 40px;
        }
    </style>

    <link rel="icon" type="image/jpeg" href="/mobile/IMG_43FEAACBF233-1.jpeg" />
</head>
<body>

<?php include '../includes/headerlog.php'; ?>


<div class="container">

    <div class="starter-template">

        <?php if(array_key_exists('errors', $_SESSION)): ?>
            <div class="alert alert-danger">
                <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
        <?php endif; ?>
        <?php if(array_key_exists('success', $_SESSION)): ?>
            <div class="alert alert-success">
                Votre email a bien été envoyé
            </div>
        <?php endif; ?>


        <form action="post_contact.php" method="POST">
            <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
            <div class="row">
                <div class="col-xs-4">
                    <?= $form->text('name', 'Votre Nom'); ?>
                </div>
                <div class="col-xs-4">
                    <?= $form->email('email', 'Votre Email'); ?>
                </div>
                <div class="col-xs-4">
                    <?= $form->select('service', 'Service', ['Contact', 'Avis', 'Bug']); ?>
                </div>
                <div class="col-xs-12">
                    <?= $form->textarea('message', 'Votre message'); ?>
                    <?= $form->submit('Envoyer'); ?>
                </div>
            </div>
        </form>


    </div>

</div>

</body>
</html><?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>
