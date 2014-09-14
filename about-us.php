<?php

session_start();

include('header.inc.html');



?>

 <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>About this site</h2>
                <p>I developed this site as a part of <a href="https://www.ideatory.co/challenges/10/2/">Tusitala Web Developer challenge 2014</a> hosted by Ideatory</p>
				<ul>				
                <li>Developed in PHP and MYSQL.</li>
                <li>Mobile first design using Twitter Bootstrap framework</li>
                <li>Supports social login (Google, Facebook & Twitter)</li>
                <li>Utilizes an open source module to render epub on browser</li>
                </ul>


				<p>Feel free to contact me through any of the below channels or through contact form below(requires login)</p>

				<ul class="contact-icons">
				<li><a href="http://www.linkedin.com/in/madhurahuja"><i class="fa fa-linkedin-square fa-3x"></i><a/></li>
				<li><a href="http://stackoverflow.com/users/507256/madhur-ahuja"><i class="fa fa-stack-overflow fa-3x"></i><a/></li>
				<li><a href="https://github.com/madhur"><i class="fa fa-github fa-3x"></i><a/></li>
				<li><a href="http://twitter.com/#!/madhur25"><i class="fa fa-twitter-square fa-3x"></i><a/></li>
				<li><a href="mailto:ahuja.madhur@gmail.com"><i class="fa fa-inbox fa-3x"></i><a/></li>
				</ul>
                
				<p/>
                Happy reading and coding !!
            </div><!--/.col-sm-6-->
            <div class="col-sm-6">
                <h2>My Skills</h2>
                <div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span>HTML/CSS</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span>Javascript</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                            <span>.NET Development</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;">
                            <span>Android</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span>PHP</span>
                        </div>
                    </div>
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->
        </section>

          <section id="contact-page" class="container">
        <div class="row">
            <div class="col-sm-8">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                        </div>
                    </div>
                </form>
            </div><!--/.col-sm-8-->
            <div class="col-sm-4">
                <h4>My Location</h4>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27996.258026174582!2d77.1267204!3d28.703635499999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d03d5b0619f3f%3A0x2208402cf282fb02!2sPitampura%2C+New+Delhi%2C+Delhi!5e0!3m2!1sen!2sin!4v1410719509269" width="400" height="300" frameborder="0" style="border:0"></iframe>
            </div><!--/.col-sm-4-->
        </div>
    </section><!--/#contact-page-->


<?php include('footer.inc.html');  ?>