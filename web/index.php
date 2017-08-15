<?php

require('../vendor/autoload.php');
require_once('conn.php');
$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.php');
});

$sql = "SELECT * FROM Employees";
$result = $mysqli->query($sql);


 $mysqli->close();


$app->run();

?>


<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Ordered By</th>
                <th>Employee Id</th>
                <th>Phone Number</th>
                <th>Notifications</th>
                
                <th>Status</th>
                <th>email</th>
                <th>Actions</th>

            </tr>
        </thead>
         
        <tbody>
        <?php
        if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) { ?>
         <tr>
                <td><?php echo $row["OrderBy"]; ?></td>
                <td><?php echo $row["EmployeeID"]; ?></td>
                <td><?php echo $row["PhoneNumber"]; ?></td>
                <td><?php echo $row["Notification"]; ?></td>
                
                <td><?php echo $row["Status"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
               
<td> <a href='views/show.php?id=<?php echo $row["id"] ?>'>show</a></td>
            </tr>
           <?php  } }?>
            
        </tbody>
        
        <tfoot>
            <tr><th>Ordered By</th>
                <th>Employee Id</th>
                <th>Phone Number</th>
                <th>Notifications</th>
             
                <th>Status</th>
                <th>email</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>
