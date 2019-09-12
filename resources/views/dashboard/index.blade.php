@extends('dashboard.app')

@section('title')
Dashboard
@endsection


@section('content')

  						<div class="row row-cards">
  							<div class="col-sm-12">
  								<div class="card ">
  									<div class="card-header">
  										<h3 class="card-title">Company Growth Yearly</h3>
  									</div>
  									<div class="card-body">
  										<canvas id="lineChart1"></canvas>
  									</div>
  								</div>
  							</div>
  						</div>
                          <div class="row row-deck">
  							<div class="col-xl-4 col-lg-4 col-md-6">
  								<div class="card m-b-20 ">
  									<img class="card-img-top img-fluid br-tl-7 br-tr-7" src="assets/images/photos/3.jpg" alt="Card image cap">
  									<div class="card-header">
  										<h3 class="card-title mt-0">Today Project</h3>
  									</div>
  									<div class="card-body mb-0">
  										<p class="card-text mt-0 mb-0">Facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. assumenda est, omnis dolor repellendus.</p>
  									</div>
  								</div>
  							</div>
  							<div class="col-lg-8 col-md-6 col-sm-12">
  								<div class="card">
  									<div class="card-header"><h2 class="card-title">Users</h2></div>
  									<div >
  										<div class="table-responsive ">
  											<table class="table card-table  table-hover table-vcenter text-nowrap">
  												<thead>
  													<tr>
  														<th>Member</th>
  														<th>Email</th>
  														<th>Created</th>
  														<th>Type</th>
  													</tr>
  												</thead>
  												<tbody>
  													<tr>
  														<td>
  															<div class="d-flex align-items-center">
  																<div class="mr-3"><img class="avatar avatar-md brround " src="assets/images/faces/female/8.jpg" alt="avatar-img"></div>
  																<div >
  																	<h5 class="mb-0 mt-2 font-weight-semibold">Hanna Gover</h5>
  																	<P class="text-muted mb-0">Gover@han</P>
  																</div>
  															</div>
  														</td>
  														<td>
  															<a href="#" class="text-primary">hanna@gmail.com</a>
  														</td>
  														<td class="font-weight-semibold">14-11-2018</td>
  														<td>
  															<div class="btn-group mt-2 mb-2">
  																<button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown">
  																	Fullaccess <span class="caret"></span>
  																</button>
  																<ul class="dropdown-menu" role="menu">
  																	<li><a href="#">Full access</a></li>
  																	<li><a href="#">Limited</a></li>
  																	<li><a href="#">Denied</a></li>
  																	<li><a href="#">More</a></li>
  																</ul>
  															</div>
  														</td>
  													</tr>
  													<tr>
  														<td>
  															<div class="d-flex align-items-center">
  																<div class="mr-3"><img class="avatar avatar-md brround " src="assets/images/faces/male/6.jpg" alt="avatar-img"></div>
  																<div >
  																	<h5 class="mb-0 mt-2 font-weight-semibold">Daniel</h5>
  																	<P class="text-muted mb-0">kristeengoo</P>
  																</div>
  															</div>
  														</td>
  														<td>
  															<a href="#" class="text-primary">daniel@gmail.com</a>
  														</td>
  														<td class="font-weight-semibold">21-10-2018</td>
  														<td>
  															<div class="btn-group mt-2 mb-2">
  																<button type="button" class="btn btn-secondary  dropdown-toggle" data-toggle="dropdown">
  																	Limited<span class="caret"></span>
  																</button>
  																<ul class="dropdown-menu" role="menu">
  																	<li><a href="#">Full access</a></li>
  																	<li><a href="#">Limited</a></li>
  																	<li><a href="#">Denied</a></li>
  																	<li><a href="#">More</a></li>
  																</ul>
  															</div>
  														</td>
  													</tr>
  													<tr>
  														<td>
  															<div class="d-flex align-items-center">
  																<div class="mr-3"><img class="avatar avatar-md brround " src="assets/images/faces/female/4.jpg" alt="avatar-img"></div>
  																<div >
  																	<h5 class="mb-0 mt-2 font-weight-semibold">Petrovic</h5>
  																	<P class="text-muted mb-0">petrovicqw</P>
  																</div>
  															</div>
  														</td>
  														<td>
  															<a href="#" class="text-primary">janpetrovic@gmail.com</a>
  														</td>
  														<td class="font-weight-semibold">02-10-2018</td>
  														<td>
  															<div class="btn-group mt-2 mb-2">
  																<button type="button" class="btn btn-success  dropdown-toggle" data-toggle="dropdown">
  																	Full access <span class="caret"></span>
  																</button>
  																<ul class="dropdown-menu" role="menu">
  																	<li><a href="#">Full access</a></li>
  																	<li><a href="#">Limited</a></li>
  																	<li><a href="#">Denied</a></li>
  																	<li><a href="#">More</a></li>
  																</ul>
  															</div>
  														</td>
  													</tr>
  													<tr>
  														<td>
  															<div class="d-flex align-items-center">
  																<div class="mr-3"><img class="avatar avatar-md brround " src="assets/images/faces/male/4.jpg" alt="avatar-img"></div>
  																<div >
  																	<h5 class="mb-0 mt-2 font-weight-semibold">Leo Amy</h5>
  																	<P class="text-muted mb-0">leo345</P>
  																</div>
  															</div>
  														</td>
  														<td>
  															<a href="#" class="text-primary">leoamy@gmail.com</a>
  														</td>
  														<td class="font-weight-semibold">28-09-2018</td>
  														<td>
  															<div class="btn-group mt-2 mb-2">
  																<button type="button" class="btn btn-info  dropdown-toggle" data-toggle="dropdown">
  																	Limited <span class="caret"></span>
  																</button>
  																<ul class="dropdown-menu" role="menu">
  																	<li><a href="#">Full access</a></li>
  																	<li><a href="#">Limited</a></li>
  																	<li><a href="#">Denied</a></li>
  																	<li><a href="#">More</a></li>
  																</ul>
  															</div>
  														</td>
  													</tr>
  												</tbody>
  											</table>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>

  						<div class="row">
  							<div class="col-12">
  								<div class="card">
  									<div class="card-header">
  										<h3 class="card-title">Latest projects</h3>
  									</div>
  									<div class="table-responsive">
  										<table class="table card-table table-vcenter text-nowrap">
  											<thead>
  												<tr>
  													<th class="w-1">No</th>
  													<th>Project Name</th>
  													<th>Project Lead</th>
  													<th>Status</th>
  													<th>Price</th>
  													<th></th>
  												</tr>
  											</thead>
  											<tbody>
  												<tr>
  													<td><span class="text-muted">001</span></td>
  													<td><a href="store.html" class="text-inherit">#MN67GNF6</a></td>
  													<td>Maria Grant</td>
  													<td>
  														<div class="clearfix">
  															<div class="float-left">
  																<strong>67%</strong>
  															</div>
  															<div class="float-right">
  																<small class="text-muted">Mar 01, 2018 - Sep 30, 2018</small>
  															</div>
  														</div>
  														<div class="progress progress-xs">
  															<div class="progress-bar bg-cyan" role="progressbar" style="width: 67%"
  															aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
  														</div>
  													</td>

  													<td>$26,908</td>
  													<td class="text-right">
  														<a href="javascript:void(0)" class="btn btn-primary  btn-sm"><i class="fa fa-pencil"></i> Edit</a>
  														<a href="javascript:void(0)" class="btn btn-success btn-sm"><i class="fa fa-link"></i> Add</a>
  														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
  													</td>
  												</tr>
  												<tr>
  													<td><span class="text-muted">002</span></td>
  													<td><a href="store.html" class="text-inherit">#4FGB65GN</a></td>
  													<td>Stewart Bower</td>
  													<td>
  														<div class="clearfix">
  															<div class="float-left">
  																<strong>87%</strong>
  															</div>
  															<div class="float-right">
  																<small class="text-muted">Jun 01, 2018 - Sep 17, 2018</small>
  															</div>
  														</div>
  														<div class="progress progress-xs">
  															<div class="progress-bar bg-success" role="progressbar" style="width: 87%"
  															aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
  														</div>
  													</td>

  													<td>$15,987</td>
  													<td class="text-right">
  														<a href="javascript:void(0)" class="btn btn-primary  btn-sm"><i class="fa fa-pencil"></i> Edit</a>
  														<a href="javascript:void(0)" class="btn btn-success btn-sm"><i class="fa fa-link"></i> Add</a>
  														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
  													</td>
  												</tr>
  												<tr>
  													<td><span class="text-muted">003</span></td>
  													<td><a href="store.html" class="text-inherit">#RGB654NH</a></td>
  													<td>Kevin Gill</td>
  													<td>
  														<div class="clearfix">
  															<div class="float-left">
  																<strong>17%</strong>
  															</div>
  															<div class="float-right">
  																<small class="text-muted">Jun 09, 2018 - Oct 30, 2018</small>
  															</div>
  														</div>
  														<div class="progress progress-xs">
  															<div class="progress-bar bg-danger" role="progressbar" style="width: 17%"
  															aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
  														</div>
  													</td>

  													<td>$12,456</td>
  													<td class="text-right">
  														<a href="javascript:void(0)" class="btn btn-primary  btn-sm"><i class="fa fa-pencil"></i> Edit</a>
  														<a href="javascript:void(0)" class="btn btn-success btn-sm"><i class="fa fa-link"></i> Add</a>
  														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
  													</td>
  												</tr>
  													<tr>
  													<td><span class="text-muted">004</span></td>
  													<td><a href="store.html" class="text-inherit">#3HBN547R</a></td>
  													<td>Johnsie Arel</td>
  													<td>
  														<div class="clearfix">
  															<div class="float-left">
  																<strong>30%</strong>
  															</div>
  															<div class="float-right">
  																<small class="text-muted">July 13, 2018 - Nov 20, 2018</small>
  															</div>
  														</div>
  														<div class="progress progress-xs">
  															<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
  															aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  														</div>
  													</td>

  													<td>$17,376</td>
  													<td class="text-right text-white">
  														<a href="javascript:void(0)" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
  														<a href="javascript:void(0)" class="btn btn-success btn-sm"><i class="fa fa-link"></i> Add</a>
  														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
  													</td>
  												</tr>
  													<tr>
  													<td><span class="text-muted">005</span></td>
  													<td><a href="store.html" class="text-inherit">#KR346GSH</a></td>
  													<td>Wallace Aliff</td>
  													<td>
  														<div class="clearfix">
  															<div class="float-left">
  																<strong>50%</strong>
  															</div>
  															<div class="float-right">
  																<small class="text-muted">Aug 05, 2018 - Dec 21, 2018</small>
  															</div>
  														</div>
  														<div class="progress progress-xs">
  															<div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
  															aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
  														</div>
  													</td>

  													<td>$23,876</td>
  													<td class="text-right">
  														<a href="javascript:void(0)" class="btn btn-primary  btn-sm"><i class="fa fa-pencil"></i> Edit</a>
  														<a href="javascript:void(0)" class="btn btn-success btn-sm"><i class="fa fa-link"></i> Add</a>
  														<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</a>
  													</td>
  												</tr>
  											</tbody>
  										</table>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
@endsection
