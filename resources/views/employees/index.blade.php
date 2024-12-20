<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 20px;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background: #1e1e1e;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .page-header h1 {
            font-size: 32px;
            font-weight: 700;
            color: #ffcc00;
        }

        .btn-add {
            background-color: #00b894;
            border: none;
            padding: 10px 20px;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        .btn-add:hover {
            background-color: #009d75;
        }

        .data-table {
            width: 100%;
            border-spacing: 0;
            border-collapse: separate;
        }

        .data-table thead th {
            text-transform: uppercase;
            font-weight: bold;
            color: #b0bec5;
            text-align: left;
            padding: 10px;
        }

        .data-table tbody tr {
            background: #2e2e2e;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .data-table tbody tr td {
            padding: 12px;
            color: #ffffff;
        }

        .data-table tbody tr td:first-child {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .data-table tbody tr td:last-child {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-edit {
            background-color: #f1c40f;
            border: none;
            color: #121212;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-edit:hover {
            background-color: #d4ac0d;
        }

        .btn-delete {
            background-color: #e74c3c;
            border: none;
            color: #ffffff;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            color: #b0bec5;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="page-header">
        <h1>Team Dashboard</h1>
        <a href="{{ route('employees.create') }}" class="btn btn-add">Add New Member</a>
    </div>

    <table class="data-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>${{ number_format($employee->salary, 2) }}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn-edit">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="footer">
    &copy; 2024 Team Management. All rights reserved.
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
