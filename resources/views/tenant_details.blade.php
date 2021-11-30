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
								<h1 class="text-dark">Tenant Details</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

                    <form >



								<div class="form-row">
									<div class="form-group col-md-4">
										<label>Tenant</label>


                                            <input class="form-control h-auto py-2" value="{{$tenant->name}}" readonly>




									</div>
                                    <div class="form-group col-md-4">
										<label>Flat Name </label>
                                        @foreach($flats as $flat)
                                        @if($tenant->flat_id==$flat->id)
                                        <input class="form-control h-auto py-2" value="{{$flat->flat_name}}" readonly>
                                        @endif
                                        @endforeach
									</div>


                                    <div class="form-group col-md-3">
                                        <label>Email </label>
                                        <input class="form-control h-auto py-2" value="{{$tenant->billing_month}}" readonly>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label>Password</label>
                                        <input class="form-control h-auto py-2" value="{{$tenant->billing_year}}" readonly>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nid</label>
                                        <input class="form-control h-auto py-2" value="{{$bill->rent}}" readonly>

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Phone</label>
                                        <input class="form-control h-auto py-2" value="{{$tenant->service_charge}}" readonly>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label>Fathers Name </label>
                                        <input type="number" class="form-control h-auto py-2"  value="{{$tenant->electricity_bill}}" readonly />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Mothers Name </label>
                                        <input type="number" class="form-control h-auto py-2"  value="{{$tenant->water_bill}}" readonly />
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Parent's Nid </label>
                                        <input type="number" class="form-control h-auto py-2"  value="{{$tenant->gas_bill}}" readonly />
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-md-4">
										<label></label>
										<input type="number" class="form-control h-auto py-2" value="{{$tenant->telephone_bill}}" readonly  />
									</div>
                                    <div class="form-group col-md-4">
										<label>Garage Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$tenant->garage_bill}}" readonly  />
									</div>
                                    <div class="form-group col-md-4">
										<label>Total Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$tenant->total_bill}}" readonly  />
									</div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-4">
										<label>Total Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$tenant->total_bill}}" readonly  />
									</div>
                                    <div class="form-group col-md-4">
										<label>Total Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$tenant->total_bill}}" readonly  />
									</div>
                                    <div class="form-group col-md-4">
										<label>Total Bill</label>
										<input type="number" class="form-control h-auto py-2" value="{{$tenant->total_bill}}" readonly  />
									</div>

                                </div>


                                <br>

                                <a  href="#" class="building-link btn btn-success"
                                data-toggle="modal"
                                data-target="#building-modal"
                                data-id="{{$bill->id}}"
                                data-flat_id="{{$bill->flat_id}}"
                                data-tenant_id="{{$bill->tenant_id}}"
                                data-billing_month="{{$bill->billing_month}}"
                                data-billing_year="{{$bill->billing_year}}"


                                data-electricity_bill="{{$bill->electricity_bill}}"

                                data-telephone_bill="{{$bill->telephone_bill}}"

                                data-comment="{{$bill->comment}}" >Edit</a>
                                <a href="/print/{{$bill->id}}" class="btn btn-dark ">Print</a>

                                <a onclick="alert('are you sure? You want to delete.')" href="/bill/delete/{{$bill->id}}" class="btn btn-danger">Delete</a>


                    </form>

@endsection

@section('script')
<script>
    $(document).ready(function(){

        $('.building-link').click(function(){
            $('#id').val($(this).data('id'));
            $('#flat_id').val($(this).data('flat_id'));
            $('#tenant_id').val($(this).data('tenant_id'));
            $('#billing_month').val($(this).data('billing_month'));
            $('#billing_year').val($(this).data('billing_year'));

            $('#electricity_bill').val($(this).data('electricity_bill'));

            $('#telephone_bill').val($(this).data('telephone_bill'));

            $('#comment').val($(this).data('comment'));

        });
    });
</script>

@endsection
