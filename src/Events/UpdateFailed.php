<?php

namespace Muyaedward\Updater\Events;

use Muyaedward\Updater\Contracts\SourceRepositoryTypeContract;

/**
 * UpdateFailed.php.
 *
 * @author Holger Lösken <holger.loesken@Muyaedward.de>
 * @copyright See LICENSE file that was distributed with this source code.
 */
class UpdateFailed
{
    /**
     * @var SourceRepositoryTypeContract
     */
    protected $sourceRepository;

    /**
     * @var string
     */
    protected $eventName = 'Update failed';

    /**
     * UpdateFailed constructor.
     *
     * @param SourceRepositoryTypeContract $sourceRepository
     */
    public function __construct(SourceRepositoryTypeContract $sourceRepository)
    {
        $this->sourceRepository = $sourceRepository;
    }

    /**
     * Get the event name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->eventName;
    }
}
