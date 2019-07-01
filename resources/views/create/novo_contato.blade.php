@extends('layouts.main')

@section('content-title')
    Novo contato
@endsection


@section('content')

<form action="{{route('contato.store')}}" method="POST" id="myForm">
    @csrf
    <div class="card mx-auto" style="width:1000px">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <label>Nome</label>    
                    <input type="text" class="form-control" name="nome" id="" required>
                </div>
                <div class="col-6">                    
                    <label>Email</label>    
                    <input type="email" class="form-control" name="email" id="" required>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <label>telefone</label>    
                    <input type="text" class="form-control tel" name="telefone" id="telefone"  pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" required>
                    <small>Com ddd</small>
                </div>
                <div class="col-2">
                    <label>CEP</label>    
                    <input type="text" class="form-control tel" name="cep" id="cep"  pattern="[0-9]{2}\.[0-9]{3}-[0-9]{3}" required>                     
                </div>
                <div class="col-4">
                    <label>Endereço</label>    
                    <input type="text" class="form-control tel" name="endereco" id="endereco" required>  
                </div>
                <div class="col-3">
                    <label>Complemento</label>    
                    <input type="text" class="form-control tel" name="complemento" id="complemento" required>  
                </div>
                <div class="col-1">
                    <label>Numero</label>    
                    <input type="text" class="form-control tel" name="numero" id="numero" required>  
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label>UF</label>
                    <input type="text" maxlength="2" class="form-control tel" name="uf" id="uf" required>  
                </div>              
                <div class="col-5">
                    <label>cidade</label>
                    <input type="text" class="form-control tel" name="cidade" id="cidade" required>  
                </div>
                <div class="col-4">
                    <label>bairro</label>
                    <input type="text" class="form-control tel" name="bairro" id="bairro" required>  
                </div>                
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Enviar</button>
            <a class="btn btn-info" href="{{route('home')}}">Voltar</a>
        </div>
    </div>
</form>
@endsection

@section('js')
@if (session()->has("error"))
    <script>alertInfo({{session()->get("error")}})</script>
@endif
@endsection