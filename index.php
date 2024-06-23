<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php include('header.php'); ?>
<?php  $page_active = "home"; ?>
<?php include('nav.php'); ?>
<?php include('db.php'); ?>
<center><h3>таблице1</h3></center>
    <?php
   
$sql = "SELECT * FROM `dbo.rfclpu` Join `dbo.finconsolidatedmaster` ON `dbo.rfclpu`.`Code`= `dbo.finconsolidatedmaster`.`LPUCode`;";

$result = mysqli_query($conn, $sql);

$allday= mysqli_num_rows($result);

while($row =mysqli_fetch_array($result))
{
   
   echo "
  
   <center>
   <main id='sho'>
       <table class='table'>
       
           <thead>
               <tr>
                   <th scope='col'>код</th>
                   <th scope='col'>НАИМЕНОВАНИЕ</th>
                   <th scope='col'>МЕСЯЦ</th>
                   <th scope='col'>ГОД</th>
                   <th scope='col'>СУММА,РУБ</th>
                   
                  
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td>$row[Code]</td>
                   <td>$row[NameShort]</td>
                   <td>$row[MonthCode]</td>
                   <td>$row[YearCode]</td>
                   <td>$row[Summ]</td>
                   
                   
               </tr>
              
           </tbody>
           
           
   
       </table>

       
   
   </main>
 
   
   </center>";
}
?>


    
</body>
</html>