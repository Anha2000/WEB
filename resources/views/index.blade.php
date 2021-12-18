
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
            <a href="index"><i class="fa fa-facebook"></i></a>
          </li>
          <li>
            <a href="index"><i class="fa fa-twitter"></i></a>
          </li>
          <li>
            <a href="index"><i class="fa fa-pinterest"></i></a>
          </li>
          <li class="diffrent">Поділитися</li>
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
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
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
                      src="/img/blog-post/blog-post3.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Ялинки орігамі
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>1 Грудня, 2021</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                     Увійдіть у ритм їх виготовлення, і ви можете отримати їх 100. Виберіть папір, який відповідає кольорам у вашому домі, щоб вони добре поєднувалися, коли ви виставлятимете їх.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                           Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span>Прикраси для дому
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="/img/blog-post/blog-post4.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Гірлянда з паперу</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>1 Грудня, 2021
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                     Ця гірлянда гарантує, що вам не доведеться дозволяти святковому декору стиснути ваш стиль бохо. Кому потрібні паперові сніжинки, коли замість них можна мати паперові пір’я?
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                           Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Прикраси для дому
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
                      src="/img/blog-post/blog-post5.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Міні пряничні будиночки
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>1 Грудня, 2021</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
Міні пряничні будиночки ідеально підходять для кухлів, в якості подарунків або навіть для декорування. Ці будиночки є меншою версією нашого класичного пряникового будиночка .
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                           Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Подарунок
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="/img/blog-post/blog-post6.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Кекси з капелюхом Діда Мороза</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>3 Грудня, 2021
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Ми готуємо смачні пряничні кекси, прикрашені, як капелюхи Діда Мороза, з червоно-білою кремовою глазур'ю! Ідеально підходить для різдвяної вечірки!
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                           Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Рецепти
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="/img/blog-post/blog-post7.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Зимовий «Букет»
                      </a>
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class=""
                        ><span class="ti-calendar"></span>1 Грудня, 2021</a
                      >
                      <a href="#" class="ml-20"
                        ><span class="ti-comment"></span>05</a
                      >
                    </div>
                    <p>
                      Цей настільний пейзаж сповнений ідей різдвяних ремесел. Створіть зимовий «букет», подібний до цього, використовуючи знайдені гілки, котушку бежевих ниток і білу фарбу. 
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                           Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Прикраси для дому
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="single-amenities">
                  <div class="amenities-thumb">
                    <img
                      class="img-fluid w-100"
                      src="/img/blog-post/blog-post8.jpg"
                      alt=""
                    />
                  </div>
                  <div class="amenities-details">
                    <h5>
                      <a href="#"
                        >Мідні ялинки</a
                      >
                    </h5>
                    <div class="amenities-meta mb-10">
                      <a href="#" class="">
                        <span class="ti-calendar"></span>1 Грудня, 2021
                      </a>
                      <a href="#" class="ml-20">
                        <span class="ti-comment"></span>05
                      </a>
                    </div>
                    <p>
                      Вони такі гарні, що ви захочете залишити їх цілий рік.
                    </p>

                    <div class="d-flex justify-content-between mt-20">
                      <div>
                        <a href="#" class="blog-post-btn">
                           Більше <span class="ti-arrow-right"></span>
                        </a>
                      </div>
                      <div class="category">
                        <a href="#">
                          <span class="ti-folder mr-1"></span> Прикраси для дому
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
              </div>
            </div>
          </div>
	@endsection
   
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
   

          <!-- Start Blog Post Siddebar -->
          