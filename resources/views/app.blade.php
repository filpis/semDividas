
<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->

        <title>Laravel CRUD</title>
        <style>
        * {
            font-family: 'Montserrat', sans-serif;
            text-rendering: optimizeLegibility !important;
            filter: blur(1);
        }
        
        .form {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .flex-start {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            padding: 0 40px 10px 40px;
            justify-content: space-between;
            margin-top: 10px;
            border-radius: 9px;
            border: 1px solid #ccc;
            width: 900px;
            height: 300px;
        }
        
        h1 {
            
            color: #000;
            font-size: 18px;
            color: rgb(155, 155, 155);
            font-weight: 20px;
        }
        h2{
            display: flex;
            align-items: center;
            justify-content: center;
            color: #00085D;
            font-weight: 10px;
        }
        #a {
            font-weight: 600;
        }
        
        input {
            width: 120px;
            height: 37px;
            border: 1px solid;
            border-radius: 5px;
            color: #00085D;
        }
        
        select {
            width: 150px;
            height: 40px;
            border: 1.5px solid #00085D;
            border-radius: 5px;
        }
        
        #seleção {
            width: 230px;
            height: 40px;
            border: 1.5px solid #00085D;
            border-radius: 7px;
        }
        
        #dupla-seleção {
            width: 100px;
            height: 40px;
            border: 1.5px solid #00085D;
        }
        
        #dupla-seleção2 {
            width: 120px;
            height: 40px;
            border: 1.9px solid #00085D;
        }
        
        .title {
            text-decoration: none;
            font-size: 25px;
            color: #00085D;
        }
        
        .container {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .mais-opções {
            padding-top: 60px;
            margin: 0;
            display: flex;
            justify-content: space-between;
            width: 900px;
            
        }
        
        button {
           font-size: 20px;
            width: 160px;
            height: 40px;
            background-color: #00085D;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        
        #none {
            visibility: hidden;
        }
        
        a {
            color: #00085D;
        }
        
        a:hover {
            color: #00085D;
        }
        
        .borda {
            padding-left: 10px;
        }
        
        #parcela-desconto{
        width: 190px;
        
        }
        
        #tipo1{
        width: 250px;
        height: 45px;
        border-radius: 9px;
        }
        #tipo2{
        width: 140px;
        height: 45px;
        border-radius: 9px;
        
        }
        #tipo3{
        width: 110px;
        height: 40px;
        border-radius: 9px;
        
        }
        .alert-success{
            display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        font-family: 'Montserrat', sans-serif;
        text-rendering: optimizeLegibility !important;
        filter: blur(1);
        font-size: 20px;
        width: 250px;
        height: 80px;
        background-color: #b6eab6;
        }
        ul{
        list-style-type: none;
        }
        .salvos{
            display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        
        
        }
        </style>
    </head>
    <body>
    
    
        
        <h2>Criar parâmetro</h2>
        
        <div class="form">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ url('/todos') }}" method="POST">
    @csrf
   
            <div class="register-parameters flex-start">

                <div class="debt-type">
                    <h1>Tipo de Dívida</h1>
                    <select type="text" name="tipo_divida" class="borda" id="tipo1">
            <option class="borda" value="cartão" class="input">Cartão de Crédito</option>
            <option  class="borda" value="duplicata" class-"input">Duplicata</option>
            <option class="borda" value="cheque" class="input">Cheque Especial</option>
            <option class="borda" value="emprestimo" class="input">Empréstimo Pessoal</option>
        </select>
                </div>

               <div class="delay">
                    <h1>Tempo de Atraso Inicial</h1>
                    <input class="borda" type="number" name="atraso_inicial" min="1" value="1"  id="tipo3">
                    <select type="text" name="atraso_inicial_text" class="borda" id="tipo2">
            <option class="borda " value="anos ">Anos</option>
            <option class="borda " value="meses ">Meses</option>
            <option class="borda " value="dias ">Dias</option>
        </select>
                </div>
                
                <div class="delay-end ">
                    <h1>Tempo de Atraso Final</h1>
                    <input class="borda " type="number" name="atraso_final" min="1" value="1"  id="tipo3" >
                    <select class="delay-date" type="text" name="atraso_final_text" id="tipo2" >
            <option type="text " class="borda" value="anos ">Anos</option>
            <option value="meses ">Meses</option>
            <option value="dias ">Dias</option>
        </select>

                </div>
                <div class="porcent ">
                    <h1 >Juros Aplicados(%)</h1>
                    <input class="borda" type="number" name="juros_aplicados" min="1" value="1"  id="tipo3">
            <select class="delay-date" name="juros_aplicados_text" id="tipo2">
            <option value="ano ">Ano</option>
            <option value="mês ">Mês</option>
            <option value="dia ">Dia</option>
        </select>
                </div>
                <div>
                    <h1>Desconto à Vista(%)</h1>
                    <input class="borda " type="number" name="descontos_a_vista" min="1" value="15"  id="tipo1">
                </div>
                <div>
                    <h1>Parcelas a Prazo</h1>
                    <input class="borda " type="number" name="parcelas_a_prazo" min="1" value="5" id="tipo1">
                </div>
            </div>
            <div class="mais-opções">
                <h1 class="title"  > <a href="cadastrar" id="" style="text-decoration:none"> Visualizar parâmetros </a> </h1>
                <button type="submit" id="a" color:white>Cadastrar</button>

                
               
            </div>
            
        </form>
    
    
    
   
</form>
</div>

            @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
           
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>