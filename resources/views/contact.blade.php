@extends ('layout.main')

@section ('container')
<div class="box_style_1">
    <div class="indent_title_in">
        <i class="icon-contacts"></i>
    </div>
    <div class="wrapper_indent">
        <div id="message-contact"></div>
        <form method="post" action="#" id="contactform">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>First name</label>
                        <input type="text" class="form-control styled" id="name_contact" name="name_contact" placeholder="First name">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Last name</label>
                        <input type="text" class="form-control styled" id="lastname_contact" name="lastname_contact" placeholder="Last name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" id="email_contact" name="email_contact" class="form-control styled" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="text" id="phone_contact" name="phone_contact" class="form-control styled" placeholder="Phone number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Your message</label>
                        <textarea rows="5" id="message_contact" name="message_contact" class="form-control styled" style="height:100px;" placeholder="Your message"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" value="Submit" class="button add_bottom_30" id="submit-contact">
                </div>
            </div>
        </form>
    </div><!-- End wrapper_indent -->
</div>
@endsection