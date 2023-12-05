@extends($hw11_layout)
@section('title', 'Rendered to HTML')

@section('content')
    <div>
        {!! $rendered !!}
    </div>
@endsection