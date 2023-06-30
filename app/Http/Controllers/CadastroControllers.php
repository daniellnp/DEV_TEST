<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\Contato;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegisteredEmail;
use App\User;
use Illuminate\Mail\MailableContract;
class CadastroControllers extends Controller
{
    public function index(){

        $contatos = Contato::all();   
        return view("cadastro",['contatos'=>$contatos]);
          
    }

    public function add(Request $request){
        
        $array = array(
            'name'      => $request->name,
            'email'     => $request->email, 
            'telefone'  => $request->telefone ,
            'cep'       => $request->cep ,
            'estado'    => $request->estado ,
            'cidade'    => $request->cidade, 
            'bairro'    => $request->bairro ,
            'endereco'  => $request->endereco, 
            'numero'    => $request->numero ,
            'complemento' => $request->complemento 
            
        );

        $email =$request->name;
        Contato::create($array);
        #Session::flash('msg_update','Cadastrado com Sucesso!')
        $viewemail = new UserRegisteredEmail();
        $viewemail->build($array);
        //send(\Illuminate\Contracts\Mail\Mailable|string|array $view, array $data = [], \Closure|string $callback = null)
        
        //Mail::to($email)->send(MailableContract::class,"",[$viewemail],[$array],null);
        //mail($email,"E-mail de Cadastro","Cadastro feito com sucesso!");
        $encoding = "utf-8";
        $mail_subject = "";
        $subject_preferences = array(
                    "input-charset" => $encoding,
                    "output-charset" => $encoding,
                    "line-length" => 76,
                    "line-break-chars" => "\r\n");
        $to = $email;
        $subject = "E-mail de Cadastro";
        $txt     = "Cadastro feito com sucesso!";
        $header  = "From: daniellnp@gmail.com" . "\r\n" ;
        $header .= "Content-type: text/html; charset=".$encoding." \r\n";
        $header .= "MIME-Version: 1.0 \r\n";
        $header .= "Content-Transfer-Encoding: 8bit \r\n";
        $header .= "Date: ".date("r (T)")." \r\n";
        $header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);
        //mail($to,$subject,$txt,$header);


        return Redirect::to("/cad");
       

    }

    public function edit($id){

        $cont = Contato::find($id);

        $lista = $cont->all();   
   
        return view("cadastro",['contatos'=>$lista,'edit'=>$cont]);
    }

    public function update(Request $request){

        $array = array(
            'id'        => $request->id,
            'name'      => $request->name,
            'email'     => $request->email, 
            'telefone'  => $request->telefone ,
            'cep'       => $request->cep ,
            'estado'    => $request->estado ,
            'cidade'    => $request->cidade, 
            'bairro'    => $request->bairro ,
            'endereco'  => $request->endereco, 
            'numero'    => $request->numero ,
            'complemento' => $request->complemento 
            
        );

      
        $cont = Contato::find($request->id);
        $cont->update( $array);
        #Session::flash('msg_update','Atualizado com Sucesso!')
        return Redirect::to("/cad");
    }

    public function delete($id){
        
        $cont = Contato::find($id);
        $cont->delete();
        #Session::flash('msg_update','Deletado com Sucesso!')
        return Redirect::to("/cad");

    }

}
