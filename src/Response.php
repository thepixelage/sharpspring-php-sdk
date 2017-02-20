<?php

namespace thepixelage\SharpSpring;


class Response
{
    private $id;
    private $error;
    private $result;

    public function __construct($id, $result, $error)
    {
        $this->id     = $id;
        $this->result = $result;
        $this->error  = $error;
    }

    public static function createFromJson($result)
    {
        $json = json_decode($result);

        return new Response($json->id, $json->result, $json->error);
    }

    public function getResult()
    {
        return $this->result;
    }

    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return ($this->getError() != null);
    }
}