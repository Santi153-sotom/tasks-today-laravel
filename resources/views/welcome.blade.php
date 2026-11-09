@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <p class="eyebrow">Today’s tasks</p>
    <h1>Welcome</h1>
    <p class="lead">{{ now()->format('F j, Y') }}</p>

    @if ($tasks->isEmpty())
        <div class="card">
            <p>No tasks are scheduled for today.</p>
        </div>
    @else
        <table>
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
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