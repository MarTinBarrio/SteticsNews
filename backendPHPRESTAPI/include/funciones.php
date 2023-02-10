<?php

function debugear($variable)
{
    ?>
    <p>
        <?php
            echo "<pre>";
            var_dump($variable);
            echo "</pre>";
            //exit;
        ?>
    </p>
<?php
}
?>