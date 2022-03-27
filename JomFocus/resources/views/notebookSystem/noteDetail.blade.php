@extends('layouts.app')
@section('content')

    <section id="noteDetail">
        <div class="container">
            @foreach($notes as $note)
                <div class="row">
                    <div class="col-md-8 offset-md-2 mt-4">
                            <h1>{{$note->title}}</h1>
                            <p>Last updated: {{$note->updated_at}}</p>
                            <hr>
                            <p class="mb-4">{!! $note->body !!}</p>
                            <hr>
                            <a class="n-action-btn" href="/notebook/{{$note->notebookID}}" id="noteDetailBackBtn">Back</a>
                            <!-- Button trigger modal -->
                            <a class="n-action-btn" href="{{route('editNote',['id'=>$note->id])}}" data-toggle="modal" data-target="#editNoteModal" id="noteDetailEditBtn">Edit</a>
                    </div>
                </div>
            @endforeach

            <!-- Edit Note Modal -->
            <div class="modal fade" id="editNoteModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="editNoteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editNoteModalLabel">Edit Note</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('updateNote') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach($notes as $note)
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="notebookTitle">Title</label>
                                    <input type="text" class="form-control" id="noteTitle" name="noteTitle" value="{{$note->title}}">
                                    <input type="hidden" class="form-control" id="noteID" name="noteID" value="{{$note->id}}">
                                    <input type="hidden" class="form-control" id="notebookID" name="notebookID" value="{{$note->notebookID}}">
                                </div>
                                <div class="form-group">
                                    <label for="noteBody">Content</label>
                                    <textarea class="form-control" id="noteBody" name="noteBody" rows="4">{{$note->body}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="noteImage">Change cover</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="noteImage" name="noteImage">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" href="#">Save</button> 
                            </div>
                        @endforeach
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.title="Note Detail | Jom Focus";
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
        var fileName = document.getElementById("noteImage").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });

    const clickSound = new Audio('/sound/clicksoundeffect.mp3');
    const noteDetailBackBtn = document.getElementById('noteDetailBackBtn');
    const noteDetailEditBtn = document.getElementById('noteDetailEditBtn');
    noteDetailBackBtn.addEventListener('click',function(){
        clickSound.play();
    });
    noteDetailEditBtn.addEventListener('click',function(){
        clickSound.play();
    });
    </script>
@endsection

@section('ckScripts')
<script>
    class MyUploadAdapter {
        constructor( loader ) {
            // The file loader instance to use during the upload. It sounds scary but do not
            // worry — the loader will be passed into the adapter later on in this guide.
            this.loader = loader;
        }
        // Starts the upload process.
        upload() {
            return this.loader.file
                .then( file => new Promise( ( resolve, reject ) => {
                    this._initRequest();
                    this._initListeners( resolve, reject, file );
                    this._sendRequest( file );
                } ) );
        }
        // Aborts the upload process.
        abort() {
            if ( this.xhr ) {
                this.xhr.abort();
            }
        }
        // Initializes the XMLHttpRequest object using the URL passed to the constructor.
        _initRequest() {
            const xhr = this.xhr = new XMLHttpRequest();
            // Note that your request may look different. It is up to you and your editor
            // integration to choose the right communication channel. This example uses
            // a POST request with JSON as a data structure but your configuration
            // could be different.
            xhr.open( 'POST',"{{ route('note.imageUpload') }}", true );
            xhr.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');
            xhr.responseType = 'json';
        }
        // Initializes XMLHttpRequest listeners.
        _initListeners( resolve, reject, file ) {
            const xhr = this.xhr;
            const loader = this.loader;
            const genericErrorText = `Couldn't upload file: ${ file.name }.`;
            xhr.addEventListener( 'error', () => reject( genericErrorText ) );
            xhr.addEventListener( 'abort', () => reject() );
            xhr.addEventListener( 'load', () => {
                const response = xhr.response;
                // This example assumes the XHR server's "response" object will come with
                // an "error" which has its own "message" that can be passed to reject()
                // in the upload promise.
                //
                // Your integration may handle upload errors in a different way so make sure
                // it is done properly. The reject() function must be called when the upload fails.
                if ( !response || response.error ) {
                    return reject( response && response.error ? response.error.message : genericErrorText );
                }
                // If the upload is successful, resolve the upload promise with an object containing
                // at least the "default" URL, pointing to the image on the server.
                // This URL will be used to display the image in the content. Learn more in the
                // UploadAdapter#upload documentation.
                resolve( {
                    default: response.url
                } );
            } );
            // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
            // properties which are used e.g. to display the upload progress bar in the editor
            // user interface.
            if ( xhr.upload ) {
                xhr.upload.addEventListener( 'progress', evt => {
                    if ( evt.lengthComputable ) {
                        loader.uploadTotal = evt.total;
                        loader.uploaded = evt.loaded;
                    }
                } );
            }
        }
        // Prepares the data and sends the request.
        _sendRequest( file ) {
            // Prepare the form data.
            const data = new FormData();
            data.append( 'upload', file );
            // Important note: This is the right place to implement security mechanisms
            // like authentication and CSRF protection. For instance, you can use
            // XMLHttpRequest.setRequestHeader() to set the request headers containing
            // the CSRF token generated earlier by your application.
            // Send the request.
            this.xhr.send( data );
        }
        // ...
    }
    function NoteUploadAdapterPlugin( editor ) {
        editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
            // Configure the URL to the upload script in your back-end here!
            return new MyUploadAdapter( loader );
        };
    }
    ClassicEditor
        .create( document.querySelector( '#noteBody' ), {
            extraPlugins: [ NoteUploadAdapterPlugin ],
        } )
        .then( editor => {
            // Simulate label behavior if textarea had a label
            if (editor.sourceElement.labels.length > 0) {
                editor.sourceElement.labels[0].addEventListener('click', e => editor.editing.view.focus());
            }
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection