<?php
    include 'templates/header.php'
    
    
?>
<form action="admin.php" method="POST">
    <label for="username" class="list">Votre Login:</label>
        <input type="text" name="username" required>  

    <label for="password" class="list">Mot de Passe :</label>
        <input type="password" name="password" required> 
   

    <input type="submit" value="Validé"> 

</form>
<?php                                       

include 'templates/footer.php' ;
?>