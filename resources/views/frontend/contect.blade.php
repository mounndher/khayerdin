@extends('frontend.layouts1.master')
@section('content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('fintend1/assets/img/bg/breadcumb-bg.jpg') }}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contactez-nous</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Contactez-nous</li>
            </ul>
        </div>
    </div>
</div>
<div class="space">
    
</div> <!--==============================
Contact Area   
==============================-->
<div class="space-bottom">
    <div class="container">
        <form action="{{ route('contect.store') }}" method="POST" class="contact-form ajax-contact">
            @csrf
            <div class="input-wrap">
                <h2 class="sec-title">Contactez-nous !</h2>
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom" required>
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group col-12">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Adresse e-mail" required>
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="form-group col-12">
                        <input type="tel" class="form-control" name="number" id="number" placeholder="Numéro de téléphone" required pattern="^\+?[0-9]*$">
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="form-group col-12">
                        <textarea name="subject" id="subject" cols="10" rows="1" class="form-control" placeholder="Sujet" required></textarea>
                        <i class="fal fa-chevron-down"></i>
                    </div>
                    <div class="form-group col-12">
                        <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Tapez votre message..." required></textarea>
                        <i class="fal fa-pencil"></i>
                    </div>
                    <div class="form-btn col-12">
                        <button type="submit" class="th-btn btn-fw">PRENDRE UN RENDEZ-VOUS</button>
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