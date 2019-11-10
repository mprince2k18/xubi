@extends('dashboard.app')

@section('title')
  All Contacts
@endsection



@section('content')

<div class="container">

						<div class="row">
							<div class="col-md-12 col-lg-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox">
										<div class="mt-4 mb-4 ml-4 mr-4 text-center">
											<a href="email.html" class="btn btn-secondary btn-lg btn-block">Compose</a>
										</div>
										<a href="{{ route('contact_index') }}" class="list-group-item list-group-item-action d-flex align-items-center active">
											<span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-success">
                        {{ $all_contacts->where('status',2)->count() }}
                      </span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-alert-circle"></i></span>Unread <span class="ml-auto badge badge-danger">{{ $all_contacts->where('status',2)->count() }}</span>
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-star"></i></span>Starred
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-file"></i></span>Drafts
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-tag"></i></span>Tags
										</a>
										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icon mr-3"><i class="fe fe-trash-2"></i></span>Trash
										</a>
									</div>
								</div>




							</div>
							<div class="col-md-12 col-lg-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
											<div class="mail-option">
												<div class="chk-all">
													<input type="checkbox" class="mail-checkbox mail-group-checkbox">
													<div class="btn-group">
														<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
															All
															<i class="fa fa-angle-down "></i>
														</a>
														<ul class="dropdown-menu">
															<li><a href="#"> None</a></li>
															<li><a href="#"> Read</a></li>
															<li><a href="#"> Unread</a></li>
														</ul>
													</div>
												</div>

												<div class="btn-group hidden-phone">
													<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
														More
														<i class="fa fa-angle-down "></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
														<li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
														<li class="divider"></li>
														<li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
													</ul>
												</div>
												<ul class="unstyled inbox-pagination">
													<li><span>{{ $all_contacts->firstItem() }}-{{ $all_contacts->lastItem() }} of {{ $all_contacts->total() }}</span></li>

                          <!-- record data through date wise -->
                          <li><span> | Today's Message {{ $contacts->count() }}</span></li>
                          <!-- record data through date wise end -->

													<li>
                            <!-- previous next -->
                            <a class="np-btn" style="{{ $all_contacts->firstItem() === 1 ? 'display:none' : ' ' }}" href="{{ $all_contacts->previousPageUrl() }}"><i class="fa fa-angle-left pagination-left"></i></a>
														<a class="np-btn" style="{{ $all_contacts->firstItem() === $all_contacts->lastItem() ? 'display:none' : ' ' }}" href="{{ $all_contacts->nextPageUrl() }}"><i class="fa fa-angle-right pagination-right"></i></a>
                            <!-- previous next end-->

                        	</li>

												</ul>
											</div>
											<div class="table-responsive">
												<table class="table table-inbox table-hover text-nowrap">
													<tbody>

                          @forelse($all_contacts as $all_contact)
														<tr class="{{ $all_contact->status === 2 ? 'unread' : ' ' }}">

															<td class="inbox-small-cells">
																<input type="checkbox" class="mail-checkbox">
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
															<td class="view-message  dont-show">{{ $all_contact->name }}</td>
															<td class="view-message ">{{ Str::limit($all_contact->message,10) }}</td>
															<!-- <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td> -->
															<td class="view-message  text-right">{{ $all_contact->created_at->diffForHumans() }}</td>
															<td class="view-message  text-right">
                                <a href="{{ url('/admin/open_message') }}/{{ $all_contact->id }}" class="btn-sm btn-primary">
                                  open
                                </a>
                              </td>
														</tr>
                            @empty
                            <tr class="unread">
                              <td class="view-message ">No Message To Show</td>
                            </tr>
                            @endforelse

													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<div >
									<ul class="pagination float-right mb-3">
										{{ $all_contacts->links() }}
									</ul>
							    </div>
							</div>
						</div>
					</div>


@endsection
