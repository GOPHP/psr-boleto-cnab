<?php
namespace PsrBoleto\CaixaSigcb;

use PsrBoleto\BeneficiarioBase;

interface Beneficiario extends BeneficiarioBase
{
    /**
     * @return string
     */
    public function getNossoNumero1();

    /**
     * @return string
     */
    public function getNossoNumero2();

    /**
     * @return string
     */
    public function getNossoNumero3();

    /**
     * @return string
     */
    public function getNossoNumeroConst1();

    /**
     * @return string
     */
    public function getNossoNumeroConst2();
}
