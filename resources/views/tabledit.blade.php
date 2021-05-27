@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <h2>Create Task</h2>
        @csrf
        <form method="POST" action="{{ action('TasksController@store')}}">
            <div class="form-group">
                <input type="text" placeholder="Subject" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Prioriy</label>
                <select class="form-control" id="priority" name="priority">
                    <option>High</option>
                    <option>Normal</option>
                    <option>Low</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Due date</label>
                <input type="date" class="form-control" id="dueDate" name="dueDate">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="status" name="status">
                    <option>Complete</option>
                    <option>In Progress</option>
                    <option>New</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Percent</label>
                <input type="number" class="form-control" id="percent" name="percent" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-dark" name="send">Add Task</button>
        </form>
    </div>
</div>
@endsection