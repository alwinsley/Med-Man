<!-- Contact Form -->
<div class="section-space"></div>
<div class="row">
    <div class="col-xl-8 col-lg-8 offset-xl-2 offset-lg-2">
        <div class="content-area">
            <h2>Any questions? Feel free to contact us!</h2>
           
            <form method="post" name="contactform" id="contactform" autocomplete="on">

                <div class="row">
                    <div class="col-md-6">
                        <input class="with-border" name="name" type="text" id="name" placeholder="Your Name"
                            required="required">
                    </div>

                    <div class="col-md-6">
                        <input class="with-border" name="email" type="email" id="email"
                            placeholder="Email Address"
                            pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"
                            required="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input class="with-border" name="subject" type="text" id="subject"
                            placeholder="Subject" required="required">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <textarea class="with-border" name="comments" cols="40" rows="5" id="comments"
                            placeholder="Message" spellcheck="true" required="required"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="submit button margin-top-15" id="submit"
                            value="Submit Message">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<div class="section-space"></div>