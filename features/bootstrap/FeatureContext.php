<?php

use App\Teste\Domain\Teste;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $entidade;

    public function __construct()
    {
        $this->entidade = new Teste();
    }

    /**
     * @When tentar passar na descricao :arg1
     */
    public function tentarPassarNaDescricao($descricao)
    {
        $this->entidade->setDescricao($descricao);
    }

    /**
     * @Then se validar vou receber a seguinte mensagem de erro :arg1
     */
    public function seValidarVouReceberASeguinteMensagemDeErro($mensagem)
    {
        \PHPUnit\Framework\assertEquals($mensagem, $this->entidade->validaDescricao());
    }

    /**
     * @Then se validar vou receber a seguinte mensagem de sucesso :arg1
     */
    public function seValidarVouReceberASeguinteMensagemDeSucesso($mensagem)
    {
        \PHPUnit\Framework\assertEquals($mensagem, $this->entidade->validaDescricao());
    }
}
