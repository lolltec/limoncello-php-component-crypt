<?php declare(strict_types=1);

namespace Limoncello\Crypt\Contracts;

/**
 * Copyright 2015-2019 info@neomerx.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * @package Limoncello\Crypt
 */
interface HasherInterface
{
    /**
     * @param string $password
     *
     * @return string
     */
    public function hash(string $password): string;

    /**
     * @param string $password
     * @param string $hash
     *
     * @return bool
     */
    public function verify(string $password, string $hash): bool;
}
