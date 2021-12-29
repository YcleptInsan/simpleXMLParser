<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XmlParsersBish</title>
</head>
<body>
    <?php 
        //Adding libxml to retrieve all XML errors 
        libxml_use_internal_errors(true);
        // XML stored in a variable. 
        $myXMLData = 
        "<?xml version='1.0' encoding='UTF-8' ?>
        <note>
        <to>Jeff Frank</to>
        <from>Taco Bob</from>
        <heading>Notice</heading>
        <body>Get Served Jeff!</body>
        </note>";

        
        // using simpleXML load string and print readable xml object
        $xml = simplexml_load_string($myXMLData);
        if($xml === false) {
            echo "Falied loading XML: ";
            // A way to stylize errors, if any.
            foreach(libxml_get_errors() as $error) {
                echo "<br>", $error->message;
            }
        } else {
            print_r($xml);
        }
    ?>
</body>
</html>