<?php

    namespace App\classes;

    use App\models\Agenda;
    use App\models\Endereco;
    use Illuminate\Http\Request;
    use Illuminate\Validation\ValidationException;

    trait AgendaClasse{

        public function SeparaRequestCreate(Request $request)
        {
            $agenda = $this->SeparaAgenda($request);
            $agenda['user_id'] = auth()->user()->id;
            $endereco = $this->SeparaEndereco($request);
            $this->StoreEndereco($endereco,$this->StoreAgenta($agenda));
        }

        public function SeparaRequestUpdate(Request $request,$id)
        {   $this->ValidaRequest($request);

            $agenda = $this->SeparaAgenda($request);
            $agenda['user_id'] = auth()->user()->id;
            $endereco = $this->SeparaEndereco($request);
            $endereco_id = Agenda::find($id);
            $this->UpdateAgenda($agenda,$id);
            $this->UpdateEndereco($endereco,$id,$endereco_id->enderecos->id);
        }

        protected function SeparaAgenda(Request $request){
            return $request->except(['cep','endereco','complemento','numero','uf','cidade','bairro','_token']);
        }

        protected function SeparaEndereco(Request $request){
            return $request->except(['_token','nome','email','telefone']);
        } 

        protected function StoreAgenta($agenda){
            try {
              return $sql_agenda = Agenda::create($agenda);    
            } catch (\Illuminate\Database\QueryException $ex) {
                return redirect()->route('novo_contato', ['error' => 'Ocoreu um erro']);
            }
        }
        protected function StoreEndereco($endereco,$agenda){
            $endereco['agenda_id'] = $agenda->id;
            
            try {                
                Endereco::create($endereco);
              } catch (\Illuminate\Database\QueryException $ex) {
                  return redirect()->route('novo_contato', ['error' => 'Ocoreu um erro']);
              }
        }

        protected function UpdateAgenda($agenda,$id)
        {   
            try {        
                return Agenda::where('id',$id)->update(
                    [
                        'nome'=>$agenda['nome'],
                        'email'=>$agenda['email'],
                        'telefone'=>$agenda['telefone'],
                    ]);
              } catch (\Illuminate\Database\QueryException $ex) {
                  return redirect()->route('home', ['error' => 'Ocoreu um erro']);
              }
        }

        protected function UpdateEndereco($endereco,$agenda,$id)
        {
            $endereco['agenda_id'] = $agenda;
            try { 
                Endereco::where('id',$id)->update([
                    'endereco' =>$endereco['endereco'],
                    'complemento'=>$endereco['complemento'],
                    'bairro'=>$endereco['bairro'],
                    'cidade'=>$endereco['cidade'],
                    'uf'=>$endereco['uf'],
                    'cep'=>$endereco['cep'],
                    'numero'=>$endereco['numero'],
                ]);
              } catch (\Illuminate\Database\QueryException $ex) {
                  return redirect()->route('home', ['error' => 'Ocoreu um erro']);
              }
        }

        protected function ValidaRequest(Request $request){
            $request->validate([                
                'nome'=>'required',
                'telefone' =>"required|numeric",
                'cep'=>'required|numeric',
                'endereco'=>'required',
                'email'=>'required|email',
                'complemento'=>'required',
                'numero'=>'numeric',
                'uf'=>'required|max:2',
                'cidade'=>'required',
                'bairro'=>'required',
            ]);
        }
    }
?>