<?php 
    require_once('book_functions.inc.php');
    require_once('mysqli_connect.php');

    $results = GetBooks($dbc);

?>
<section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Our Latest Books</h3>
                    <!--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
                    <div class="btn-group">
                        <a class="btn btn-danger" href="#scroller" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="btn btn-danger" href="#scroller" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">

                                <?php 
                                    for ($x=0; $x<3; $x++) 
                                    {

                                         print "<div class='col-xs-4'>
                                        <div class='portfolio-item'>
                                            <div class='item-inner'>
                                                <img class='img-responsive' height=135 width=90 src='images/{$results[$x]['imagename']}' alt=''>
                                                <h5>
                                                   {$results[$x]['book_name']}
                                                </h5>
                                                <div class='overlay'>
                                                    <a class='preview btn btn-danger' title='{$results[$x]['book_name']} by {$results[$x]['author']}' href='images/{$results[$x]['imagename']}' rel='prettyPhoto'><i class='icon-eye-open'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";              
                                        
                                    } 


                                ?>
                                    
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                   
  <?php 
                                    for ($x=3; $x<6; $x++) 
                                    {

                                         print "<div class='col-xs-4'>
                                        <div class='portfolio-item'>
                                            <div class='item-inner'>
                                                <img class='img-responsive' height=135 width=90 src='images/{$results[$x]['imagename']}' alt=''>
                                                <h5>
                                                   {$results[$x]['book_name']}
                                                </h5>
                                                <div class='overlay'>
                                                    <a class='preview btn btn-danger' title='{$results[$x]['book_name']} by {$results[$x]['author']}' href='images/{$results[$x]['imagename']}' rel='prettyPhoto'><i class='icon-eye-open'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";              
                                        
                                    } 


                                ?>


                                </div>
                            </div><!--/.item-->

                            <div class="item">
                                <div class="row">
                                   
  <?php 
                                    for ($x=6; $x<9; $x++) 
                                    {

                                         print "<div class='col-xs-4'>
                                        <div class='portfolio-item'>
                                            <div class='item-inner'>
                                                <img class='img-responsive' height=135 width=90 src='images/{$results[$x]['imagename']}' alt=''>
                                                <h5>
                                                   {$results[$x]['book_name']}
                                                </h5>
                                                <div class='overlay'>
                                                    <a class='preview btn btn-danger' title='{$results[$x]['book_name']} by {$results[$x]['author']}' href='images/{$results[$x]['imagename']}' rel='prettyPhoto'><i class='icon-eye-open'></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";              
                                        
                                    } 


                                ?>


                                </div>
                            </div><!--/.item-->




                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->