@extends('todolist.app')

@section('content')

   

    <div class="panel-body">
        
       
        <form action="{{ url('todolist-create') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">ToDo List</label>

                <div class="col-sm-6">
                    <input type="text" name="todolist" id="task-name" class="form-control">
                </div>
            </div>

            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Todo List
                    </button>
                </div>
            </div>
        </form>
    </div>

    
    @if (count($dataAll) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Date</th>
                        <th>ToDo List</th>
                        <th> Delete</th>
                        <th> To-Completed</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($dataAll as $task)
                            <tr>
                                
                                <td class="table-text">
                                    <div>{{ date('d-m-Y', strtotime($task->created_at)); }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $task->todolist }}</div>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="{{ url('todolist-delete/'.$task->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        {!! method_field('DELETE') !!}

                                        <button>Delete Todo</button>
                                    </form>
                                </td>
                                <td>
                                	@if($task->is_completed ==1)
                                	<button>Marked As Completed</button>
                                	@else
                                    <form action="{{ url('todolist-completed/'.$task->id) }}" method="POST">
                                        {!! csrf_field() !!}
                                        <button>For Complete Click Here</button>
                                    </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    
@endsection