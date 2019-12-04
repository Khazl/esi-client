<?php
/**
 * GetSovereigntyStructures200Ok
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * EVE Swagger Interface
 *
 * An OpenAPI for EVE Online
 *
 * OpenAPI spec version: 1.2.9
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.10
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * GetSovereigntyStructures200Ok Class Doc Comment
 *
 * @category Class
 * @description 200 ok object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetSovereigntyStructures200Ok implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'get_sovereignty_structures_200_ok';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alliance_id' => 'int',
        'solar_system_id' => 'int',
        'structure_id' => 'int',
        'structure_type_id' => 'int',
        'vulnerability_occupancy_level' => 'float',
        'vulnerable_end_time' => '\DateTime',
        'vulnerable_start_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alliance_id' => 'int32',
        'solar_system_id' => 'int32',
        'structure_id' => 'int64',
        'structure_type_id' => 'int32',
        'vulnerability_occupancy_level' => 'float',
        'vulnerable_end_time' => 'date-time',
        'vulnerable_start_time' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'alliance_id' => 'alliance_id',
        'solar_system_id' => 'solar_system_id',
        'structure_id' => 'structure_id',
        'structure_type_id' => 'structure_type_id',
        'vulnerability_occupancy_level' => 'vulnerability_occupancy_level',
        'vulnerable_end_time' => 'vulnerable_end_time',
        'vulnerable_start_time' => 'vulnerable_start_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alliance_id' => 'setAllianceId',
        'solar_system_id' => 'setSolarSystemId',
        'structure_id' => 'setStructureId',
        'structure_type_id' => 'setStructureTypeId',
        'vulnerability_occupancy_level' => 'setVulnerabilityOccupancyLevel',
        'vulnerable_end_time' => 'setVulnerableEndTime',
        'vulnerable_start_time' => 'setVulnerableStartTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alliance_id' => 'getAllianceId',
        'solar_system_id' => 'getSolarSystemId',
        'structure_id' => 'getStructureId',
        'structure_type_id' => 'getStructureTypeId',
        'vulnerability_occupancy_level' => 'getVulnerabilityOccupancyLevel',
        'vulnerable_end_time' => 'getVulnerableEndTime',
        'vulnerable_start_time' => 'getVulnerableStartTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['alliance_id'] = isset($data['alliance_id']) ? $data['alliance_id'] : null;
        $this->container['solar_system_id'] = isset($data['solar_system_id']) ? $data['solar_system_id'] : null;
        $this->container['structure_id'] = isset($data['structure_id']) ? $data['structure_id'] : null;
        $this->container['structure_type_id'] = isset($data['structure_type_id']) ? $data['structure_type_id'] : null;
        $this->container['vulnerability_occupancy_level'] = isset($data['vulnerability_occupancy_level']) ? $data['vulnerability_occupancy_level'] : null;
        $this->container['vulnerable_end_time'] = isset($data['vulnerable_end_time']) ? $data['vulnerable_end_time'] : null;
        $this->container['vulnerable_start_time'] = isset($data['vulnerable_start_time']) ? $data['vulnerable_start_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['alliance_id'] === null) {
            $invalidProperties[] = "'alliance_id' can't be null";
        }
        if ($this->container['solar_system_id'] === null) {
            $invalidProperties[] = "'solar_system_id' can't be null";
        }
        if ($this->container['structure_id'] === null) {
            $invalidProperties[] = "'structure_id' can't be null";
        }
        if ($this->container['structure_type_id'] === null) {
            $invalidProperties[] = "'structure_type_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets alliance_id
     *
     * @return int
     */
    public function getAllianceId()
    {
        return $this->container['alliance_id'];
    }

    /**
     * Sets alliance_id
     *
     * @param int $alliance_id The alliance that owns the structure.
     *
     * @return $this
     */
    public function setAllianceId($alliance_id)
    {
        $this->container['alliance_id'] = $alliance_id;

        return $this;
    }

    /**
     * Gets solar_system_id
     *
     * @return int
     */
    public function getSolarSystemId()
    {
        return $this->container['solar_system_id'];
    }

    /**
     * Sets solar_system_id
     *
     * @param int $solar_system_id Solar system in which the structure is located.
     *
     * @return $this
     */
    public function setSolarSystemId($solar_system_id)
    {
        $this->container['solar_system_id'] = $solar_system_id;

        return $this;
    }

    /**
     * Gets structure_id
     *
     * @return int
     */
    public function getStructureId()
    {
        return $this->container['structure_id'];
    }

    /**
     * Sets structure_id
     *
     * @param int $structure_id Unique item ID for this structure.
     *
     * @return $this
     */
    public function setStructureId($structure_id)
    {
        $this->container['structure_id'] = $structure_id;

        return $this;
    }

    /**
     * Gets structure_type_id
     *
     * @return int
     */
    public function getStructureTypeId()
    {
        return $this->container['structure_type_id'];
    }

    /**
     * Sets structure_type_id
     *
     * @param int $structure_type_id A reference to the type of structure this is.
     *
     * @return $this
     */
    public function setStructureTypeId($structure_type_id)
    {
        $this->container['structure_type_id'] = $structure_type_id;

        return $this;
    }

    /**
     * Gets vulnerability_occupancy_level
     *
     * @return float
     */
    public function getVulnerabilityOccupancyLevel()
    {
        return $this->container['vulnerability_occupancy_level'];
    }

    /**
     * Sets vulnerability_occupancy_level
     *
     * @param float $vulnerability_occupancy_level The occupancy level for the next or current vulnerability window. This takes into account all development indexes and capital system bonuses. Also known as Activity Defense Multiplier from in the client. It increases the time that attackers must spend using their entosis links on the structure.
     *
     * @return $this
     */
    public function setVulnerabilityOccupancyLevel($vulnerability_occupancy_level)
    {
        $this->container['vulnerability_occupancy_level'] = $vulnerability_occupancy_level;

        return $this;
    }

    /**
     * Gets vulnerable_end_time
     *
     * @return \DateTime
     */
    public function getVulnerableEndTime()
    {
        return $this->container['vulnerable_end_time'];
    }

    /**
     * Sets vulnerable_end_time
     *
     * @param \DateTime $vulnerable_end_time The time at which the next or current vulnerability window ends. At the end of a vulnerability window the next window is recalculated and locked in along with the vulnerabilityOccupancyLevel. If the structure is not in 100% entosis control of the defender, it will go in to 'overtime' and stay vulnerable for as long as that situation persists. Only once the defenders have 100% entosis control and has the vulnerableEndTime passed does the vulnerability interval expire and a new one is calculated.
     *
     * @return $this
     */
    public function setVulnerableEndTime($vulnerable_end_time)
    {
        $this->container['vulnerable_end_time'] = $vulnerable_end_time;

        return $this;
    }

    /**
     * Gets vulnerable_start_time
     *
     * @return \DateTime
     */
    public function getVulnerableStartTime()
    {
        return $this->container['vulnerable_start_time'];
    }

    /**
     * Sets vulnerable_start_time
     *
     * @param \DateTime $vulnerable_start_time The next time at which the structure will become vulnerable. Or the start time of the current window if current time is between this and vulnerableEndTime.
     *
     * @return $this
     */
    public function setVulnerableStartTime($vulnerable_start_time)
    {
        $this->container['vulnerable_start_time'] = $vulnerable_start_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


