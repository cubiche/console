<?php
/**
 * This file is part of the Cubiche package.
 *
 * Copyright (c) Cubiche
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cubiche\Core\Console\Tests\Fixtures\Event;

use Cubiche\Core\Console\Tests\Fixtures\PostId;
use Cubiche\Domain\EventSourcing\DomainEvent;

/**
 * PostTitleWasChanged class.
 *
 * @author Ivannis Suárez Jerez <ivannis.suarez@gmail.com>
 */
class PostTitleWasChanged extends DomainEvent
{
    /**
     * @var string
     */
    protected $title;

    /**
     * PostTitleWasChanged constructor.
     *
     * @param PostId $id
     * @param string $title
     */
    public function __construct(PostId $id, $title)
    {
        parent::__construct($id);

        $this->title = $title;
    }

    /**
     * @return PostId
     */
    public function id()
    {
        return $this->aggregateId();
    }

    /**
     * @return string
     */
    public function title()
    {
        return $this->title;
    }
}
