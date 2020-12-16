<?php

namespace Randock\PostNL\BulkMailApi\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NamePersonType StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NamePersonType
 * @subpackage Structs
 */
class NamePersonType extends AbstractStructBase
{
    /**
     * The FamilyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $FamilyName;
    /**
     * The GivenName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $GivenName;
    /**
     * The MaidenName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $MaidenName;
    /**
     * The MiddleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $MiddleName;
    /**
     * The NickName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $NickName;
    /**
     * The SalutationPreferredName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType
     */
    public $SalutationPreferredName;
    /**
     * The SuffixName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1
     */
    public $SuffixName;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1
     */
    public $Title;
    /**
     * Constructor method for NamePersonType
     * @uses NamePersonType::setFamilyName()
     * @uses NamePersonType::setGivenName()
     * @uses NamePersonType::setMaidenName()
     * @uses NamePersonType::setMiddleName()
     * @uses NamePersonType::setNickName()
     * @uses NamePersonType::setSalutationPreferredName()
     * @uses NamePersonType::setSuffixName()
     * @uses NamePersonType::setTitle()
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $familyName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $givenName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $maidenName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $middleName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $nickName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType $salutationPreferredName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $suffixName
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title
     */
    public function __construct(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $familyName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $givenName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $maidenName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $middleName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $nickName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType $salutationPreferredName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $suffixName = null, \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title = null)
    {
        $this
            ->setFamilyName($familyName)
            ->setGivenName($givenName)
            ->setMaidenName($maidenName)
            ->setMiddleName($middleName)
            ->setNickName($nickName)
            ->setSalutationPreferredName($salutationPreferredName)
            ->setSuffixName($suffixName)
            ->setTitle($title);
    }
    /**
     * Get FamilyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getFamilyName()
    {
        return isset($this->FamilyName) ? $this->FamilyName : null;
    }
    /**
     * Set FamilyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $familyName
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setFamilyName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $familyName = null)
    {
        if (is_null($familyName) || (is_array($familyName) && empty($familyName))) {
            unset($this->FamilyName);
        } else {
            $this->FamilyName = $familyName;
        }
        return $this;
    }
    /**
     * Get GivenName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getGivenName()
    {
        return isset($this->GivenName) ? $this->GivenName : null;
    }
    /**
     * Set GivenName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $givenName
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setGivenName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $givenName = null)
    {
        if (is_null($givenName) || (is_array($givenName) && empty($givenName))) {
            unset($this->GivenName);
        } else {
            $this->GivenName = $givenName;
        }
        return $this;
    }
    /**
     * Get MaidenName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getMaidenName()
    {
        return isset($this->MaidenName) ? $this->MaidenName : null;
    }
    /**
     * Set MaidenName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $maidenName
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setMaidenName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $maidenName = null)
    {
        if (is_null($maidenName) || (is_array($maidenName) && empty($maidenName))) {
            unset($this->MaidenName);
        } else {
            $this->MaidenName = $maidenName;
        }
        return $this;
    }
    /**
     * Get MiddleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getMiddleName()
    {
        return isset($this->MiddleName) ? $this->MiddleName : null;
    }
    /**
     * Set MiddleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $middleName
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setMiddleName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $middleName = null)
    {
        if (is_null($middleName) || (is_array($middleName) && empty($middleName))) {
            unset($this->MiddleName);
        } else {
            $this->MiddleName = $middleName;
        }
        return $this;
    }
    /**
     * Get NickName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getNickName()
    {
        return isset($this->NickName) ? $this->NickName : null;
    }
    /**
     * Set NickName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $nickName
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setNickName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $nickName = null)
    {
        if (is_null($nickName) || (is_array($nickName) && empty($nickName))) {
            unset($this->NickName);
        } else {
            $this->NickName = $nickName;
        }
        return $this;
    }
    /**
     * Get SalutationPreferredName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType|null
     */
    public function getSalutationPreferredName()
    {
        return isset($this->SalutationPreferredName) ? $this->SalutationPreferredName : null;
    }
    /**
     * Set SalutationPreferredName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType $salutationPreferredName
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setSalutationPreferredName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfPreferredNameType $salutationPreferredName = null)
    {
        if (is_null($salutationPreferredName) || (is_array($salutationPreferredName) && empty($salutationPreferredName))) {
            unset($this->SalutationPreferredName);
        } else {
            $this->SalutationPreferredName = $salutationPreferredName;
        }
        return $this;
    }
    /**
     * Get SuffixName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1|null
     */
    public function getSuffixName()
    {
        return isset($this->SuffixName) ? $this->SuffixName : null;
    }
    /**
     * Set SuffixName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $suffixName
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setSuffixName(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfNameType1 $suffixName = null)
    {
        if (is_null($suffixName) || (is_array($suffixName) && empty($suffixName))) {
            unset($this->SuffixName);
        } else {
            $this->SuffixName = $suffixName;
        }
        return $this;
    }
    /**
     * Get Title value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }
    /**
     * Set Title value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title
     * @return \Randock\PostNL\BulkMailApi\StructType\NamePersonType
     */
    public function setTitle(\Randock\PostNL\BulkMailApi\ArrayType\ArrayOfTextType1 $title = null)
    {
        if (is_null($title) || (is_array($title) && empty($title))) {
            unset($this->Title);
        } else {
            $this->Title = $title;
        }
        return $this;
    }
}
