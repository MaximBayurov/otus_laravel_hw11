@extends($layout)

<form action="{{route('hw11.upload')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="submit">Upload</button>
</form>