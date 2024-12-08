@extends('frontend.layouts1.master')
@section('content')


<div class="space">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6">
                <div class="location-card">
                    <h3 class="box-title">Central Branch</h3>
                    <p class="footer-info">
                        <i class="far fa-location-dot"></i>
                        12601 Garden Grove Blvd, Garden Grove, CA 92843
                    </p>
                    <p class="footer-info">
                        <i class="far fa-envelope"></i>
                        <a href="mailto:info@contacthp.com" class="info-box_link">info@contacthp.com</a>
                    </p>
                    <p class="footer-info">
                        <i class="far fa-phone"></i>
                        <a href="tel:+17145375160" class="info-box_link">+171 4537 5160</a>
                    </p>
                </div>
                <div class="contact-feature">
                    <div class="box-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Opening Hours</h3>
                        <p class="box-text">Mon to sat: 8:00am - 9:00pm</p>
                        <p class="box-schedule">Sunday - Closed</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="location-card active">
                    <h3 class="box-title">USA. Branch</h3>
                    <p class="footer-info">
                        <i class="far fa-location-dot"></i>
                        1120 15th St BA 8412, Augusta, GA 30912, United States
                    </p>
                    <p class="footer-info">
                        <i class="far fa-envelope"></i>
                        <a href="mailto:info@contacusa.com" class="info-box_link">info@contacusa.com</a>
                    </p>
                    <p class="footer-info">
                        <i class="far fa-phone"></i>
                        <a href="tel:+17067218623" class="info-box_link">+170 6721 8623</a>
                    </p>
                </div>
                <div class="contact-feature">
                    <div class="box-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Opening Hours</h3>
                        <p class="box-text">Mon to sat: 8:00am - 9:00pm</p>
                        <p class="box-schedule">Sunday - Closed</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="location-card">
                    <h3 class="box-title">Australia Branch</h3>
                    <p class="footer-info">
                        <i class="far fa-location-dot"></i>
                        260 Lygon St, Brunswick East VIC 3057, Australia
                    </p>
                    <p class="footer-info">
                        <i class="far fa-envelope"></i>
                        <a href="mailto:info@contactaus.com" class="info-box_link">info@contactaus.com</a>
                    </p>
                    <p class="footer-info">
                        <i class="far fa-phone"></i>
                        <a href="tel:+61399882015" class="info-box_link">+613 9988 2015</a>
                    </p>
                </div>
                <div class="contact-feature">
                    <div class="box-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Opening Hours</h3>
                        <p class="box-text">Mon to sat: 8:00am - 9:00pm</p>
                        <p class="box-schedule">Monday - Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!--==============================
Contact Area   
==============================-->
<div class="space-bottom">
    <div class="container">
        <form action="{{ route('contect.store') }}" method="POST" class="contact-form ajax-contact">
            @csrf
            <div class="input-wrap">
                <h2 class="sec-title">Get In Touch!</h2>
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group col-12">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group col-12">
                        <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number" required>
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="form-group col-12">
                        <select name="subject" id="subject" class="form-select" required>
                            <option value="" disabled selected hidden>Select Subject</option>
                            <option value="Make Appointment">Make Appointment</option>
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Medicine Help">Medicine Help</option>
                            <option value="Consultation">Consultation</option>
                        </select>
                        <i class="fal fa-chevron-down"></i>
                    </div>
                    <div class="form-group col-12">
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Type Appointment Note..." required></textarea>
                        <i class="fal fa-pencil"></i>
                    </div>
                    <div class="form-btn col-12">
                        <button type="submit" class="th-btn btn-fw">BOOK AN APPOINTMENT</button>
                    </div>
                </div>
            </div>
        </form>
        
    </div>
</div><!--==============================
Map Area  
==============================-->
<div class="">
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
    
@endsection