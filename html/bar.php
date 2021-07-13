
<form action="" method="post">
<input type="text" name="search" required
oninvalid="this.setCustomValidity('Ievadiet vardu')"
    oninput="setCustomValidity('')">
<input type="submit" name="submit" value="Atrast">
<?php
include 'em.php';
?>