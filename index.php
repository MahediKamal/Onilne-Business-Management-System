<?php 
    $title = "home";
    require_once 'includes/header.php';
?>
    
    <h1> Main index page <h1>

    <!-- basic connection with oracle DB -->
    <?php
    
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    
    $username = "MISTproject";                  // Use your username
    $password = "171414";             // and your password
    $database = "localhost/XE";   // and the connect string to connect to your database
    
    $query = "select * from dual";
    
    $c = oci_connect($username, $password, $database);
    if (!$c) {
        $m = oci_error();
        trigger_error('Could not connect to database: '. $m['message'], E_USER_ERROR);
    }
    
    $s = oci_parse($c, $query);
    if (!$s) {
        $m = oci_error($c);
        trigger_error('Could not parse statement: '. $m['message'], E_USER_ERROR);
    }
    $r = oci_execute($s);
    if (!$r) {
        $m = oci_error($s);
        trigger_error('Could not execute statement: '. $m['message'], E_USER_ERROR);
    }
    
    echo "<table border='1'>\n";
    $ncols = oci_num_fields($s);
    echo "<tr>\n";
    for ($i = 1; $i <= $ncols; ++$i) {
        $colname = oci_field_name($s, $i);
        echo "  <th><b>".htmlspecialchars($colname,ENT_QUOTES|ENT_SUBSTITUTE)."</b></th>\n";
    }
    echo "</tr>\n";
    
    while (($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) != false) {
        echo "<tr>\n";
        foreach ($row as $item) {
            echo "<td>";
            echo $item!==null?htmlspecialchars($item, ENT_QUOTES|ENT_SUBSTITUTE):"&nbsp;";
            echo "</td>\n";
        }
        echo "</tr>\n";
    }
    echo "</table>\n";
    
    ?>


<?php require_once 'includes/footer.php'; ?>