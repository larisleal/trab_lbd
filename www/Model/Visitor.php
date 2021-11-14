<?php
namespace Model;

class Visitor
{
    private $visitors;
    private $data;
    
    public function __construct($data, $visitors) {
        $this->data = $data;
        $this->visitors=$visitors;
    }

    /**
     * @return mixed
     */
    public function getVisitors()
    {
        return $this->visitors;
    }

    /**
     * @param mixed $visitors
     */
    public function setVisitors($visitors)
    {
        $this->visitors = $visitors;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
    public function setData($data)
    {
        $this->data = $data;
    }

    
    
}