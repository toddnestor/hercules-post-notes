<?php

class HercModel_PostNotes extends HercModel
{
    function __construct()
    {
        $this->class_name = __CLASS__;
        $this->directory = dirname( __FILE__ );

        parent::__construct();
    }
}