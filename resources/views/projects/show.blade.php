@extends('layouts.octopus')

@section('content')

<section class="body">

			@include('partials.frame')


      <section role="main" class="content-body">
        <header class="page-header">
          <h2>{{$project->name}} Project</h2>

          <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
              <li>
                <a href="http://localhost:8000">
                  <i class="fa fa-home"></i>
                </a>
              </li>
              <li><a href="/projects"><span>Projects</span></a> </li>
              <li><span>{{$project->name}}</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
          </div>
        </header>

        <div class="row">

					@include('partials.success')
					@include('partials.errors')

          <div class="col-md-10 col-xl-10">
            <section class="panel-group mb-xlg">
              <div class="widget-twitter-profile">
                <div class="profile-info">
                  <div class="profile-account">
                    <h1 class="name text-semibold">{{$project->name}}</h1>
                  </div>

                  <ul class="profile-stats">
                    <li>
                      <h5 class="stat text-uppercase">Completed Tasks</h5>
                      <h4 class="count">3</h4>
                    </li>
                    <li>
                      <h5 class="stat text-uppercase">Due Tasks</h5>
                      <h4 class="count">4</h4>
                    </li>
                  </ul>

                </div>
                <div class="profile-quote">

                    <h4>
                      {{$project->description}}
                    </h4>
                    <hr class="solid short">
                  <div class="quote-footer">
                    <span class="datetime">Project launched on:</span>
                    -
                    <a href="#">4:27 PM - 15th Mar 2019</a>
                  </div>
                </div>
              </div>
            </section>
          </div>


          <div class="col-md-2 col-xl-2">
            <section class="panel">
              <header class="panel-heading bg-tertiary">
                <p class="text-center">Actions</p>
              </header>
              <div class="panel-body">
                <p><a href="/projects/{{ $project->id }}/edit"><i class="fa fa-pencil mr-xs"></i> Edit Project</a></p>
                <!-- <p><a href="/projects/create/{{ $project->id }}"><i class="fa fa-plus mr-xs"></i> Subdivide Project to Task</a></p> -->

                <p><a href="#" onclick="
                var result = confirm('Samahani... Do wish to delete this project?');
                    if( result ){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                    }
                        "><i class="fa fa-trash-o mr-xs"></i> Delete</a></p>

                        <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}"
                          method="POST" style="display: none;">

                                  <input type="hidden" name="_method" value="delete">
                                  {{ csrf_field() }}
                        </form>

              </div>
            </section>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <section class="panel">
              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#" class="fa fa-caret-down"></a>
                </div>
                <h3>Comment about this project</h3>
              </header>
              <div class="panel-body">

                <form class="form-horizontal form-bordered" method="post" action="{{ route('comments.store') }}">
                  <div class="form-group">
										  {{ csrf_field() }}

											<input type="hidden" name="commentable_type" value="App\Project">
											<input type="hidden" name="commentable_id" value="{{$project->id}}">

                    <label class="col-md-3 control-label" for="comment-content">Comment Editors</label>
                    <div class="col-md-9">

												<div class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><textarea rows="18" cols="80" placeholder="Comment about this project" id="comment-content" name="body" ></textarea> </div>

                    </div>
                  </div>
									<div class="form-group">
											<input type="submit" class="btn btn-primary"
														 value="Submit"/>
									</div>
                </form>

              </div>
            </section>
          </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xl-12">
          <section class="panel panel-horizontal">
            <header class="panel-heading bg-whit">
              <div class="panel-heading-ico bg-primary mt-sm">
                <i class="fa fa-caret-down"></i>
              </div>
            </header>
            <div class="panel-body p-lg">
              <h2 class="text-semibold mt-sm">Recent Comments</h2>
              <p> <i class="fa fa-caret-right"></i> Scroll down to view comments on this project </p>
            </div>
          </section>
        </div>

        <div class="timeline">
          <div class="tm-body">
            <div class="tm-title">
              <h3 class="h5 text-uppercase">Chronological list of comments</h3>
            </div>
            <ol class="tm-items">
							@foreach($comments as $comment)
              <li>
                <div class="tm-info">
                  <div class="tm-icon"><i class="fa fa-star"></i></div>
                </div>
                <div class="tm-box appear-animation" data-appear-animation="fadeInRight"data-appear-animation-delay="100">
                  <p>
										{{ $comment->body }}
                  </p>
                  <div class="tm-meta">
                    <span>
                      <i class="fa fa-user"></i> By <a href="users/{{$comment->user->id}}">{{ $comment->user->first_name}} {{ $comment->user->last_name}} -  {{ $comment->user->email}}</a>
                    </span>
                    <span>
                      <i class="fa fa-comments"></i> <a href="#">Commented on {{ $comment->created_at }}</a>
                    </span>
                  </div>
                </div>
              </li>
							@endforeach
            </ol>
          </div>
        </div>


      </section>

    </div>

    @include('partials.aside')

</section>

@endsection
