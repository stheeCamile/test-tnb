<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Schedules</title>
</head>
<body>
    <h1>Work Schedules</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Employee Name</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->employee->name }}</td>
                    <td>{{ $schedule->date }}</td>
                    <td>{{ $schedule->start_time }}</td>
                    <td>{{ $schedule->end_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{ route('work-schedules.create') }}">
        <button type="button">Create Work Schedule</button>
    </a>
</body>
</html>
