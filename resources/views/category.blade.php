@extends('layouts')
	
		@section('title')
		Колекції
		@endsection
	
	
	@section('content')
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
	  @if($id==0)
        <h1>Колекції</h1>
	@else
						@foreach($categories as $cat)
							@if($cat->id == $id)
								<h1>{{$cat->name}}</h1>
							@endif
						@endforeach
	@endif
        <p>Поринь у новорічну атмосферу 
                     разом з нами </p>
      </div>
    </section>
    <!--================ End banner Area =================-->

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-gap relative">
	
      <div class="container">
	 
        <div class="row">
		 @if(count($articles))
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6 col-md-6">
			  
                 @foreach($articles as $el)
			     <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="/img/blog-post/{{$el->img}}"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="{{route('blog-single',$el->art_id)}}">
					  {{$el->name}}
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>{{$el->time}}</a
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
						 echo  $el->art;

						?> 
					</p>
                    

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="{{route('blog-single',$el->art_id)}}" class="blog-post-btn">
                          Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
					    <span class="ti-folder mr-1"></span>
					   @foreach($category as $cat)
					
					   @if($cat->articles == $el->art_id)
                        <a href="{{route('category_id',$cat->id)}}">
							    {{$cat->category}}
								 
								@break
							
						
                        </a>
						@endif
						  @endforeach
                      </div>
                    </div>
                  </div>
                </div>
			  
			  
			  @endforeach
			 
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post3.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post5.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >There's goting to be a musical about meghan
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>20th Nov, 2018</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post7.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6">
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post2.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >There's goting to be a musical about meghan
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>20th Nov, 2018</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post4.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post6.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >There's goting to be a musical about meghan
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>20th Nov, 2018</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="img/blog-post/blog-post8.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Forest responds to consultation smoking in al
                        fresco.</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>20th Nov, 2018
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Creepeth green light appear let rule only you're divide
                      and lights moving and isn't given creeping deep.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                          Read More <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Travel
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">
                  <nav class="blog-pagination justify-content-center d-flex">
                      <ul class="pagination">
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Previous">
                                  <span aria-hidden="true">
                                      <span class="ti-arrow-left"></span>
                                  </span>
                              </a>
                          </li>
                          <li class="page-item"><a href="#" class="page-link">01</a></li>
                          <li class="page-item active"><a href="#" class="page-link">02</a></li>
                          <li class="page-item"><a href="#" class="page-link">03</a></li>
                          <li class="page-item"><a href="#" class="page-link">04</a></li>
                          <li class="page-item"><a href="#" class="page-link">09</a></li>
                          <li class="page-item">
                              <a href="#" class="page-link" aria-label="Next">
                                  <span aria-hidden="true">
                                      <span class="ti-arrow-right"></span>
                                  </span>
                              </a>
                          </li>
                      </ul>
                  </nav>
				 
				    @else
				
				  <h3>Записів не знайдено </h3>
				  
				@endif
              </div>
			
            </div>
			
          </div>
			
          <!-- Start Blog Post Siddebar -->
         
		 
	@endsection
