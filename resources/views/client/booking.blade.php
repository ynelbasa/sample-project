@extends('layouts.client')

@section('content')
<section class="book-section">
    <div class="container">
        <h2>Reservation</h2>
        <p>Book your table</p>
    </div>
</section>
<section class="our_booking">
    <div class="container">
        <div class="row padding">
            <div class="col-md-4">
                <div class="time-table">
                    <h1>Open</h1>
                    <div class="time-block">
                        <h2>Monday - Friday</h2>
                        <ul>
                            <li>8am - 11am (Breakfast)</li>
                            <li>11am - 10pm (Lunch/Dinner)</li>
                        </ul>
                    </div>
                    <div class="time-block">
                        <h2>Saturday - Sunday</h2>
                        <ul>
                            <li>8am - 1pm (Brunch)</li>
                            <li>1pm - 10pm (Lunch/Dinner)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="booking-section">
                    <em>Reservation</em>
                    <h1>Book Your Table</h1>
                    <form>
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12 input-wrap">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 input-wrap">
                                <label for="Lastname">Last Name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12 input-wrap">
                                <label for="Date">Date</label>
                                <input type="Date" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 input-wrap">
                                <label for="time">Time</label>
                                <input type="time" class="form-control">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-6 col-md-12 input-wrap">
                                <label for="people">No of People</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-12 input-wrap">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col-lg-12 col-md-12 input-wrap">
                                <label for="people">Any Request</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-homepage">
    <div class="container">
        <div class="contact-section">
            <div class="row">
                <div class="col-lg-4">
                    <h2>Visit Us</h2>
                    <hr/>

                    <p class="text-left">
                        <i class="fas fa-map-marker-alt"></i> 46 Stoddard Road, Mount
                        Roskill, Auckland 1041
                    </p>
                    <p class="text-left">
                        <i class="fas fa-envelope"></i> info@shefco.co.nz
                    </p>
                    <p class="text-left">
                        <i class="fas fa-phone-alt"></i> 09-620 5400 Ext 4
                    </p>

                </div>
                <div class="col-lg-8">
                    <!--Google map-->
                    <div
                        id="map-container-google-1"
                        class="z-depth-1-half map-container"
                        style="height: 500px"
                    >
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.3280738854473!2d174.73089849650964!3d-36.90641960143118!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d468a0a70e753%3A0x34b49b15f68b8e40!2sBaklawa%20Cafe%20(Shefco)!5e0!3m2!1sen!2snz!4v1598782006305!5m2!1sen!2snz"
                            width="100%"
                            height="400px"
                            frameborder="0"
                            style="border: 0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection