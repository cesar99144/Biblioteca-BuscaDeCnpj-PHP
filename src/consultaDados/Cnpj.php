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
		$this->atividadePrincipal = $retorno['atividade_principal'][0]['text'];
		$this->codigoAtividadePrincipal = $retorno['atividade_principal'][0]['code'];
		$this->dataSituacao = $retorno['data_situacao'];
		$this->nome = $retorno['nome'];
		$this->uf = $retorno['uf'];
		$this->telefone = $retorno['telefone'];
		$this->atividadesSecundarias = $retorno['atividades_secundarias'][0]['text'];
		$this->situacao = $retorno['situacao'];
		$this->bairro = $retorno['bairro'];
		$this->logradouro = $retorno['logradouro'];
		$this->numero = $retorno['numero'];
		$this->cep = $retorno['cep'];
		$this->municipio = $retorno['municipio'];
		$this->porte = $retorno['porte'];
		$this->abertura = $retorno['abertura'];
		$this->naturezaJuridica = $retorno['natureza_juridica'];
		$this->fantasia = $retorno['fantasia'];
		$this->cnpjRetornado = $retorno['cnpj'];
		$this->capital_social = $retorno['capital_social'];

		

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