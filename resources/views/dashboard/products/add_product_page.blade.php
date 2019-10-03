@extends('dashboard.app')

@section('title')
  Add Product Page
@endsection



@section('content')


<div class="container">
          <div class="row row-deck">
            <div class="col-lg-12">
              <form action="{{ route('create') }}" method="post" class="card" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h3 class="card-title">Add Product Page</h3>
                </div>
                <div class="card-body">

                  <!-- // title -->
                  <h2 class="text-center">Title</h2>

                  <div class="form-group">
                    <label class="form-label">Product Title</label>
                    <input type="text" class="form-control" placeholder="Service Title" name="title">
                  </div>

                  <div class="form-group">
                    <label class="form-label">Product Sub Title</label>
                    <input type="text" class="form-control" placeholder="Service Sub Title" name="sub_title">
                  </div>

                  <div class="form-group">
                    <label class="form-label">Title Watermark Single</label>
                    <input type="text" class="form-control" max-maxlength="1" placeholder="Max Length 1 Letter" name="title_watermark_single">
                  </div>

                  <!-- // service_category -->
                  <h3 class="text-center">Product Category</h3>

                  <div class="form-group">
                    <label class="form-label">Product Category</label>
                    <select class="form-control" name="product_category_id">
                      @foreach ($all_product_categories as $all_product_category)
                        <option value="{{ $all_product_category->id }}">{{ $all_product_category->product_name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <!-- // title -->

                  <div class="form-group">
                    <label class="form-label">title_banner</label>
                    <input type="file" class="form-control"  placeholder="title_banner" name="title_banner">
                  </div>


                  <!-- about_service -->

                  <h3 class="text-center">About Product</h3>

                  <div class="form-group">
                    <label class="form-label">about_product_title</label>
                    <input type="text" class="form-control" placeholder="about_product_title" name="about_product_title">
                  </div>


                  <div class="form-group">
                    <label class="form-label">details_about_product</label>
                    <input type="text" class="form-control" placeholder="details_about_product" name="details_about_product">
                  </div>


                  <!-- product_process_1 -->

                  <h3 class="text-center">Product Info</h3>


                  <div class="form-group">
                    <label class="form-label">product_process_banner</label>
                    <input type="file" class="form-control" placeholder="product_process_banner" name="product_process_banner">
                  </div>

                  <div class="form-group">
                    <label class="form-label">product_process_details</label>
                    <input type="text" class="form-control" placeholder="product_process_details" name="product_process_details">
                  </div>

                  <h4 class="text-center">Product Info Items</h4>

                  <div class="form-group">
                    <label class="form-label">product_process_items_1</label>
                    <input type="text" class="form-control" placeholder="product_process_items_1" name="product_process_items_1">
                  </div>

                  <div class="form-group">
                    <label class="form-label">product_process_items_2</label>
                    <input type="text" class="form-control" placeholder="product_process_items_2" name="product_process_items_2">
                  </div>

                  <div class="form-group">
                    <label class="form-label">product_process_items_3</label>
                    <input type="text" class="form-control" placeholder="product_process_items_3" name="product_process_items_3">
                  </div>

                  <!-- product_process_1 end-->

                  <!-- product_process_1 -->

                  <h2 class="text-center">Product Process</h2>


                  <h4 class="text-center">Product Process 01</h4>

                  <div class="form-group">
                    <label class="form-label">product_process_1</label>
                    <input type="text" class="form-control" placeholder="product_process_1" name="product_process_1">
                  </div>

                  <div class="form-group">
                    <label class="form-label">product_process_details_1</label>
                    <input type="text" class="form-control" placeholder="product_process_details_1" name="product_process_details_1">
                  </div>

                  <div class="form-group">
                    <label class="form-label">product_process_banner_1</label>
                    <input type="file" class="form-control" placeholder="product_process_banner_1" name="product_process_banner_1">
                  </div>

                  <!-- product_process_1 end-->


                                    <!-- product_process_2 -->

                                    <h4 class="text-center">Product Process 02</h4>

                                    <div class="form-group">
                                      <label class="form-label">product_process_2</label>
                                      <input type="text" class="form-control" placeholder="product_process_2" name="product_process_2">
                                    </div>

                                    <div class="form-group">
                                      <label class="form-label">product_process_details_2</label>
                                      <input type="text" class="form-control" placeholder="product_process_details_2" name="product_process_details_2">
                                    </div>

                                    <div class="form-group">
                                      <label class="form-label">product_process_banner_2</label>
                                      <input type="file" class="form-control" placeholder="product_process_banner_2" name="product_process_banner_2">
                                    </div>

                                    <!-- product_process_2 end-->


                                                      <!-- product_process_3 -->

                                                      <h4 class="text-center">Product Process 03</h4>

                                                      <div class="form-group">
                                                        <label class="form-label">product_process_3</label>
                                                        <input type="text" class="form-control" placeholder="product_process_3" name="product_process_3">
                                                      </div>

                                                      <div class="form-group">
                                                        <label class="form-label">product_process_details_3</label>
                                                        <input type="text" class="form-control" placeholder="product_process_details_3" name="product_process_details_3">
                                                      </div>

                                                      <div class="form-group">
                                                        <label class="form-label">product_process_banner_3</label>
                                                        <input type="file" class="form-control" placeholder="product_process_banner_3" name="product_process_banner_3">
                                                      </div>

                                                      <!-- product_process_3 end-->


                                                                        <!-- product_process_4 -->

                                                                        <h4 class="text-center">Product Process 04</h4>

                                                                        <div class="form-group">
                                                                          <label class="form-label">product_process_4</label>
                                                                          <input type="text" class="form-control" placeholder="product_process_4" name="product_process_4">
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label class="form-label">product_process_details_4</label>
                                                                          <input type="text" class="form-control" placeholder="product_process_details_4" name="product_process_details_4">
                                                                        </div>

                                                                        <div class="form-group">
                                                                          <label class="form-label">product_process_banner_4</label>
                                                                          <input type="file" class="form-control" placeholder="product_process_banner_4" name="product_process_banner_4">
                                                                        </div>

                                                                        <!-- product_process_4 end-->


                                                                                          <!-- product_process_5 -->

                                                                                          <h4 class="text-center">Product Process 05</h4>

                                                                                          <div class="form-group">
                                                                                            <label class="form-label">product_process_5</label>
                                                                                            <input type="text" class="form-control" placeholder="product_process_5" name="product_process_5">
                                                                                          </div>

                                                                                          <div class="form-group">
                                                                                            <label class="form-label">product_process_details_5</label>
                                                                                            <input type="text" class="form-control" placeholder="product_process_details_5" name="product_process_details_5">
                                                                                          </div>

                                                                                          <div class="form-group">
                                                                                            <label class="form-label">product_process_banner_5</label>
                                                                                            <input type="file" class="form-control" placeholder="product_process_banner_5" name="product_process_banner_5">
                                                                                          </div>

                                                                                          <!-- product_process_5 end-->





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
