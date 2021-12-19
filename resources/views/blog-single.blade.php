@extends('layouts')
	
	@section('title')
		Допис
		@endsection
	
	@section('content')
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
    <section class="banner-area relative">
        <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
        <h1>{{$articles[0]->name}}</h1>
        <p>Поринь у новорічну атмосферу 
                     разом з нами</p>
      </div>
    </section>
    <!--================ End banner Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area section-gap single-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
					@foreach($articles as $el)
       					<div class="main_blog_details">
       						<img class="img-fluid" src="/img/blog-post/{{$el->img}}" alt="">
							
       						<a href="#"><h4>{{$el->name}}</h4></a>
       						<div class="user_details">
       							<div class="float-left">
								@foreach($category as $cat)
							@if($cat->articles == $el->id)
								<a href="{{route('category_id',$cat->id)}}">{{$cat->category}}</a>
							@endif
						  @endforeach
       								
       							</div>
       							<div class="float-right mt-sm-0 mt-3">
       								<div class="media">
       									<div class="media-body">
       										
       										<p>{{$el->time}}</p>
       									</div>
       								
       								</div>
       							</div>
       						</div>
       						
    <?php
$string = $el->art;
echo nl2br($string);
?>
  
					
      						<div class="news_d_footer flex-column flex-sm-row">
      															 
			
      							
      							<div class="news_socail ml-sm-auto mt-sm-0 mt-2">
								 <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->

<div class="fb-share-button" 
 data-href="{{route('blog-single',$el->id)}}"  
data-layout="button_count">

</div>
								</div>
      						</div>
       					</div>
       			
						@endforeach
                        <div class="comments-area">
                            <h4>{{$сom_с}} Коментарів</h4>
						
                          
							@foreach($comments as $el)
							@if(($el->p_id == NULL ))
                            <div class="comment-list">
							
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">{{$el->name}}</a></h5>
                                            <p class="date">{{$el->time}} </p>
                                            <p class="comment">
                                                {{$el->text}}
                                            </p>
                                        </div>
                                    </div>
									 <div class="reply-btn">
                                          <a class="btn-reply text-uppercase" href="javascript:;" onclick="jQuery('#inputid').val('{{$el->id}}');jQuery('#inputid').focus();"> Відповісти</a>
                                    </div>
                                 
                                </div>
								
                            </div>	
							@endif
							@foreach($comments as $el1)
							@if ($el1->p_id == $el->id )
							  <div class="comment-list left-padding">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                              <h5><a href="#">{{$el1->name}}</a></h5>
                                            <p class="date">{{$el1->time}} </p>
                                            <p class="comment">
                                                {{$el1->text}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply-btn">
									<a class="btn-reply text-uppercase" href="javascript:;" onclick="jQuery('#inputid').val('{{$el1->id}}');jQuery('#inputid').focus();">Відповісти</a>

                                    </div>
                                </div>
                            </div>
							   @endif
							   @endforeach
                               @endforeach                                         				
                        </div>
                        <div class="comment-form">
                            <h4>Залиште відповідь</h4>
							 
							 @if($errors->any())
								 <div class="aler aler-danger">
							 <ul>
							 @foreach($errors->all() as $error)
							<script>
Swal.fire({
  icon: 'error',
  title: ' {{$error}}',
 
})					</script>		
							 @endforeach
							 </ul>
							 </div>
							 
							 @endif
							  
							 @if (session('success'))
								<script>
 Swal.fire({
  icon: 'success',
  title: 'Коментар додано',
  showConfirmButton: false,

  timer: 1500
});</script>

							
							@endif
							
							<br>
							@foreach($articles as $el)
                            <form action="{{route('comment',$el->id)}}" method="post">
							@endforeach
							@csrf
                                <div class="form-group form-inline">
                                  <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Введіть ім'я" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введіть ім'я'" >
                                  </div>
                                  <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Введіть email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Введіть ім'я email'">
                                  </div>										
                                </div>
                               <input type="hidden" id ="inputid" name="password"></p>
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Коментар" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Коментар'" ></textarea>
                                </div>
                                <button class="primary-btn submit_btn">Опублікувати коментар</button>	
                            </form>
                        </div>
					</div>
					
                   @endsection
	<script src="/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="/sweetalert2/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="/sweetalert2/dist/sweetalert2.min.css">
				  