<?php
/**
 * GetTransactionDetailsByTransactionIDRI
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetTransactionDetailsByTransactionIDRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetTransactionDetailsByTransactionIDRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetTransactionDetailsByTransactionIDRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'index' => 'int',
        'mined_in_block_hash' => 'string',
        'mined_in_block_height' => 'int',
        'recipients' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIRecipients[]',
        'senders' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRISenders[]',
        'timestamp' => 'int',
        'transaction_hash' => 'string',
        'transaction_id' => 'string',
        'fee' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIFee',
        'is_confirmed' => 'bool',
        'blockchain_specific' => '\CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBS'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'index' => null,
        'mined_in_block_hash' => null,
        'mined_in_block_height' => null,
        'recipients' => null,
        'senders' => null,
        'timestamp' => null,
        'transaction_hash' => null,
        'transaction_id' => null,
        'fee' => null,
        'is_confirmed' => null,
        'blockchain_specific' => null
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
        'index' => 'index',
        'mined_in_block_hash' => 'minedInBlockHash',
        'mined_in_block_height' => 'minedInBlockHeight',
        'recipients' => 'recipients',
        'senders' => 'senders',
        'timestamp' => 'timestamp',
        'transaction_hash' => 'transactionHash',
        'transaction_id' => 'transactionId',
        'fee' => 'fee',
        'is_confirmed' => 'isConfirmed',
        'blockchain_specific' => 'blockchainSpecific'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'index' => 'setIndex',
        'mined_in_block_hash' => 'setMinedInBlockHash',
        'mined_in_block_height' => 'setMinedInBlockHeight',
        'recipients' => 'setRecipients',
        'senders' => 'setSenders',
        'timestamp' => 'setTimestamp',
        'transaction_hash' => 'setTransactionHash',
        'transaction_id' => 'setTransactionId',
        'fee' => 'setFee',
        'is_confirmed' => 'setIsConfirmed',
        'blockchain_specific' => 'setBlockchainSpecific'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'index' => 'getIndex',
        'mined_in_block_hash' => 'getMinedInBlockHash',
        'mined_in_block_height' => 'getMinedInBlockHeight',
        'recipients' => 'getRecipients',
        'senders' => 'getSenders',
        'timestamp' => 'getTimestamp',
        'transaction_hash' => 'getTransactionHash',
        'transaction_id' => 'getTransactionId',
        'fee' => 'getFee',
        'is_confirmed' => 'getIsConfirmed',
        'blockchain_specific' => 'getBlockchainSpecific'
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
        $this->container['index'] = $data['index'] ?? null;
        $this->container['mined_in_block_hash'] = $data['mined_in_block_hash'] ?? null;
        $this->container['mined_in_block_height'] = $data['mined_in_block_height'] ?? null;
        $this->container['recipients'] = $data['recipients'] ?? null;
        $this->container['senders'] = $data['senders'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['transaction_hash'] = $data['transaction_hash'] ?? null;
        $this->container['transaction_id'] = $data['transaction_id'] ?? null;
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['is_confirmed'] = $data['is_confirmed'] ?? null;
        $this->container['blockchain_specific'] = $data['blockchain_specific'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['index'] === null) {
            $invalidProperties[] = "'index' can't be null";
        }
        if ($this->container['recipients'] === null) {
            $invalidProperties[] = "'recipients' can't be null";
        }
        if ($this->container['senders'] === null) {
            $invalidProperties[] = "'senders' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        if ($this->container['transaction_hash'] === null) {
            $invalidProperties[] = "'transaction_hash' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalidProperties[] = "'transaction_id' can't be null";
        }
        if ($this->container['fee'] === null) {
            $invalidProperties[] = "'fee' can't be null";
        }
        if ($this->container['is_confirmed'] === null) {
            $invalidProperties[] = "'is_confirmed' can't be null";
        }
        if ($this->container['blockchain_specific'] === null) {
            $invalidProperties[] = "'blockchain_specific' can't be null";
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
     * Gets index
     *
     * @return int
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index Represents the index position of the transaction in the specific block.
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets mined_in_block_hash
     *
     * @return string|null
     */
    public function getMinedInBlockHash()
    {
        return $this->container['mined_in_block_hash'];
    }

    /**
     * Sets mined_in_block_hash
     *
     * @param string|null $mined_in_block_hash Represents the hash of the block where this transaction was mined/confirmed for first time. The hash is defined as a cryptographic digital fingerprint made by hashing the block header twice through the SHA256 algorithm.
     *
     * @return self
     */
    public function setMinedInBlockHash($mined_in_block_hash)
    {
        $this->container['mined_in_block_hash'] = $mined_in_block_hash;

        return $this;
    }

    /**
     * Gets mined_in_block_height
     *
     * @return int|null
     */
    public function getMinedInBlockHeight()
    {
        return $this->container['mined_in_block_height'];
    }

    /**
     * Sets mined_in_block_height
     *
     * @param int|null $mined_in_block_height Represents the hight of the block where this transaction was mined/confirmed for first time. The height is defined as the number of blocks in the blockchain preceding this specific block.
     *
     * @return self
     */
    public function setMinedInBlockHeight($mined_in_block_height)
    {
        $this->container['mined_in_block_height'] = $mined_in_block_height;

        return $this;
    }

    /**
     * Gets recipients
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIRecipients[]
     */
    public function getRecipients()
    {
        return $this->container['recipients'];
    }

    /**
     * Sets recipients
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIRecipients[] $recipients Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setRecipients($recipients)
    {
        $this->container['recipients'] = $recipients;

        return $this;
    }

    /**
     * Gets senders
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRISenders[]
     */
    public function getSenders()
    {
        return $this->container['senders'];
    }

    /**
     * Sets senders
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRISenders[] $senders Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list.
     *
     * @return self
     */
    public function setSenders($senders)
    {
        $this->container['senders'] = $senders;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed.
     *
     * @return self
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets transaction_hash
     *
     * @return string
     */
    public function getTransactionHash()
    {
        return $this->container['transaction_hash'];
    }

    /**
     * Sets transaction_hash
     *
     * @param string $transaction_hash Represents the same as `transactionId` for account-based protocols like Ethereum, while it could be different in UTXO-based protocols like Bitcoin. E.g., in UTXO-based protocols `hash` is different from `transactionId` for SegWit transactions.
     *
     * @return self
     */
    public function setTransactionHash($transaction_hash)
    {
        $this->container['transaction_hash'] = $transaction_hash;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id Represents the unique identifier of a transaction, i.e. it could be `transactionId` in UTXO-based protocols like Bitcoin, and transaction `hash` in Ethereum blockchain.
     *
     * @return self
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIFee
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIFee $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets is_confirmed
     *
     * @return bool
     */
    public function getIsConfirmed()
    {
        return $this->container['is_confirmed'];
    }

    /**
     * Sets is_confirmed
     *
     * @param bool $is_confirmed Defines whether the transaction is mined/confirmed or not. If it is \"false\", it means the transaction is still in the Mempool waiting to be included in a block. Value \"true\" means that this transaction is already confirmed and included in a block.
     *
     * @return self
     */
    public function setIsConfirmed($is_confirmed)
    {
        $this->container['is_confirmed'] = $is_confirmed;

        return $this;
    }

    /**
     * Gets blockchain_specific
     *
     * @return \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBS
     */
    public function getBlockchainSpecific()
    {
        return $this->container['blockchain_specific'];
    }

    /**
     * Sets blockchain_specific
     *
     * @param \CryptoAPIs\Model\GetTransactionDetailsByTransactionIDRIBS $blockchain_specific blockchain_specific
     *
     * @return self
     */
    public function setBlockchainSpecific($blockchain_specific)
    {
        $this->container['blockchain_specific'] = $blockchain_specific;

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


