@include('layouts.header')
<br>
<div class="container"> 
    <h2 class="texto">Produtos</h2>
    <br>
    <div class="row" > 
        <ul style="display: flex; flex-wrap: wrap;"> 
            @foreach($lista_produtos as $produtos)
            <li  class="col-md-4 boxproduto">
                <img class="fotoproduto" src="{{$produtos->foto}}" alt="">
                <p class="detalhes">{{$produtos->nome}}</p>
                <p class="bold"> R$:{{$produtos->preco  }},00
                    <button class="btn btn-primary">Comprar
                        <i class="fas fa-shopping-cart"></i>
                    </button>
                 </p>
                </li>
            
            @endforeach
        </ul>

    </div>
    
</div>
@include('layouts.footer')