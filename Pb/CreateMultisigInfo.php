<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api.proto

namespace Pb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>pb.CreateMultisigInfo</code>
 */
class CreateMultisigInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .pb.Input inputs = 1;</code>
     */
    private $inputs;
    /**
     * Generated from protobuf field <code>repeated .pb.Output outputs = 2;</code>
     */
    private $outputs;
    /**
     * Generated from protobuf field <code>string key = 3;</code>
     */
    private $key = '';
    /**
     * Generated from protobuf field <code>bytes redeemScript = 4;</code>
     */
    private $redeemScript = '';
    /**
     * Generated from protobuf field <code>uint64 feePerByte = 5;</code>
     */
    private $feePerByte = 0;

    public function __construct() {
        \GPBMetadata\Api::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Input inputs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Input inputs = 1;</code>
     * @param \Pb\Input[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Pb\Input::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Output outputs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOutputs()
    {
        return $this->outputs;
    }

    /**
     * Generated from protobuf field <code>repeated .pb.Output outputs = 2;</code>
     * @param \Pb\Output[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOutputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Pb\Output::class);
        $this->outputs = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 3;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes redeemScript = 4;</code>
     * @return string
     */
    public function getRedeemScript()
    {
        return $this->redeemScript;
    }

    /**
     * Generated from protobuf field <code>bytes redeemScript = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRedeemScript($var)
    {
        GPBUtil::checkString($var, False);
        $this->redeemScript = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 feePerByte = 5;</code>
     * @return int|string
     */
    public function getFeePerByte()
    {
        return $this->feePerByte;
    }

    /**
     * Generated from protobuf field <code>uint64 feePerByte = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeePerByte($var)
    {
        GPBUtil::checkUint64($var);
        $this->feePerByte = $var;

        return $this;
    }

}

