@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать категорию</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('category.update', $product->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>Наименование</label>
                        <input type="text" name="title" value="{{ $product->title }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Описание</label>
                        <input type="text" name="description" value="{{ $product->description }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Контент</label>
                        <input type="text" name="content" value="{{ $product->content }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Цена</label>
                        <input type="text" name="price" value="{{ $product->price }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Колличество</label>
                        <input type="text" name="count" value="{{ $product->count }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Выбирите тэг"
                                style="width: 100%;">
                            @foreach($tags as $tag)
                                <option  value="{{$tag->id}}">{{$tag->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Выбирите цвет"
                                style="width: 100%;">
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{{$color->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
