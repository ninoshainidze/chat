<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    
</body>

<form action="" method="GET" name="test">
      <input type="number" name="x1">
      <input type="number" name="y1">
      <input type="number" name="z1">
      <input type="number" name="radiusi">
      
      <input type="submit" value="birtvis monacemebia" />
    </form>


<?php 
class birtvi{
    public $x1;
    public $y1;
    public $z1;
    public $radiusi;  
 
    public function getMonacmeebi(){
        $this->x1=$_GET['x1'];       
        $this->y1=$_GET['y1'];       
        $this->z1=$_GET['z1'];       
        $this->radiusi=$_GET['radiusi'];
    }

     
}

$birtvitest=new birtvi();
$birtvitest->getMonacmeebi();
$birtvitest->x1="6";
echo $birtvitest->x1; 




?>


</html>