<?php

use App\Teste\Domain\Teste;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureExampleTwoContext implements Context
{
    private $entidade;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->entidade = new Teste();
    }
    

    /**
     * @When tentar passar os números :arg1 :arg2
     */
    public function tentarPassarOsNumeros($numberOne, $numberTwo)
    {
        $this->entidade->setNumberOne($numberOne);
        $this->entidade->setNumberTwo($numberTwo);
    }

    /**
     * @Then se eu validar será negativo e retornará a mensagem de erro :arg1
     */
    public function seEuValidarSeraNegativoERetornaraAMensagemDeErro($mensagem)
    {
        \PHPUnit\Framework\assertEquals($mensagem, $this->entidade->existeNumerosNegativos());
    }
}
