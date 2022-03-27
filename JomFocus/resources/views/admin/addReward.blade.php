@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Dear {{ Auth::user()->name }},</strong> {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1>Create a reward</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">  
            <a class="admin-btn" href="{{ route('admin.rewardList') }}">Rewards list</a>
        </div>
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('admin.storeRewards') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-2">
                    <label for="rewardName" class="form-label">Reward name</label>
                    <input type="text" class="form-control" id="rewardName" name="rewardName">
                </div>
                <div class="form-group">
                    <label for="rewardImage">Cover</label>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="rewardImage" name="rewardImage">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="rewardDescription" name="rewardDescription"></textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardValue" class="form-label">Point</label>
                    <select class="form-select" aria-label="Default select example" id="rewardValue" name="rewardValue">
                        <option selected>Select point</option>
                        <option value="5000">5,000</option>
                        <option value="10000">10,000</option>
                        <option value="15000">15,000</option>
                        <option value="20000">20,000</option>
                        <option value="25000">25,000</option>
                        <option value="50000">50,000</option>
                        <option value="55000">55,000</option>
                        <option value="70000">70,000</option>
                        <option value="75000">75,000</option>
                        <option value="100000">100,000</option>
                        <option value="150000">150,000</option>
                        <option value="200000">200,000</option>
                        <option value="500000">500,000</option>
                        <option value="700000">700,000</option>
                        <option value="800000">800,000</option>
                        <option value="1000000">1,000,000</option>
                        <option value="1500000">1,500,000</option>
                        <option value="2000000">2,000,000</option>
                        <option value="2500000">2,500,000</option>
                        <option value="3000000">3,000,000</option>
                        <option value="3500000">3,500,000</option>
                        <option value="4000000">4,000,000</option>
                        <option value="4500000">4,500,000</option>
                        <option value="5000000">5,000,000(max)</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardQuantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="rewardQuantity" name="rewardQuantity" min="1" max="99">
                </div>
                <div class="form-group mt-2">
                    <label for="rewardCode" class="form-label">Redeem Code</label>
                    <input type="text" class="form-control" id="rewardCode" name="rewardCode" maxlength="12">
                </div>
                <button class="admin-btn" type="submit" style="height:50px;">Add Reward</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
        var fileName = document.getElementById("rewardImage").files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
    });
</script>
@endsection
@section('scripts')
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
            xhr.open( 'POST', '{{ route('rewards.imageUpload') }}', true );
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
    function RewardUploadAdapterPlugin( editor ) {
        editor.plugins.get( 'FileRepository' ).createUploadAdapter = ( loader ) => {
            // Configure the URL to the upload script in your back-end here!
            return new MyUploadAdapter( loader );
        };
    }
    ClassicEditor
        .create( document.querySelector( '#rewardDescription' ), {
            extraPlugins: [ RewardUploadAdapterPlugin ],
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