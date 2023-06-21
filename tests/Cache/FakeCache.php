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

namespace Tests\Automattic\SlidingWindowCounter\Cache;

class FakeCache implements \Automattic\SlidingWindowCounter\Cache\CounterCache
{
    private array $cache = [];

    public function increment(string $cache_name, string $cache_key, int $ttl, int $step)
    {
        $this->cache[$cache_name][$cache_key] = ($this->cache[$cache_name][$cache_key] ?? 0) + $step;

        return $this->cache[$cache_name][$cache_key];
    }

    public function get(string $cache_name, string $cache_key): ?int
    {
        return $this->cache[$cache_name][$cache_key] ?? null;
    }
}
