@extends('dashboard.app')

@section('title')
Add Training Page
@endsection



@section('content')

<!-- SESSION -->

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if (session('restore'))
<div class="alert alert-success">
    {{ session('restore') }}
</div>
@endif

@if (session('delete'))
<div class="alert alert-success">
    {{ session('delete') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif

<!-- SESSION END-->
<div class="container">
    <div class="row">
        <!-- Add team member -->
        <div class="col-lg-12 col-sm-12">
            <form method="post" class="card" action="{{ route('training_page_create') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Add Training Page</h3>
                </div>
                <div class="card-body">
                    <!-- Name -->
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Training Title</label>
                            <select name="title" class="form-control custom-select">
                                @foreach($trainings as $training)
                                <option value="{{ $training->id }}">{{ $training->name }}</option>
                                @endforeach </select>
                        </div>
                    </div>
                    <!-- file uploads -->
                    <div class="dropify-wrapper" style="height: 192px;">
                        <label class="form-label">Training Thumbnail</label>
                        <div class="dropify-loader" style="display: none;"></div>
                        <div class="dropify-errors-container">
                            <ul></ul>
                        </div>
                        <input type="file" class="dropify" data-height="180" name="thumbnail">
                        <button type="button" class="dropify-clear">Remove</button>
                    </div>
                    <!-- file uploads end -->
                    <!-- course_description -->
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Course Description</label>
                            <textarea class="form-control" name="course_description" rows="3" placeholder="Course Description.."></textarea>
                        </div>
                    </div>
                    <!-- course_description END -->
                    <!-- what_u_will_learn -->
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">What You'll Learn</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">what_u_will_learn_1</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_1" placeholder="1.">
                                    <label class="form-label">what_u_will_learn_2</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_2" placeholder="2.">
                                    <label class="form-label">what_u_will_learn_3</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_3" placeholder="3.">
                                    <label class="form-label">what_u_will_learn_4</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_4" placeholder="4.">
                                    <label class="form-label">what_u_will_learn_5</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_5" placeholder="5."> </div>
                                <div class="col-md-6">
                                    <label class="form-label">what_u_will_learn_6</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_6" placeholder="6.">
                                    <label class="form-label">what_u_will_learn_7</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_7" placeholder="7.">
                                    <label class="form-label">what_u_will_learn_8</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_8" placeholder="8.">
                                    <label class="form-label">what_u_will_learn_9</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_9" placeholder="9.">
                                    <label class="form-label">what_u_will_learn_10</label>
                                    <input type="text" class="form-control" name="what_u_will_learn_10" placeholder="10."> </div>
                            </div>
                        </div>
                    </div>
                    <!-- what_u_will_learn END -->
                    <!-- Requirements -->
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Requirements</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">requirements_1</label>
                                    <input type="text" class="form-control" name="requirements_1" placeholder="1.">
                                    <label class="form-label">requirements_2</label>
                                    <input type="text" class="form-control" name="requirements_2" placeholder="2.">
                                    <label class="form-label">requirements_3</label>
                                    <input type="text" class="form-control" name="requirements_3" placeholder="3."> </div>
                                <div class="col-md-6">
                                    <label class="form-label">requirements_4</label>
                                    <input type="text" class="form-control" name="requirements_4" placeholder="4.">
                                    <label class="form-label">requirements_5</label>
                                    <input type="text" class="form-control" name="requirements_5" placeholder="5.">
                                    <label class="form-label">requirements_6</label>
                                    <input type="text" class="form-control" name="requirements_6" placeholder="6."> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Requirements END -->
                    <!-- course_lecture_title -->
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Course Content</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">course_lecture_title_1</label>
                                    <input type="text" class="form-control" name="course_lecture_title_1" placeholder="lecture_title">
                                    <label class="form-label">lecture_title_1</label>
                                    <input type="text" class="form-control" name="lecture_title_1" placeholder="1.">
                                    <label class="form-label">lecture_title_2</label>
                                    <input type="text" class="form-control" name="lecture_title_2" placeholder="2.">
                                    <label class="form-label">lecture_title_3</label>
                                    <input type="text" class="form-control" name="lecture_title_3" placeholder="3.">
                                    <label class="form-label">lecture_title_4</label>
                                    <input type="text" class="form-control" name="lecture_title_4" placeholder="4.">
                                    <label class="form-label">lecture_title_5</label>
                                    <input type="text" class="form-control" name="lecture_title_5" placeholder="5."> </div>
                                <div class="col-md-6">
                                    <label class="form-label">course_lecture_title_2</label>
                                    <input type="text" class="form-control" name="course_lecture_title_2" placeholder="course_lecture_title_2">
                                    <label class="form-label">lecture_title_6</label>
                                    <input type="text" class="form-control" name="lecture_title_6" placeholder="6.">
                                    <label class="form-label">lecture_title_7</label>
                                    <input type="text" class="form-control" name="lecture_title_7" placeholder="7.">
                                    <label class="form-label">lecture_title_8</label>
                                    <input type="text" class="form-control" name="lecture_title_8" placeholder="8.">
                                    <label class="form-label">lecture_title_9</label>
                                    <input type="text" class="form-control" name="lecture_title_9" placeholder="9.">
                                    <label class="form-label">lecture_title_10</label>
                                    <input type="text" class="form-control" name="lecture_title_10" placeholder="10."> </div>
                            </div>
                        </div>
                    </div>
                    <!-- course_lecture_title END -->
                    <!-- resources -->
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Resources</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">resources_1</label>
                                    <input type="text" class="form-control" name="resources_1" placeholder="1.">
                                    <label class="form-label">resources_2</label>
                                    <input type="text" class="form-control" name="resources_2" placeholder="2.">
                                    <label class="form-label">resources_3</label>
                                    <input type="text" class="form-control" name="resources_3" placeholder="3."> </div>
                                <div class="col-md-6">
                                    <label class="form-label">resources_4</label>
                                    <input type="text" class="form-control" name="resources_4" placeholder="4.">
                                    <label class="form-label">resources_5</label>
                                    <input type="text" class="form-control" name="resources_5" placeholder="5.">
                                    <label class="form-label">resources_6</label>
                                    <input type="text" class="form-control" name="resources_6" placeholder="6."> </div>
                            </div>
                        </div>
                    </div>
                    <!-- resources END -->
                    <!-- course_features -->
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-label">Course Features</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">course_features_1</label>
                                    <input type="text" class="form-control" name="course_features_1" placeholder="course_features_1">
                                    <label class="form-label">course_features_2</label>
                                    <input type="text" class="form-control" name="course_features_2" placeholder="course_features_2">
                                    <label class="form-label">course_features_3</label>
                                    <input type="text" class="form-control" name="course_features_3" placeholder="course_features_3">
                                    <label class="form-label">course_features_4</label>
                                    <input type="text" class="form-control" name="course_features_4" placeholder="course_features_4">
                                    <label class="form-label">course_features_5</label>
                                    <input type="text" class="form-control" name="course_features_5" placeholder="course_features_5"> </div>
                                <div class="col-md-6">
                                    <label class="form-label">course_features_1_item</label>
                                    <input type="text" class="form-control" name="course_features_1_item" placeholder="course_features_1_item">
                                    <label class="form-label">course_features_2_item</label>
                                    <input type="text" class="form-control" name="course_features_2_item" placeholder="course_features_2_item">
                                    <label class="form-label">course_features_3_item</label>
                                    <input type="text" class="form-control" name="course_features_3_item" placeholder="course_features_3_item">
                                    <label class="form-label">course_features_4_item</label>
                                    <input type="text" class="form-control" name="course_features_4_item" placeholder="course_features_4_item">
                                    <label class="form-label">course_features_5_item</label>
                                    <input type="text" class="form-control" name="course_features_5_item" placeholder="course_features_5_item"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- course_features END -->
                </div>
                <div class="card-footer text-right">
                    <div class="d-flex"> <a href="javascript:void(0)" class="btn btn-link">Cancel</a>
                        <button type="submit" class="btn btn-primary ml-auto">Send data</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Add team member end -->
    </div>
</div>


@endsection