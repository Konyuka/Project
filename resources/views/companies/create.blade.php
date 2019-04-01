@extends('layouts.octopus')

@section('content')

<section class="body">

			@include('partials.frame')


      <section role="main" class="content-body">
      <header class="page-header">
        <h2>Creating a new Company</h2>

        <div class="right-wrapper pull-right">
          <ol class="breadcrumbs">
            <li>
              <a href="http://localhost:8000">
                <i class="fa fa-home"></i>
              </a>
            </li>
            <li><span> <a href="/companies">Companies</a> </span></li>
            <li><span>Create</span></li>
          </ol>

          <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
      </header>

      <div class="row">
        <div class="col-md-12">
          <form id="summary-form" action="{{ route('companies.store') }}" class="form-horizontal" method="post">

            {{ csrf_field() }}

            <section class="panel">

              <header class="panel-heading">
                <div class="panel-actions">
                  <a href="#" class="fa fa-caret-down"></a>
                  <a href="#" class="fa fa-times"></a>
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
                  <label class="col-sm-3 control-label" for="company-name">Company Name <span class="required">*</span></label>
                  <div class="col-sm-9">
                    <input id="company-name" type="text" name="name" class="form-control" spellcheck="false" title="Plase enter the full names of the company." placeholder="eg.: NaiLab" required/>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label" for="company-content">Company Description </label>
                  <div class="col-sm-9">
                    <textarea id="company-content" name="description" rows="8" title="Give a brief description of the company if possible" class="form-control" placeholder="eg.: This is currently the leading..."></textarea>
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
