<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php 
        // With this syntax you can just target individual xml elements within an xml document. 
        $xml = simplexml_load_file("books.xml") or die("Error: failed to make xml object");
        

        // Iterate through all children in xml document with elements
        foreach($xml->children() as $books) {
            echo $books->title . ", ";
            echo $books->title['lang'] . ", "; // accessing attributes of elements
            echo $books->author . ", ";
            echo $books->year . ", ";
            echo $books->price . "<br>";
        }

        // For books single values
        // echo $xml->book[0]->title . "<br>";

        /* For note.xml file
        echo $xml->to . "<br>";
        echo $xml->from . "<br>";
        echo $xml->heading . "<br>";
        echo $xml->body;
        */
    ?>
</body>
</html>