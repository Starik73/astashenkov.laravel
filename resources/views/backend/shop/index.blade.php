<x-admin-layout>
    <div class="mx-auto">
        <div class="p-2">
            <div class="row">
                <div class="col-md-12 card p-3">
                    <div class="card-header">
                        <h3>Магазин</h3>
                    </div>
                    <div class="card-body">
                        Количество постов: <b> {{ $count['blog'] ?? 0 }} </b>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href="{{ route('backend.blog') }}">Просмотр</a>
                        <a class="btn btn-info" href="{{ route('backend.blog') }}">Добавить новый</a>
                    </div>
                </div>
            </div>
            <h2 class="text-center">Уроки</h2>
            <div class="row">
                <div class="col-md-3 card p-3">
                    <div class="card-header">
                        <h3>HTML</h3>
                    </div>
                    <div class="card-body">
                        Количество постов: <b> {{ $count['html'] ?? 0 }} </b>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href="{{ route('backend.html') }}">Просмотр</a>
                        <a class="btn btn-info" href="{{ route('backend.html') }}">Добавить новый</a>
                    </div>
                </div>
                <div class="col-md-3 card p-3">
                    <div class="card-header">
                        <h3>CSS</h3>
                    </div>
                    <div class="card-body">
                        Количество постов: <b> {{ $count['css'] ?? 0 }} </b>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href="{{ route('backend.blog') }}">Просмотр</a>
                        <a class="btn btn-info" href="{{ route('backend.blog') }}">Добавить новый</a>
                    </div>
                </div>
                <div class="col-md-3 card p-3">
                    <div class="card-header">
                        <h3>JS</h3>
                    </div>
                    <div class="card-body">
                        Количество постов: <b> {{ $count['js'] ?? 0 }} </b>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href="{{ route('backend.blog') }}">Просмотр</a>
                        <a class="btn btn-info" href="{{ route('backend.blog') }}">Добавить новый</a>
                    </div>
                </div>
                <div class="col-md-3 card p-3">
                    <div class="card-header">
                        <h3>PHP</h3>
                    </div>
                    <div class="card-body">
                        Количество постов: <b> {{ $count['php'] ?? 0 }} </b>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-secondary" href="{{ route('backend.php') }}">Просмотр</a>
                        <a class="btn btn-info" href="{{ route('backend.php') }}">Добавить новый</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
