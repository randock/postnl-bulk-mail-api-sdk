<?php

declare(strict_types=1);

namespace Randock\PostNL\BulkMailApi\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BinaryObjectType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BinaryObjectType
 * @subpackage Structs
 */
class BinaryObjectType extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The characterSetCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $characterSetCode = null;
    /**
     * The filename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $filename = null;
    /**
     * The format
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * The mimeCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $mimeCode = null;
    /**
     * The uri
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $uri = null;
    /**
     * Constructor method for BinaryObjectType
     * @uses BinaryObjectType::setValue()
     * @uses BinaryObjectType::setCharacterSetCode()
     * @uses BinaryObjectType::setFilename()
     * @uses BinaryObjectType::setFormat()
     * @uses BinaryObjectType::setMimeCode()
     * @uses BinaryObjectType::setUri()
     * @param string $value
     * @param string $characterSetCode
     * @param string $filename
     * @param string $format
     * @param string $mimeCode
     * @param string $uri
     */
    public function __construct(?string $value = null, ?string $characterSetCode = null, ?string $filename = null, ?string $format = null, ?string $mimeCode = null, ?string $uri = null)
    {
        $this
            ->setValue($value)
            ->setCharacterSetCode($characterSetCode)
            ->setFilename($filename)
            ->setFormat($format)
            ->setMimeCode($mimeCode)
            ->setUri($uri);
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
    /**
     * Get characterSetCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCharacterSetCode(): ?string
    {
        return isset($this->characterSetCode) ? $this->characterSetCode : null;
    }
    /**
     * Set characterSetCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $characterSetCode
     * @return \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType
     */
    public function setCharacterSetCode(?string $characterSetCode = null): self
    {
        // validation for constraint: string
        if (!is_null($characterSetCode) && !is_string($characterSetCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($characterSetCode, true), gettype($characterSetCode)), __LINE__);
        }
        if (is_null($characterSetCode) || (is_array($characterSetCode) && empty($characterSetCode))) {
            unset($this->characterSetCode);
        } else {
            $this->characterSetCode = $characterSetCode;
        }
        
        return $this;
    }
    /**
     * Get filename value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return isset($this->filename) ? $this->filename : null;
    }
    /**
     * Set filename value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $filename
     * @return \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType
     */
    public function setFilename(?string $filename = null): self
    {
        // validation for constraint: string
        if (!is_null($filename) && !is_string($filename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filename, true), gettype($filename)), __LINE__);
        }
        if (is_null($filename) || (is_array($filename) && empty($filename))) {
            unset($this->filename);
        } else {
            $this->filename = $filename;
        }
        
        return $this;
    }
    /**
     * Get format value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return isset($this->format) ? $this->format : null;
    }
    /**
     * Set format value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $format
     * @return \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        if (is_null($format) || (is_array($format) && empty($format))) {
            unset($this->format);
        } else {
            $this->format = $format;
        }
        
        return $this;
    }
    /**
     * Get mimeCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMimeCode(): ?string
    {
        return isset($this->mimeCode) ? $this->mimeCode : null;
    }
    /**
     * Set mimeCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mimeCode
     * @return \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType
     */
    public function setMimeCode(?string $mimeCode = null): self
    {
        // validation for constraint: string
        if (!is_null($mimeCode) && !is_string($mimeCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mimeCode, true), gettype($mimeCode)), __LINE__);
        }
        if (is_null($mimeCode) || (is_array($mimeCode) && empty($mimeCode))) {
            unset($this->mimeCode);
        } else {
            $this->mimeCode = $mimeCode;
        }
        
        return $this;
    }
    /**
     * Get uri value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUri(): ?string
    {
        return isset($this->uri) ? $this->uri : null;
    }
    /**
     * Set uri value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uri
     * @return \Randock\PostNL\BulkMailApi\StructType\BinaryObjectType
     */
    public function setUri(?string $uri = null): self
    {
        // validation for constraint: string
        if (!is_null($uri) && !is_string($uri)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uri, true), gettype($uri)), __LINE__);
        }
        if (is_null($uri) || (is_array($uri) && empty($uri))) {
            unset($this->uri);
        } else {
            $this->uri = $uri;
        }
        
        return $this;
    }
}
