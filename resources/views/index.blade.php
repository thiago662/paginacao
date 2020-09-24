<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <title>Paginação</title>
    </head>
    <body>
        <div class="container">

            <h4 class="text-center">
                {{ $clientes->count() }} clientes de {{ $clientes->total() }} ({{ $clientes->firstItem() }} a {{ $clientes->lastItem() }})
            </h4>

            <table class="table table-hover">
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">E-mail</th>
                </thead>
                <tbody>

                    @foreach ($clientes as $c)

                        <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->nome }}</td>
                            <td>{{ $c->sobrenome }}</td>
                            <td>{{ $c->email }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        
            <div class="text-center">

                {{ $clientes->links() }}

            </div>

        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
