 @extends('main')
 @section('title',"Contact")
 @section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});">


      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Contact Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div>@include('partials._message')</div>

      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Address</h3>
	            <p>1/2 Rani Rashmoni Garden Lane, Kol - 700 015</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://7596998656">7596998656/</a><a href="tel://9831190816">9831190816</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:contact@dreamsearchhealthpoint.in">contact@dreamsearchhealthpoint.in</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">dreamsearchhealthpoint.in</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">

			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">

						<!-- <form action="#"> -->
            <!-- <form action="{{route('student-contact.store')}}"  id="contact-form" method="post" data-parsley-validate> -->
            {{Form::open(['route' => 'student-contact.store','files' => true, 'class'=>'form-horizontal course-form','data-parsley-validate'])}}


              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="number" name="phone" class="form-control" placeholder="Your Contact Number" data-parsley-type="digits" minlength="10" required>
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <!-- <textarea id="" name="msg" cols="30" rows="7" class="form-control" placeholder="Message"></textarea> -->
                <!-- {{Form::textarea('msg',null,['class'=>'form-control','size' => '50x5'])}}
 -->
                <label for="message">Message (20 chars min, 200 max) :</label>
                <textarea id="message" class="form-control" name="msg" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="200" data-parsley-minlength-message="Come on! You need to enter at least a 20 character in the message.." data-parsley-validation-threshold="20"></textarea>


              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						<div id="map"></div>
					</div>
				</div>
			</div>
		</section>

 @endsection

@section('scripts')


<script type="text/javascript">

$(function () {
  $('#contact-form').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return true; // Don't submit form for this demo
  });
});

</script>

@endsection