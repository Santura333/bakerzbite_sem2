@extends('frontend.frontend_master')

@section('title')
COD Page
@endsection

@section('frontend_style')

@endsection

@section('frontend_content')
<div class="checkout-box body-content container">
    <div class="row">
        <div class="col-md-6">
            <!-- checkout-progress-sidebar -->
            <div class="checkout-progress-sidebar ">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">Your Shopping Amount</h4>
                        </div>
                        <div class="">
                            <ul class="nav nav-checkout-progress list-unstyled">
                                <hr>
                                <li>
                                    <strong>Grand Total: </strong> ${{ $cartTotal }}

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- checkout-progress-sidebar -->
        </div>
        <div class="col-md-6">
            <div class="checkout-progress-sidebar ">
                <div class="panel-group">
                    <form action="{{ route('cod.order') }}" method="post" id="payment-form">
                        @csrf
                        <div class="form-row">
                            <img src="{{ asset('frontend/assets/images/payments/cash.png') }}" alt="">
                            <label for="card-element">
                                <input type="hidden" name="shipping_name" value="{{ $data['shipping_name'] }}">
                                <input type="hidden" name="shipping_email" value="{{ $data['shipping_email'] }}">
                                <input type="hidden" name="shipping_phone" value="{{ $data['shipping_phone'] }}">
                            </label>
                        </div>
                        <br>
                        <button class="btn btn-primary">Confirm Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.row -->
    <hr>
</div>
</div>
@endsection
@section('frontend_script')

@endsection