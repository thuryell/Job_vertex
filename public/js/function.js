  
    $("#telefone").mask("(00) 0000-00009")          
    $("#cep").mask("99.999-999");
    $("#cep").on('input',function(){
        if($(this).val().length == 10){
            GetEndereco($(this).cleanVal());
        }
    });

    function GetEndereco(cep) { 
        $.get("https://viacep.com.br/ws/"+cep+"/json").done(function(done){
            done.erro ? alertInfo('CEP não encontrado') : InsertDadosInput(done);
            
        }).fail(function(){
            alertInfo('Ocoreu um erro inexperado');
        });
    }
    function InsertDadosInput(json) {
        console.log(json);
        $("#bairro").val(json.bairro);
        $("#uf").val(json.uf);
        $("#endereco").val(json.logradouro);
        $("#complemento").val(json.complemento);
        $("#cidade").val(json.localidade);
    }
    $("#myForm").submit(function() {
        $("#telefone").unmask();
        $("#cep").unmask();
    });
