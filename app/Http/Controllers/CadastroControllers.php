<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Contato;
use App\Mail\UserRegisteredEmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
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
        Contato::create($array);
        //$this->email($array);
        return Redirect::to("/cad");
       

    }
    public function email($array){
        require_once('class.phpmailer.php'); //chama a classe de onde você a colocou.

        $mail = new PHPMailer(); // instancia a classe PHPMailer

        $mail->IsSMTP();

        //configuração do gmail
        $mail->Port = '465'; //porta usada pelo gmail.
        $mail->Host = 'smtp.gmail.com'; 
        $mail->IsHTML(true); 
        $mail->Mailer = 'smtp'; 
        $mail->SMTPSecure = 'ssl';

        //configuração do usuário do gmail
        $mail->SMTPAuth = true; 
        $mail->Username = 'daniellnp@gmail.com'; // usuario gmail.   
        $mail->Password = '*********'; // senha do email.

        $mail->SingleTo = true; 

        // configuração do email a ver enviado.
        $mail->From = "Cadastro feito com sucesso!"; 
        $mail->FromName = "Daniel Lopes Barreiros."; 

        $mail->addAddress("daniellnp@gmail.com"); // email do destinatario.

        $mail->Subject = "Cadastro feito com sucesso!."; 
        $mail->Body = "Cadastro feito com sucesso!.";

        if(!$mail->Send())
            echo "Erro ao enviar Email:" . $mail->ErrorInfo;
        #$para_email =$array['email'];
        #Session::flash('msg_update','Cadastrado com Sucesso!')
       
        
        // $subject = "E-mail de Cadastro";
        //$txt     = "Cadastro feito com sucesso!";
        //$header  = "From: daniellnp@gmail.com" . "\r\n" ;
        //$header .= "Content-type: text/html; charset=".$encoding." \r\n";
        //$header .= "MIME-Version: 1.0 \r\n";
        //$header .= "Content-Transfer-Encoding: 8bit \r\n";
        //$header .= "Date: ".date("r (T)")." \r\n";
        //$header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);
        //-----
       
        //mail($to,$subject,$txt,$header)
       
        $view =  "mail";
        $to_email   = "daniellnp@gmail.com";
        #$this->from_email = "daniellnp@gmail.com";
        #$this->From_name  = "Daniel Lopes Barreiros";
        $message = "Line 1\r\nLine 2\r\nLine 3";

        // In case any of our lines are larger than 70 characters, we should use wordwrap()
        $message = wordwrap($message, 70, "\r\n");

        // Send
        mail($to_email, 'My Subject teste site', $message);
        #view($view,['contato'=>$array['name']]));
        #Mail::Send($view,['curso'=>'eloquent'],function($m){

        #   #$m->from($this->from_email,$this->from_name);
         #   $m->to($this->to_email);
        #});
    }
   
    public function getApiCepJson($cep){
        $url = "https://cep.awesomeapi.com.br/json/".$cep;
        
        return Http::get(url:$url)->json();
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
