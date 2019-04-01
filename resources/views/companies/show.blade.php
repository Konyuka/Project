@extends('layouts.octopus')

@section('content')

<section class="body">

			@include('partials.frame')


      <section role="main" class="content-body">
        <header class="page-header">
          <h2>{{$company->name}} Profile</h2>

          <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
              <li>
                <a href="http://localhost:8000">
                  <i class="fa fa-home"></i>
                </a>
              </li>
              <li><a href="/companies"><span>Companies</span></a> </li>
              <li><span>{{$company->name}}</span></li>
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
                  <div class="profile-picture">
                    <img src="{{asset('octopus/assets/images/!logged-user.jpg')}}" alt="">
                  </div>
                  <div class="profile-account">
                    <h1 class="name text-semibold">{{$company->name}}</h1>
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
                      {{$company->description}}
                    </h4>
                    <hr class="solid short">
                  <div class="quote-footer">
                    <span class="datetime">Company registered on:</span>
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
                <p><a href="/companies/{{ $company->id }}/edit"><i class="fa fa-pencil mr-xs"></i> Edit Company</a></p>
                <p><a href="/projects/create/{{ $company->id }}"><i class="fa fa-plus mr-xs"></i> Add Project</a></p>

                <p><a href="#" onclick="
                var result = confirm('Samahani... Do wish to delete this Company?');
                    if( result ){
                            event.preventDefault();
                            document.getElementById('delete-form').submit();
                    }
                        "><i class="fa fa-trash-o mr-xs"></i> Delete</a></p>

                        <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}"
                          method="POST" style="display: none;">

                                  <input type="hidden" name="_method" value="delete">
                                  {{ csrf_field() }}
                        </form>

              </div>
            </section>
          </div>
        </div>

        <div class="col-md-12 col-lg-12 col-xl-12">
          <section class="panel panel-horizontal">
            <header class="panel-heading bg-white">
              <div class="panel-heading-ico bg-primary mt-sm">
                <i class="fa fa-caret-down"></i>
              </div>
            </header>
            <div class="panel-body p-lg">
              <h2 class="text-semibold mt-sm">My Active Projects</h2>
              <p> <i class="fa fa-caret-right"></i> Scroll down to view all active project with the company </p>
              <p> <i class="fa fa-caret-right"></i> Click the project icon to see the project in detail</p>
            </div>
          </section>
        </div>

        <div class="row">
          <div class="col-md-4 col-xl-4">

            <div class="img-responsive">

              <section class="panel pull-left" data-appear-animation="bounceIn">
                @foreach($company->projects as $project)
                <a href="/projects/{{ $project->id }}">
                  <header class="panel-heading bg-white">
                  <div class="panel-heading-icon bg-primary mt-sm">
                    <i class="fa fa-briefcase"></i>
                  </div>
                </header>
              </a>
              @endforeach

                @foreach($company->projects as $project)
                <div class="panel-body">
                  <h3 class="text-semibold mt-none text-center">{{$project->name}}</h3>
                  <p class="text-center">{{$project->description}}</p>
                </div>
                @endforeach
              </section>

              <img  width="100" data-appear-animation="bounceIn">
            </div>

          </div>

        </div>

        <!-- end: page -->

      </section>

    </div>

    @include('partials.aside')

</section>

@endsection
