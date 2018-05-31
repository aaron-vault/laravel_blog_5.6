@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Добавить новую статью</div>

                <div class="card-body">
                    <form action="{{ route('add') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Текст статьи</label>
                            <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                        </textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-primary float-right">Опубликовать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
