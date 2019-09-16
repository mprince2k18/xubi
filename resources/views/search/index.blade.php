@extends('xubi.app')


@section('title')
Products
@endsection


@section('content')

      <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Service Category Name</th>
            </tr>
            @if(count($company_services) > 0)
                @foreach($company_services as $company_service)
                <tr>
                    <td>{{ $company_service->id }}</td>
                    <td>{{ $company_service->service_name }}</td>
                    <td>{{ $company_service->relationBetweenCategory->service_category_name }}</td>
                </tr>
                @endforeach
            @else
            <tr>
                <td colspan="3" class="text-danger">Result not found.</td>
            </tr>
            @endif
        </table>















        <section class="xs-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="blog-lsit-group">
                            <div class="xs-blog-list">


                              @if(count($company_services) > 0)
                                  @foreach($company_services as $company_service)

                                <div class="post-list format-standard">
                                    <div class="post-media">
                                        <img src="{{ asset('uploads/service')}}/{{ $company_service->service_photo }}" alt="{{ $company_service->service_name }}" draggable="false">
                                        <div class="entry-meta">
                                            <div class="post-meta-date">
                                                <span class="day">12</span>
                                                <span class="month">August</span>
                                            </div>
                                        </div>
                                    </div><!-- .post-media END -->
                                    <div class="post-body">

                                        <!-- <div class="post-meta-top">
                                            <div class="entry-meta">
                                                <span class="post-cat">
                                                    <a href="#"><i class="icon icon-folder"></i> Business</a>
                                                </span>
                                                <span class="post-meta-comment">
                                                    <a href="#"><i class="icon icon-chat-1"></i> 20 Comments</a>
                                                </span>
                                                <span class="post-meta-fav">
                                                    <a href="#"><i class="icon icon-heart"></i> 205 Favorites</a>
                                                </span>
                                            </div>
                                        </div> -->

                                        <div class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="{{ url('') }}/{{ $company_service->slug_name }}">{{ $company_service->service_name }}</a>
                                            </h2><!-- .entry-title END -->
                                            <div class="entry-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                                            </div><!-- .entry-content END -->
                                            <div class="post-footer">
                                                <a href="#" class="simple-btn"><i class="icon icon-right-arrow2"></i></a>
                                            </div><!-- .post-footer END -->
                                        </div><!-- .entry-header END -->
                                    </div><!-- .post-body END -->
                                </div><!-- .post-list .format-standard END -->


                                @endforeach
                            @else
                            no result
                            @endif


                            </div>
                        </div>

                    </div>

                </div><!-- .row END -->
            </div><!-- .container END -->
        </section>



        @endsection
