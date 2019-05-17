<?php

/*
 * This file is part of the tlwl/http-client.
 * 
 * (c) 悟玄 <roc9574@sina.com>
 * 
 * This source file is subject to the MIT license that is bundled.
 * with this source code in the file LICENSE.
 */

namespace Tlwl\HttpClient\Support;

use ArrayAccess;

interface Arrayable extends ArrayAccess
{
    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray();
}
