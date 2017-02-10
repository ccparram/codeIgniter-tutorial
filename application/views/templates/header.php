<html>
        <head>
                <title>CodeIgniter Tutorial</title>

                <?php
                if (isset($css)){
                        foreach ($css as $_css) {
                         echo  '<link href="' . $_css . '" rel="stylesheet">';
                         echo "\n\t\t\t\t";
                        }
                }
                if (isset($js)){
                        foreach ($js as $_js) {
                         echo  '<script src="' . $_js . '"></script>';
                         echo "\n\t\t\t\t";
                        }
                }
                ?>
        </head>
        <body>
                