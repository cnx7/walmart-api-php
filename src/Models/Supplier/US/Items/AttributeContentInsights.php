<?php

/**
 * AttributeContentInsights
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
 * AttributeContentInsights Class Doc Comment
 *
 * @category Class

 * @description Indicates an array identifying specific content recommendations that can be made to improve the content quality score.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class AttributeContentInsights extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AttributeContentInsights';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'attributeName' => 'string',
        'contentImprovements' => '\Walmart\Models\Supplier\US\Items\ContentImprovements[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'attributeName' => null,
        'contentImprovements' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attributeName' => false,
        'contentImprovements' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'attributeName' => 'attributeName',
        'contentImprovements' => 'contentImprovements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'attributeName' => 'setAttributeName',
        'contentImprovements' => 'setContentImprovements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'attributeName' => 'getAttributeName',
        'contentImprovements' => 'getContentImprovements'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('attributeName', $data ?? [], null);
        $this->setIfExists('contentImprovements', $data ?? [], null);
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
     * Gets attributeName
     *
     * @return string|null
    
     */
    public function getAttributeName()
    {
        return $this->container['attributeName'];
    }

    /**
     * Sets attributeName
     *
     * @param string|null $attributeName Indicates the product name.
     *
     * @return self
    
     */
    public function setAttributeName($attributeName)
    {
        if (is_null($attributeName)) {
            throw new \InvalidArgumentException('non-nullable attributeName cannot be null');
        }

        $this->container['attributeName'] = $attributeName;
        return $this;
    }

    /**
     * Gets contentImprovements
     *
     * @return \Walmart\Models\Supplier\US\Items\ContentImprovements[]|null
    
     */
    public function getContentImprovements()
    {
        return $this->container['contentImprovements'];
    }

    /**
     * Sets contentImprovements
     *
     * @param \Walmart\Models\Supplier\US\Items\ContentImprovements[]|null $contentImprovements Indicates an array for the specific improvement that can be made to the attribute to improve content quality.
     *
     * @return self
    
     */
    public function setContentImprovements($contentImprovements)
    {
        if (is_null($contentImprovements)) {
            throw new \InvalidArgumentException('non-nullable contentImprovements cannot be null');
        }

        $this->container['contentImprovements'] = $contentImprovements;
        return $this;
    }
}
