<?php

/*
 * This file is part of felpado.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace felpado;

use felpado as f;

/**
 * f\rest($collection)
 *
 * Returns an array with the values of collection after the first.
 * It returns an empty array if collection is empty or has only one value.
 * Rest does not keep the index.
 *
 * f\rest(array(1, 2, 3, 4, 5));
 * => array(2, 3, 4, 5)
 *
 * f\rest(array(1));
 * => array()
 *
 * f\rest(array());
 * => array()
 */
function rest($coll) {
    foreach ($coll as $v) {
        if (!isset($result)) {
            $result = array();
        } else {
            $result[] = $v;
        }
    }

    return isset($result) ? $result : array();
}
