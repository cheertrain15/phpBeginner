<!DOCTYPE html>
<html>
<body>

<h1>"My First strict PHP script!"</h1>

<?php 
declare(strict1_types=1);
function multi(int $a, float $b){
    return $a * $b;
}

echo multi(11,2.422);
?>



</body>
</html>