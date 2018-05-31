@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Добавить новую статью</div>

                    <div class="card-body">
                        <form action="{{ route('update', $post->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="title">Заголовок</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Текст статьи</label>
                                <textarea name="description" id="description" class="form-control" cols="30" rows="10">
                                    {{ $post->description }}
                        </textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-primary float-right">Обновить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection