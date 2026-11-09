@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <p class="eyebrow">Task directory</p>
    <h1>Task List</h1>
    <p class="lead">All tasks, ordered by scheduled date.</p>

    @if ($tasks->isEmpty())
        <div class="card">
            <p>No tasks have been added.</p>
        </div>
    @else
        <table>
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Task</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ \Illuminate\Support\Carbon::parse($task->task_date)->format('M j, Y') }}</td>
                        <td>{{ $task->title }}</td>
                        <td>
                            <span class="status {{ $task->status === 'completed' ? 'completed' : 'pending' }}">
                                {{ ucfirst($task->status) }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection