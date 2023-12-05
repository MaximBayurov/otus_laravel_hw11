@extends($hw11_layout)
@section('title', 'Rendered to TEXT')

@section('content')
    <pre>
        {!! $rendered !!}
    </pre>
@endsection