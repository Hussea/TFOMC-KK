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
<center><h3>таблице3</h3></center>
    <?php

$sql = "SELECT `dbo.finconsolidatedmaster`.HelpFormCode, SUM(Summ) as totalSum, SUM(CountSch) as totalSch,
 COUNT(HelpFormCode) as totalCOUN, `dbo.rfchelpform`.Name as HelpFormName FROM `dbo.finconsolidatedmaster` 
 INNER JOIN `dbo.rfchelpform` ON `dbo.finconsolidatedmaster`.HelpFormCode = `dbo.rfchelpform`.Code GROUP BY 
 `dbo.finconsolidatedmaster`.HelpFormCode ORDER BY totalSum";



    $result = mysqli_query($conn, $sql);
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
                   <th scope='col'>КОЛИЧЕСТВО ПОСЕЩЕНИЙ</th>
                   <th scope='col'>КОЛИЧЕСТВО ОБРАЩЕНИЙ</th>
                   <th scope='col'>Количество счетов</th>
                   <th scope='col'>СУММА,РУБ</th>
                   
                  
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td>$row[HelpFormCode]</td>
                   <td>$row[HelpFormName]</td>
                   <td>$row[totalCOUN]</td>
                   <td>0</td>
                   <td>$row[totalSch]</td>
                   <td>$row[totalSum]</td>
                   
                   
               </tr>
              
           </tbody>
           
           
   
       </table>

       
   
   </main>
 
   
   </center>";
}




?>


    
</body>
</html>