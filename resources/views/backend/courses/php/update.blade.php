<x-admin-layout>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>New</h4>
            </div>
            <div class="card-body">
                @include('backend.courses.components.form')
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset("js/ckeditor_once.js") }}"></script>
</x-admin-layout>
