@extends('master_layout')
@section('content')
                @if(Session::has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('msg')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                @endif
				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">

					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="text-dark">List Of Bill</h1>
							</div>
						</div>
					</div>
				</section>
                <div class="container">
                    <div id="listingLoadMoreWrapper" class="row properties-listing sort-destination p-0" data-total-pages="2">
                        @foreach ($bills as $bill)
                            <div class="col-md-6 col-lg-3 p-3 isotope-item">
                                <div class="listing-item">
                                    <a href="/tenant_bill/{{$bill->id}}">
                                        <div class="thumb-info thumb-info-lighten border">

                                            <div class="custom-thumb-info-title b-normal p-4">

                                                <ul class="accommodations text-uppercase font-weight-bold p-0 mb-0 text-2">
                                                    <li>

                                                        <span class="accomodation-value custom-color-1">
                                                            {{$bill->id}}
                                                        </span>
                                                    </li>
                                                    @foreach ($tenants as $tenant)

                                                    @if($tenant->id==$bill->tenant_id)


                                                    <li>

                                                        <span class="accomodation-value custom-color-1">
                                                            {{$tenant->tenant_name}}
                                                        </span>
                                                    </li>
                                                    @endif
                                                    @endforeach

                                                    @foreach ($flats as $flat)
                                                    @if($flat->id==$bill->flat_id)
                                                    <li>

                                                        <span class="accomodation-value custom-color-1">
                                                            {{$flat->flat_name}}
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="accomodation-value custom-color-1">
                                                            {{$flat->location}}
                                                        </span>
                                                    </li>
                                                    @endif
                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
							</div>
							@endforeach
					</div>
@endsection
