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
			
              @for ($i=0; $i<((count($articles)/2)); $i++)
			 
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
               @for ($i=ceil(count($articles)/2); $i<(count($articles)); $i++)
			  
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

            <div class="row">
              <div class="col-lg-12">
                 
				 
				    @else
				
				  <h3>Записів не знайдено </h3>
				  
				@endif
              </div>
			
            </div>
			
          </div>
			
          <!-- Start Blog Post Siddebar -->
         
		 
	@endsection
