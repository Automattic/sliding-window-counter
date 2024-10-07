<?php declare(strict_types=1);
/**
 * The Sliding Window Counter, a short-lived time series library.
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
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace Tests\Automattic\SlidingWindowCounter;

use PHPUnit\Framework\TestCase as BaseTestCase;

use function ksort;

/**
 * @internal
 */
abstract class TestCase extends BaseTestCase
{
    /**
     * Asserts that two arrays are equal, ignoring the order of keys.
     *
     * @param array $expected The expected array
     * @param array $actual The actual array
     * @param string $message The message to display on failure
     * @return void
     */
    protected function assertSameSorted(array $expected, array $actual, string $message = ''): void
    {
        ksort($expected);
        ksort($actual);
        $this->assertSame($expected, $actual, $message);
    }
}
