<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding-top: 20px;
        }

        h1 {
            color: #333;
        }


        .btn {
            border-radius: 5px;
            transition: all 0.3s ease;
            padding: 5px;
            text-decoration: none;
        }

        .btn-primario {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primario:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-aviso {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-aviso:hover {
            background-color: #e0a800;
            border-color: #e0a800;
        }

        .btn-perigo {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-perigo:hover {
            background-color: #c82333;
            border-color: #c82333;
        }


        .tabela {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .tabela th,
        .tabela td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .tabela th {
            background-color: #f2f2f2;
            color: #333;
        }

        .cabeçalho-escuro th {
            background-color: #f33d00;
            color: #fff;
        }

        .tabela-listada tbody tr:hover {
            background-color: rgba(0, 0, 0, .075);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 70%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }
            
            .form-control {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        @yield('conteudo')
    </div>
</body>

</html>
