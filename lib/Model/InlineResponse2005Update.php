<?php
/**
 * InlineResponse2005Update
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Chat API SDK
 *
 * The SDK allows you to receive and send messages through your WhatsApp account. [Sign up now](https://app.chat-api.com/)  The Chat API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * InlineResponse2005Update Class Doc Comment
 *
 * @category Class
 * @description An object that lists the fields changed in the request
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2005Update implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_5_update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'webhookUrl' => 'string',
        'ackNotificationsOn' => 'bool',
        'chatUpdateOn' => 'bool',
        'videoUploadOn' => 'bool',
        'proxy' => 'string',
        'guaranteedHooks' => 'bool',
        'ignoreOldMessages' => 'bool',
        'processArchive' => 'bool',
        'instanceStatuses' => 'bool',
        'webhookStatuses' => 'bool',
        'statusNotificationsOn' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'webhookUrl' => null,
        'ackNotificationsOn' => null,
        'chatUpdateOn' => null,
        'videoUploadOn' => null,
        'proxy' => null,
        'guaranteedHooks' => null,
        'ignoreOldMessages' => null,
        'processArchive' => null,
        'instanceStatuses' => null,
        'webhookStatuses' => null,
        'statusNotificationsOn' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'webhookUrl' => 'webhookUrl',
        'ackNotificationsOn' => 'ackNotificationsOn',
        'chatUpdateOn' => 'chatUpdateOn',
        'videoUploadOn' => 'videoUploadOn',
        'proxy' => 'proxy',
        'guaranteedHooks' => 'guaranteedHooks',
        'ignoreOldMessages' => 'ignoreOldMessages',
        'processArchive' => 'processArchive',
        'instanceStatuses' => 'instanceStatuses',
        'webhookStatuses' => 'webhookStatuses',
        'statusNotificationsOn' => 'statusNotificationsOn'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'webhookUrl' => 'setWebhookUrl',
        'ackNotificationsOn' => 'setAckNotificationsOn',
        'chatUpdateOn' => 'setChatUpdateOn',
        'videoUploadOn' => 'setVideoUploadOn',
        'proxy' => 'setProxy',
        'guaranteedHooks' => 'setGuaranteedHooks',
        'ignoreOldMessages' => 'setIgnoreOldMessages',
        'processArchive' => 'setProcessArchive',
        'instanceStatuses' => 'setInstanceStatuses',
        'webhookStatuses' => 'setWebhookStatuses',
        'statusNotificationsOn' => 'setStatusNotificationsOn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'webhookUrl' => 'getWebhookUrl',
        'ackNotificationsOn' => 'getAckNotificationsOn',
        'chatUpdateOn' => 'getChatUpdateOn',
        'videoUploadOn' => 'getVideoUploadOn',
        'proxy' => 'getProxy',
        'guaranteedHooks' => 'getGuaranteedHooks',
        'ignoreOldMessages' => 'getIgnoreOldMessages',
        'processArchive' => 'getProcessArchive',
        'instanceStatuses' => 'getInstanceStatuses',
        'webhookStatuses' => 'getWebhookStatuses',
        'statusNotificationsOn' => 'getStatusNotificationsOn'
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
        return self::$openAPIModelName;
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
        $this->container['webhookUrl'] = $data['webhookUrl'] ?? null;
        $this->container['ackNotificationsOn'] = $data['ackNotificationsOn'] ?? null;
        $this->container['chatUpdateOn'] = $data['chatUpdateOn'] ?? null;
        $this->container['videoUploadOn'] = $data['videoUploadOn'] ?? null;
        $this->container['proxy'] = $data['proxy'] ?? null;
        $this->container['guaranteedHooks'] = $data['guaranteedHooks'] ?? null;
        $this->container['ignoreOldMessages'] = $data['ignoreOldMessages'] ?? null;
        $this->container['processArchive'] = $data['processArchive'] ?? null;
        $this->container['instanceStatuses'] = $data['instanceStatuses'] ?? null;
        $this->container['webhookStatuses'] = $data['webhookStatuses'] ?? null;
        $this->container['statusNotificationsOn'] = $data['statusNotificationsOn'] ?? null;
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
     * Gets webhookUrl
     *
     * @return string|null
     */
    public function getWebhookUrl()
    {
        return $this->container['webhookUrl'];
    }

    /**
     * Sets webhookUrl
     *
     * @param string|null $webhookUrl webhookUrl
     *
     * @return self
     */
    public function setWebhookUrl($webhookUrl)
    {
        $this->container['webhookUrl'] = $webhookUrl;

        return $this;
    }

    /**
     * Gets ackNotificationsOn
     *
     * @return bool|null
     */
    public function getAckNotificationsOn()
    {
        return $this->container['ackNotificationsOn'];
    }

    /**
     * Sets ackNotificationsOn
     *
     * @param bool|null $ackNotificationsOn ackNotificationsOn
     *
     * @return self
     */
    public function setAckNotificationsOn($ackNotificationsOn)
    {
        $this->container['ackNotificationsOn'] = $ackNotificationsOn;

        return $this;
    }

    /**
     * Gets chatUpdateOn
     *
     * @return bool|null
     */
    public function getChatUpdateOn()
    {
        return $this->container['chatUpdateOn'];
    }

    /**
     * Sets chatUpdateOn
     *
     * @param bool|null $chatUpdateOn chatUpdateOn
     *
     * @return self
     */
    public function setChatUpdateOn($chatUpdateOn)
    {
        $this->container['chatUpdateOn'] = $chatUpdateOn;

        return $this;
    }

    /**
     * Gets videoUploadOn
     *
     * @return bool|null
     */
    public function getVideoUploadOn()
    {
        return $this->container['videoUploadOn'];
    }

    /**
     * Sets videoUploadOn
     *
     * @param bool|null $videoUploadOn videoUploadOn
     *
     * @return self
     */
    public function setVideoUploadOn($videoUploadOn)
    {
        $this->container['videoUploadOn'] = $videoUploadOn;

        return $this;
    }

    /**
     * Gets proxy
     *
     * @return string|null
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     *
     * @param string|null $proxy proxy
     *
     * @return self
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets guaranteedHooks
     *
     * @return bool|null
     */
    public function getGuaranteedHooks()
    {
        return $this->container['guaranteedHooks'];
    }

    /**
     * Sets guaranteedHooks
     *
     * @param bool|null $guaranteedHooks guaranteedHooks
     *
     * @return self
     */
    public function setGuaranteedHooks($guaranteedHooks)
    {
        $this->container['guaranteedHooks'] = $guaranteedHooks;

        return $this;
    }

    /**
     * Gets ignoreOldMessages
     *
     * @return bool|null
     */
    public function getIgnoreOldMessages()
    {
        return $this->container['ignoreOldMessages'];
    }

    /**
     * Sets ignoreOldMessages
     *
     * @param bool|null $ignoreOldMessages ignoreOldMessages
     *
     * @return self
     */
    public function setIgnoreOldMessages($ignoreOldMessages)
    {
        $this->container['ignoreOldMessages'] = $ignoreOldMessages;

        return $this;
    }

    /**
     * Gets processArchive
     *
     * @return bool|null
     */
    public function getProcessArchive()
    {
        return $this->container['processArchive'];
    }

    /**
     * Sets processArchive
     *
     * @param bool|null $processArchive processArchive
     *
     * @return self
     */
    public function setProcessArchive($processArchive)
    {
        $this->container['processArchive'] = $processArchive;

        return $this;
    }

    /**
     * Gets instanceStatuses
     *
     * @return bool|null
     */
    public function getInstanceStatuses()
    {
        return $this->container['instanceStatuses'];
    }

    /**
     * Sets instanceStatuses
     *
     * @param bool|null $instanceStatuses instanceStatuses
     *
     * @return self
     */
    public function setInstanceStatuses($instanceStatuses)
    {
        $this->container['instanceStatuses'] = $instanceStatuses;

        return $this;
    }

    /**
     * Gets webhookStatuses
     *
     * @return bool|null
     */
    public function getWebhookStatuses()
    {
        return $this->container['webhookStatuses'];
    }

    /**
     * Sets webhookStatuses
     *
     * @param bool|null $webhookStatuses webhookStatuses
     *
     * @return self
     */
    public function setWebhookStatuses($webhookStatuses)
    {
        $this->container['webhookStatuses'] = $webhookStatuses;

        return $this;
    }

    /**
     * Gets statusNotificationsOn
     *
     * @return bool|null
     */
    public function getStatusNotificationsOn()
    {
        return $this->container['statusNotificationsOn'];
    }

    /**
     * Sets statusNotificationsOn
     *
     * @param bool|null $statusNotificationsOn statusNotificationsOn
     *
     * @return self
     */
    public function setStatusNotificationsOn($statusNotificationsOn)
    {
        $this->container['statusNotificationsOn'] = $statusNotificationsOn;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


