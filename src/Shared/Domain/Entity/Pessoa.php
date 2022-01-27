<?php

declare(strict_types=1);

namespace App\Shared\Domain\Entity;

use App\Shared\Domain\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Gravasituacao
 * @ORM\Table(schema="glb", name="pessoa")
 * @ORM\Entity 
*/
final class Pessoa extends Entity {

    /**
     * @var integer
     * @ORM\Id 
     * @ORM\Column(name="idcnpj_cpf", type="integer")
    */
    protected $idcnpj_cpf;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipopessoa", type="integer")
    */
    protected $idtipopessoa;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipocontribuinte", type="integer")
    */
    protected $idtipocontribuinte;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipocadastro", type="integer")
    */
    protected $idtipocadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idsituacaopessoa", type="integer")
    */
    protected $idsituacaopessoa;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtiporesidencia", type="integer")
    */
    protected $idtiporesidencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoestadocivil", type="integer")
    */
    protected $idtipoestadocivil;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipoocupacao", type="integer")
    */
    protected $idtipoocupacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtiposexo", type="integer")
    */
    protected $idtiposexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idgrupo", type="integer")
    */
    protected $idgrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idconjuge", type="integer")
    */
    protected $idconjuge;

    /**
     * @var integer
     *
     * @ORM\Column(name="idtipolimite", type="integer")
    */
    protected $idtipolimite;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj_cpf", type="string")
    */
    protected $cnpj_cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string")
    */
    protected $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="nomefantasia", type="string")
    */
    protected $nomefantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="cce_rg", type="string")
    */
    protected $cce_rg;

    /**
     * @var string
     *
     * @ORM\Column(name="datacriacao", type="string")
    */
    protected $datacriacao;

    /**
     * @var string
     *
     * @ORM\Column(name="datacadastro", type="string")
    */
    protected $datacadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="dataalteracao", type="string")
    */
    protected $dataalteracao;

    /**
     * @var integer
     *
     * @ORM\Column(name="fornecedor", type="integer")
    */
    protected $fornecedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="cliente", type="integer")
    */
    protected $cliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="cpfgerado", type="integer")
    */
    protected $cpfgerado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ultimaconsultaspc", type="date")
    */
    protected $ultimaconsultaspc;

    /**
     * @var string
     *
     * @ORM\Column(name="valorlimitecredito", type="string")
    */
    protected $valorlimitecredito;

    /**
     * @var integer
     *
     * @ORM\Column(name="gerarboleto", type="integer")
    */
    protected $gerarboleto;

    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer")
    */
    protected $idusuario;

    /**
     * @var integer
     *
     * @ORM\Column(name="atualizarcadastro", type="integer")
    */
    protected $atualizarcadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="idnaturezaretencaofonte", type="integer")
    */
    protected $idnaturezaretencaofonte;

    /**
     * @var string
     *
     * @ORM\Column(name="chavemd5", type="string")
    */
    protected $chavemd5;

    /**
     * @var integer
     *
     * @ORM\Column(name="aposentado", type="integer")
    */
    protected $aposentado;

    /**
     * @var integer
     *
     * @ORM\Column(name="pensionista", type="integer")
    */
    protected $pensionista;

    /**
     * @var string
     *
     * @ORM\Column(name="inscricaosuframa", type="string")
    */
    protected $inscricaosuframa;

    /**
     * @var string
     *
     * @ORM\Column(name="limitecreditoadicional", type="string")
    */
    protected $limitecreditoadicional;

    /**
     * @var string
     *
     * @ORM\Column(name="inscricaomunicipal", type="string")
    */
    protected $inscricaomunicipal;

    /**
     * @var string
     *
     * @ORM\Column(name="apelidoftp", type="string")
    */
    protected $apelidoftp;

    /**
     * @var integer
     *
     * @ORM\Column(name="aceite", type="integer")
    */
    protected $aceite;

    /**
     * @var integer
     *
     * @ORM\Column(name="identificador", type="integer")
    */
    protected $identificador;

    /**
     * @var integer
     *
     * @ORM\Column(name="emancipado", type="integer")
    */
    protected $emancipado;

    /**
     * Set idcnpj_cpf
     *
     * @param string $idcnpj_cpf
     *
     * @return Pessoa
    */
    public function setIdcnpj_cpf($idcnpj_cpf) {
        $this->idcnpj_cpf = $idcnpj_cpf;
        return $this;
    }

    /**
     * Get idcnpj_cpf
     *
     * return integer;
     *
    */
    public function getIdcnpj_cpf() {
        return $this->idcnpj_cpf;
    }

    /**
     * Set idtipopessoa
     *
     * @param string $idtipopessoa
     *
     * @return Pessoa
    */
    public function setIdtipopessoa($idtipopessoa) {
        $this->idtipopessoa = $idtipopessoa;
        return $this;
    }

    /**
     * Get idtipopessoa
     *
     * return integer;
     *
    */
    public function getIdtipopessoa() {
        return $this->idtipopessoa;
    }

    /**
     * Set idtipocontribuinte
     *
     * @param string $idtipocontribuinte
     *
     * @return Pessoa
    */
    public function setIdtipocontribuinte($idtipocontribuinte) {
        $this->idtipocontribuinte = $idtipocontribuinte;
        return $this;
    }

    /**
     * Get idtipocontribuinte
     *
     * return integer;
     *
    */
    public function getIdtipocontribuinte() {
        return $this->idtipocontribuinte;
    }

    /**
     * Set idtipocadastro
     *
     * @param string $idtipocadastro
     *
     * @return Pessoa
    */
    public function setIdtipocadastro($idtipocadastro) {
        $this->idtipocadastro = $idtipocadastro;
        return $this;
    }

    /**
     * Get idtipocadastro
     *
     * return integer;
     *
    */
    public function getIdtipocadastro() {
        return $this->idtipocadastro;
    }

    /**
     * Set idsituacaopessoa
     *
     * @param string $idsituacaopessoa
     *
     * @return Pessoa
    */
    public function setIdsituacaopessoa($idsituacaopessoa) {
        $this->idsituacaopessoa = $idsituacaopessoa;
        return $this;
    }

    /**
     * Get idsituacaopessoa
     *
     * return integer;
     *
    */
    public function getIdsituacaopessoa() {
        return $this->idsituacaopessoa;
    }

    /**
     * Set idtiporesidencia
     *
     * @param string $idtiporesidencia
     *
     * @return Pessoa
    */
    public function setIdtiporesidencia($idtiporesidencia) {
        $this->idtiporesidencia = $idtiporesidencia;
        return $this;
    }

    /**
     * Get idtiporesidencia
     *
     * return integer;
     *
    */
    public function getIdtiporesidencia() {
        return $this->idtiporesidencia;
    }

    /**
     * Set idtipoestadocivil
     *
     * @param string $idtipoestadocivil
     *
     * @return Pessoa
    */
    public function setIdtipoestadocivil($idtipoestadocivil) {
        $this->idtipoestadocivil = $idtipoestadocivil;
        return $this;
    }

    /**
     * Get idtipoestadocivil
     *
     * return integer;
     *
    */
    public function getIdtipoestadocivil() {
        return $this->idtipoestadocivil;
    }

    /**
     * Set idtipoocupacao
     *
     * @param string $idtipoocupacao
     *
     * @return Pessoa
    */
    public function setIdtipoocupacao($idtipoocupacao) {
        $this->idtipoocupacao = $idtipoocupacao;
        return $this;
    }

    /**
     * Get idtipoocupacao
     *
     * return integer;
     *
    */
    public function getIdtipoocupacao() {
        return $this->idtipoocupacao;
    }

    /**
     * Set idtiposexo
     *
     * @param string $idtiposexo
     *
     * @return Pessoa
    */
    public function setIdtiposexo($idtiposexo) {
        $this->idtiposexo = $idtiposexo;
        return $this;
    }

    /**
     * Get idtiposexo
     *
     * return integer;
     *
    */
    public function getIdtiposexo() {
        return $this->idtiposexo;
    }

    /**
     * Set idgrupo
     *
     * @param string $idgrupo
     *
     * @return Pessoa
    */
    public function setIdgrupo($idgrupo) {
        $this->idgrupo = $idgrupo;
        return $this;
    }

    /**
     * Get idgrupo
     *
     * return integer;
     *
    */
    public function getIdgrupo() {
        return $this->idgrupo;
    }

    /**
     * Set idconjuge
     *
     * @param string $idconjuge
     *
     * @return Pessoa
    */
    public function setIdconjuge($idconjuge) {
        $this->idconjuge = $idconjuge;
        return $this;
    }

    /**
     * Get idconjuge
     *
     * return integer;
     *
    */
    public function getIdconjuge() {
        return $this->idconjuge;
    }

    /**
     * Set idtipolimite
     *
     * @param string $idtipolimite
     *
     * @return Pessoa
    */
    public function setIdtipolimite($idtipolimite) {
        $this->idtipolimite = $idtipolimite;
        return $this;
    }

    /**
     * Get idtipolimite
     *
     * return integer;
     *
    */
    public function getIdtipolimite() {
        return $this->idtipolimite;
    }

    /**
     * Set cnpj_cpf
     *
     * @param string $cnpj_cpf
     *
     * @return Pessoa
    */
    public function setCnpj_cpf($cnpj_cpf) {
        $this->cnpj_cpf = $cnpj_cpf;
        return $this;
    }

    /**
     * Get cnpj_cpf
     *
     * return string;
     *
    */
    public function getCnpj_cpf() {
        return $this->cnpj_cpf;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Pessoa
    */
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Get nome
     *
     * return string;
     *
    */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Set nomefantasia
     *
     * @param string $nomefantasia
     *
     * @return Pessoa
    */
    public function setNomefantasia($nomefantasia) {
        $this->nomefantasia = $nomefantasia;
        return $this;
    }

    /**
     * Get nomefantasia
     *
     * return string;
     *
    */
    public function getNomefantasia() {
        return $this->nomefantasia;
    }

    /**
     * Set cce_rg
     *
     * @param string $cce_rg
     *
     * @return Pessoa
    */
    public function setCce_rg($cce_rg) {
        $this->cce_rg = $cce_rg;
        return $this;
    }

    /**
     * Get cce_rg
     *
     * return string;
     *
    */
    public function getCce_rg() {
        return $this->cce_rg;
    }

    /**
     * Set datacriacao
     *
     * @param string $datacriacao
     *
     * @return Pessoa
    */
    public function setDatacriacao($datacriacao) {
        $this->datacriacao = $datacriacao;
        return $this;
    }

    /**
     * Get datacriacao
     *
     * return string;
     *
    */
    public function getDatacriacao() {
        return $this->datacriacao;
    }

    /**
     * Set datacadastro
     *
     * @param string $datacadastro
     *
     * @return Pessoa
    */
    public function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
        return $this;
    }

    /**
     * Get datacadastro
     *
     * return string;
     *
    */
    public function getDatacadastro() {
        return $this->datacadastro;
    }

    /**
     * Set dataalteracao
     *
     * @param string $dataalteracao
     *
     * @return Pessoa
    */
    public function setDataalteracao($dataalteracao) {
        $this->dataalteracao = $dataalteracao;
        return $this;
    }

    /**
     * Get dataalteracao
     *
     * return string;
     *
    */
    public function getDataalteracao() {
        return $this->dataalteracao;
    }

    /**
     * Set fornecedor
     *
     * @param string $fornecedor
     *
     * @return Pessoa
    */
    public function setFornecedor($fornecedor) {
        $this->fornecedor = $fornecedor;
        return $this;
    }

    /**
     * Get fornecedor
     *
     * return integer;
     *
    */
    public function getFornecedor() {
        return $this->fornecedor;
    }

    /**
     * Set cliente
     *
     * @param string $cliente
     *
     * @return Pessoa
    */
    public function setCliente($cliente) {
        $this->cliente = $cliente;
        return $this;
    }

    /**
     * Get cliente
     *
     * return integer;
     *
    */
    public function getCliente() {
        return $this->cliente;
    }

    /**
     * Set cpfgerado
     *
     * @param string $cpfgerado
     *
     * @return Pessoa
    */
    public function setCpfgerado($cpfgerado) {
        $this->cpfgerado = $cpfgerado;
        return $this;
    }

    /**
     * Get cpfgerado
     *
     * return integer;
     *
    */
    public function getCpfgerado() {
        return $this->cpfgerado;
    }

    /**
     * Set ultimaconsultaspc
     *
     * @param string $ultimaconsultaspc
     *
     * @return Pessoa
    */
    public function setUltimaconsultaspc($ultimaconsultaspc) {
        $this->ultimaconsultaspc = $ultimaconsultaspc;
        return $this;
    }

    /**
     * Get ultimaconsultaspc
     *
     * return string;
     *
    */
    public function getUltimaconsultaspc() {
        return $this->ultimaconsultaspc;
    }

    /**
     * Set valorlimitecredito
     *
     * @param string $valorlimitecredito
     *
     * @return Pessoa
    */
    public function setValorlimitecredito($valorlimitecredito) {
        $this->valorlimitecredito = $valorlimitecredito;
        return $this;
    }

    /**
     * Get valorlimitecredito
     *
     * return string;
     *
    */
    public function getValorlimitecredito() {
        return $this->valorlimitecredito;
    }

    /**
     * Set gerarboleto
     *
     * @param string $gerarboleto
     *
     * @return Pessoa
    */
    public function setGerarboleto($gerarboleto) {
        $this->gerarboleto = $gerarboleto;
        return $this;
    }

    /**
     * Get gerarboleto
     *
     * return integer;
     *
    */
    public function getGerarboleto() {
        return $this->gerarboleto;
    }

    /**
     * Set idusuario
     *
     * @param string $idusuario
     *
     * @return Pessoa
    */
    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
        return $this;
    }

    /**
     * Get idusuario
     *
     * return integer;
     *
    */
    public function getIdusuario() {
        return $this->idusuario;
    }

    /**
     * Set atualizarcadastro
     *
     * @param string $atualizarcadastro
     *
     * @return Pessoa
    */
    public function setAtualizarcadastro($atualizarcadastro) {
        $this->atualizarcadastro = $atualizarcadastro;
        return $this;
    }

    /**
     * Get atualizarcadastro
     *
     * return integer;
     *
    */
    public function getAtualizarcadastro() {
        return $this->atualizarcadastro;
    }

    /**
     * Set idnaturezaretencaofonte
     *
     * @param string $idnaturezaretencaofonte
     *
     * @return Pessoa
    */
    public function setIdnaturezaretencaofonte($idnaturezaretencaofonte) {
        $this->idnaturezaretencaofonte = $idnaturezaretencaofonte;
        return $this;
    }

    /**
     * Get idnaturezaretencaofonte
     *
     * return integer;
     *
    */
    public function getIdnaturezaretencaofonte() {
        return $this->idnaturezaretencaofonte;
    }

    /**
     * Set chavemd5
     *
     * @param string $chavemd5
     *
     * @return Pessoa
    */
    public function setChavemd5($chavemd5) {
        $this->chavemd5 = $chavemd5;
        return $this;
    }

    /**
     * Get chavemd5
     *
     * return string;
     *
    */
    public function getChavemd5() {
        return $this->chavemd5;
    }

    /**
     * Set aposentado
     *
     * @param string $aposentado
     *
     * @return Pessoa
    */
    public function setAposentado($aposentado) {
        $this->aposentado = $aposentado;
        return $this;
    }

    /**
     * Get aposentado
     *
     * return integer;
     *
    */
    public function getAposentado() {
        return $this->aposentado;
    }

    /**
     * Set pensionista
     *
     * @param string $pensionista
     *
     * @return Pessoa
    */
    public function setPensionista($pensionista) {
        $this->pensionista = $pensionista;
        return $this;
    }

    /**
     * Get pensionista
     *
     * return integer;
     *
    */
    public function getPensionista() {
        return $this->pensionista;
    }

    /**
     * Set inscricaosuframa
     *
     * @param string $inscricaosuframa
     *
     * @return Pessoa
    */
    public function setInscricaosuframa($inscricaosuframa) {
        $this->inscricaosuframa = $inscricaosuframa;
        return $this;
    }

    /**
     * Get inscricaosuframa
     *
     * return string;
     *
    */
    public function getInscricaosuframa() {
        return $this->inscricaosuframa;
    }

    /**
     * Set limitecreditoadicional
     *
     * @param string $limitecreditoadicional
     *
     * @return Pessoa
    */
    public function setLimitecreditoadicional($limitecreditoadicional) {
        $this->limitecreditoadicional = $limitecreditoadicional;
        return $this;
    }

    /**
     * Get limitecreditoadicional
     *
     * return string;
     *
    */
    public function getLimitecreditoadicional() {
        return $this->limitecreditoadicional;
    }

    /**
     * Set inscricaomunicipal
     *
     * @param string $inscricaomunicipal
     *
     * @return Pessoa
    */
    public function setInscricaomunicipal($inscricaomunicipal) {
        $this->inscricaomunicipal = $inscricaomunicipal;
        return $this;
    }

    /**
     * Get inscricaomunicipal
     *
     * return string;
     *
    */
    public function getInscricaomunicipal() {
        return $this->inscricaomunicipal;
    }

    /**
     * Set apelidoftp
     *
     * @param string $apelidoftp
     *
     * @return Pessoa
    */
    public function setApelidoftp($apelidoftp) {
        $this->apelidoftp = $apelidoftp;
        return $this;
    }

    /**
     * Get apelidoftp
     *
     * return string;
     *
    */
    public function getApelidoftp() {
        return $this->apelidoftp;
    }

    /**
     * Set aceite
     *
     * @param string $aceite
     *
     * @return Pessoa
    */
    public function setAceite($aceite) {
        $this->aceite = $aceite;
        return $this;
    }

    /**
     * Get aceite
     *
     * return integer;
     *
    */
    public function getAceite() {
        return $this->aceite;
    }

    /**
     * Set identificador
     *
     * @param string $identificador
     *
     * @return Pessoa
    */
    public function setIdentificador($identificador) {
        $this->identificador = $identificador;
        return $this;
    }

    /**
     * Get identificador
     *
     * return integer;
     *
    */
    public function getIdentificador() {
        return $this->identificador;
    }

    /**
     * Set emancipado
     *
     * @param string $emancipado
     *
     * @return Pessoa
    */
    public function setEmancipado($emancipado) {
        $this->emancipado = $emancipado;
        return $this;
    }

    /**
     * Get emancipado
     *
     * return integer;
     *
    */
    public function getEmancipado() {
        return $this->emancipado;
    }

}
