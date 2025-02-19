@extends('layouts.main_layout')



@section('content')

     <div class="main-content" id="home">

        <div class="overlay">

            <!-- //header -->

            <div class="container">

                <!-- /banner -->

                <div class="banner-info text-left">


                    <p class="my-3"><span style="font-size: 1.5em">CT Clinic</span> is the leading specialist pain treatment centre in Manchester. We aim to transform people’s lives by not only managing their pain, but addressing the causes. 

Our unique, Comprehensive Treatment (CT) system utilises a holistic approach to achieve long-term results. 

</p>

                </div>



            </div>

            <!-- //banner -->

        </div>

    </div>



    <!--// mian-content -->

    <!-- //about -->

    <section class="banner-bottom py-5" id="choose_us">

        <div class="container py-md-5">

            <div class="row banner-grids mb-lg-5">





                <div class="col-lg-7 content-right">

                    <h3 class="title-w3pvt">Why choose us:</h3>

                    <p class="mt-2 text-left">We are more than just a pain management clinic; we aim to remove the pain. A broad range of patients seek out our unique system of treatment, including those recovering from acute injury and those managing chronic conditions. We particularly welcome patients who have been failed by other treatments. Our goal is to help each patient overcome debilitating injury and escape the cycle of chronic pain, using a personalised treatment plan.

Pain is caused by the accumulation of lactic acid in the soft tissue. Our unique techniques break this down, then we address the causes by examining the patient in detail. As well as investigating the cause of the pain, we look at their diet, lifestyle and posture to come up with a personalised plan to keep the pain away.

 </p>

                

                </div>

                <div class="col-lg-5 content-left">

                    <img src="{{ asset('main_site/images/ab.jpg') }}" alt="" class="img-fluid">

                </div>



            </div>



        </div>

    </section>

    <!-- /about -->

    <!-- /services -->

   <section style="background: #8eba2d;" class="copa py-5">
        <div class="container py-md-5">
            <div class="row ab-info">
                <div class="col-lg-12 ab-content text-left pr-lg-5">
                    <h3 style="font-weight:bold;color: white" class="title-w3pvt text-center">COPA methodology:</h3>
                    <p style="color: white" class="mt-2 text-left">Ammar Alsawaf recognised that the existing individual therapies were unable to successfully treat many injuries. He developed his innovative total care system which combined the techniques of the four main therapies: Chiropractic treatment, Osteopathy, Physiotherapy and Acupuncture (COPA). The resulting COPA method achieves results beyond those possible by the four individual treatments. </p>
                </div>

        
            </div>
        </div>
    </section>


    <section class="py-5" id="services">
        <div class="container">
            
      
        <div class="row">
          <h1 style="color:#777;margin:0 auto;font-weight:bold;" class="text-center">Our Services :</h1>
      </div>
        </div>
            <div class="row">
            @foreach ($services as $service)
                {{-- expr --}}
            
             <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <a href="/service_single/{{$service->id}}"><img src="{{env('image_storage')}}/{{$service->images[0]->image}}" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4>{{$service->title}}</h4>
                            <a href="/service_single/{{$service->id}} class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
    </section>







        <section class="banner-bottom py-5" id="what_we_treat" style="background:#8eba2d;">

        <div class="container py-md-5">

            <div class="row banner-grids mb-lg-5">

                

                <div class="col-lg-5 content-left">

                    <img src="{{ asset('main_site/images/treat.jpg') }}" alt="" class="img-fluid">

                </div>



                <div class="col-lg-7 content-right">

                    <h3 style="color:#fff;font-weight:bold" class="title-w3pvt">What we treat</h3>

                    <p style="color:#fff" class="mt-2 text-left">We are confident we can treat many different injuries providing an accurate diagnosis and effective treatment achieving a rapid recovery from any musculoskeletal conditions. Whether you’ve suffered an acute injury or have a long term condition, we will work with you professionally to create a treatment plan that suits you. You will be given a rehabilitation program tailored to your needs. We will offer you a clear explanation of the steps you will need to follow. Below are some of the conditions we treat. This is not an exhaustive list. 

 </p>

                

                </div>

             



            </div>



        </div>

    </section>

    <!-- /services -->



    <!-- /last-content -->

    



       <section class="services py-5" id="team">

        <div class="container py-md-5">

            <h3 class="title-w3pvt text-center mb-5">Our Team</h3>

            <div class="row team-grids text-left mt-md-5 mt-4">

                @foreach ($teams as $team)

                    {{-- expr --}}

               <a href="/team_single/{{$team->id}}">

                <div class="col-lg-4 team-main">



                    <div class="team-img"><img src="{{env('image_storage')}}/{{$team->image}}" alt="news image" class="img-fluid"> </div>

                    <div class="team-info">



                        <h4>{{$team->name}}</h4>

                    </div>





                </div>

            </a>

                 @endforeach



            </div>



        </div>

    </section>

    <section class="last-content py-5">



        <div class="container text-center py-md-5">

            <div class="last-w3pvt-inner-content row">



                <div class="col-md-6">



                    <form action="#" class="booking" method="post">

                        <h3 class="mb-4">Contact Us</h3>

                        <div class="form-group">

                            <input placeholder="Your Name" name="name" type="text" required="">

                            <input placeholder="Contact Number" name="number" type="text" required="">

                            <input placeholder="Address" type="text" required="">

                            <input placeholder="Timing" type="text" required="">

                            <button class="book-appo btn mt-3">Contact</button>

                        </div>

                    </form>

                </div>

                <div class="col-md-6">

                </div>

            </div>

        </div>

    </section>

@endsection