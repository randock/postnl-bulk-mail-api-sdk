<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PayerPartyBaseType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PayerPartyBaseType
 * @subpackage Structs
 */
class PayerPartyBaseType extends PartyBaseType
{
    /**
     * The BankAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\BankAccountType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\BankAccountType $BankAccount = null;
    /**
     * Constructor method for PayerPartyBaseType
     * @uses PayerPartyBaseType::setBankAccount()
     * @param \Randock\PostNL\BulkMailApi\StructType\BankAccountType $bankAccount
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\BankAccountType $bankAccount = null)
    {
        $this
            ->setBankAccount($bankAccount);
    }
    /**
     * Get BankAccount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\BankAccountType|null
     */
    public function getBankAccount(): ?\Randock\PostNL\BulkMailApi\StructType\BankAccountType
    {
        return isset($this->BankAccount) ? $this->BankAccount : null;
    }
    /**
     * Set BankAccount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\BankAccountType $bankAccount
     * @return \Randock\PostNL\BulkMailApi\StructType\PayerPartyBaseType
     */
    public function setBankAccount(?\Randock\PostNL\BulkMailApi\StructType\BankAccountType $bankAccount = null): self
    {
        if (is_null($bankAccount) || (is_array($bankAccount) && empty($bankAccount))) {
            unset($this->BankAccount);
        } else {
            $this->BankAccount = $bankAccount;
        }
        
        return $this;
    }
}
