<!DOCTYPE html>
<html>
<head>
    <title>Criar novo Departamento</title>
    <style>
        table {
            width: 40%;
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
    <h1>Create Department</h1>
    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <label for="name">Nome do departamento:</label>
        <input type="text" name="Nome" id="name" required>
        <button type="submit">Criar</button>
    </form>

    <h2>Departamentos</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
