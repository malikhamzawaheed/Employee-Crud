<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f3f4f6, #e0e7ff);
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 500px;
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #374151;
            text-align: center;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #6b7280;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #d1d5db;
            padding: 10px;
        }

        .btn-primary {
            background: #6366f1;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #4f46e5;
        }

        .btn-secondary {
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            background: #f3f4f6;
            border: none;
        }

        .btn-secondary:hover {
            background: #e5e7eb;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1 class="form-title">Add Employee Details</h1>
        
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter employee's full name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="example@domain.com" required>
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Job Title</label>
                <input type="text" class="form-control" name="position" id="position" placeholder="Enter job position" required>
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Monthly Salary (USD)</label>
                <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter salary" step="0.01" required>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Save Employee</button>
                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
