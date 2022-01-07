<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parâmetros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <style>
        * {
            font-family: 'Montserrat', sans-serif;
        }

        h1 {
            font-size: 20px;
            font-weight: 550;
            color: #00085D;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h3 {
            font-size: 15px;
        }

        .container {
            padding: 25px 5px 25px 5px;
            color: rgb(37, 36, 36);

            width: 90%;
            border-radius: 5px;
            box-shadow: 0 0 1em #ccc;
        }

        .cadastrados {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .tudo {
            margin-top: 100px;

        }

        hr {
            color: #00085D;
        }

        .teste {
            border-top: 1px solid #00085D;
        }

        button {
            font-weight: 520;
            font-size: 20px;
            width: 300px;
            height: 45px;
            background-color: #00085D;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .botao {
            margin-top: 50px;
            width: 90%;
            display: flex;
            justify-content: flex-end;
        }

        .titulo {
            padding: 0 25px 0 25px;
            justify-content: space-between;
            display: flex;
            padding-bottom: 0;
        }

        .lista {}

        .hidden {}

        .iconify {
            color: #00085D;
            cursor: pointer;
        }

        .mais {
            color: white;
        }

        .btn {
            padding-right: 50px;

            transform: translateY(5px);
            width: 0;
            background: white;


        }


        .alert-success {

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

        .alert {
            display: flex;
            justify-content: center;

        }

        .mt-2 {}

        #atualizar {
            width: 100px;
            height: 30px;
            font-size: 15px;
            border-radius: 3px;
            background-color: rgb(41, 188, 78);
        }

        input {
            width: 50px;
            height: 21px;
            border: 1px solid #00085D;
            border-radius: 4px;

        }

        #select {
            width: 70px;

            border: 1px solid #00085D;
            border-radius: 5px;
            margin-left: 100px;

        }

        .lista-grupo {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            justify-content: space-between;
            margin: 0 0 0 60px;
        }


        #edicao {
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 1em 1em #ccc;
            width: 800px;
            height: 50px;
            margin: -5px 0 0 100px;
        }

    

        #bt {
            background-color: white;
            border: none;


        }

        #atual {

            background-color: green;
            width: 80px;
            height: 22px;
            font-size: 12px;
            padding: 10;
            border-radius: 3px;
            margin-left: 50px;
        }

        .list-group-item {

            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;



        }
        .card-body{
            display: flex;
            justify-content: space-between;
            align-items: flex-start;

            
        }
        .atraso-inicial{

            display: flex;
            justify-content: flex-start;
            
        }
        #esse{
            
            margin-left: 100px;
        }
        .mostra{

            border:none;
        }
        .card{
            border:none;
            display: flex;
            justify-content: space-between ;
        }
        .list-group-item{

            border: none;
        }
        #select{
           margin-left: 2px; 

        }
        

    </style>
</head>

<body>


    <div class="tudo">
        
        <h1 class="title" id="a"><span class="iconify" data-icon="carbon:settings-adjust"
                data-width="30"></span> Parâmetros
        </h1>
        <div class="cadastrados">


            <div class="container">
                <div class="titulo">
                    <h3>Tempo Atraso Inicial</h3>
                    <h3>Tempo Atraso Final</h3>
                    <h3>Juros Aplicados</h3>
                    <h3>Descontos à vista</h3>
                    <h3>Parcelas à prazo</h3>
                    <h3>Editar</h3>
                    <h3>Remover</h3>
                </div>
                <hr size="5" style="background-color:#0b1368">
                <div class="lista">
                    @foreach ($todos as $todo)
            <div class="mostra">
                <li class="list-group-item">

                    <div class="atraso_inicial">{{ $todo->atraso_inicial }} {{ $todo->atraso_inicial_text }}
                    </div>
                    <div class="lista-grupo"> {{ $todo->atraso_final }} {{ $todo->atraso_final_text }}
                    </div>
                    <div class="juros">{{ $todo->juros_aplicados }}% ao
                        {{ $todo->juros_aplicados_text }} </div>
                    <div class="descontos">{{ $todo->descontos_a_vista }}% </div>
                    <div class="parcelas">{{ $todo->parcelas_a_prazo }} </div>
                    <button class="btn btn-primary" type="button" id="bt" data-bs-toggle="collapse"
                        data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="false"><span
                            class="iconify" data-icon="bx:bx-edit" data-width="25">
                            Edit
                    </button>
                    <form action="{{ url('todos/' . $todo->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><span class="iconify"
                                data-icon="fa-solid:trash-alt" data-width="20"></span></button>


                    </form>
                </li>
                <div class="collapse mt-2" id="collapse-{{ $loop->index }}">
                    <div class="card card-body">
                        <form action="{{ url('todos/' . $todo->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="atraso-inicial">

                            <input  type="text" name="atraso_inicial" value="{{ $todo->atraso_inicial }}">
                            <select type="text" id="select" name="atraso_inicial_text" class="borda"
                                id="tipo2">
                                <option class="borda " value="anos ">Anos</option>
                                <option class="borda " value="meses ">Meses</option>
                                <option class="borda " value="dias ">Dias</option>
                            </div>

                                <input  id="esse" type="text" name="atraso_final"
                                    value="{{ $todo->atraso_final }} ">

                                <select type="text" id="select" name="atraso_final_text" class="borda"
                                    id="tipo2">
                                    <option class="borda " value="anos ">Anos</option>
                                    <option class="borda " value="meses ">Meses</option>
                                    <option class="borda " value="dias ">Dias</option>
                                </div>

                                    <div class="juros">
                                        <input id="esse" type="text" name="juros_aplicados"
                                            value="{{ $todo->juros_aplicados }} ">
                                        <select type="text" id="select" name="juros_aplicados_text"
                                            class="borda" id="tipo2">
                                            <option class="borda " value="ano ">Ano</option>
                                            <option class="borda " value="mês">Mês</option>
                                            <option class="borda " value="dia ">Dia</option>


                                            <div class="atual">
                                                <input  id="esse"  type="text" name="descontos_a_vista"
                                                    value="{{ $todo->descontos_a_vista }} ">

                                                <input  id="esse"  type="text" name="parcelas_a_prazo"
                                                    value="{{ $todo->parcelas_a_prazo }} ">




                                                <button class="" id="atual"
                                                    type="submit">Atualizar</button>
                        </form>
                    </div>
                </div>


            </div>
        @endforeach
                    <!--
                    @foreach ($todos as $todo)
                        <div class="lista-grupo">
                            <div class="atraso_inicial">{{ $todo->atraso_inicial }} {{ $todo->atraso_inicial_text }}
                            </div>
                            <div class="lista-grupo"> {{ $todo->atraso_final }} {{ $todo->atraso_final_text }}
                            </div>
                            <div class="juros">{{ $todo->juros_aplicados }}% ao
                                {{ $todo->juros_aplicados_text }} </div>
                            <div class="descontos">{{ $todo->descontos_a_vista }}% </div>
                            <div class="parcelas">{{ $todo->parcelas_a_prazo }} </div>



                            <button id='btn' class="btn" type="submit"><span class="iconify"
                                    data-icon="bx:bx-edit" data-width="25"></span></button>

                            <form action="{{ url('todos/' . $todo->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn" type="submit"><span class="iconify"
                                        data-icon="fa-solid:trash-alt" data-width="20"></span></button>


                            </form>


                        </div>
                        <div>
                            
                            
                    @endforeach
                    -->
                </div>
            </div>

        </div>

    </div>
    </div>





    </div>
    <!---
        @foreach ($todos as $todo)
                    <h3 class="hidden">{{ $todo->atraso_inicial }} {{ $todo->atraso_inicial_text }}</h3>
                    <h3 class="hidden">{{ $todo->atraso_final }} {{ $todo->atraso_final_text }}</h3>
                    <h3 class="hidden"> {{ $todo->juros_aplicados }}% ao {{ $todo->juros_aplicados_text }} </h3>
                    <h3 class="hidden">{{ $todo->descontos_a_vista }}% </h3>
                    <h3 class="hidden">{{ $todo->parcelas_a_prazo }}</h3>
                    <h3><span class="iconify" data-icon="bx:bx-edit" data-width="25"></span>
                    </h3>
                    <form action="{{ url('todos/' . $todo->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit"><span class="iconify" data-icon="fa-solid:trash-alt" data-width="20"></span></button>
                </form>
                   
                </ul>
                @endforeach      -->
    </div>



    </div>


    <ul class="list-group">


        </div>
        <div class="botao">
            <button type="submit" href="/index" id="a" color:white>Adicionar novos parâmetros</button>



        </div>


        <!--TESTE EDIÇÃO



        @foreach ($todos as $todo)
            <div class="mostra">
                <li class="list-group-item">

                    <div class="atraso_inicial">{{ $todo->atraso_inicial }} {{ $todo->atraso_inicial_text }}
                    </div>
                    <div class="lista-grupo"> {{ $todo->atraso_final }} {{ $todo->atraso_final_text }}
                    </div>
                    <div class="juros">{{ $todo->juros_aplicados }}% ao
                        {{ $todo->juros_aplicados_text }} </div>
                    <div class="descontos">{{ $todo->descontos_a_vista }}% </div>
                    <div class="parcelas">{{ $todo->parcelas_a_prazo }} </div>
                    <button class="btn btn-primary" type="button" id="bt" data-bs-toggle="collapse"
                        data-bs-target="#collapse-{{ $loop->index }}" aria-expanded="false"><span
                            class="iconify" data-icon="bx:bx-edit" data-width="25">
                            Edit
                    </button>
                    <form action="{{ url('todos/' . $todo->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><span class="iconify"
                                data-icon="fa-solid:trash-alt" data-width="20"></span></button>


                    </form>
                </li>
                <div class="collapse mt-2" id="collapse-{{ $loop->index }}">
                    <div class="card card-body">
                        <form action="{{ url('todos/' . $todo->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="atraso-inicial">

                            <input id="select" type="text" name="atraso_inicial" value="{{ $todo->atraso_inicial }}">
                            <select type="text" id="select" name="atraso_inicial_text" class="borda"
                                id="tipo2">
                                <option class="borda " value="anos ">Anos</option>
                                <option class="borda " value="meses ">Meses</option>
                                <option class="borda " value="dias ">Dias</option>
                            </div>

                            <div class="atraso-final">
                                <input id="select" type="text" name="atraso_final"
                                    value="{{ $todo->atraso_final }} ">

                                <select type="text" id="select" name="atraso_final_text" class="borda"
                                    id="tipo2">
                                    <option class="borda " value="anos ">Anos</option>
                                    <option class="borda " value="meses ">Meses</option>
                                    <option class="borda " value="dias ">Dias</option>
                                </div>

                                    <div class="juros">
                                        <input id="select" type="text" name="juros_aplicados"
                                            value="{{ $todo->juros_aplicados }} ">
                                        <select type="text" id="select" name="juros_aplicados_text"
                                            class="borda" id="tipo2">
                                            <option class="borda " value="ano ">Ano</option>
                                            <option class="borda " value="mês">Mês</option>
                                            <option class="borda " value="dia ">Dia</option>


                                            <div class="atual">
                                                <input id="select" type="text" name="descontos_a_vista"
                                                    value="{{ $todo->descontos_a_vista }} ">

                                                <input id="select" type="text" name="parcelas_a_prazo"
                                                    value="{{ $todo->parcelas_a_prazo }} ">




                                                <button class="" id="atual"
                                                    type="submit">Atualizar</button>
                        </form>
                    </div>
                </div>


            </div>
        @endforeach
        -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
        </script>

        <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>

</html>
