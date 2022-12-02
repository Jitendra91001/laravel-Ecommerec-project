@extends('layouts')
@section('contant')
<div class="container">
<div class="row">
    <div class="col-sm-6">
        <table class="table table-bordered my-4" frame="top" border="3">
            <tr>
                <th>Price</th>
                <td>{{$total}} Rupees</td>
            </tr>
            <tr>
                <th>Tax</th>
                <td>0 Rupees</td>
            </tr>
            <tr>
                <th>Delvery</th>
                <td>100</td>
            </tr>
            <tr>
                <th>Total Amount</th>
                <td>{{$total+100}}</td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4 offset-2 p-3">
        <form method="POST" action="/orderplace">
            @csrf
            <h2 class="text-center">Payment method</h2><br/><br/>
            <hr/ style="transform: translateY(-50px);">
            <textarea rows="3" cols="50" name="text" placeholder="Enter your massage"></textarea>
            <p><input type="radio" class="me-2 ml-2" value="cash"  name="payment"/><span>Google Pay</span></p>
            <p><input type="radio" class="me-2 ml-2" value="cash" name="payment"/><span>Amazon Pay</span></p>
            <p><input type="radio" class="me-2 ml-2" value="cash" name="payment"/><span>Paytem</span></p>
            <p><input type="radio" class="me-2 ml-2" value="cash" name="payment"/><span>Cash on delevery</span></p>
            <a href="/myorder"><button class="btn btn-outline-info">Oeder now</button></a>
        </form>
    </div>
</div>
</div>
</div>
@endsection