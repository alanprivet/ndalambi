@extends('layouts/main')

@section('header')
@parent
@section('contact', 'active')
@endsection

@section('content')
@parent
<section>
  <div class="container py-5">
    <div class="map">
      <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15959.034046491599!2d32.582843!3d0.3137212!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeeafa7741ab6383c!2sSpan+House!5e0!3m2!1sen!2sug!4v1533143451327" height="320" frameborder="0"></iframe>
    </div>
  </div>
</section>

<section>

  <div class="container pb-5 mb-3">    
  <div class="row">

    <div class="col-md-8 py-3">
      <h4 class="py-2">E-Mail Us</h4>
      <form action="" method="post" role="form">
        <div class="row">
          <div class="col-md-6 form-group">
            <input class="form-control" type="text" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="col-md-6 form-group">
              <input class="form-control" type="email" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
          </div>
        </div>

        <div class="form-group">
            <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
        </div>
        <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
        </div>
        <div class="">
            <button type="submit" name="submit" class="btn btn-primary" required="required">Submit Message</button>
        </div>
      </form>
    </div>

    <div class="col-md-4 py-3">
      <h4 class="py-2">Head Office</h4>
      <p>Room D1B<br>
      94 Carbourne Center Benoni<br>
      P.O BOX 25283, Benoni North 1527</p>
      </p>
      <ul class="list-unstyled">
        <li>Monday - Saturday, 8am to 10pm</li>
        <li>
          +27 11 421 0533 <br>
          +27 82 707 5984
        </li>
      </ul>
    </div>

  </div>
  </div>
</section>

@endsection


