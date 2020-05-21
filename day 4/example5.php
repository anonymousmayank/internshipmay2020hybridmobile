
<?php 
if(isset($_POST['name'], $_POST['age'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    if($age>18)
        echo "Dear $name you can vote";
    else
        echo "Dear $name you cannot vote";
    
}
else{
    echo "Sorry! no data provided";
}
?>