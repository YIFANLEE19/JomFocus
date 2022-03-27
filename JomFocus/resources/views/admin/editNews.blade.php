@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1>Edit news</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">  
            <a class="admin-btn" href="{{ route('admin.newsList') }}">News list</a>
        </div>
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('admin.updateNews') }}" method="POST">
                @csrf
                @foreach($news as $new)
                <div class="form-group mt-2">
                    <label for="newsTitle" class="form-label">Title</label>
                    <input type="text" class="form-control" id="newsTitle" name="newsTitle" maxlength="52" aria-describedby="titleHelp" value="{{$new->title}}">
                    <div id="titleHelp" class="form-text">You can enter fewer than 53 characters for a title.</div>
                    <input type="hidden" class="form-control" id="newsID" name="newsID" value="{{$new->id}}">
                </div>
                <div class="form-group mt-2">
                    <label for="newsContent" class="form-label">Content</label>
                    <textarea class="form-control" id="newsTextarea" name="newsContent">{!! $new->content !!}</textarea>
                </div>
                <button class="admin-btn" type="submit" style="height:50px;">Save news</button>
                @endforeach
            </form>
        </div>
    </div>
</div>



@endsection
@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#newsTextarea' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection