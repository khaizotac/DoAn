@extends('master')
@section('content')
<div id="content" class="Header container text-center">
    <h1> Chỉnh Sửa Bill </h1>
</div>
<div class="align-items-center">
<form action="{{asset('bill/'. $bill->id.'/updated')}}" method="post">
    <input type="hidden" name="_method" value="put" /> 
    <div class="form-group ">
    Id_customer: <input type="text" name="id_customer" placeholder="input id" value="{{$bill->id_customer}}"><br>
    Date: <input type="date_order" name="date_order" placeholder="input date_order" value="{{$bill->date_order}}"><br>
    Giá: <input type="text" name="total" placeholder="input total" value="{{$bill->total}}"><br>
    Phương Thức: <input type="text" name="payment" placeholder="input Pay" value="{{$bill->payment}}"><br>
    Ghi chú: <input type="text" name="note" placeholder="input note" value="{{$bill->note}}"><br>
    </div>
    <div class="form-group ">
    <button type="submit">Save</button>
    {{ csrf_field() }}
    </div>
</form>
</div>
@endsection