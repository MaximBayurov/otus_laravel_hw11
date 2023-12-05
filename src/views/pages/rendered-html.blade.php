@extends($hw11_layout)
@section('title', 'Rendered to HTML')

@section('content')
    <pre>
        {!! $rendered !!}
    </pre>
@endsection