<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CadastroControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_lista()
    {
        $response = $this->get('/cad');


        $response->assertStatus(302);
    }
    public function test_add()
    {   
        $array = array(
            'name'      => "name",
            'email'     => "email@email.com",
            'telefone'  => "11987654321" ,
            'cep'       => "09550250" ,
            'estado'    => "SP" ,
            'cidade'    => "São Caetano Do Sul", 
            'bairro'    => "Santa Paula" ,
            'endereco'  => "rua alegre", 
            'numero'    => "156",
            'complemento' => "ap141 t2"
            
        );
        $response = $this->post('/add/',$array);

        $response->assertStatus(302);
    }
    public function test_edit()
    {
        $response = $this->get('/1/edit');

        $response->assertStatus(302);
    }
    public function test_update()
    {
        $array = array(
            'name'      => "name",
            'email'     => "email@email.com",
            'telefone'  => "11987654321" ,
            'cep'       => "09550250" ,
            'estado'    => "SP" ,
            'cidade'    => "São Caetano Do Sul", 
            'bairro'    => "Santa Paula" ,
            'endereco'  => "rua alegre", 
            'numero'    => "156",
            'complemento' => "ap141 t2"
            
        );
        $response = $this->post('/update',$array);

        $response->assertStatus(302);
    }
    public function test_delete()
    {
        $response = $this->get('/73/delete');

        $response->assertStatus(405);
    }
    public function getApiCepJson()
    {
        $response = $this->get('/apiCepJson/09550250');

        $response->assertStatus(302);
    }
}
