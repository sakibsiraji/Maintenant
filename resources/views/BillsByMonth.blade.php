@extends('master_layout')
@section('content')

<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-dark">Bills By Month</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">

    <div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
        @foreach ($bills as $bill)
            <div class="col-md-6 col-lg-3 p-3 isotope-item">
                <div class="listing-item">
                    <a href="/bill_view/{{$bill->billing_year}}/{{$bill->billing_month}}" >
                        <div class="thumb-info thumb-info-lighten border">


                            <div class="custom-thumb-info-title b-normal p-4">

                                <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                    <li>

                                        <span class="accomodation-value custom-color-1">
                                            {{$bill->billing_month}}
                                        </span>
                                    </li>




                                </ul>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        @endforeach
    </div>
</div>

@endsection
