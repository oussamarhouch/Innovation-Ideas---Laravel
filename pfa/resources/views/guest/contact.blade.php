<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/contact.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/contact.js') }}"></script>
    <title>Contact</title>
  </head>
  <body>
    @include('layouts.partials.navbar')
    <section id="contact">
        <div class="contact container">
            <div>
                <h1 class="section-title">Contact <span>info</span></h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                    <div class="contact-info">
                        <h1>Phone</h1>
                        <h2>+212 7 08 70 60 02</h2>
                        <h2>+212 6 01 45 97 25</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>oussama_rhouch@um5.ac.ma</h2>
                        <h2>badr_ghazaoui@um5.ac.ma</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                    <div class="contact-info">
                        <h1>Address</h1>
                        <h2>Cité Al Irfane, Rabat, Maroc</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.partials.foot')
  </body>
</html>
