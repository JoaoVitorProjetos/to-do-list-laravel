<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <style>
        
        @media (max-width: 575.98px) {
            body {
                padding-top: 20px; 
            }
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }
        }

        
        @media (min-width: 576px) and (max-width: 767.98px) {
            .container {
                padding-left: 20px;
                padding-right: 20px;
            }
        }

        
        @media (min-width: 768px) and (max-width: 1199.98px) {
            .container {
                max-width: 1000px; 
            }
        }

        
        @media (min-width: 1200px) {
            .container {
                max-width: 1200px;
                margin-left: auto;
                margin-right: auto;
            }
        }

    
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .btn{
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn:hover {
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


        /* isso é um teste - caso paragjkf
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        .btn{
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-aviso {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-aviso:hover {
            background-color: #e0a800;
            border-color: #e0a800;
        }

        .btn-perigo {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-perigo:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        */
    </style>
</head>
<body>
    <div class="container">
        @yield('conteudo')
    </div>
</body>
</html>