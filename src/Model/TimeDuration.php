<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * The time span between feed files that applies to the feed type (e.g., hourly,
 * daily, weekly). This is returned in hours.
 */
class TimeDuration extends AbstractModel
{
    /**
     * This enumeration value indicates the time unit used for the time period. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/bas:TimeDurationUnitEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $unit = null;

    /**
     * The number of units of time in the span.
     *
     * @var int
     */
    public $value = null;
}
