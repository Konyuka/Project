@extends('layouts.octopus')

@section('content')

<section class="body">

			@include('partials.frame')


      <section role="main" class="content-body">
      <header class="page-header">
        <h2>Edit this Project</h2>

        <div class="right-wrapper pull-right">
          <ol class="breadcrumbs">
            <li>
              <a href="http://localhost:8000">
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li><span> <a href="/projects">Projects</a> </span></li>
						<li><span> <a href="/projects/{{$project->id}}">{{$project->name}}</a> </span></li>
            <li><span>Edit</span></li>
          </ol>

          <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
      </header>

      <div class="row">

        @include('partials.success')
        @include('partials.errors')

        <div class="col-md-12">
          <form id="summary-form" action="{{ route('projects.update',[$project->id]) }}" class="form-horizontal" method="post">

            {{ csrf_field() }}

            <input type="hidden" name="_method" value="put">

            <section class="panel">

              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#" class="fa fa-caret-down"></a>
                </div>

                <h2 class="panel-title">Validation Summary</h2>
                <p class="panel-subtitle">
                  The fields with asterisk must be filled
                </p>
              </header>

              <div class="panel-body">
                <div class="validation-message">
                  <ul></ul>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label" for="project-name">Project Name <span class="required">*</span></label>
                  <div class="col-sm-9">
                    <input id="project-name" value="{{$project->name}}" type="text" name="name" class="form-control" spellcheck="false" title="Plase enter the full names of the project." placeholder="eg.: Android Dev" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label" for="project-content">Project Description </label>
                  <div class="col-sm-9">
                    <textarea id="proejct-content" name="description" rows="8" title="Give a brief description of the project if possible" class="form-control" placeholder="eg.: This is currently the leading...">{{$project->description}}</textarea>
                  </div>
                </div>

              </div>
              <footer class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-primary" value="submit">Update</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                  </div>
                </div>
              </footer>
            </section>
          </form>
        </div>

      </div>
    </section>

    </div>

    @include('partials.aside')

</section>

@endsection
