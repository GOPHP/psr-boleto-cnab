<?php
namespace PsrBoleto;

interface BeneficiarioBase
{
    /**
     * @return string
     */
    public function getCpfCnpj();

    /**
     * @return string
     */
    public function getRazaoSocial();

    /**
     * @return string
     */
    public function getCidade();

    /**
     * @return string
     */
    public function getEstado();

    /**
     * @return string
     */
    public function getEndereco();
}
