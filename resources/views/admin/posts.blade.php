@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Все записи блога</div>

                    <div class="card-body">
                        <table class="table table-hover table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Заголовок</th>
                                <th scope="col">Дата создания</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ str_limit($post->title, 70, '...') }}</td>
                                        <td>{{ $post->created_at->format('d.m.Y H:i:s') }}</td>
                                        <td class="post-edit">
                                            <a href="{{ route('edit', $post->id) }}" type="button" title="Редактировать" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                        <td class="post-delete">
                                            <form action="{{ route('delete', $post->id) }}" method="post">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Удалить">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection