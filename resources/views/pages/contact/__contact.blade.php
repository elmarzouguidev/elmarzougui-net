<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-12">
                <div class="mb-5">
                    <h2 class="mb-2">Get in touch</h2>
                    <p>Have a project on mind,want to make an consultant. Don't hesistate to contact us.Let's have atalk together.Colaborat eyour project to done quickly</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-sm-12">
                <form class="contact__form" method="post" action="">
                    @csrf
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="col-12 form-group">
                            <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <input name="submit" type="submit" class=" btn btn-hero btn-circled" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-5 pl-4 mt-4 mt-lg-0">
                <h4>Office Address</h4>
                <p class="mb-3">John lake park 9/12 street park London</p>
                <h4>Contact Info</h4>
                <p class="mb-3">+23 456 7920</p>
                <h4>Contact Mail</h4>
                <p class="mb-3">support@email.com</p>
                <h4>Website</h4>
                <p>www.companyname.com</p>
            </div>
        </div>
    </div>
</section>
