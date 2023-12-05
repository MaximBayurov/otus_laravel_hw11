@extends($hw11_layout)
@section('title', 'Upload form')
@section('content')
    <div class="container">
        @if(request()->has('path'))
            <p><a href="{{route('hw11.render.text', ['path' => request()->get('path')])}}">Render in TEXT</a></p>
            <p><a href="{{route('hw11.render.html', ['path' => request()->get('path')])}}">Render in HTML</a></p>
        @endif
        <form action="{{route('hw11.upload')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <button type="submit">Upload</button>
        </form>
    </div>
@endsection