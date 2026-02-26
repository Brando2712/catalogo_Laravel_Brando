<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catálogo de Productos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 24px; background: #f7f7f7; }
        .container { max-width: 980px; margin: 0 auto; background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,.06); }
        table { width: 100%; border-collapse: collapse; margin-top: 12px; }
        th, td { padding: 10px; border-bottom: 1px solid #ddd; text-align: left; }
        .actions a, .actions button { margin-right: 6px; }
        .btn { display: inline-block; padding: 6px 12px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 4px; border: none; cursor: pointer; }
        .btn-secondary { background: #6b7280; }
        .btn-danger { background: #dc2626; }
        .alert { padding: 10px 12px; border-radius: 4px; margin-bottom: 12px; }
        .alert-success { background: #dcfce7; color: #166534; }
        .form-group { margin-bottom: 12px; }
        label { display: block; margin-bottom: 4px; font-weight: bold; }
        input[type="text"], input[type="number"], textarea, select { width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; background: #fff; }
        .error { color: #b91c1c; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
