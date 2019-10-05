@extends('dashboard.app')

@section('title')
  Add Service Page
@endsection



@section('content')


<div class="container">
          <div class="row row-deck">
            <div class="col-lg-12">
              <form action="{{ route('create_service_page') }}" method="post" class="card" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h3 class="card-title">Add Service Page</h3>
                </div>
                <div class="card-body">

                  <!-- // title -->
                  <h2 class="text-center">Title</h2>

                  <div class="form-group">
                    <label class="form-label">Service Title</label>
                    <input type="text" class="form-control" placeholder="Service Title" name="title">
                  </div>

                  <div class="form-group">
                    <label class="form-label">Service Sub Title</label>
                    <input type="text" class="form-control" placeholder="Service Sub Title" name="sub_title">
                  </div>

                  <div class="form-group">
                    <label class="form-label">Title Watermark Single</label>
                    <input type="text" class="form-control" max-maxlength="1" placeholder="Max Length 1 Letter" name="title_watermark_single">
                  </div>

                  <!-- // service_category -->
                  <h3 class="text-center">Service Category</h3>

                  <div class="form-group">
                    <label class="form-label">Service Category</label>
                    <select class="form-control" name="service_category_id">
                      @foreach ($all_service_categories as $all_service_category)
                        <option value="{{ $all_service_category->id }}">{{ $all_service_category->service_category_name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- // title -->

                  <div class="form-group">
                    <label class="form-label">title_banner</label>
                    <input type="file" class="form-control" name="title_banner">
                  </div>


                  <!-- about_service -->

                  <h3 class="text-center">About Service</h3>

                  <div class="form-group">
                    <label class="form-label">about_service_title</label>
                    <input type="text" class="form-control" placeholder="about_service_title" name="about_service_title">
                  </div>


                  <div class="form-group">
                    <label class="form-label">details_about_service</label>
                    <textarea type="text" class="form-control" placeholder="details_about_service" name="details_about_service"></textarea>
                  </div>


                  <!-- service_info_1 -->

                  <h3 class="text-center">Service Info</h3>


                  <div class="form-group">
                    <label class="form-label">service_info_banner</label>
                    <input type="file" class="form-control" placeholder="service_info_banner" name="service_info_banner">
                  </div>

                  <div class="form-group">
                    <label class="form-label">service_info_details</label>
                    <textarea type="text" class="form-control" placeholder="service_info_details" name="service_info_details"></textarea>
                  </div>

                  <h4 class="text-center">Service Info Items</h4>

                  <div class="form-group">
                    <label class="form-label">service_info_items_1</label>
                    <input type="text" class="form-control" placeholder="service_info_items_1" name="service_info_items_1">
                  </div>

                  <div class="form-group">
                    <label class="form-label">service_info_items_2</label>
                    <input type="text" class="form-control" placeholder="service_info_items_2" name="service_info_items_2">
                  </div>

                  <div class="form-group">
                    <label class="form-label">service_info_items_3</label>
                    <input type="text" class="form-control" placeholder="service_info_items_3" name="service_info_items_3">
                  </div>

                  <!-- service_info_1 end-->

                  <!-- service_process_1 -->

                  <h2 class="text-center">Service Process</h2>


                  <h4 class="text-center">Service Process 01</h4>

                  <div class="form-group">
                    <label class="form-label">service_process_1</label>
                    <input type="text" class="form-control" placeholder="service_process_1" name="service_process_1">
                  </div>

                  <div class="form-group">
                    <label class="form-label">service_process_details_1</label>
                    <textarea type="text" class="form-control" placeholder="service_process_details_1" name="service_process_details_1"></textarea>
                  </div>

                  <div class="form-group">
                    <label class="form-label">service_process_banner_1</label>
                    <input type="file" class="form-control" placeholder="service_process_banner_1" name="service_process_banner_1">
                  </div>

                  <!-- service_process_1 end-->


                                    <!-- service_process_2 -->

                                    <h4 class="text-center">Service Process 02</h4>

                                    <div class="form-group">
                                      <label class="form-label">service_process_2</label>
                                      <input type="text" class="form-control" placeholder="service_process_2" name="service_process_2">
                                    </div>

                                    <div class="form-group">
                                      <label class="form-label">service_process_details_2</label>
                                      <textarea type="text" class="form-control" placeholder="service_process_details_2" name="service_process_details_2"></textarea>
                                    </div>

                                    <div class="form-group">
                                      <label class="form-label">service_process_banner_2</label>
                                      <input type="file" class="form-control" placeholder="service_process_banner_2" name="service_process_banner_2">
                                    </div>

                                    <!-- service_process_2 end-->


                                                      <!-- service_process_3 -->

                                                      <h4 class="text-center">Service Process 03</h4>

                                                      <div class="form-group">
                                                        <label class="form-label">service_process_3</label>
                                                        <input type="text" class="form-control" placeholder="service_process_3" name="service_process_3">
                                                      </div>

                                                      <div class="form-group">
                                                        <label class="form-label">service_process_details_3</label>
                                                        <textarea type="text" class="form-control" placeholder="service_process_details_3" name="service_process_details_3"></textarea>
                                                      </div>

                                                      <div class="form-group">
                                                        <label class="form-label">service_process_banner_3</label>
                                                        <input type="file" class="form-control" placeholder="service_process_banner_3" name="service_process_banner_3">
                                                      </div>

                                                      <!-- service_process_3 end-->


                                                                        <!-- service_process_4 -->

                                                                        <h4 class="text-center">Service Process 04</h4>

                                                                        <div class="form-group">
                                                                          <label class="form-label">service_process_4</label>
                                                                          <input type="text" class="form-control" placeholder="service_process_4" name="service_process_4">
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label class="form-label">service_process_details_4</label>
                                                                          <textarea type="text" class="form-control" placeholder="service_process_details_4" name="service_process_details_4"></textarea>
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label class="form-label">service_process_banner_4</label>
                                                                          <input type="file" class="form-control" placeholder="service_process_banner_4" name="service_process_banner_4">
                                                                        </div>

                                                                        <!-- service_process_4 end-->


                                                                                          <!-- service_process_5 -->

                                                                                          <h4 class="text-center">Service Process 05</h4>

                                                                                          <div class="form-group">
                                                                                            <label class="form-label">service_process_5</label>
                                                                                            <input type="text" class="form-control" placeholder="service_process_5" name="service_process_5">
                                                                                          </div>

                                                                                          <div class="form-group">
                                                                                            <label class="form-label">service_process_details_5</label>
                                                                                            <textarea type="text" class="form-control" placeholder="service_process_details_5" name="service_process_details_5"></textarea>
                                                                                          </div>

                                                                                          <div class="form-group">
                                                                                            <label class="form-label">service_process_banner_5</label>
                                                                                            <input type="file" class="form-control" placeholder="service_process_banner_5" name="service_process_banner_5">
                                                                                          </div>

                                                                                          <!-- service_process_5 end-->





                </div>
                <div class="card-footer text-right">
                  <div class="d-flex">
                    <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-auto">Send data</button>
                  </div>
                </div>
              </form>
            </div>
            </div>
            </div>


@endsection
