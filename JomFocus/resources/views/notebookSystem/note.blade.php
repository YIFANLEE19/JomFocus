@extends('layouts.app')
@section('content')

    <section id="note">
        <div class="container">
            @foreach($notebooks as $notebook)
            <div class="row">
                <div class="col-md-12  mt-4">
                    <h1 class="modeLabel">{{$notebook->title}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-2">
                    <p>Create your note by click <strong>ADD NOTE</strong> button and enter your note.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <a class="n-action-btn" href="/notebook" id="backNotebookBtn">Back</a>
                </div>
                <div class="col-md-4 offset-md-4 text-center">
                    <button class="n-action-btn" data-toggle="modal" data-target="#noteModal" id="addNoteBtn">Add Note</button>
                </div>
            </div>

            <!-- Modal add note -->
            <div class="modal fade" id="noteModal" tabindex="-1" aria-labelledby="noteModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="noteModalLabel">Create Note</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('storeNote') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="noteTitle">Title</label>
                                    <input type="text" class="form-control" id="noteTitle" name="noteTitle">
                                    <input type="hidden" class="form-control" id="notebookID" name="notebookID" value="{{$notebook->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="noteImage">Cover</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="noteImage" name="noteImage">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="noteBody">Content</label>
                                    <textarea class="form-control" id="noteBody" name="noteBody" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" href="{{route('showNote',['id'=>$notebook->id])}}">Save</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- Display note -->
            <div class="row mt-4">
                @if(count($notes))
                    @foreach($notes as $note)
                        <div class="col-md-4">
                            <div class="card shadow note" style="width: 20rem;">
                                <img src="{{asset('images/') }}/{{$note->image}}" class="card-img-top img-fluid" alt="..." >
                                <div class="card-body">
                                    <h3 class="card-title">{{$note->title}}</h3>
                                    <p class="card-subtitle mb-2">Last Update: {{$note->updated_at}}</p>
                                    <a href="{{route('removeNote',['id'=>$note->id])}}" class="n-action-btn" id="deleteNoteBtn">Delete</a>
                                    <a href="{{route('showNoteDetail',['id'=>$note->id])}}" class="n-action-btn" id="openNoteBtn">Open</a> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-12">
                        <p class="promptText">No any note right now, Please add new note.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

<script>
    document.title="Note | JomFocus";
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
        var fileName = document.getElementById("noteImage").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
    const clickSound = new Audio('/sound/clicksoundeffect.mp3');
    const backNotebookBtn = document.getElementById('backNotebookBtn');
    const addNoteBtn = document.getElementById('addNoteBtn');
    const openNoteBtn = document.getElementById('openNoteBtn');
    const deleteNoteBtn = document.getElementById('deleteNoteBtn');
    backNotebookBtn.addEventListener('click',function(){
        clickSound.play();
    });
    addNoteBtn.addEventListener('click',function(){
        clickSound.play();
    });
    openNoteBtn.addEventListener('click',function(){
        clickSound.play();
    });
    deleteNoteBtn.addEventListener('click',function(){
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