@extends('growing.master')
@section('mainContent')
    

            
<section class="container">
                           <div class="row">
                           <div class="col-xs-12 col-sm-12">
                           @foreach($bodycontent as $key=> $bodycontents)
                   <div class="col-sm-6 col-xs-12">
                     <div class="mul-part">
                           <a href="#">
                           <img src="{{asset($bodycontents->ProductImage)}}" alt="">
                           <h4>{{($bodycontents->ProductLongDescription)}}</h4></a>
                           <p>{{($bodycontents->ProductShortDescription)}}</p>
                       
                     </div>
                   </div>
                   <?php unset ($bodycontent[$key]);break;?>
                   @endforeach
                  <div class="col-sm-4 col-xs-12">
                        <div class="ListNew">
                            @foreach($bodycontent as $bodycontents)
                             <a href="#">
                               <div class="motamot-img"><img  width="100px" height="100px" src="{{asset($bodycontents->ProductImage)}}" alt="">
                               <p>{{($bodycontents->ProductShortDescription)}}</p>
                               </div>
                           </a>
                            @endforeach
                         </div>
                    </div>
                   <div class="col-sm-2">
                     <div class="mmotamot">
                         <img src="{{asset($bodycontents->ProductImage)}}" alt="">
                       </div>
                   </div>
                   
               </div>
                     <div class="row">
                         <div class="col-sm-12 col-xs-12">
                             <div class="add">
                                 <img src="{{asset('grow/img/slidetop%20add.JPG')}}" alt="">
                             </div>
                         </div>
                     </div>
                      
                  </div>     
                   
               <div class="row">
                   <div class="col-sm-8 col-xs-12">
                       <div class="col-sm-4 col-xs-12">
                          <div class="main-cont">
                              @foreach($bodycontent  as $bodycontents)
                               <a href="#"><img  width="200px" height="200px"  src="{{asset($bodycontents->ProductImage)}}" alt=""></a>
                               <a href="#"><p>{{($bodycontents->ProductShortDescription)}}</p></a>
                          </div>
                       </div>
                         <?php unset ($bodycontent[$key]);break;?>
                       @endforeach
                   </div>
                    <div class="col-sm-4 col-xs-12"> 
                           <div class="LListNew">
                            <ul>
                            <li><a href="#home">সর্বশেষ</a></li>
                            <li><a href="#">জনপ্রিয়</a></li>
                            </ul>
                          </div>
                                    <div class="mistNew">
                                           <ul>
                                               <li id="mist"><a href="#">লালবাগে বহুতল ভবনে আগুন</a></li>
                                               <li><a href="#">লালবাগে বহুতল ভবনে আগুন</a></li>
                                               <li><a href="#">লালবাগে বহুতল ভবনে আগুন</a></li>
                                               <li><a href="#">লালবাগে বহুতল ভবনে আগুন</a></li>
                                           </ul>
                                    </div>
                               <div class="row"> 
                                   <div class="ajker-khobp">
                                       <a href="#"><h1>আজকের খবর</h1></a>
                                   </div>
                               </div>
                       </div>
                     </div>
                     <div class="row">
                       <div class="col-sm-12 col-xs-12">
                           <div class="add">
                               <img src="{{asset('grow/img/slidetop%20add.JPG')}}" alt="">
                           </div>
                       </div>
                   </div>
                 <div class="row">
                      <div class="col-sm-8"> 
                                <div class="english"> <a href="#"><p>খেলাধুলা</p></a></div>
                            <div class="row">
                                        <div class="col-sm-6">
                         <div class="jatio-left">
                            <div class="jatio-left-img">
                                 <a href="#"><img src="{{asset('grow/img/ragniti%20left.JPG')}}" alt=""></a>
                            </div>
                         <a href="#"><h4>নারীদের সমঅধিকার অর্জনে রাজনৈতিক সদিচ্ছা প্রয়োজন </h4></a>
                         <p>নারীর ক্ষমতায়ন ও সর্বস্তরে নারীদের সমঅধিকার অর্জন নিশ্চিতকল্পে প্রয়োজন রাজনৈতিক সদিচ্ছা। যার মাধ্যমে...</p>
                        </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="motamot-img"><img src="{{asset('grow/img/head3.JPG')}}" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                                 <div class="motamot-img"><img src="{{asset('grow/img/head3.JPG')}}" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                               <div class="life-text">
                                   <ul>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধ</a></li>
                                   </ul>
                               </div>
                        </div>  
                           
                          </div>
                      </div>
                     
                 
                   <div class="col-sm-4">
                          <div class="english">
                               <a href="#"><p>মতামত</p></a>
                          </div>
                             <div class="motamot-img"><img src="{{asset('grow/img/head3.JPG')}}" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                               <div class="motamot-img"><img src="{{asset('grow/img/head3.JPG')}}" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                              <div class="english">
                               <a href="#"><p> সাক্ষাতকার  </p></a>
                          </div>
                          <div class="motamot-img"><img src="{{asset('grow/img/head3.JPG')}}" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                               <div class="motamot-img"><img src="{{asset('grow/img/head3.JPG')}}" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                      </div>
                    </div>
                <div class="row">
                             <div class="col-sm-8 col-xs-12">
                                    <div class="english">
                                <a href="#"><p> বিনোদন </p></a>
                              </div>
                               <div class="col-sm-6">
                                     <div class="mul-part">
                                    <a href="#">
                                        <img src="{{asset('grow/img/head1.JPG')}}" alt="">
                                        <h2>ফারুকীর ‘ডুব’ বন্ধ করতে শাওনের চিঠি</h2></a>
                                        <p>নির্মাণের শুরু থেকেই জলঘোলা করে ‘ডুব’ ছবিটি। এটি নির্মাণ করছেন মোস্তফা সরয়ার ফারুকী। ছবির নির্মাণ কাজ শেষ হয়েছে কিছুদিন আগে। শিগগিরই এটি চলচ্চিত্র সেন্সর বোর্ডে জমা পড়বে...</p>
                                 </div>
                               </div>
                                       <div class="col-sm-6">
                                         <div class="motamot">
                                       <img src="{{asset('grow/img/head3.JPG')}}" alt="">
                                       <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                                   </div> 
                                      <div class="motamot">
                                       <img src="{{asset('grow/img/head3.JPG')}}" alt="">
                                       <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                                   </div> 
                                      <div class="motamot">
                                       <img src="{{asset('grow/img/head3.JPG')}}" alt="">
                                       <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                                   </div>
                                       <div class="motamot">
                                       <img src="{{asset('grow/img/head3.JPG')}}" alt="">
                                       <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                                   </div>
                                       </div>
                                       
                                                 <div class="col-sm-12 col-xs-12">
                                         <div class="col-sm-3"><div class="slide-item"><img src="{{asset('grow/')}}img/slide1.JPG" alt=""><p>জিনাতের কাব্যগ্রন্থের মোড়ক উম্মোচন></p></div></div>
                                   <div class="col-sm-3"><div class="slide-item"><img src="img/slide2.JPG" alt=""><p>জিনাতের কাব্যগ্রন্থের মোড়ক উম্মোচন22</p></div></div>
                                   <div class="col-sm-3"><div class="slide-item"><img src="img/slide3.JPG" alt=""><p>জিনাতের কাব্যগ্রন্থের মোড়ক উম্মোচন33</p></div></div>
                                   <div class="col-sm-3"><div class="slide-item"><img src="img/slide1.JPG" alt=""><p>জিনাতের কাব্যগ্রন্থের মোড়ক উম্মোচন44</p></div></div>
                          
                                  </div>
                                      </div>
                                  <div class="col-sm-4 col-xs-12">
                                      <div class="english">
                                           <a href="#"><p> ফিচার</p></a>
                                      </div>
                                     <div class="jatio-text">
                                          <a href="#"><img src="img/totho%20projukty.JPG" alt=""></a>
                                      <a href="#"><h4>ডট বাংলার বিশেষ শব্দের ডোমেইনের দাম বেশি</h4></a>
                                     </div>
                                     <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                                <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                                <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                                 </div>
                     </div>
                      <div class="row">
                     <div class="col-sm-12">
                         <div class="add">
                         <img src="img/slidetop%20add.JPG" alt=""> 
                     </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-6 col-xs-12">
                         <div class="english"><a href="#"><p>জাতীয়</p></a></div>
                                <div class="row">
                             <div class="col-sm-6 col-xs-12">
                               <div class="mul-item">
                                     <a href="#">
                                         <img src="img/head1.JPG" alt="">
                                       <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                     </a>
                               </div>
                             </div>
                             <div class="col-sm-6 col-xs-12">
                                  <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div> 
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div> 
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                               <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                         <div class="english">
                             <a href="#"><p>রাজনীতি</p></a>
                         </div>
                               <div class="row">
                             <div class="col-sm-6 col-xs-12">
                               <div class="mul-item">
                                     <a href="#">
                                         <img src="img/head1.JPG" alt="">
                                       <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                     </a>
                               </div>
                             </div>
                             <div class="col-sm-6 col-xs-12">
                                  <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div> 
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div> 
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                               <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                             </div>
                         </div>      
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-6 col-xs-12">
                         <div class="english">
                             <a href="#"><p> সারাদেশ</p></a>
                         </div>
                         <div class="row">
                             <div class="col-sm-6 col-xs-12">
                               <div class="mul-item">
                                     <a href="#">
                                         <img src="img/head1.JPG" alt="">
                                       <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                     </a>
                               </div>
                             </div>
                             <div class="col-sm-6 col-xs-12">
                                  <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div> 
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div> 
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                               <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                         <div class="tuivag">
                           <div class="col-sm-6 col-xs-12">
                             <div class="english">
                               <a href="#"><p>অর্থনীতি</p></a>
                             </div>
                            <div class="mul-item">
                                 <a href="#">
                                     <img src="img/head1.JPG" alt="">
                                   <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                 </a>
                            </div>
                            
                             </div>
                             <div class="col-sm-6 col-xs-12">
                               <div class="english">
                                  <a href="#"><p>অর্থনীতি</p></a>
                               </div>
                               <div class="mul-item">
                                 <a href="#">
                                     <img src="img/head1.JPG" alt="">
                                   <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                 </a>
                                </div>
                                   <div class="life-text">
                                   <ul>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধ</a></li>
                                   </ul>
                               </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="add">
                           <img src="img/slidetop%20add.JPG" alt=""> 
                         </div>
                     </div>
                 </div>
              <div class="row">
                     <div class="col-sm-8 col-xs-12"> 
                         <div class="english"><a href="#"><p>লাই্ফসটাইল </p></a></div>
                        <div class="col-sm-6">
                         <div class="jatio-left">
                            <div class="jatio-left-img">
                                 <a href="#"><img src="img/ragniti%20left.JPG" alt=""></a>
                            </div>
                         <a href="#"><h4>নারীদের সমঅধিকার অর্জনে রাজনৈতিক সদিচ্ছা প্রয়োজন </h4></a>
                         <p>নারীর ক্ষমতায়ন ও সর্বস্তরে নারীদের সমঅধিকার অর্জন নিশ্চিতকল্পে প্রয়োজন রাজনৈতিক সদিচ্ছা। যার মাধ্যমে...</p>
                        </div>
                        </div>
                        <div class="col-sm-6">
                              <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                                 <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                               <div class="life-text">
                                   <ul>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                       <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধ</a></li>
                                   </ul>
                               </div>
                        </div>
                     </div>
                     <div class="col-sm-4 col-xs-12">
                         <div class="english">
                             <a href="#"><p>সাস্থ ও চিকৎসা<p></a>
                         </div>
                            
                             <div class="jatio-menu">
                              <a href="#"><img src="img/slide%20top2.JPG" alt=""></a>
                            <ul>
                             
                                <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                                <li><a href="#">নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</a></li>
                            </ul>
                        </div>      
                     </div>
                 </div>   
                 <div class="row">
                    <div class="col-sm-4 col-xs-12"> 
                           <div class="photo-gallery">
                            <a href="#"><p> এস্কক্লুসিভ </p></a>
                         </div>
                        <div class="ListNew">
                             <a href="#">
                               <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                           </a>
                             <a href="#">
                               <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                           </a><a href="#">
                               <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                           </a><a href="#">
                               <div class="motamot-img"><img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                               </div>
                           </a>
                         </div>
                    </div>
                      <div class="col-sm-8 col-xs-12">
                            <div class="photo-gallery">
                            <a href="#"><p>ফটো গ্যালারি</p></a>
                         </div>
                          <div class="row">
                              <div class="col-sm-8">
                                <div class="slider-wrapper">
                                    <div id="slider" class="nivoSlider">
                                        <img src="img/smurfs_the_lost_village_4k-wide.jpg" data-thumb="img/smurfs_the_lost_village_4k-wide.jpg" alt="" />
                                        <a href="#"><img src="img/medium2.jpg" data-thumb="img/medium2.jpg" alt=""/></a>
                                        <img src="img/206693.jpg" data-thumb="img/206693.jpg" alt=""/>
                                        <img src="img/underwater_jellyfishes_4k_5k-wide.jpg" data-thumb="img/underwater_jellyfishes_4k_5k-wide.jpg" alt=""/>
                                    </div>
                                </div>
                              </div>
                          </div>
                        </div>
                    </div>
                <div class="row">
                     <div class="col-sm-12">
                         <div class="add">
                           <img src="img/slidetop%20add.JPG" alt=""> 
                         </div>
                     </div>
                 </div>
                     <div class="col-sm-3">  
                          <div class="english">
                              <a href="#"><p> প্রযুক্তি </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div> 
                         
                           <div class="col-sm-3"> 
                          <div class="english">
                              <a href="#"><p> আইন </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div>  
                         
                         <div class="col-sm-3"> 
                          <div class="english"> 
                              <a href="#"><p> রাজধানী </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div> 
                      <div class="col-sm-3"> 
                          <div class="english">
                              <a href="#"><p> প্রবাস </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div> 
                         
                         <div class="col-sm-3"> 
                          <div class="english">
                              <a href="#"><p> সাহিত্য </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div> 
                         
                           <div class="col-sm-3"> 
                          <div class="english">
                              <a href="#"><p> শক্ষা  </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div>  
                          
                         <div class="col-sm-3"> 
                          <div class="english">
                              <a href="#"><p>ওপার বাংলা </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div> 
                      <div class="col-sm-3"> 
                          <div class="english">
                              <a href="#"><p>  ধর্ম </p></a>
                          </div>
                         <div class="main-cont">
                            <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                            <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                         </div>
                          <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                              <div class="motamot">
                               <img src="img/head3.JPG" alt="">
                               <p>নারীর ক্ষমতায়ন এবং দূরারোগ্য সিরিয়াল ব্যাধি</p>
                           </div>
                      </div> 
                      <div class="row">
                     <div class="col-sm-12">
                         <div class="add">
                           <img src="img/binodon.JPG" alt=""> 
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-sm-6 col-xs-12">
                         <div class="english">
                             <a href="#"><p>জব করনার </p></a>
                         </div>
                         <div class="row">
                             <div class="col-sm-6 col-xs-12">
                               <div class="mul-item">
                                     <a href="#">
                                         <img src="img/head1.JPG" alt="">
                                       <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                     </a>
                               </div>
                             </div>
                             <div class="col-sm-6 col-xs-12">
                                <div class="main-cont">
                                     <a href="#"><img src="img/khela%20top%20L1.JPG" alt=""></a>
                              <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                                </div>
                          
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                         <div class="tuivag">
                             <div class="col-sm-6 col-xs-12">
                             <div class="english">
                              <a href="#"><p> নারী ও শিশু </p></a>
                          </div>
                            <div class="mul-item">
                                     <a href="#">
                                         <img src="img/head1.JPG" alt="">
                                       <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                     </a>
                            </div>
                             </div>
                             <div class="col-sm-6 col-xs-12">
                                 <div class="add">
                                     <img src="{{asset('public/grow/img/khela%20top%20L1%20add.JPG')}}" alt="">
                                     <img src="{{asset('public/grow/img/khela%20top%20L2%20add.JPG')}}" alt="">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                     <div class="row">
                     <div class="col-sm-6 col-xs-12">
                         <div class="english">
                             <a href="#"><p>English (RSS form site)</p></a>
                         </div>
                         <div class="row">
                             <div class="col-sm-6 col-xs-12">
                               <div class="mul-item">
                                     <a href="#">
                                         <img src="{{asset('public/grow/img/head1.JPG')}}" alt="">
                                       <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                     </a>
                               </div>
                             </div>
                             <div class="col-sm-6 col-xs-12">
                                <div class="main-cont">
                              <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                                </div>
                                    <div class="main-cont">
                              <a href="#"><p>তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয় তৃতীয় দিনের শুরুতেই ব্যাটিং বিপর্যয়</p></a>
                                </div>
                          
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-6 col-xs-12">
                         <div class="tuivag">
                             <div class="col-sm-6 col-xs-12">
                          <div class="english">
                              <a href="#"><p> মিডিয়া </p></a>
                          </div>
                            <div class="mul-item">
                                     <a href="#">
                                         <img src="{{asset('public/grow/img/head1.JPG')}}" alt="">
                                       <p>সিলেটের দক্ষিণ সুরমায় দুই গ্রামবাসীর মধ্যে সীমানা নির্ধারণ নিয়ে সংঘর্ষের ঘটনা ঘটেছে। সংঘর্ষে পুলিশসহ উভয়পক্ষের অন্তত ১০ জন আহত...</p>
                                     </a>
                            </div>
                             </div>
                             <div class="col-sm-6 col-xs-12">
                                 <div class="add"> 
                                     <img src="{{asset('public/grow/img/khela%20top%20L1%20add.JPG')}}" alt="">
                                     <img src="{{asset('public/grow/img/khela%20top%20L2%20add.JPG')}}" alt="">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
           </section>

@endsection
   

