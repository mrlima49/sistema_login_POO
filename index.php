<?php
require_once "functions/pages.php";
require_once "autoload.php";
require_once "includes/header.php";
?>
<main class="container">
    <section>
        <?php 
        require load(); 
        if(isset($_SESSION['msg_success'])):
            $msg = $_SESSION['msg_success'];
            session_unset();  
            ?>
            <p class="green"><?= $msg ?></p>
        <?php
            elseif(isset($_SESSION['msg_error'])):
                $msg = $_SESSION['msg_error'];
                session_unset(); 
        ?>
          <p class="red"><?= $msg; ?></p>
        <?php
        endif;
        ?>   
    </section>
</main>
