<?php
/**
 * Copyright 2023 Automattic, Inc.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Tests\Automattic\SlidingWindowCounter\Helper;

use Automattic\SlidingWindowCounter\Helper\TimeKeeper;

class FakeTimeKeeper implements TimeKeeper
{
    private int $time;

    public function __construct(int $time = 0)
    {
        $this->time = $time;
    }

    public function getCurrentUnixTime(): int
    {
        return $this->time;
    }

    public function setCurrentUnixTime(int $time): void
    {
        $this->time = $time;
    }
}
