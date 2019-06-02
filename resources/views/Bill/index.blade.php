@extends('master')
@section('content')
<div class="Header1 container-fluid d-flex d-none d-xl-block align-items-center">
<!--<div class="row">
    <div class="col-2">
    </div>
    <div class="col-10">
            <nav class="main-menu">
                <ul class="nav mt-2">
                <li><a href="{{route('admins.index')}}">Quản Lý Users</a></li>
                    <li><a href="{{route('products.index')}}">Quản Lý Products</a></li>
                    <li><a href="{{route('bills.index')}}">Quản Lý Bill</a></li>
                </ul>
            </nav>
</div>
</div>-->
</div>
<div id="content" class="Header container text-center">
    <h1> Quản Lý Bills </h1>
</div>
<div>
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Customer</th><th class='text-center'>Date</th><th class='text-center'>Total</th><th class='text-center'>Note</th><th class='text-center'>Action</th></tr>
@foreach($bills as $bill)
    <tr class="text-center"><td>{{$bill->id}}</td>
    <td>{{$bill->id_customer}}</td>
    <td>{{$bill->date_order}}</td>
    <td>{{$bill->total}}</td>
    <td>{{$bill->note}}</td>
    <td class="d-flex align-items-center justify-content-center">
    <form action="{{asset('bill/' . $bill->id)}}" method="GET">

    <button type="submit" class="btn btn-primary rounded-0">Show</button>
    </form>
    <form action="{{asset('bill/'. $bill->id.'/edit')}}" method="GET"><button type="submit" class="btn btn-warning rounded-0 mx-5">Edit</button>
    </form>
    <form action="{{asset('bill/'. $bill->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method">
    <button type="submit" class="btn btn-danger rounded-0">Delete</button>
    </form>
    </td></tr>
@endforeach
</table>
</div>
@endsection