<?php

namespace Emr\Request\V20160408;

/**
 * Request of ListClusterServiceQuickLink
 *
 * @method string getResourceOwnerId()
 * @method string getServiceName()
 * @method string getClusterId()
 */
class ListClusterServiceQuickLinkRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'ListClusterServiceQuickLink',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $serviceName
     *
     * @return $this
     */
    public function setServiceName($serviceName)
    {
        $this->requestParameters['ServiceName'] = $serviceName;
        $this->queryParameters['ServiceName'] = $serviceName;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }
}
