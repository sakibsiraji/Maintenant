@extends('tenant_layout')
@section('content')

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="text-dark">Welcome {{session('tenant_name')}}</h1>
							</div>
						</div>
					</div>
				</section>
                <div class="container">
                    @foreach ($bills as $bill)



                    <form >

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Billing Month </label>
                                        <input class="form-control h-auto py-2" value="{{$bill->billing_month}}" readonly>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Year</label>
                                        <input class="form-control h-auto py-2" value="{{$bill->billing_year}}" readonly>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Rent</label>
                                        <input class="form-control h-auto py-2" value="{{$bill->rent}}" readonly>

                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Service Charge</label>
                                        <input class="form-control h-auto py-2" value="{{$bill->service_charge}}" readonly>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Electricity Bill </label>
                                        <input type="number" class="form-control h-auto py-2"  value="{{$bill->electricity_bill}}" readonly />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Water Bill </label>
                                        <input type="number" class="form-control h-auto py-2"  value="{{$bill->water_bill}}" readonly />
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Gas Bill </label>
                                        <input type="number" class="form-control h-auto py-2"  value="{{$bill->gas_bill}}" readonly />
                                    </div>
                                    <div class="form-group col-md-4">
										<label>Telephone Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$bill->telephone_bill}}" readonly  />
									</div>
                                    <div class="form-group col-md-4">
										<label>Garage Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$bill->garage_bill}}" readonly  />
									</div>

                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
										<label>Total Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$bill->total_bill}}" readonly  />
									</div>
                                   <div class="form-group col-md-4">
                                        <label>Paid/Unpaid</label>
                                        @if($bill->is_paid==1)
                                        <input  class="form-control h-auto py-2" value="Paid" readonly  />
                                        @else
                                        <input  class="form-control h-auto py-2" value="UnPaid" readonly  />
                                        @endif
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-8">
                                        <label>Comment:</label>
                                        <textarea class="form-control h-auto py-2"  readonly cols="100" rows="5" readonly>{{$bill->comment}}</textarea>
                                    </div>
                                </div>
                                <a href="/print/{{$bill->id}}" class="btn btn-info">Print</a>




                    </form>
                    @endforeach

                </div>


                 </div>



@endsection
