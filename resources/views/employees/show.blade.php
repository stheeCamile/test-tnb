<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Funcionários</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Idade</th>
                <th>Departamento</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->cpf }}</td>
                    <td>{{ $employee->age }}</td>
                    <td>{{ $employee->department->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="{{ route('employees.create') }}">
        <button type="button">Criar Novo Funcionário</button>
    </a>
</body>
</html>
