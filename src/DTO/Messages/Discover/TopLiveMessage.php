<?php

namespace NicklasW\Instagram\DTO\Messages\Discover;

use NicklasW\Instagram\DTO\Envelope;
use NicklasW\Instagram\Responses\Serializers\Traits\OnPropagateDecodeEventTrait;
use Traits\MappableTrait;

class TopLiveMessage extends Envelope
{

    use MappableTrait;
    use OnPropagateDecodeEventTrait;

    /**
     * @var bool
     * @name auto_load_more_enabled
     */
    protected $autoLoadMoreEnabled;

    /**
     * @var
     */
    protected $broadcasts;

    /**
     * @var bool
     * @name more_available
     */
    protected $moreAvailable;

    /**
     * @var string
     * @name next_max_id
     */
    protected $nextMaxId;

    /**
     * @return mixed
     */
    public function getAutoLoadMoreEnabled()
    {
        return $this->autoLoadMoreEnabled;
    }

    /**
     * @return array
     */
    public function getBroadcasts(): array
    {
        return $this->broadcasts;
    }

    /**
     * @return mixed
     */
    public function getMoreAvailable()
    {
        return $this->moreAvailable;
    }

    /**
     * @return mixed
     */
    public function getNextMaxId()
    {
        return $this->nextMaxId;
    }

}