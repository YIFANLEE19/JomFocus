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
    <div class="row">
        <div class="col-md-12 text-center">
            <br>
            <h2>Reward List</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline my-2 my-lg-0" action="{{route('reward.search')}}" method="post">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Search name/code" aria-label="Search" id="keyword" name="keyword" style="height:50px;">
                <button class="admin-btn" type="submit" style="height:50px;">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="hidden">Id</th>
                        <th scope="col">Reward Name</th>
                        <th scope="col">Point</th>
                        <th scope="col" class="text-center">Quantity</th>
                        <th scope="col">Redeem Code</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($rewards))
                        @foreach($rewards as $reward)
                        <tr>
                            <td class="hidden">{{$reward->id}}</td>
                            <th scope="row">{{$reward->name}}</th>
                            <td>{{$reward->value}}</td>
                            <td class="text-center">{{$reward->quantity}}</td>
                            <td><strong>{{$reward->code}}</strong></td>
                            <td>
                                <a class="admin-btn" href="{{route('admin.editReward',['id'=>$reward->id])}}">Edit</a>
                                <a class="admin-btn" href="{{route('admin.deleteReward',['id'=>$reward->id])}}"> Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <th class="hidden">--</th>
                            <th scope="row">--</th>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.title="Admin | Reward List | Jom Focus"
</script>
@endsection

