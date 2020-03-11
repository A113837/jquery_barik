<?php

    echo 'greeting from name.php ';

    $names = ['John Doe', 'Jane Doe', 'Jane Mark', 'Md. A. Barik'];

    if(isset($_POST['name'])) {
        $nm = $_POST['name'];

        foreach($names as $name) {
            if($name == $nm) {
                echo "Name exists";
                return;
            }
        }

        echo 'Name not found';

    }

?>