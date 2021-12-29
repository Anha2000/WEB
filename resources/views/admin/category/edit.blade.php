
	@extends('layouts.admin')
	
	@section('title')
		Редагування категорії
		@endsection
		
		@section('Content')
		
		 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Редагування категорії: {{$category->name}} </h1>
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
              <form action="{{route('category.update', $category->id)}}" method="POST">
				@csrf
				@method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Назва</label>
                    <input type="text" name="name" value="{{$category->name}}" class="form-control" id="exampleInputEmail1" placeholder="Введіть назву категорії" required>
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Зберегти</button>
                </div>
              </form>
            </div>
		</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  	@endsection