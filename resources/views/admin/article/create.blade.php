
	@extends('layouts.admin')
	
	@section('title')
		Створти статтю
		@endsection
		
		@section('Content')
		  

		 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Додати статтю</h1>
          </div><!-- /.col -->
     
        </div><!-- /.row -->
		  @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
      </div><!-- /.container-fluid -->
    </div>
	   <section class="content">
      <div class="container-fluid">
        <div class="col-lg-12">
		
		<div class="card card-primary">
            
              <!-- form start -->
              <form action="{{route('article.store')}}" method="POST">
				@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Назва</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Введіть назву категорії" required>
                  </div>
                 <div class="form-group">
                        <label>Оберіть категорію</label>
                        <select name="cat_id[]" multiple="" class="form-control" required>
						@foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                         
						  @endforeach
                        </select>
                      </div>
                <div class="form-group">
				<textarea name="art" class="editor">
				  </textarea>
                  </div>
				  				    <script src="https://cdn.tiny.cloud/1/8q4yjhnqjqzvpqinpisg2jch40ukmx4zz2s98sc5wv2z6oh3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

				  	<div class="form-group">
                                    <label for="feature_image">Фото</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="img" class="form-control" id="feature_image"
                                        value="" >
                                    <a href="" class="popup_selector" data-inputid="feature_image">Обрати зображення</a>



                </div>
                </div>
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Відправити</button>
                </div>
              </form>
            </div>
		</div>
      </div><!-- /.container-fluid -->
    </section>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="/admin/dist/js/jquery.colorbox-min.js"></script>

<script>

 (function($) {
$(document).on('click','.popup_selector',function (event) {
    event.preventDefault();
    var updateID = $(this).attr('data-inputid'); // Btn id clicked
    var elfinderUrl = '/elfinder/popup/';

    // trigger the reveal modal with elfinder inside
    var triggerUrl = elfinderUrl + updateID;
    $.colorbox({
        href: triggerUrl,
        fastIframe: true,
        iframe: true,
         width: '70%',
        height: '80%'
    });

});
 })(jQuery);

// function to update the file selected by elfinder
function processSelectedFile(filePath, requestingField) {
	(function($) {
		$('#' + requestingField).val(filePath).trigger('change');
				$('img-uploaded').arrt('src','/'+filePath).trigger('change');

	})(jQuery);
}

</script>

    <!-- /.content -->

  	@endsection