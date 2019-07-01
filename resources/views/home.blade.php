@extends('layouts.main')

@section('content-title')
    Home
@endsection

@section('style')
    <style>
        .hidden{
            display: none;
        }
    </style>
@endsection

@section('content')
<div class="card" style="">
    <div class="card-body">
        <div class="row">
            <div class="offset-9 col-3">
                <input type="text" name="search" class="form-control" id="search"><br>
            </div>
        </div>
        <table class="table table-bordered" id="mytable">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th style="width:20%">Cep</th>
                <th>Opções</th>
              </tr>
            </thead>
            <tbody>
                     @if (count($agendas) == 0)
                        <tr>
                          <td colspan="5">Você ainda não adicionou nenhum contato</td>
                        </tr>
                    @else
                    @foreach ($agendas as $agenda)
                        <tr>
                            <td>{{$agenda->nome}}</td>
                            <td>{{$agenda->email}}</td>
                            <td>{{$agenda->telefone}}</td>
                            <td>{{$agenda->enderecos->cep}}</td>
                            <td><a href="{{route('contato.edit',$agenda->id)}}" class="btn btn-success pull-left">Editar <i class="fas fa-edit"></i></a>
                                <a href="#" onclick="$('#delete_{{$agenda->id}}').submit()" class="btn btn-danger">Deletar <i class="fas fa-trash"></i></a></td>
                                <form action="{{route('contato.destroy',$agenda->id)}}" id="delete_{{$agenda->id}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                </form>
                        </tr>
                        @endforeach
                    @endif
            </tbody>
          </table>
    </div>
    <div class="card-footer">
        <a href="{{route('novo_contato')}}" class="btn btn-primary">Adcionar <i class="fas fa-plus"></i></a>
    </div>
  </div>
@endsection
@section('js')
    @if(Session::has('sucesso'))
        <script>alertSuccess("{{Session::get('sucesso')}}")</script>
    @endif

  <script>
      $("#search").on('input',function(){
        var table = document.getElementsByTagName('table')[0];
        var row = table.rows;
        // console.log(table.rows[1].cells[0].textContent);
        for (let index = 1; index < row.length; index++) {
            const nome = row[index].cells[0].textContent;
            const email = row[index].cells[1].textContent;
            const linha = $("tr")[index];


            if(nome.toLowerCase().search($(this).val().toLowerCase()) == -1){
             if (email.toLowerCase().search($(this).val().toLowerCase()) == -1) {
                $(linha).addClass('hidden');
             }else{ $(linha).removeClass('hidden'); }
            }else{
                $(linha).removeClass('hidden');
            }

        }
      });
  </script>

@endsection
