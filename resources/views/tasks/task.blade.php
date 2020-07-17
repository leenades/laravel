@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tasks ToDo:') }}
                    <form action="/task" method="post">
                        {{ csrf_field() }}{{ method_field('POST') }}
                        <input type="text" name="todoTask" placeholder="task...">
                        <button type="submit" name="addTask">Add Task</button>
                    </form>
                </div>

                <div class="card-body d-flex flex-wrap">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <?php
                        foreach ($task_table as $row) {    
                            echo '<ul><li>';
                            print_r($row->id);
                            print_r($row->description);
                            echo '</li></ul>';   
                        }             
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Completed Tasks:') }}</div>

                <div class="card-body"></div>
            </div>
        </div>
    </div>
</div>
@endsection
