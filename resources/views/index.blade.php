
	@extends('layouts')
	
	@section('title')
		Головна
		@endsection
		
	@section('content')
	
	 <section class="home-banner-area relative">
      <div class="container-fluid">
        <div class="row">
          <div class="owl-carousel home-banner-owl">
            <div class="banner-img">
              <img class="img-fluid" src="/img/banner/b1.jpg" />
              <div class="text-wrapper">
                <a href="#" class="d-flex">
                  <h1>
                    Поринь у новорічну атмосферу  <br />
                     разом з нами
                  </h1>
                </a>
              </div>
            </div>
           
          </div>
        </div>
      </div>
      <div class="social-icons">
        <ul>
          <li>
            <a href="index"><i ></i></a>
          </li>
          <li>
            <a href="index"><i></i></a>
          </li>
          <li>
            <a href="index"><i ></i></a>
          </li>
		   
         
        </ul>
      </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-gap relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
			  <div class="col-lg-6 col-md-6">
              @for ($i=0; $i<(count($articles)/2); $i++)
			  
			     <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="{{$articles[$i]->img}}"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="{{route('blog-single',$articles[$i]->art_id)}}">
					  {{$articles[$i]->name}}
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>{{$articles[$i]->time}}</a
                      >
                     
                    </div>
					<p style="-ms-text-overflow: ellipsis;
					text-overflow: ellipsis;
					overflow: hidden;
					-ms-line-clamp: 5;
					-webkit-line-clamp: 5;
					line-clamp: 5;
					display: -webkit-box;
					display: box;
					word-wrap: break-word;
					-webkit-box-orient: vertical;
					box-orient: vertical;
					font-size: 14px;
						line-height: 1.8;

					"><?php
						 echo  $articles[$i]->art;

						?> 
					</p>
                    

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="{{route('blog-single',$articles[$i]->art_id)}}" class="blog-post-btn">
                          Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                       <div class="category">
					    <span class="ti-folder mr-1"></span>
					   @foreach($category as $cat)
					
					   @if($cat->articles == $articles[$i]->art_id)
                        <a href="{{route('category_id',$cat->id)}}">
							    {{$cat->category}}
								                         </a>

								@break
							
						
						@endif
						  @endforeach
                      </div>
                    </div>
                  </div>
                </div>
			  
			  
		   @endfor
			  
			  
              

               
              </div>

              <div class="col-lg-6 col-md-6">
               @for ($i=(count($articles)/2); $i<(count($articles)); $i++)
			  
			     <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="{{$articles[$i]->img}}"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="{{route('blog-single',$articles[$i]->art_id)}}">
					  {{$articles[$i]->name}}
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>{{$articles[$i]->time}}</a
                      >
                     
                    </div>
					<p style="-ms-text-overflow: ellipsis;
					text-overflow: ellipsis;
					overflow: hidden;
					-ms-line-clamp: 5;
					-webkit-line-clamp: 5;
					line-clamp: 5;
					display: -webkit-box;
					display: box;
					word-wrap: break-word;
					-webkit-box-orient: vertical;
					box-orient: vertical;
					font-size: 14px;
						line-height: 1.8;

					"><?php
						 echo  $articles[$i]->art;

						?> 
					</p>
				

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="{{route('blog-single',$articles[$i]->art_id)}}" class="blog-post-btn">
                          Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                       <div class="category">
					    <span class="ti-folder mr-1"></span>
					   @foreach($category as $cat)
					
					   @if($cat->articles == $articles[$i]->art_id)
                        <a href="{{route('category_id',$cat->id)}}">
							    {{$cat->category}}
								                         </a>

								@break
							
						
						@endif
						  @endforeach
                      </div>
                    </div>
                  </div>
                </div>
			
		   @endfor
			  
              </div>
			 
            </div>
         
          </div>
		 
	@endsection
     
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
   

          <!-- Start Blog Post Siddebar -->
          