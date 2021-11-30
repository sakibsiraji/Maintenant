@extends('master_layout')
@section('content')

				<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
					<div class="container">
						<div class="row">
							<div class="col-md-8 order-2 order-md-1 align-self-center p-static">
								<h1 class="text-dark">Create A New Tenant</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">
                    <form role="form" class="needs-validation" method="post" action="/addtenant" enctype="multipart/form-data" accept-charset="utf-8">
                    @csrf
                        <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Tenant Details</h2>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label>Flat Name <span class="text-color-danger">*</span></label><br>
										<select style="width:100px" name="flat_id" required>
                                            @foreach ($flats as $flat)
                                                <option value="{{$flat->id}}">{{$flat->flat_name}}</option>
                                            @endforeach
                                        </select>
									</div>

									<div class="form-group col-md-4">
                                        <label>Number of Staying People <span class="text-color-danger">*</span></label>
										<input type="number" class="form-control h-auto py-2" name="staying_people" required />
                                    </div>

								</div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Starting Date <span class="text-color-danger">*</span></label>
										<input type="date" class="form-control h-auto py-2" name="starting_date" required />
                                    </div>
									<div class="form-group col-md-4">
										<label>Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="name" required />
									</div>
									<div class="form-group col-md-4">
                                        <label>Email <span class="text-color-danger">*</span></label>
										<input type="email" class="form-control h-auto py-2" name="email" required />
									</div>

								</div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Password <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="password" required />
									</div>
									<div class="form-group col-md-4">
										<label>NID <span class="text-color-danger">*</span></label>
										<input type="file" class="form-control h-auto py-2" name="nid" />
									</div>
									<div class="form-group col-md-4">
                                        <label>Phone <span class="text-color-danger">*</span></label>
										<input type="number" class="form-control h-auto py-2" name="phone" required />
									</div>
                                    <div class="form-group col-md-4"></div>
								</div>
                                <div class="form-row">
									<div class="form-group col-md-4">
										<label>Father's Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="fathers_name" required />
									</div>
									<div class="form-group col-md-4">
                                        <label>Mother's Name <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="mothers_name" required />
									</div>
                                    <div class="form-group col-md-4">
                                        <label>Father/Mother's NID</label>
										<input type="file" class="form-control h-auto py-2" name="parents_nid" />
									</div>
								</div>
                                <div class="form-row">
									<div class="form-group col-md-4">
										<label>Occupation <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="occupation" required />
									</div>
									<div class="form-group col-md-4">
                                        <label>Office Address </label>
										<input type="text" class="form-control h-auto py-2" name="job_address"  />
									</div>
                                    <div class="form-group col-md-4">
                                        <label>Office Phone Number </label>
										<input type="number" class="form-control h-auto py-2" name="office_phone"  />
									</div>
								</div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                    <label>Earning Person's Name </label>
										<input type="text" class="form-control h-auto py-2" name="earning_person_name"  />
                                    </div>

									<div class="form-group col-md-4">
										<label>Occupation </label>
										<input type="text" class="form-control h-auto py-2" name="earning_person_occupation"  />
									</div>
									<div class="form-group col-md-4">
                                        <label>Earning Person's Office Phone Number</label>
										<input type="text" class="form-control h-auto py-2" name="earning_person_office_phone"  />
									</div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label>Earning Person's Yearly Income</label>
										<input type="text" class="form-control h-auto py-2" name="earning_person_yearly_income" />
									</div>
                                    <div class="form-group col-md-4">
                                        <label>Advance<span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="advance" required />
									</div>
                                    <div class="form-group col-md-4">
                                        <label>Earning Person's Office Address <span class="text-color-danger">*</span></label>
										<input type="text" class="form-control h-auto py-2" name="earning_person_job_address"  />
									</div>
								</div>
                                <br>
                                <div class="form-row">
                                    <label>Comment:</label>
                                    <textarea  name="comment" cols="100" rows="5"></textarea>
                                </div><br>
                                <button type="submit" class="btn btn-dark btn-modern btn-block text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Add Tenant <i class="fas fa-arrow-right ml-2"></i></button>
							</div>
						</div>
                    </form>
            @endsection
