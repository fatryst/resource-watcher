<?php

namespace Fatryst\ResourceWatcher\Resource;

interface ResourceInterface
{
    /**
     * Detect any changes to the resource.
     *
     * @return array
     */
    public function detectChanges();
}
