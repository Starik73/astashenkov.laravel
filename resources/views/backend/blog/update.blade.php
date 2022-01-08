<x-admin-layout>
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('backend.blog_update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $blog->id ?? 0 }}">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="title">Заголовок</label>
                            <input id="title"
                                name="title"
                                type="text"
                                class="form-control @error('title') is-invalid @enderror"
                                value="{{ $blog->title ?? '' }}"
                            >
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="author">Автор</label>
                            <input id="author"
                                name="author"
                                type="text"
                                class="form-control
                                @error('author') is-invalid @enderror"
                                value="{{ !empty($blog->author) ? $blog->author : Auth::user()->name }}"
                            >
                            @error('author')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="h2">Подзаголовок</label>
                            <input id="h2"
                                name="h2"
                                type="text"
                                class="form-control
                                @error('h2') is-invalid @enderror"
                                value="{{ $blog->h2 ?? '' }}"
                            >
                            @error('h2')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="content">Контент</label>
                            <textarea id="content"
                                name="content"
                                type="text"
                                class="form-control ckeditor @error('content') is-invalid @enderror"
                            >{!! $blog->content ?? '' !!}</textarea>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="description">Meta-Description</label>
                            <input id="description"
                                name="description"
                                type="text"
                                class="form-control @error('description') is-invalid @enderror"
                                value="{{ $blog->description ?? '' }}"
                            >
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="keywords">Meta-Keywords</label>
                            <input id="keywords"
                                name="keywords"
                                type="text"
                                class="form-control
                                @error('keywords') is-invalid @enderror"
                                value="{{ $blog->keywords ?? '' }}"
                            >
                            @error('keywords')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="img">Сохраненное изображение</label>
                            @if (!empty($blog) && $exist = File::exists($blog->img))
                                <img class="img-responsive" src="{{ asset($blog->img) }}" alt="">
                            @else
                                <img class="img-responsive" src="{{ asset('images/no_image.png') }}" alt="">
                            @endif
                            <input id="img"
                                name="img"
                                @if(!empty($exist))
                                type="text"
                                @else
                                type="hidden"
                                @endif
                                readonly="true"
                                class="form-control"
                                value="{{ $blog->img ?? '' }}"
                            >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="blog_image">IMG</label>
                            <input type="file" id="blog_image" name="blog_image" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-info form-control">Сохранить</button>
                        </div>
                        <div class="form-group col-md-4">
                            <a href="{{ url()->previous() }}" class="btn btn-info form-control">Назад</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset("js/ckeditor_once.js") }}"></script>
</x-admin-layout>
