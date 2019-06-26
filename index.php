<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Partie 2</title>
    </head>
    <body>

        <?= include 'bankAccount.php'; ?>
        <?php $bankAccount = new BankAccount('Martin', 500, 1.9, '€');
        echo $bankAccount->holder(); ?><br>
            <?php echo $bankAccount->sold(); ?><br>
            <?php echo $bankAccount->interestRate(); ?><br>
            <?php echo $bankAccount->currency(); ?>


    </body>
</html>