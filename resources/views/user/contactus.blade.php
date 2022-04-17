@extends('layouts.layout')

@section('content')



<section class="contact-us py-5" id="ContactUs">
    <div class="container">
      <div class="title-section">
        <h1>Contactez-nous</h1>
      </div>
      <div class="alert alert-primary d-none envoi-message alert-dismissible fade show" role="alert" id="messsagesend">
          <i class="fas fa-check-square"></i>  Message envoi anec success
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
        <div class="d-flex justify-content-center contact-us-item text-center">
          <i class="fas fa-envelope d-none d-md-block contact-us-item-logo"></i>
            <div class="contact-us-item-form w-50">
                <form action="">
                  <div>
                      <i class="fas fa-bookmark"></i>
                      <input type="text" id="subject" placeholder="Sujet">
                      <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                      <p class="text-danger erore-form">erore message</p>
                    </div>
                    <div>
                      <i class="fas fa-user-alt"></i>
                      <input type="text" id="name" placeholder="Your name..">
                      <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                      <p class="text-danger erore-form">erore message</p>
                    </div>
                    <div>
                      <i class="fas fa-at"></i>
                      <input type="email" id="email" placeholder="ex: myname@example.com">
                      <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                      <p class="text-danger erore-form">erore message</p>
                    </div>
                    <div>
                      <i class="fas fa-envelope"></i>
                      <textarea name="message" id="message" placeholder="Write something.."></textarea>
                      <i class="fas fa-exclamation-circle erore-icon invisible"></i>
                      <p class="text-danger erore-form">erore message</p>
                    </div>
                    <div>
                      <i class="fas fa-paper-plane icon-send-message"></i>
                        <button class="btn btn-primary" id="sendmessage">send email</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </section>

@endsection
