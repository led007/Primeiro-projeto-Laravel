@include('layouts.header')
<br>
<div class="container-fluid">
    <ul>
        @foreach ($lista_clientes as $clientes)
        <li>
            <p> {{$clientes->nome}}  -  {{$clientes->idade}}</p>
        </li>
            
        @endforeach
    </ul>

</div>

@include('layouts.footer')