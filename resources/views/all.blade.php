@extends('layouts.app')

@section('content')
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<table style="width:100%">
    <tr>
        <th><i class="	fas fa-poo"></i></th>
        <th></th>
        <th>Subject</th>
        <th>Priority</th>
        <th>Due Date</th>
        <th>Status</th>
        <th>Percent Complete</th>
        <th>Modified date</th>
    </tr>
    @foreach ($tasks as $item)
    
    <tr>
        <td>e</td>
        <td></td>
        <td>{{ $item['subject'] }}</td>
        <td>
            @if($item['priority'] == "High")
            <div class="d-flex py-2">
                <span class="badge badge-pill badge-danger">{{ $item['priority'] }}</span>
            @elseif ($item['status'] == "Normal")
                <span class="badge badge-pill badge-primary">{{ $item['priority'] }}</span>
            @elseif ($item['status'] == "Low")
                <span class="badge badge-pill badge-success">{{ $item['priority'] }}</span>
            @else
                <span class="badge badge-pill badge-danger">{{ $item['priority'] }}</span>
            @endif
        </td>
        <td>{{ $item['dueDate'] }}</td>
        <td>{{ $item['status'] }}</td>
        <td>
            {{ $item['percComplete'] }}%
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $item['percComplete'] }}%" aria-valuenow="{{ $item['percComplete'] }}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </td>
        <td>{{ $item['modifiedOn'] }}</td>
    </tr>
@endforeach
</table>
<style>
    table, th, td {
  border: 1px solid black;
  padding: 5px;
}
</style>
@endsection