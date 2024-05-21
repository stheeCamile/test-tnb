<!-- create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Funcionário</title>
</head>
<body>
    <h1>Criar Funcionário</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="cpf">CPF:</label><br>
        <input type="text" id="cpf" name="cpf"><br>
        
        <label for="age">Idade:</label><br>
        <input type="text" id="age" name="age"><br>

        <label for="department_id">Departamento:</label><br>
        <select name="department_id" id="department_id">
            @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select><br>

        <input type="submit" value="Criar Funcionário">
    </form>
</body>
</html>
