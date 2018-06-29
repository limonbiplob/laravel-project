 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
 
        <link href="{{asset('grow/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/css/nivo-slider.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/themes/bar/bar.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/themes/dark/dark.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/themes/default/default.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/themes/light/light.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/css/owl.theme.css')}}" rel="stylesheet">
        <link href="{{asset('public/grow/css/owl.transitions.css')}}" rel="stylesheet">
        <link href="{{asset('grow/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('grow/css/responsive.css')}}" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
       
       <div class="wrapper">
           <header>
               <div class="container">
                   <div class="row">
                       <div class="col-sm-12 col-xs-12">
                         <div class="logo"><a href="#"><img src="{{asset('$logo->ProductImage')}}" alt=""></a></div>
                       </div>
                   </div>
                   <div class="row"> 
                   <nav class="navbar navbar-default">
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                     </div>  
                    <nav class="navbar navbh2">
                        <div class="container-fluid">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                  
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="{{url('/prothom')}}">Prothom Page</a></li>
                                    
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bangladesh<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                            <li><a href="{{url('/')}}jatio.html">জাতীয়</a></li>
                                            <li><a href="{{url('/')}}rajniti.html">রাজনীতি</a></li>
                                            <li><a href="{{url('/')}}arthonity.html">অর্থনীতি</a></li>
                                            </ul>
                                        </li>
                                    <li><a href="{{url('/Antorjatik')}}">Antorjatik</a></li> 
                                       <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Deshjure  <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                            <li><a href="{{url('/')}}jelarkhobor.html">জেলার খবর</a></li>
                                            </ul>
                                        </li> 
                                     <li><a href="{{url('/Kelarkhobor')}}">Kheladhula</a></li>
                                     <li><a href="{{url('/Binodon')}}">Binodon</a></li>
                                     <li><a href="{{url('/LifeStyle')}}">Lifestyle</a></li>
                                     <li><a href="{{url('/Motamot')}}">Motamot</a></li>
                                     <li><a href="{{url('/job')}}">Job</a></li>
                                     <li><a href="{{url('/Shahitto')}}">Shahitto</a></li> 

                                    <li><a href="{{url('/PhotoGallery')}}">Photo gallery</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Onnano <b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{url('/')}}dhormo.html">ধর্ম</a></li>
                                                <li><a href="{{url('/')}}sastho.html">স্বাস্থ্য</a></li>
                                                <li><a href="{{url('/')}}sikha.html">শিক্ষা</a></li>
                                                <li><a href="{{url('/')}}phichar.html">ফিচার</a></li>
                                            </ul>
                                        </li>
                            
                                 </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                    </nav>
            </div>
                    <div class="row">
                       <div class="col-xs-12 col-sm-12">                                                                        
                         <div class="editorChoice">
                            <div class="sitewidth">
                             
                            <div class="br-title">Shironam</div>
                                <marquee  scrollamount="2" scrolldelay="1" behavior="scroll" direction="left">
                                    <ul>
                                  @foreach($shironam as $shironams)
                                    <li><a href="#">{{$shironams->shironamDescription}}</a></li>
                                     @endforeach
                                    </ul>
                                </marquee>
                            </div>
                        </div>
                       </div>
                   </div>
               </div>
           </header>
</div>