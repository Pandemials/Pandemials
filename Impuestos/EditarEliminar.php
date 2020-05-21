<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Sign In</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css\estilotabla.css">
  </head>

  <?php
   include "Conf\DataBase.php";
    $db = new Database();
    $dblink = $db->getConnection();
    $sql= "SELECT Nombre FROM users WHERE nombre='Luis Fernando';";
    $resultado= $dblink->query($sql);

    $infoUs=$resultado->fetch();
  ?>

  <body>
    <table>
      <thead>
        <tr>
          <th colspan="3">Administradores o editores</th>
        </tr>
      </thead>
      <tbody>
     <tr>
       <td>1</td>
       <td>
         <?php echo $infoUs["Nombre"] ;


          ?> </td>
       <td>
         <i class="material-icons button edit">edit</i>
         <i class="material-icons button delete">delete</i>
       </td>
     </tr>
     <tr>
       <td>2</td>
       <td>Dorado Luis</td>
       <td>
         <i class="material-icons button edit">edit</i>
         <i class="material-icons button delete">delete</i>
       </td>
     </tr>
     <tr>
       <td>3</td>
       <td>Rivera Rodrigo</td>
       <td>
         <i class="material-icons button edit">edit</i>
         <i class="material-icons button delete">delete</i>
       </td>
     </tr>
   </tbody>
 </table>
</html>
