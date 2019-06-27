<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>Partie 2</title>
    </head>
    <body>

        <?= include 'bankAccount.php'; ?>
        <?php $arielAccount = new BankAccount('Ariel', 10000, 1.9, 'euros'); ?>
       <p>Bonjour <?= $arielAccount->holder(); ?>, vous venez d'ouvrir un compte avec un taux d'intérêt de <?= $arielAccount->interestRate(); ?>% et vous y avez déposé un montant de <?= $arielAccount->sold().' '.$arielAccount->currency(); ?>.</p>
          <?php $arielAccount->credit(1250); ?>  
          <p>Vous venez de créditer votre compte de 1250 euros et votre nouveau solde est de <?= $arielAccount->sold().' '.$arielAccount->currency(); ?>.</p>
            <?php $arielAccount->debit(500); ?>
            <p>Vous venez de débiter votre compte de 500 euros et votre nouveau solde est de <?= $arielAccount->sold().' '.$arielAccount->currency(); ?>.</p>
    </body>
</html>