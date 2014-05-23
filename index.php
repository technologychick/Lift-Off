<html>
  <head>
    <title>Panel o Geek!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
    $myArray = array('Email' => 'Google Relays', 
                     'Docs' => 'Your Drive', 
                     'Invoices' => 'View your Invoices',                           
                     'Cpanel' => 'Hosting Control');  
    $length = count($myArray);
      // On the line below, output one of the values to the page:
        echo '<br />' . 'Welcome User';  
        echo '<br />';
        echo '<br />' . 'Pick a service you would like to connect with: ' ;
        echo '<br />';
      // On the line below, loop through the array and output 
      // *all* of the values to the page:
    foreach ($myArray as $service=>$include){
         echo '<br />' . $service . '<br />' . $include . '<br />';
    }
    ?>
    </p>
  </body>
</html>