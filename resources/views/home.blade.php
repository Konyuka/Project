@extends('layouts.octopus')

@section('content')

<section class="body">

			@include('partials.frame')

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Dashboard</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-6 col-lg-12 col-xl-6">
							<section class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-lg-8">
											<div class="chart-data-selector" id="salesSelectorWrapper">
												<h2>

													<strong>
														<select class="form-control" id="salesSelector">
															<option value="Companies" selected> Statistical view of Companies you have handled with time: </option>
															<option value="Projects" >Statistical view of Projects you have handled with time: </option>
															<option value="Tasks" >Statistical view of Task you have handled with time: </option>
														</select>
													</strong>
												</h2>

												<div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
													<!-- Flot: Sales JSOFT Admin -->
													<div class="chart chart-sm" data-sales-rel="Companies" id="flotDashSales1" class="chart-active"></div>
													<script>

														var flotDashSales1Data = [{
														    data: [
														        ["Jan", 10],
														        ["Feb", 25],
														        ["Mar", 15]

														    ],
														    color: "#0088cc"
														}];

														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

													</script>

													<!-- Flot: Sales JSOFT Drupal -->
													<div class="chart chart-sm" data-sales-rel="Projects" id="flotDashSales2" class="chart-hidden"></div>
													<script>

														var flotDashSales2Data = [{
														    data: [
														        ["Jan", 20],
														        ["Feb", 40],
														        ["Mar", 29]

														    ],
														    color: "#2baab1"
														}];

														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

													</script>

													<!-- Flot: Sales JSOFT Wordpress -->
													<div class="chart chart-sm" data-sales-rel="Tasks" id="flotDashSales3" class="chart-hidden"></div>
													<script>

														var flotDashSales3Data = [{
														    data: [
														        ["Jan", 40],
														        ["Feb", 70],
														        ["Mar", 25]

														    ],
														    color: "#734ba9"
														}];

														// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

													</script>
												</div>

											</div>
										</div>
										<div class="col-lg-4 text-center">
											<h2 class="panel-title mt-md">Your Overall Rating</h2>
											<div class="liquid-meter-wrapper liquid-meter-sm mt-lg">
												<div class="liquid-meter">
													<meter min="0" max="100" value="0" id="meterSales"></meter>
												</div>
												<p>Click below to refresh your rating</p>
												<div class="liquid-meter-selector" id="meterSalesSel">
													<a href="#" data-val="87" class="active">Delivery</a>
													<a href="#" data-val="98">Accuracy</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>

						<div class="col-md-6 col-lg-12 col-xl-6">

							<div class="row">

								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-check-square"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Number of Companies Handled</h4>
														<div class="info">
															<strong class="amount">50</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-check-square"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Number of Projects Completed</h4>
														<div class="info">
															<strong class="amount">83</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

								<div class="col-md-12 col-lg-12 col-xl-12">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-check-circle"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Number of Tasks Completed</h4>
														<div class="info">
															<strong class="amount">120</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>


							</div>

						</div>
					</div>



					<div class="row">
						<div class="col-xl-6 col-lg-12">
							<section class="panel panel-transparent">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Lets get to work</h2>
								</header>
								<div class="panel-body">
									<section class="panel panel-group">
										<header class="panel-heading bg-primary">

											<div class="widget-profile-info">
												<div class="profile-picture">
													<img src="{{asset('octopus/assets/images/!logged-user.jpg')}}">
												</div>
												<div class="profile-info">
													<h4 class="name text-semibold">{{auth::user()->name}}</h4>
													<h5 class="role">Administrator</h5>
													<div class="profile-footer">
														<a href="#">(edit profile)</a>
													</div>
												</div>
											</div>

										</header>
										<div id="accordion">
											<div class="panel panel-accordion panel-accordion-first">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
															<i class="fa fa-check"></i> Tasks
														</a>
													</h4>
												</div>
												<div id="collapse1One" class="accordion-body collapse in">
													<div class="panel-body">
														<ul class="widget-todo-list">

															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" checked="" id="todoListItem1" class="todo-check">
																	<label class="todo-label" for="todoListItem1"><span>Design UI/UX for the android app</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>

															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem2" class="todo-check">
																	<label class="todo-label" for="todoListItem2"><span>Submit the wireframes for the Shantec website</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>

															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem3" class="todo-check">
																	<label class="todo-label" for="todoListItem3"><span>Debug the back end problem for the management system</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>

															<li>
																<div class="checkbox-custom checkbox-default">
																	<input type="checkbox" id="todoListItem5" class="todo-check">
																	<label class="todo-label" for="todoListItem5"><span>Develop the sign up page for the android app</span></label>
																</div>
																<div class="todo-actions">
																	<a class="todo-remove" href="#">
																		<i class="fa fa-times"></i>
																	</a>
																</div>
															</li>

														</ul>

														<hr class="solid mt-sm mb-lg">

														<form method="get" class="form-horizontal form-bordered">
															<div class="form-group">
																<div class="col-sm-12">
																	<div class="input-group mb-md">
																		<input type="text" class="form-control">
																		<div class="input-group-btn">
																			<button type="button" class="btn btn-primary" tabindex="-1">Add</button>
																		</div>
																	</div>
																</div>
															</div>
														</form>

													</div>
												</div>
											</div>

											<hr>


										</div>
									</section>

								</div>
							</section>
						</div>

						<div class="col-xl-6 col-lg-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Recent Activity</h2>
								</header>
								<div class="panel-body">
									<div class="timeline timeline-simple mt-xlg mb-md">
										<div class="tm-body">

											<div class="tm-title">
												<h3 class="h5 text-uppercase">This week</h3>
											</div>

											<ol class="tm-items">

												<li>
													<div class="tm-box">
														<p class="text-muted mb-none">Yesterday.</p>
														<p>
															Never logged in yesterday
														</p>
													</div>
												</li>

												<li>
													<div class="tm-box">
														<p class="text-muted mb-none">7 hours ago.</p>
														<p>
															Worked on UI/UX android task and submitted the following work proof
														</p>
														<div class="thumbnail-gallery">
															<a class="img-thumbnail lightbox" href="{{asset('octopus/assets/images/projects/project-4.jpg')}}" data-plugin-options='{ "type":"image" }'>
																<img class="img-responsive" width="215" src="{{asset('octopus/assets/images/projects/project-4.jpg')}}">
																<span class="zoom">
																	<i class="fa fa-search"></i>
																</span>
															</a>
														</div>
													</div>
												</li>

											</ol>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>

					<div class="row">

						<div class="col-lg-12 col-md-12">
							<section class="panel">
								<header class="panel-heading panel-heading-transparent">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Tasks Stats</h2>
								</header>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped mb-none">

											<thead>
												<tr>
													<th>#</th>
													<th>Project</th>
													<th>Status</th>
													<th>Progress</th>
												</tr>
											</thead>

											<tbody>

												<tr>
													<td>1</td>
													<td>UI/UX design for the android app</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																100%
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td>2</td>
													<td>Debbuging the backend for the Shantec website</td>
													<td><span class="label label-success">Success</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
																100%
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td>3</td>
													<td>Developing the back end for the android app</td>
													<td><span class="label label-warning">Almost due</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																60%
															</div>
														</div>
													</td>
												</tr>

												<tr>
													<td>4</td>
													<td>Project Python </td>
													<td><span class="label label-danger">Deadline passed</span></td>
													<td>
														<div class="progress progress-sm progress-half-rounded m-none mt-xs light">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
																0%
															</div>
														</div>
													</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div>
							</section>
						</div>
					</div>
					<!-- end: page -->
				</section>
			</div>

			@include('partials.aside')

</section>

@endsection
