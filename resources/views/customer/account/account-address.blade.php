@extends("layoutforcustomer.extension")

@section("content")
<div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-y-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb__wrap">
                    <ul class="breadcrumb__list">
                        <li class="has-separator">

                            <a href="{{ route('customer#homepage') }}">Home</a></li>
                        <li class="is-marked">

                            <a href="{{ route('customer#accountpage') }}">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->


<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="dash">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12">

                        <!--====== Dashboard Features ======-->
                        <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                            <div class="dash__pad-1">

                                <span class="dash__text u-s-m-b-16">Hello, John Doe</span>
                                <ul class="dash__f-list">
                                    <li>

                                        <a href="{{ route('customer#accountpage') }}">Manage My Account</a></li>
                                    <li>

                                        <a href="{{ route('customer#editaccpage') }}">My Profile</a></li>
                                    <li>

                                        <a class="dash-active" href="{{ route('customer#accountaddresspage') }}">Address Book</a></li>
      
                                    <li>

                                        <a href="{{ route('customer#accountorderpage') }}">My Orders</a></li>
                          
                                </ul>
                            </div>
                        </div>
                        <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                            <div class="dash__pad-1">
                                <ul class="dash__w-list">
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                            <span class="dash__w-text">{{ $orderdata->count() }}</span>

                                            <span class="dash__w-name">Orders Placed</span></div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Cancel Orders</span></div>
                                    </li>
                                    <li>
                                        <div class="dash__w-wrap">

                                            <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                            <span class="dash__w-text">0</span>

                                            <span class="dash__w-name">Wishlist</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Dashboard Features ======-->
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                            <div class="dash__pad-2">
                                <div class="dash__address-header">
                                    <h1 class="dash__h1">Address Book</h1>
                                    <div>

                                        <span class="dash__link dash__link--black u-s-m-r-8">

                                            <a href="dash-address-make-default.html">Make default shipping address</a></span>

                                        <span class="dash__link dash__link--black">

                                            <a href="dash-address-make-default.html">Make default shipping address</a></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius u-s-m-b-30">
                            <div class="dash__table-2-wrap gl-scroll">
                                <table class="dash__table-2">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Province</th>
                                            <th>Country</th>
                                            <th>Ph-number</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($shippingdata as $item)
                                        <tr>
                                            <td>{{ $item['user_name'] }}</td>
                                            <td>{{ $item['province'] }}</td>
                                            <td>{{ $item['country'] }}</td>
                                            <td>{{ $item['phnumber'] }}</td>
                                            <td>{{ $item['payment_method'] }}</td>
                                            <td>
                                                <div class="gl-text">Default Shipping Address</div>
                                                <div class="gl-text">Default Billing Address</div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->
</div>
@endsection