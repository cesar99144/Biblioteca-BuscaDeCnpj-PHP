<?php

namespace lib\consulta;

class Cnpj{

    private $cnpj;
	private $nome;
	private $atividadePrincipal;
    private $codigoAtividadePrincipal;
    private $dataSituacao;
    private $uf;
    private $telefone;
    private $atividadesSecundarias;
    private $situacao;
    private $bairro;
    private $logradouro;
    private $numero;
    private $cep;
    private $municipio;
    private $porte;
    private $abertura;
    private $naturezaJuridica;
    private $fantasia;
    private $capital_social;
    private $cnpjRetornado;

	//Criando Comunicação cURL

	function buscar(){

		$url = "https://www.receitaws.com.br/v1/cnpj/".$this->cnpj;

        //Faz a busca dos dados pelo curl
		$ch = curl_init($url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
		$retorno = json_decode(curl_exec($ch), true);

        //Atribui o resultado da busca nos atributos
		$this->atividadePrincipal = $retorno['atividade_principal'][0]['text']."<br>";
		$this->codigoAtividadePrincipal = $retorno['atividade_principal'][0]['code']."<br>";
		$this->dataSituacao = $retorno['data_situacao']."<br>";
		$this->nome = $retorno['nome']."<br>";
		$this->uf = $retorno['uf']."<br>";
		$this->telefone = $retorno['telefone']."<br>";
		$this->atividadesSecundarias = $retorno['atividades_secundarias'][0]['text']."<br>";
		$this->situacao = $retorno['situacao']."<br>";
		$this->bairro = $retorno['bairro']."<br>";
		$this->logradouro = $retorno['logradouro']."<br>";
		$this->numero = $retorno['numero']."<br>";
		$this->cep = $retorno['cep']."<br>";
		$this->municipio = $retorno['municipio']."<br>";
		$this->porte = $retorno['porte']."<br>";
		$this->abertura = $retorno['abertura']."<br>";
		$this->naturezaJuridica = $retorno['natureza_juridica']."<br>";
		$this->fantasia = $retorno['fantasia']."<br>";
		$this->cnpjRetornado = $retorno['cnpj']."<br>";
		$this->capital_social = $retorno['capital_social']."<br>";

		

	}


	public function cnpjBusca($cnpj){

		$this->cnpj = $cnpj;
	}

	public function Nome(){

		return $this->nome;
	}

	public function atividadePrincipal(){

		return $this->atividadePrincipal;
	}

	public function codigoAtividadePrincipal(){

		return $this->codigoAtividadePrincipal;
	}

	public function dataSituacao(){

		return $this->dataSituacao;
	}

	public function uf(){

		return $this->uf;
	}

	public function telefone(){

		return $this->telefone;
	}

	public function atividadesSecundarias(){

		return $this->atividadesSecundarias;
	}

	public function situacao(){

		return $this->situacao;
	}

	public function bairro(){

		return $this->bairro;
	}
    
	public function logradouro(){

		return $this->logradouro;
	}

	public function numero(){

		return $this->numero;
	}

	public function cep(){

		return $this->cep;
	}
    
	public function municipio(){

		return $this->municipio;
	}

	public function porte(){

		return $this->porte;
	}

	public function naturezaJuridica(){

		return $this->naturezaJuridica;
	}

	public function fantasia(){

		return $this->fantasia;
	}

	public function capital_social(){

		return $this->naturezaJuridica;
	}

}