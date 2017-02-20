<?php

namespace thepixelage\SharpSpring\Tests;

use PHPUnit\Framework\TestCase;
use thepixelage\SharpSpring\SharpSpring;
use thepixelage\SharpSpring\models\Field;

class FieldsTest extends TestCase
{
    private $ss;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->ss = new SharpSpring();
    }

    public function testCanGetFields()
    {
        $fields = $this->ss->getFields();

        $this->assertInternalType(
            'array',
            $fields
        );

        if (count($fields) > 0) {

            $this->assertInstanceOf(
                Field::class,
                $fields[0]
            );

        }
    }
}
