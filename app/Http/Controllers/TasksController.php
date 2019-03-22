<?php

namespace App\Http\Controllers;

use App\Project;
use App\Company;
use App\User;
use App\Task;
use App\TaskUser;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if( Auth::check() ){
          $tasks = Task::where('user_id', Auth::user()->id)->get();

           return view('tasks.index', ['tasks'=> $tasks]);
      }
      return view('auth.login');
    }


    public function adduser(Request $request){
        //add user to projects

        //take a project, add a user to it
        $task = Task::find($request->input('task_id'));



        if(Auth::user()->id == $task->user_id){

        $user = User::where('email', $request->input('email'))->first(); //single record

        //check if user is already added to the project
        $taskUser = TaskUser::where('user_id',$user->id)
                                   ->where('task_id',$task->id)
                                   ->first();

           if($taskUser){
               //if user already exists, exit

               return response()->json(['success' ,  $request->input('email').' is already a member of this task']);

           }


           if($user && $task){

               $task->users()->attach($user->id);

                    return response()->json(['success' ,  $request->input('email').' was added to the task successfully']);

                   }

        }

        return redirect()->route('tasks.show', ['task'=> $task->id])
        ->with('errors' ,  'Error adding user to task');



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( $task_id = null )
    {
      $tasks = null;
      if(!$task_id){
         $tasks = Task::where('user_id', Auth::user()->id)->get();
         $projects = Project::where('user_id', Auth::user()->id)->get();

      }

      return view('tasks.create',['task_id'=>$task_id, 'tasks'=>$tasks, 'projects'=>$projects]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Auth::check()){
          $task = Task::create([
              'name' => $request->input('name'),
              'description' => $request->input('description'),
              'project_id' => $request->input('project_id'),
              'company_id' => $request->input('company_id'),
              'deadline' => $request->input('deadline'),
              'user_id' => Auth::user()->id
          ]);


          if($task){
              return redirect()->route('tasks.show', ['task'=> $task->id])
              ->with('success' , 'project created successfully');
          }

      }

          return back()->withInput()->with('errors', 'Error creating new task');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {

             // $project = Project::where('id', $project->id )->first();
             $task = Task::find($task->id);

             $comments = $task->comments;
              return view('tasks.show', ['task'=>$task, 'comments'=> $comments ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
      $findtask = Task::find( $task->id);
      if($findtask->delete()){

          //redirect
          return redirect()->route('tasks.index')
          ->with('success' , 'task deleted successfully');
      }

      return back()->withInput()->with('error' , 'task could not be deleted');
    }
}
