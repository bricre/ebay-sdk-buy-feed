<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * A <b>Feed</b> API schema version(s) supported by the feed type.
 */
class SupportedSchema extends AbstractModel
{
    /**
     * A list of the fields that will be returned in the feed file.<br /><br /><span
     * class="tablenote"><span style="color:#004680"><strong>Note:</strong></span>
     * Refer to <a href="/api-docs/buy/feed/v1/static/overview.html#feed-types"
     * target="_blank">Supported feed types</a> to learn about the feed fields that are
     * included in each supported feed type.</span>.
     *
     * @var string
     */
    public $definition = null;

    /**
     * Indicates whether the schema is still functional or deprecated. One of either
     * <code>true</code> or <code>false</code>.
     *
     * @var bool
     */
    public $deprecated = null;

    /**
     * An list of the available formats in which the schema can be downloaded.
     * Currently only TSV (Tab Separated Values) is supported.
     *
     * @var string[]|
     */
    public $formats = null;

    /**
     * The version of the <b>Feed</b> API schema under which the feed type was
     * created.<br /><br /><b>Example:</b> 1.0.
     *
     * @var string
     */
    public $schemaVersion = null;
}
