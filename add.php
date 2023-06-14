<?php

?>

<!DOCTYPE html>
<html lang="en">

<?php include("templates/header.php"); ?>

<section class="container grey-text">
    <h4 class="center">Aggiungi la tua pizza</h4>
    <form action="" method="POST" class="white">
        <label for="email">La tua eMail</label>
        <input type="email" name="email">

        <label for="title">Nome della pizza:</label>
        <input type="text" name="title">

        <label for="ingredients">Scrivi gli ingredienti (separati da una virgola):</label>
        <input type="text" name="ingredients">

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand">
        </div>
    </form>
</section>

<?php include("templates/footer.php"); ?>


</html>