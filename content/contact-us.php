 <?php
  $pageName = "CONTACT US";
 require('header.php');
 ?>
 <section class="single-page-title hidden-xs" style="background-image:url(../img/banner4.png)">
    <div class="container text-center">
        <h2>Contact us</h2>
    </div>
</section>
<!-- .page-title -->

<section class="contact-form ptb-100">
    <div class="container text-center">
        <h2>CONTACT US</h2>
       <p>
       Not with standing the fact that Tlowana (PTY) Ltd is relatively new in its legal form, it is underpinned by the founders’ collective experience and qualifications. Since its incorporation we have gained knowledge within the market, to strive for excellence service within the construction sectors both in Government & Private sectors.<br><br>
       </p>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form  method="post" action="sendemail.php" enctype="multipart/form-data" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group user-name">
                                <label for="nameFive-first" class="sr-only">Name</label>
                                <input type="text" class="form-control" required name="name" id="nameFive-first" placeholder="First Name">
                            </div>

                            <div class="form-group user-email">
                                <label for="emailFive" class="sr-only">Email</label>
                                <input type="email" class="form-control" required name="email" id="emailFive" placeholder="Email Address">
                            </div>


                            <div class="form-group user-phone">
                                <label for="websiteOne" class="sr-only">Phone</label>
                                <input type="tel" class="form-control" required  name="phone" id="websiteOne" placeholder="Phone">
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <div class="form-group user-message">
                                <label for="messageOne" class="sr-only">Message</label>
                                <textarea class="form-control" required name="message"  id="messageOne" placeholder="Write Message"></textarea>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row-->
                    <button type="submit"  class="btn btn-primary">Send Message</button>
                </form>

            </div><!-- /.col-md-8 -->
            <div class="clearfix"></div>
                             <div class="col-md-6">
                 <br><br>
                            <h2>Address</h2>
                       
                            <p>
                                Call Us 011 234 2853/0148 <br>
                               Fax to E-mail: <a href="tel:+27 86 585 4319 ">+27 86 585 4319</a><br>
                               Send an Email on <a href="mailto:info@tlowanaengineering.co.za" >info@tlowanaengineering.co.za</a><br><br>
                                Visit Us 51 Wessels Street, Rivonia, Sandton<br>
                                 Gauteng<br>
                             South Africa<br>
                                
                                
                           </p>
                        </div>
                        <div class="col-md-6"><br><br>
                        <img src="../img/street-lights-sa.jpg" class=" img-responsive" alt=""/> </div>
        </div>

    </div>
</section>


 <?php
require_once('footer.php');