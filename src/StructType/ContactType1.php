<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactType1 StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ContactType1
 * @subpackage Structs
 */
class ContactType1 extends AbstractStructBase
{
    /**
     * The EmailAddressComunication
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType|null
     */
    protected ?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType $EmailAddressComunication = null;
    /**
     * Constructor method for ContactType1
     * @uses ContactType1::setEmailAddressComunication()
     * @param \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType $emailAddressComunication
     */
    public function __construct(?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType $emailAddressComunication = null)
    {
        $this
            ->setEmailAddressComunication($emailAddressComunication);
    }
    /**
     * Get EmailAddressComunication value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType|null
     */
    public function getEmailAddressComunication(): ?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType
    {
        return isset($this->EmailAddressComunication) ? $this->EmailAddressComunication : null;
    }
    /**
     * Set EmailAddressComunication value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType $emailAddressComunication
     * @return \Randock\PostNL\BulkMailApi\StructType\ContactType1
     */
    public function setEmailAddressComunication(?\Randock\PostNL\BulkMailApi\StructType\EMailAddressCommunicationType $emailAddressComunication = null): self
    {
        if (is_null($emailAddressComunication) || (is_array($emailAddressComunication) && empty($emailAddressComunication))) {
            unset($this->EmailAddressComunication);
        } else {
            $this->EmailAddressComunication = $emailAddressComunication;
        }
        
        return $this;
    }
}
