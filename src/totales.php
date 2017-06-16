<?php

namespace ctala\Facto;

class totales
{

    /**
     * @var string $descuentorecargo_global_tipo
     */
    protected $descuentorecargo_global_tipo = null;

    /**
     * @var float $descuentorecargo_global_valor
     */
    protected $descuentorecargo_global_valor = null;

    /**
     * @var int $total_exento
     */
    protected $total_exento = null;

    /**
     * @var int $total_afecto
     */
    protected $total_afecto = null;

    /**
     * @var int $total_iva
     */
    protected $total_iva = null;

    /**
     * @var int $total_final
     */
    protected $total_final = null;

    /**
     * @param string $descuentorecargo_global_tipo
     * @param float $descuentorecargo_global_valor
     * @param int $total_exento
     * @param int $total_afecto
     * @param int $total_iva
     * @param int $total_final
     */
    public function __construct($descuentorecargo_global_tipo, $descuentorecargo_global_valor, $total_exento, $total_afecto, $total_iva, $total_final)
    {
      $this->descuentorecargo_global_tipo = $descuentorecargo_global_tipo;
      $this->descuentorecargo_global_valor = $descuentorecargo_global_valor;
      $this->total_exento = $total_exento;
      $this->total_afecto = $total_afecto;
      $this->total_iva = $total_iva;
      $this->total_final = $total_final;
    }

    /**
     * @return string
     */
    public function getDescuentorecargo_global_tipo()
    {
      return $this->descuentorecargo_global_tipo;
    }

    /**
     * @param string $descuentorecargo_global_tipo
     * @return \WSDL\Facto\totales
     */
    public function setDescuentorecargo_global_tipo($descuentorecargo_global_tipo)
    {
      $this->descuentorecargo_global_tipo = $descuentorecargo_global_tipo;
      return $this;
    }

    /**
     * @return float
     */
    public function getDescuentorecargo_global_valor()
    {
      return $this->descuentorecargo_global_valor;
    }

    /**
     * @param float $descuentorecargo_global_valor
     * @return \WSDL\Facto\totales
     */
    public function setDescuentorecargo_global_valor($descuentorecargo_global_valor)
    {
      $this->descuentorecargo_global_valor = $descuentorecargo_global_valor;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotal_exento()
    {
      return $this->total_exento;
    }

    /**
     * @param int $total_exento
     * @return \WSDL\Facto\totales
     */
    public function setTotal_exento($total_exento)
    {
      $this->total_exento = $total_exento;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotal_afecto()
    {
      return $this->total_afecto;
    }

    /**
     * @param int $total_afecto
     * @return \WSDL\Facto\totales
     */
    public function setTotal_afecto($total_afecto)
    {
      $this->total_afecto = $total_afecto;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotal_iva()
    {
      return $this->total_iva;
    }

    /**
     * @param int $total_iva
     * @return \WSDL\Facto\totales
     */
    public function setTotal_iva($total_iva)
    {
      $this->total_iva = $total_iva;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotal_final()
    {
      return $this->total_final;
    }

    /**
     * @param int $total_final
     * @return \WSDL\Facto\totales
     */
    public function setTotal_final($total_final)
    {
      $this->total_final = $total_final;
      return $this;
    }

}
