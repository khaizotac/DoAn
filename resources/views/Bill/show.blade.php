@extends('master')
@section('content')
<div  class="Header container text-center">
    <h1> Show Bill</h1>
</div>
<div id="content">
<table class="table table-bordered table-hover"><tr><th class='text-center'>ID</th><th class='text-center'>Customer</th><th class="text-center">Email</th><th class="text-center">Pay</th><th class="text-center">Total</th><th class="text-center">Date</th><th class='text-center'>Action</th></tr>
    <tr scope="row"><td>{{$bill->id}}</td>
    <td>{{$bill->customer->full_name}}</td>
    <td>{{$bill->customer->email}}</td>
    <td>{{$bill->payment}}</td>
    <td>{{$bill->total}}</td>
    <td>{{$bill->date_order}}</td>
    <td class="d-flex align-items-center justify-content-around">
    <form action="{{asset('bill/'. $bill->id.'/edit')}}" method="GET"><button class="btn btn-warning rounded-0">Edit</button>
    </form>
    <form action="{{asset('bill/'. $bill->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" value="DELETE" name="_method"><button type="submit" class="btn btn-danger rounded-0">Delete</button></form>
    </td></tr>
</table>
</div>
@endsection