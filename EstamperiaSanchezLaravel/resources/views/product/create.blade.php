@extends('layouts.default')
@extends('layouts.app')
@section('title')
<title>Nuevo Producto</title>
@endsection

@section('header')
@include('includes.header2')
@endsection

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div>
              <div >
                <h3><span class="titleH3">Agregar nuevo producto</span></h3>
              </div>
            </div>

              <div class="col-md-12 card-body">
                    <form method="POST" action="/product/create" enctype="multipart/form-data" class="form-create">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class=" col-form-label text-md-right">Nombre: </label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row">
                            <label for="wholesale_price" class=" col-form-label text-md-right">Precio mayorista: </label>
                                <input id="wholesale_price" type="number" min="1"class="form-control{{ $errors->has('wholesale_price') ? ' is-invalid' : '' }}" name="wholesale_price" value="{{ old('wholesale_price') }}" required autofocus>

                                @if ($errors->has('wholesale_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('wholesale_price') }}</strong>
                                    </span>
                                @endif
                                <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group row">
                            <label for="retail_price" class="col-form-label text-md-right">Precio minorista: </label>
                                <input id="retail_price" type="number" min="1"  class="form-control{{ $errors->has('retail_price') ? ' is-invalid' : '' }}" name="retail_price" value="{{ old('retail_price') }}" required autofocus>

                                @if ($errors->has('retail_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('retail_price') }}</strong>
                                    </span>
                                @endif
                                <div class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-8">
                            <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-form-label text-md-right">Categorias: </label>

                            <div class="category col-md-12">
                                @foreach ($categories as $category)
                                    <input id="{{$category->id}}" class="" type="radio" name="categories[]" value="{{$category->id}}">
                                    <label for="{{$category->id}}">{{$category->name}}</label>
                                @endforeach

                                @if ($errors->has('categories'))
                                    <span name="cat" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categories') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger mr-auto ml-auto">
                                    Guardar producto
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
              </div>
</div>
<script src="/js/createValidate.js"></script>
@endsection

@section('footer')
	@include('includes.footer')
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>