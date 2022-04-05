<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SequencedTextType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SequencedTextType
 * @subpackage Structs
 */
class SequencedTextType extends TextType1
{
    /**
     * The sequence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $sequence = null;
    /**
     * The sequenceName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $sequenceName = null;
    /**
     * Constructor method for SequencedTextType
     * @uses SequencedTextType::setSequence()
     * @uses SequencedTextType::setSequenceName()
     * @param string $sequence
     * @param string $sequenceName
     */
    public function __construct(?string $sequence = null, ?string $sequenceName = null)
    {
        $this
            ->setSequence($sequence)
            ->setSequenceName($sequenceName);
    }
    /**
     * Get sequence value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSequence(): ?string
    {
        return isset($this->sequence) ? $this->sequence : null;
    }
    /**
     * Set sequence value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sequence
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType
     */
    public function setSequence(?string $sequence = null): self
    {
        // validation for constraint: string
        if (!is_null($sequence) && !is_string($sequence)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequence, true), gettype($sequence)), __LINE__);
        }
        if (is_null($sequence) || (is_array($sequence) && empty($sequence))) {
            unset($this->sequence);
        } else {
            $this->sequence = $sequence;
        }
        
        return $this;
    }
    /**
     * Get sequenceName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSequenceName(): ?string
    {
        return isset($this->sequenceName) ? $this->sequenceName : null;
    }
    /**
     * Set sequenceName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sequenceName
     * @return \Randock\PostNL\BulkMailApi\StructType\SequencedTextType
     */
    public function setSequenceName(?string $sequenceName = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceName) && !is_string($sequenceName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceName, true), gettype($sequenceName)), __LINE__);
        }
        if (is_null($sequenceName) || (is_array($sequenceName) && empty($sequenceName))) {
            unset($this->sequenceName);
        } else {
            $this->sequenceName = $sequenceName;
        }
        
        return $this;
    }
}
