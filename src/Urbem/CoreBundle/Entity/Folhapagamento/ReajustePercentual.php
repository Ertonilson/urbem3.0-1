<?php
 
namespace Urbem\CoreBundle\Entity\Folhapagamento;

/**
 * ReajustePercentual
 */
class ReajustePercentual
{
    /**
     * PK
     * @var integer
     */
    private $codReajuste;

    /**
     * @var integer
     */
    private $valor;

    /**
     * OneToOne (owning side)
     * @var \Urbem\CoreBundle\Entity\Folhapagamento\Reajuste
     */
    private $fkFolhapagamentoReajuste;


    /**
     * Set codReajuste
     *
     * @param integer $codReajuste
     * @return ReajustePercentual
     */
    public function setCodReajuste($codReajuste)
    {
        $this->codReajuste = $codReajuste;
        return $this;
    }

    /**
     * Get codReajuste
     *
     * @return integer
     */
    public function getCodReajuste()
    {
        return $this->codReajuste;
    }

    /**
     * Set valor
     *
     * @param integer $valor
     * @return ReajustePercentual
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
        return $this;
    }

    /**
     * Get valor
     *
     * @return integer
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * OneToOne (owning side)
     * Set FolhapagamentoReajuste
     *
     * @param \Urbem\CoreBundle\Entity\Folhapagamento\Reajuste $fkFolhapagamentoReajuste
     * @return ReajustePercentual
     */
    public function setFkFolhapagamentoReajuste(\Urbem\CoreBundle\Entity\Folhapagamento\Reajuste $fkFolhapagamentoReajuste)
    {
        $this->codReajuste = $fkFolhapagamentoReajuste->getCodReajuste();
        $this->fkFolhapagamentoReajuste = $fkFolhapagamentoReajuste;
        return $this;
    }

    /**
     * OneToOne (owning side)
     * Get fkFolhapagamentoReajuste
     *
     * @return \Urbem\CoreBundle\Entity\Folhapagamento\Reajuste
     */
    public function getFkFolhapagamentoReajuste()
    {
        return $this->fkFolhapagamentoReajuste;
    }
}
