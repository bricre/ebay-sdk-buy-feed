<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * <p>A key-pair array of values used to define the feed files available to the
 * application.
 */
class Dimension extends AbstractModel
{
    /**
     * The key element for a value in the <b>dimensions</b> array, paired with its
     * value(s). Currently, only <b>CATEGORY</b> (available L1 category) is available.
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/buy/feed/types/api:DimensionKeyEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dimensionKey = null;

    /**
     * The dimension value(s) paired with the <b>dimensionKey</b> in the
     * <b>dimensions</b> array. Currently, the only supported dimension is CATEGORY, so
     * the values in this array will be L1 eBay categories.”.
     *
     * @var string[]
     */
    public $values = null;
}
