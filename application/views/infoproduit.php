
<?php $this->load->view('globals/header');?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

         <?php   $this->load->view('globals/sidebar');?>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="http://placehold.it/800x300" alt="">
                    

                    <div class="caption-full">
                     <?php
                        
                      ?>   
                        <h4 class="pull-right"><?= $leProduit->prix ?>€</h4>
                        <h4><a href="#"><?= $leProduit->titre?></a>
                        </h4>
                        <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                        <p>Want to make these reviews work? Check out
                            <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                            </strong>over at maxoffsky.com!</p>
                        <p><?= $leProduit->descrip ?></p>
                  
                    </div>


                    <div class="ratings">
                        <p class="pull-right">3 reviews</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>
                <?= form_open('infoproduit/information/'.$leProduit->idproduit); ?>
                 <?php echo validation_errors(); ?> 
                  <div class="form-group">
                    <label for="auteur">Auteur</label>
                    <input type="text" class="form-control" name="auteur"  placeholder="Votre Nom">
                    <?= form_error('auteur','<div class="alert alert-danger",</div>'); ?>
                  </div>
                  <div class="form-group">
                     <label for="note">Note</label>
                    <input type="text" class="form-control" name="note"  placeholder="Note">
                     <?= form_error('note','<div class="alert alert-danger",</div>'); ?>
                  </div>
                  <div class="form-group">
                     <label for="commentaire">Commentaire</label>
                    <textarea class="form-control" name="commentaire"></textarea>
                    
                  </div>
                  
                  <button type="submit" class="btn btn-success">Submit</button>
                <?=form_close(); ?>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>


            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <?php $this->load->view('globals/footer');?>