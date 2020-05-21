
<?php 
if(isset($_POST['num'])){
    $n=$_POST['num'];
    $f=1;
    for($i=1;$i<=6;$i++){
        $f*=$i; 
    }
    echo "Factorial of $n = $f";
}
else{
    echo "Sorry! no data provided";
}
?>