@extends('layouts.octopus')

@section('content')

<section class="body">

			@include('partials.frame')


      <section role="main" class="content-body">
      <header class="page-header">
        <h2>Creating a new Project</h2>

        <div class="right-wrapper pull-right">
          <ol class="breadcrumbs">
            <li>
              <a href="http://localhost:8000">
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li><span> <a href="/projects">Projects</a> </span></li>
            <li><span>Create</span></li>
          </ol>

          <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
      </header>

      <div class="row">
        <div class="col-md-12">
          <form id="summary-form" action="{{ route('projects.store') }}" class="form-horizontal" method="post">

            {{ csrf_field() }}

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
                    <input id="project-name" type="text" name="name" class="form-control" spellcheck="false" title="Plase enter the full names of the company." placeholder="eg.: Student management system" required/>
                  </div>
                </div>

                @if($companies == null)
                <input
                class="form-control"
                type="hidden"
                        name="company_id"
                        value="{{ $company_id }}"
                         />
                </div>
                @endif

                @if($companies != null)
                <div class="form-group">
                  <label class="col-md-3 control-label">Select Company</label>
                  <div class="col-md-6">
                    <select data-plugin-selectTwo class="form-control populate" name="company_id">
                      <optgroup label="Project belong to:">

                        @foreach($companies as $company)
                        <option value="{{$company_id}}">{{$company->name}}</option>
                        @endforeach
                      </optgroup>
                    </select>
                  </div>
                </div>
                @endif

                <div class="form-group">
                  <label class="col-sm-3 control-label" for="project-content">Project Description </label>
                  <div class="col-sm-9">
                    <textarea id="company-content" name="description" rows="8" title="Give a brief description of the company if possible" class="form-control" placeholder="eg.: The project will help schools that host many students..."></textarea>
                  </div>
                </div>

              </div>

              <footer class="panel-footer">
                <div class="row">
                  <div class="col-sm-9 col-sm-offset-3">
                    <button class="btn btn-primary" value="submit">Submit</button>
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
