    
 @extends('main')
 @section('title',"About")
 @section('content')
    
  <section class="hero-wrap hero-wrap-2" style="background-image: url({{asset('images/bg_1.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">About Us</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-no-pt ftc-no-pb">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
            <div class="img" style="background-image: url({{asset('images/ParamedicalCourses.png')}}); border"></div>
          </div>
          <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
            <h2 class="mb-4">Dream Search Health Point</h2>
            <p>Dream Search Health Point is a premium institute located in Kolkata training and certifying candidates in various Paramedical Courses.</p>
            <p>We provide specialised counseling for the students and the courses are also offered at a reasonable rate.
            </p>
            <p>
              Our vision is to emerge as premier nurturing institute that will foster as a center of excellence in Nursing & Paramedical Education. We strive to create value in our offerings by including depth of knowledge and expertise.  
            </p>
          </div>
        </div>
      </div>
    </section>
@endsection
