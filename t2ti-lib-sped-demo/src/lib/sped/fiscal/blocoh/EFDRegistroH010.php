<?php
/*******************************************************************************
Title: T2Ti ERP Fenix
Description: Model relacionado ao SPED Fiscal

The MIT License

Copyright: Copyright (C) 2020 T2Ti.COM


Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
copies of the to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

The author may be contacted at: t2ti.com@gmail.com


@author Albert Eije (alberteije@gmail.com)
@version 1.0.0
*******************************************************************************/
declare(strict_types=1);

class EFDRegistroH010  {
    
    private $codItem; // Código do item (campo 02 do Registro 0200)
    private $unid; // Unidade do item
    private $qtd; // Quantidade do item
    private $vlUnit; // Valor unitário do item
    private $vlItem; // Valor do item
    private $indProp; // Indicador de propriedade/posse do item
    private $codPart; // Código do participante (campo 02 do Registro 0150)
    private $txtCompl; // Descrição complementar
    private $codCta; // Código da conta analítica contábil debitada/creditada

    /**
     * @return the codItem
     */
    public function getCodItem() {
        return $this->codItem;
    }

    /**
     * @param codItem the codItem to set
     */
    public function setCodItem($codItem) {
        $this->codItem = $codItem;
    }

    /**
     * @return the unid
     */
    public function getUnid() {
        return $this->unid;
    }

    /**
     * @param unid the unid to set
     */
    public function setUnid($unid) {
        $this->unid = $unid;
    }

    /**
     * @return the qtd
     */
    public function  getQtd() {
        return $this->qtd;
    }

    /**
     * @param qtd the qtd to set
     */
    public function setQtd($qtd) {
        $this->qtd = $qtd;
    }

    /**
     * @return the vlUnit
     */
    public function  getVlUnit() {
        return $this->vlUnit;
    }

    /**
     * @param vlUnit the vlUnit to set
     */
    public function setVlUnit($vlUnit) {
        $this->vlUnit = $vlUnit;
    }

    /**
     * @return the vlItem
     */
    public function  getVlItem() {
        return $this->vlItem;
    }

    /**
     * @param vlItem the vlItem to set
     */
    public function setVlItem($vlItem) {
        $this->vlItem = $vlItem;
    }

    /**
     * @return the indProp
     */
    public function getIndProp() {
        return $this->indProp;
    }

    /**
     * @param indProp the indProp to set
     */
    public function setIndProp($indProp) {
        $this->indProp = $indProp;
    }

    /**
     * @return the codPart
     */
    public function getCodPart() {
        return $this->codPart;
    }

    /**
     * @param codPart the codPart to set
     */
    public function setCodPart($codPart) {
        $this->codPart = $codPart;
    }

    /**
     * @return the txtCompl
     */
    public function getTxtCompl() {
        return $this->txtCompl;
    }

    /**
     * @param txtCompl the txtCompl to set
     */
    public function setTxtCompl($txtCompl) {
        $this->txtCompl = $txtCompl;
    }

    /**
     * @return the codCta
     */
    public function getCodCta() {
        return $this->codCta;
    }

    /**
     * @param codCta the codCta to set
     */
    public function setCodCta($codCta) {
        $this->codCta = $codCta;
    }
}
