@extends('master_layout')
@section('content')

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="text-dark">Store new month bills</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
                    <form role="form" class="needs-validation" method="post" action="storemyinfo" enctype="multipart/form-data">
                    @csrf
                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Monthly bill Details</h2>
                        <div class="row">

                        <div class="form-group col-md-4">
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



                        <div class="form-group col-md-4">
                            <label>Year <span class="text-color-danger">*</span></label>
                            <input type="number"  min="1900" max="2099" step="1" value="2021" class="form-control h-auto py-2" name="billing_year" required />
                        </div>
                        <div class="form-group col-md-4">
                            <label>Electricity bill 1</label>
                            <input type="file" class="form-control h-auto py-2" name="electricity_bill1" />
                        </div>
                    </div>

                                
                                <div class="form-row">
									<div class="form-group col-md-4">
										<label>Electricity bill 2</label>
										<input type="file" class="form-control h-auto py-2" name="electricity_bill2" />
									</div>
                                    <div class="form-group col-md-4">
										<label>Electricity bill 3</label>
										<input type="file" class="form-control h-auto py-2" name="electricity_bill3" />
									</div>
                                    <div class="form-group col-md-4">
										<label>Electricity bill 4</label>
										<input type="file" class="form-control h-auto py-2" name="electricity_bill4" />
									</div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
										<label>Electricity bill 5</label>
										<input type="file" class="form-control h-auto py-2" name="electricity_bill5" />
									</div>
                                    <div class="form-group col-md-4">
										<label>Telephone bill</label>
										<input type="file" class="form-control h-auto py-2" name="telephone_bill" />
									</div>
                                    <div class="form-group col-md-4">
										<label>Gass bill</label>
										<input type="file" class="form-control h-auto py-2" name="gass_bill" />
									</div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
										<label>Water bill </label>
										<input type="file" class="form-control h-auto py-2" name="water_bill" />
									</div>
                                    <div class="form-group col-md-4">
										<label>Building Tax </label>
										<input type="file" class="form-control h-auto py-2" name="building_tax" />
									</div>
                                    <div class="form-group col-md-4">
										<label>Land Tax</label>
										<input type="file" class="form-control h-auto py-2" name="land_tax" />
									</div>
                                </div>



                                <br>
                                <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Store Documents <i class="fas fa-arrow-right ml-2"></i></button>
							</div>
						</div>
                    </form>
                </div>

@endsection
