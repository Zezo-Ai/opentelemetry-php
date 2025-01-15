<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/profiles/v1development/profiles.proto

namespace Opentelemetry\Proto\Profiles\V1development;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A pointer from a profile Sample to a trace Span.
 * Connects a profile sample to a trace span, identified by unique trace and span IDs.
 *
 * Generated from protobuf message <code>opentelemetry.proto.profiles.v1development.Link</code>
 */
class Link extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier of a trace that this linked span is part of. The ID is a
     * 16-byte array.
     *
     * Generated from protobuf field <code>bytes trace_id = 1;</code>
     */
    protected $trace_id = '';
    /**
     * A unique identifier for the linked span. The ID is an 8-byte array.
     *
     * Generated from protobuf field <code>bytes span_id = 2;</code>
     */
    protected $span_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trace_id
     *           A unique identifier of a trace that this linked span is part of. The ID is a
     *           16-byte array.
     *     @type string $span_id
     *           A unique identifier for the linked span. The ID is an 8-byte array.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Profiles\V1Development\Profiles::initOnce();
        parent::__construct($data);
    }

    /**
     * A unique identifier of a trace that this linked span is part of. The ID is a
     * 16-byte array.
     *
     * Generated from protobuf field <code>bytes trace_id = 1;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * A unique identifier of a trace that this linked span is part of. The ID is a
     * 16-byte array.
     *
     * Generated from protobuf field <code>bytes trace_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, False);
        $this->trace_id = $var;

        return $this;
    }

    /**
     * A unique identifier for the linked span. The ID is an 8-byte array.
     *
     * Generated from protobuf field <code>bytes span_id = 2;</code>
     * @return string
     */
    public function getSpanId()
    {
        return $this->span_id;
    }

    /**
     * A unique identifier for the linked span. The ID is an 8-byte array.
     *
     * Generated from protobuf field <code>bytes span_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpanId($var)
    {
        GPBUtil::checkString($var, False);
        $this->span_id = $var;

        return $this;
    }

}
