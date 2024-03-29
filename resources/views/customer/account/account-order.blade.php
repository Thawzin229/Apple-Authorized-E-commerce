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

                                        <a href="{{ route('customer#accountaddresspage') }}">Address Book</a></li>
    
                                    <li>

                                        <a class="dash-active" href="{{ route('customer#accountorderpage') }}">My Orders</a></li>
               
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
                                <h1 class="dash__h1 u-s-m-b-14">My Orders</h1>

                                <span class="dash__text u-s-m-b-30">Here you can see all products that have been delivered.</span>
                                <div class="m-order__list">
                                  @foreach($orderlistdata as $item)
                                    <div class="m-order__get">
                                        <div class="manage-o__header u-s-m-b-30">
                                            <div class="dash-l-r">
                                                <div>
                                                    <div class="manage-o__text-2 u-c-secondary">{{ $item['order_code'] }}</div>
                                                    <div class="manage-o__text u-c-silver">Placed on {{ $item['created_at']->format("d-M-Y") }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="manage-o__description">
                                            <div class="description__container">
                                                <div class="description__img-wrap">

                                                    <img style="width:60px;height:90px" class="" src="{{ asset('storage/'.$item['product_image']) }}" alt=""></div>
                                                <div class="description-title">{{ $item['product_name'] }}</div>
                                            </div>
                                            <div class="description__info-wrap">
                                                <div>
                                                  @if($item['status'] === 1)
                                                    <span class="manage-o__badge badge--processing">Pending</span></div>
                                                    @endif
                                                    @if($item['status'] === 2)
                                                    <span class="manage-o__badge badge--shipped">Processing</span></div>
                                                    @endif
                                                    @if($item['status'] === 3)
                                                    <span class="manage-o__badge badge--delivered">Delivered</span></div>
                                                    @endif
                                                <div>

                                                    <span class="manage-o__text-2 u-c-silver">Quantity:

                                                        <span class="manage-o__text-2 u-c-secondary">{{ $item['quantity'] }}</span></span></div>
                                                <div>

                                                    <span class="manage-o__text-2 u-c-silver">Total:

                                                        <span class="manage-o__text-2 u-c-secondary">{{ $item['totalprice'] }}</span></span> Kyats</div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                  </div>
                                </div>
                                <div class="p-3">{{ $orderlistdata->links() }}</div>
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