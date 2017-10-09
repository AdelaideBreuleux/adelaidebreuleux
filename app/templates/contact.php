<?php
session_start();
?>
<div class="contact">
    <!-- CONTENT -->
    <div class="container">
        <h1>contact</h1>

        <div class="formulaire">
            <?php if(array_key_exists('errors',$_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if(array_key_exists('success',$_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email à bien été transmis !
                </div>
            <?php endif; ?>
            <form action="pages/send_form.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputname">Nom</label>
                            <input required type="text" name="name" placeholder="Nom..." class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-6-->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputemail">Email</label>
                            <input required type="email" name="email" class="form-control" id="inputemail" placeholder="E-mail..."  value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-6-->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputmessage">Message</label>
                            <textarea required id="inputmessage" name="message"  class="form-control" placeholder="Message..." style="margin: 0px -6px 0px 0px; height: 200px; width: 100%;"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                        </div><!--/*.form-group-->
                    </div><!--/*.col-md-12-->

                    <div class="col-md-12">
                        <button type='submit' class='btn btn-primary'>Envoyer</button>
                    </div><!--/*.col-md-12-->
                </div><!--/*.row-->
            </form>

            <!-- END CONTENT -->

        </div><!--/*.container-->
    </div>
</div>

<?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
unset($_SESSION['success']);
unset($_SESSION['errors']);
