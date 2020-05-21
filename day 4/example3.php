
<?php 
if(isset($_GET['num'])){
    $n=$_GET['num'];
    $f=1;
    for($i=1;$i<=6;$i++){
        $f*=$i ;
    }
    echo "Factorial of $n = $f";
}
else{
    echo "Sorry! no data provided";
}
?>