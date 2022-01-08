<x-admin-layout>
    @if (!empty($blogs))
        <div class="col-md-12">
            <div class="card min-h90-screen">
                <div class="card-header">
                    <b>Уроки по HTML</b>
                    {{ $blogs->links() }}
                    <a href="{{ route('backend.blog_form', ['id' => 0]) }}">
                        Create a new post
                    </a>
                </div>
                <div class="card-body">
                    @if (!empty(count($blogs)))
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Заголовок</th>
                                    <th scope="col">Автор</th>
                                    <th scope="col">Редактировать</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <th scope="row">{{ $blog->id }}</th>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->author }}</td>
                                        <td>
                                            <a href="{{ route('backend.blog_form', ['id' => $blog->id]) }}">
                                                Update #{{ $blog->id }}
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text">No data</p>
                    @endif
                </div>
                <div class="card-footer">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    @else
        <p>No data</p>
    @endif
</x-admin-layout>
