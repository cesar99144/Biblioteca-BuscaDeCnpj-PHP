# Biblioteca-BuscaDeCnpj-PHP
 Biblioteca para realizar a busca de informações de um cnpj através do <a>receitaws.com.br</a>

<h3>Instalação</h3>
<blockquote>O projeto está disponível no Packagist, onde para fazer a instalação via Composer basta apenas adicionar ao arquivo composer.json do seu projeto: 

<code>"require": {
         "cesarferreira/cnpj-receitaws" : "dev-main"
    }</code>

</blockquote>

<a href="https://packagist.org/packages/cesarferreira/cnpj-receitaws">Página no packagist</a>

<blockquote>
       É necessário ter o curl instalado (em sistemas operacionais linux por exemplo). E nos demais ter as extensões <code>extension=curl.so</code> <code>extension=curl</code> ativados no arquivo ini do seu php. <a href="https://www.php.net/manual/pt_BR/curl.installation.php">Como aplicar os procedimentos de acordo com seu sistema operacional</a>
</blockquote>

<h3>Como usar:</h3>

<p>Instanciar a classe</p>
<code>
   
    <?php

        require 'vendor/autoload.php';

        use lib\consulta\Cnpj;

        $cnpj= new Cnpj();
        $cnpj->cnpjBusca('21416530000195');
        $cnpj->buscar();

    ?>
</code>

<p>Exemplo de retorno do dados nos values dos inputs de um form:</p>
<code>

    <body>
        <form>
            <input type="text" value="<?php echo $cnpj->Nome(); ?>">
            <input type="text" value="<?php echo $cnpj->atividadePrincipal(); ?>">    
            <input type="text" value="<?php echo $cnpj->telefone(); ?>">
        </form>  
    </body>
</code>

<p>Em tags de texto:</p>
<code>

    <h3><?php echo $cnpj->Nome(); ?></h3>
    <h3><?php echo $cnpj->atividadePrincipal(); ?></h3>
    <h3><?php echo $cnpj->telefone(); ?></h3>

</code>

<p>Os seguintes dados estão disponíveis:</p>
<ul>
  <li>$cnpj->Nome()</li>
  <li>$cnpj->atividadePrincipal()</li>
  <li>$cnpj->codigoAtividadePrincipal()</li>
  <li>$cnpj->dataSituacao()</li>
  <li>$cnpj->uf()</li>
  <li>$cnpj->telefone()</li>
  <li>$cnpj->atividadesSecundarias()</li>
  <li>$cnpj->situacao()</li>
  <li>$cnpj->bairro()</li>
  <li>$cnpj->logradouro()</li>
  <li>$cnpj->cep()</li>
  <li>$cnpj->municipio()</li>
  <li>$cnpj->porte()</li>
  <li>$cnpj->naturezaJuridica()</li>
  <li>$cnpj->fantasia()</li>
  <li>$cnpj->capital_social()</li>
</ul>