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
								<h1 class="text-dark">Create A New Bill</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
                    <form role="form" class="needs-validation" method="post" action="/addbill" enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Billing Details</h2>
								<div class="form-row">

									<div class="form-group col-md-3">
										<label>Flat Name <span class="text-color-danger">*</span></label><br>
										<select style="width:100px"  name="flat_id" >
                                            @foreach ($flats as $flat)

                                                <option  value="{{$flat->id}}">{{$flat->flat_name}}</option>
                                            @endforeach
                                        </select>
									</div>

                                    <div class="form-group col-md-3">
                                        <label>Billing Month <span class="text-color-danger">*</span></label>
                                        <div class="custom-select-1">
                                            <select class="form-control h-auto py-2" name="billing_month" required>
                                                <option value="" selected></option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group col-md-3">
                                        <label>Year <span class="text-color-danger">*</span></label>
                                        <input type="number"  min="1900" max="2099" step="1" value="2021" class="form-control h-auto py-2" name="billing_year" required />
                                    </div>
                                </div>






                                <div class="form-row">

                                    <div class="form-group col-md-4">
                                        <label>Electricity Bill </label>
										<input type="number" class="form-control h-auto py-2" name="electricity_bill" id="electricity_bill"  />
									</div>

									<div class="form-group col-md-4">
										<label>Bill Copy </label>
										<input type="file" class="form-control h-auto py-2" name="electricity_bill_copy"  />
									</div>
                                    <div class="form-group col-md-4">
										<label>Telephone Bill</label>
										<input type="number" class="form-control h-auto py-2" name="telephone_bill" id="telephone_bill"  />
									</div>


								</div>



                                <div class="form-row">

                                    <div class="form-group col-md-8">
                                        <label>Comment:</label>
                                        <textarea name="comment" cols="100" rows="5"></textarea>
                                       </div>
                                </div>


                                <br>
                                <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Add Bill <i class="fas fa-arrow-right ml-2"></i></button>
							</div>
						</div>
                    </form>
@endsection
