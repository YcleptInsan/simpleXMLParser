<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php 
        libxml_use_internal_errors(true);
        $xml = simplexml_load_file("board.xml");
        if($xml === False) {
            echo "Failed Loading XML: ";
            foreach(libxml_get_errors() as $error) {
                echo "<br>", $error->message;
            }
        } else {
            print_r($xml);
        }
    ?>
</body>
</html>