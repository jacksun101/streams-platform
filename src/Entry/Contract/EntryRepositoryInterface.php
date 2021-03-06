<?php namespace Anomaly\Streams\Platform\Entry\Contract;

use Anomaly\Streams\Platform\Model\Contract\EloquentRepositoryInterface;

/**
 * Interface EntryRepositoryInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Platform\Entry\Contract
 */
interface EntryRepositoryInterface extends EloquentRepositoryInterface
{

    /**
     * Get the first entry
     * by it's sort order.
     *
     * @param string $direction
     * @return EntryInterface|null
     */
    public function first($direction = 'asc');
}
