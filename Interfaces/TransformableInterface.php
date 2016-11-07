<?php

namespace Interfaces;

/**
 * An Interface specifies methods a class has to implement
 * The transformable interface does not do anything, it just specify methods,
 * and it can be used as type, the same as a Class.
 * Example: \JsonSerializable is an Interface used by json_encode to jsonify
 * an object.
 */
interface TransformableInterface {
    public function transform();
    public function untransform();
}
