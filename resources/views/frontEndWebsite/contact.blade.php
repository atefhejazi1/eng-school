@extends('frontEndWebsite.mainContent')


@section('content')

<link rel="stylesheet" href="{{ asset('assets/frontEnd/css/contact.css')}}">


  <section class="form_contact">
    <div class="container">
      <h1>Contact Us Engineers School</h1>
      <hr class="hr1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="data_contact">
              <h2>To contact us, please fill out the following form
              </h2>
              <form action="{{ url('/storecommunication') }}" method="POST">
                @csrf
                <input type="text" name="name_customer" placeholder="Full Name"> <br>
                <input type="email" name="email" placeholder="Email"> <br>
                <input type="tel" name="phone" placeholder="Phone"> <br>
                <input type="text" name="subject" placeholder="Subject">
                <input type="text" name="message" class="input_message" placeholder="Message">
                <button type="submit">Submit</button>
              </form>
            </div>
          </div>


          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="item_contact">
              <div class="offices">
                <h4><i class="fa-solid fa-location-dot"></i>Our offices</h4>
                <p><strong>Rafah :</strong> Main Street Crossroads rawhi sobeh - Building qishta - second floor - Abu harb jewelry</p>
                <p class="mt-3"><strong>Gaza :</strong> Saraya - Extension of Omar Al-Mukhtar Street -Building Elqesas</p>
              </div>
              <hr>


              <div class="email">
                <h4><i class="fa-solid fa-envelope"></i>Email</h4>
                <p>ahmedhejazi@gmail.com</p>
              </div>
              <hr>


              <div class="whatsapp">
                <h4><i class="fa-solid fa-phone"></i>Whatsapp</h4>
                <p>+972595135145</p>
              </div>

              <hr>

              <div class="icon">
                <h4>Social Media</h4>
               <i class="fa-brands fa-facebook-f"></i>
                <h6 class="twitter"><i class="fa-brands fa-twitter"></i></h6>
               <i class="fa-brands fa-instagram"></i></h6>
               <i class="fa-brands fa-linkedin-in"></i></h6>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
  </section>






   
  
@endsection