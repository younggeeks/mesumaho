@extends('Layouts.master')

@section('content')
    <!-- Ends Header -->
    <!------------ Start Content ---------------->
    <div class="main">
        <div class="reservation_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact_left">
                            <h3>Contact Info</h3>
                            <iframe class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31695.33302209641!2d39.258853928175235!3d-6.780001081859376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb461efa700d2b6df!2sMesuma+Hotel!5e0!3m2!1sen!2stz!4v1421510078179" ></iframe>
                            <address class="address">

                                <p> P.O.Box 33156 <br> Dar es Salaam, Tanzania.</p>
                                <dl>
                                    <dt></dt>
                                    <dd>Telephone:<span> +255 712 950 008</span></dd>
                                    <dd>Mobile: <span>+255 782 333 372</span></dd>
                                    <dd>E-mail:&nbsp; <a href=" mesuma@live.com"> mesuma@live.com</a></dd>
                                </dl>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-7 contact_right">
                        <h3>Contact Form</h3>
                        <div class="contact-form">
                            <form method="post" action="contact-post.html">
                                <input type="text" class="textbox" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
                                <input type="text" class="textbox" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                                <textarea value="Message" onfocus="this.value= '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                                <input type="submit" value="Send">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop