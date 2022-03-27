@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center mt-4 mb-4">
            <h1>Edit Reward</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-8">  
            <a class="admin-btn" href="{{ route('admin.rewardList') }}">Reward list</a>
        </div>
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('admin.updateReward') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @foreach($rewards as $reward)
                <div class="form-group mt-2">
                    <label for="rewardName" class="form-label">Reward name</label>
                    <input type="text" class="form-control" id="rewardName" name="rewardName" value="{{$reward->name}}">
                    <input type="hidden" class="form-control" id="rewardID" name="rewardID" value="{{$reward->id}}">
                </div>
                <div class="form-group">
                    <label for="rewardImage">Change cover</label>
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="rewardImage" name="rewardImage" value="">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="rewardDescription" name="rewardDescription">{!! $reward->description !!}</textarea>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardValue" class="form-label">Point</label>
                    <select class="form-select" aria-label="Default select example" id="rewardValue" name="rewardValue">
                        <option value="{{$reward->value}}" selected>Select new point( old: {{$reward->value}} )</option>
                        <option value="5000">5000</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                        <option value="20000">20000</option>
                        <option value="25000">25000</option>
                        <option value="50000">50000</option>
                        <option value="55000">55000</option>
                        <option value="70000">70000</option>
                        <option value="75000">75000</option>
                        <option value="100000">100000</option>
                        <option value="150000">150000</option>
                        <option value="200000">200000</option>
                        <option value="500000">500000</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="rewardQuantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="rewardQuantity" name="rewardQuantity" min="1" max="99" value="{{$reward->quantity}}">
                </div>
                <div class="form-group mt-2">
                    <label for="rewardCode" class="form-label">Redeem Code</label>
                    <input type="text" class="form-control" id="rewardCode" name="rewardCode" maxlength="12" value="{{$reward->code}}">
                </div>
                <button class="admin-btn" type="submit" style="height:50px;">Save Reward</button>
                @endforeach
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
    ClassicEditor
        .create( document.querySelector( '#rewardDescription' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
