@extends('layout.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить продукт</h1>
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
                <form action = "{{ route('product.store') }}" method = "post" enctype = "multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Наименование">
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" placeholder="Описание">
                </div>
                <div class="form-group">
                    <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Контент"></textarea>
                </div>
                <div class="form-group">
                    <input type="number" name="price" class="form-control" placeholder="Цена">
                </div>
                <div class="form-group">
                    <input type="number" name="count" class="form-control" placeholder="Количество на складе">
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="custom-file">
                            <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                    </div>
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
                    <select name="category_id" class="form-control select2" style="width: 100%;">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Добавить">
                </div>
                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
