@extends('layouts.octopus')

@section('content')

<section class="body">

			@include('partials.frame')

      <section role="main" class="content-body">
        <header class="page-header">
          <h2>List of Projects</h2>

          <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
              <li>
                <a href="http://localhost:8000">
                  <i class="fa fa-home"></i>
                </a>
              </li>
              <li><span>Projects</span></li>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
          </div>
        </header>

        <!-- start: page -->
          <section class="panel">
            <header class="panel-heading">
              <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
              </div>

              <h2 class="panel-title">Default</h2>
            </header>
            <div class="panel-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-md">
                    <a href="projects/create"><button class="btn btn-primary">Create New Project <i class="fa fa-plus"></i></button></a>
                  </div>
                </div>
              </div>
              <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                <thead>
                  <tr>
                    <th>Client Company</th>
                    <th>Project Name</th>
                    <th>Project Description</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($projects as $project)
                  <tr class="gradeX">


                    <td> {{$project->company->name}} </td>


                    <td> <a href="/projects/{{ $project->id }}">{{$project->name}}</a> </td>
                    <td> {{$project->description}} </td>
                    <td class="actions">
                      <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
                      <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
                      <a href="/projects/{{ $project->id }}/edit" class="on-default edit-row"><i class="fa fa-pencil"></i></a>

                      <a href="http://localhost:8000/projects" class="on-default" onclick="
		                  var result = confirm('Samahani... Do wish to delete this Project?');
		                      if( result ){
		                              event.preventDefault();
		                              document.getElementById('delete-form').submit();
		                      }
		                          "><i class="fa fa-trash-o"></i></a>

															<form id="delete-form" action="{{ route('companies.destroy',[$project->id]) }}"
								                method="POST" style="display: none;">

								                        <input type="hidden" name="_method" value="delete">
								                        {{ csrf_field() }}
								              </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </section>
        <!-- end: page -->

      </section>

    </div>

    @include('partials.aside')

</section>

@endsection
