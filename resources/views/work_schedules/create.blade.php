<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Criar Horários de Trabalho</title>
</head>
<body>
    <h1>Criar Horários de Trabalho</h1>
    <form action="{{ route('work-schedules.store') }}" method="POST">
        @csrf
        <label for="employee_id">Funcionário:</label>
        <select name="employee_id" id="employee_id" required>
            @foreach($employees as $employee)
                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
            @endforeach
        </select>
        <button type="submit">Create</button>
    </form>
</body>
</html>
