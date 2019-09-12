@extends('dashboard.app')

@section('title')
  {{ $single_contact_read->name }}'s' new message
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
                										<a href=" {{ route('contact_index') }} " class="list-group-item list-group-item-action d-flex align-items-center active">
                											<span class="icon mr-3"><i class="fe fe-inbox"></i></span>Inbox <span class="ml-auto badge badge-success">
                                        {{ $all_contacts->where('status',2)->count() }}
                                      </span>
                										</a>
                										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                											<span class="icon mr-3"><i class="fe fe-send"></i></span>Sent Mail
                										</a>
                										<a href="#" class="list-group-item list-group-item-action d-flex align-items-center">
                											<span class="icon mr-3"><i class="fe fe-alert-circle"></i></span>Important <span class="ml-auto badge badge-danger">3</span>
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
                                                 <div class="card-header">
                                                   <h3 class="card-title">{{ $single_contact_read->name }}'s' new message</h3>
                                                 </div>
                                                 <div class="card-body">


                                                     <div class="form-group">
                                                       <div class="row align-items-center">
                                                         <label class="col-sm-2">Subject</label>
                                                         <div class="col-sm-10">
                                                           <p>{{ $single_contact_read->subject }}</p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="form-group mb-0">
                                                       <div class="row ">
                                                         <label class="col-sm-2">Message</label>
                                                         <div class="col-sm-10">
                                                           <p>{{ $single_contact_read->message }}</p>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     <div class="row message-box-last-content">
                                                     <div class="col-sm-2"></div>
                                                       <div class="col-sm-10">
                                                         <div class="row">
                                                           <!-- <div class="col-lg-6 col-md-6 col-sm-12 mb-0 ">
                                                             <span>
                                                             <button type="button" class="btn btn-icon btn-primary mt-2"><i class="fa fa-paperclip text-white"></i></button>
                                                               <button type="button" class="btn btn-icon btn-secondary mt-2"><i class="fa fa-picture-o text-white"></i></button>
                                                               <button type="button" class="btn btn-icon btn-info mt-2"><i class="fa fa-link text-white"></i></button>
                                                               <button type="button" class="btn btn-icon btn-success mt-2"><i class="fa fa-smile-o text-white"></i></button>
                                                               <button type="button" class="btn btn-icon btn-warning mt-2"><i class="fa fa-trash-o text-white"></i></button>
                                                               <button type="button" class="btn btn-icon btn-teal mt-2"><i class="fa fa-file text-white"></i></button>
                                                             </span>
                                                           </div> -->
                                                           <div class="col-lg-6 mb-0 col-md-6 col-sm-12 text-right">
                                                             <a href="{{ URL::previous() }}" class="btn btn-secondary btn-space mt-2 mr-2">Go back</a>

                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>

                                                 </div>
                                               </div>
                							</div>
                						</div>
                					</div>

@endsection
