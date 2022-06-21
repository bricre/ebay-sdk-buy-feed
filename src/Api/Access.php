<?php

namespace Ebay\Buy\Feed\Api;

use Ebay\Buy\Feed\Model\ApplicationAccess;
use OpenAPI\Runtime\UnexpectedResponse;

class Access extends AbstractAPI
{
    /**
     * The getAccess method retrieves the access rules specific to the application; for
     * example, the feed types to which the application has permissions. An application
     * may be constrained to certain marketplaces, and to specific L1 categories within
     * those marketplaces. You can use this information to apply filters to the
     * getFiles method when obtaining details on accessible downloadable
     * files.<h3><b>Restrictions </b></h3>                <p>For a list of supported
     * sites and other restrictions, see <a
     * href="/api-docs/buy/feed/overview.html#API">API Restrictions</a>.</p>.
     *
     * @return ApplicationAccess|UnexpectedResponse
     */
    public function get()
    {
        return $this->request(
        'getAccess',
        'GET',
        'access',
        null,
        [],
        []
        );
    }
}
