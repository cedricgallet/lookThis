<!-- ******************Affichage d'un message d'erreur personnalisé******************* -->
<?php 

if(!empty($msgCode) || $msgCode = trim(filter_input(INPUT_GET, 'msgCode', FILTER_SANITIZE_STRING))) {
    if(!array_key_exists($msgCode, $displayMsg)){
        $msgCode = 0;
    }
    echo '<div class="fs-4 d-flex justify-content-center align-items-center alert '.$displayMsg[$msgCode]['type'].'">'.$displayMsg[$msgCode]['msg'].'</div>';
} 
?>
<!-- ********************************************************************************* -->

   <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-12 col-sm-12">
                <!-- ======================CONTENU HOME PAGE===================== -->

                <section class="page-section bg-primary" id="about">
                    <div class="container px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-center">
                            <div class="col-lg-8 text-center">
                                <h2 class="text-white mt-0">A VOUS DE FAIRE VOTRE PAGE D'ACCUEIL! ;)</h2>
                                <hr class="divider divider-light" />
                                <p class="text-white-75 mb-4"></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <?php require_once(dirname(__FILE__).'/../../templates/rightMenu.php');?>
        </div>
    </div>