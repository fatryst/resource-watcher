<?php

namespace Fatryst\ResourceWatcher;

use Fatryst\ResourceWatcher\Resource\ResourceInterface;

class Event
{
    /**
     * Deleted resource event code.
     *
     * @var int
     */
    const RESOURCE_DELETED = 0;

    /**
     * Created resource event code.
     *
     * @var int
     */
    const RESOURCE_CREATED = 1;

    /**
     * Modified resource event code.
     *
     * @var int
     */
    const RESOURCE_MODIFIED = 2;

    /**
     * Resource instance.
     *
     * @var \Fatryst\ResourceWatcher\Resource\ResourceInterface
     */
    protected $resource;

    /**
     * Resource event code.
     *
     * @var int
     */
    protected $code;

    /**
     * Create a new event instance.
     *
     * @param  \Fatryst\ResourceWatcher\Resource\ResourceInterface  $resource
     * @param  int  $code
     * @return void
     */
    public function __construct(ResourceInterface $resource, $code)
    {
        $this->resource = $resource;
        $this->code = $code;
    }

    /**
     * Get the resource event code.
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Get the resource.
     *
     * @return \Fatryst\ResourceWatcher\Resource\ResourceInterface
     */
    public function getResource()
    {
        return $this->resource;
    }
}
