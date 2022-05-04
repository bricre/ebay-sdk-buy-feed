<?php

namespace Ebay\Buy\Feed\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * An array of application configurations that determines the feed files available
 * to the application.
 */
class ApplicationAccess extends AbstractModel
{
    /**
     * The response payload will contain a list of every feed type the application can
     * access. The marketplaces and L1 categories to which the application is
     * constrained within each feed are also returned. If no marketplaces are listed
     * for a particular feed type, the application has access to all marketplaces. L1
     * categories are constrained according to marketplace. If a marketplace is listed
     * with no L1 categories, the application has access to all categories in that
     * marketplace. See <b>Sample 1: getAccess Request</b> below.
     *
     * @var \Ebay\Buy\Feed\Model\Access[]
     */
    public $accesses = null;
}
