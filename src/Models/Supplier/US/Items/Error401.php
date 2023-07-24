<?php

/**
 * Error401
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\Supplier\US\Items;

use Walmart\Models\BaseModel;

/**
 * Error401 Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class Error401 extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Error401';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'code' => 'string',
        'field' => 'string',
        'description' => 'string',
        'info' => 'string',
        'severity' => 'string',
        'category' => 'string',
        'causes' => 'string[]',
        'errorIdentifiers' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'code' => null,
        'field' => null,
        'description' => null,
        'info' => null,
        'severity' => null,
        'category' => null,
        'causes' => null,
        'errorIdentifiers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'code' => false,
        'field' => false,
        'description' => false,
        'info' => false,
        'severity' => false,
        'category' => false,
        'causes' => false,
        'errorIdentifiers' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'code' => 'code',
        'field' => 'field',
        'description' => 'description',
        'info' => 'info',
        'severity' => 'severity',
        'category' => 'category',
        'causes' => 'causes',
        'errorIdentifiers' => 'errorIdentifiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'code' => 'setCode',
        'field' => 'setField',
        'description' => 'setDescription',
        'info' => 'setInfo',
        'severity' => 'setSeverity',
        'category' => 'setCategory',
        'causes' => 'setCauses',
        'errorIdentifiers' => 'setErrorIdentifiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'code' => 'getCode',
        'field' => 'getField',
        'description' => 'getDescription',
        'info' => 'getInfo',
        'severity' => 'getSeverity',
        'category' => 'getCategory',
        'causes' => 'getCauses',
        'errorIdentifiers' => 'getErrorIdentifiers'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('causes', $data ?? [], null);
        $this->setIfExists('errorIdentifiers', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];


        return $invalidProperties;
    }

    /**
     * Gets code
     *
     * @return string|null
    
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Error code of the response.   UNAUTHORIZED.GMP_GATEWAY_API
     *
     * @return self
    
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        $this->container['code'] = $code;
        return $this;
    }

    /**
     * Gets field
     *
     * @return string|null
    
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string|null $field Indicate which field has the error.   Example: UNAUTHORIZED
     *
     * @return self
    
     */
    public function setField($field)
    {
        if (is_null($field)) {
            throw new \InvalidArgumentException('non-nullable field cannot be null');
        }

        $this->container['field'] = $field;
        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
    
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of error.  Example: Unauthorized
     *
     * @return self
    
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets info
     *
     * @return string|null
    
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param string|null $info Info of error.  Example: Unauthorized token or incorrect authorization header. Please verify correct format: \\\"Authorization: Basic Base64Encode(clientId:clientSecret)\\\" For more information, see https://developer.walmart.com/#/apicenter/marketPlace/latest#apiAuthentication.
     *
     * @return self
    
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }

        $this->container['info'] = $info;
        return $this;
    }

    /**
     * Gets severity
     *
     * @return string|null
    
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity Severity of Error.  Example: ERROR
     *
     * @return self
    
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }

        $this->container['severity'] = $severity;
        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Category of error.  Example: DATA
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets causes
     *
     * @return string[]|null
    
     */
    public function getCauses()
    {
        return $this->container['causes'];
    }

    /**
     * Sets causes
     *
     * @param string[]|null $causes Causes of error.
     *
     * @return self
    
     */
    public function setCauses($causes)
    {
        if (is_null($causes)) {
            throw new \InvalidArgumentException('non-nullable causes cannot be null');
        }

        $this->container['causes'] = $causes;
        return $this;
    }

    /**
     * Gets errorIdentifiers
     *
     * @return object|null
    
     */
    public function getErrorIdentifiers()
    {
        return $this->container['errorIdentifiers'];
    }

    /**
     * Sets errorIdentifiers
     *
     * @param object|null $errorIdentifiers Error Identifiers of the error.
     *
     * @return self
    
     */
    public function setErrorIdentifiers($errorIdentifiers)
    {
        if (is_null($errorIdentifiers)) {
            throw new \InvalidArgumentException('non-nullable errorIdentifiers cannot be null');
        }

        $this->container['errorIdentifiers'] = $errorIdentifiers;
        return $this;
    }
}
