<?php

class HercView_PostNotes extends HercView
{
    function __construct()
    {
        $this->directory         = dirname( __FILE__ );
        $this->name              = 'Your Post Notes';
        $this->type              = 'metabox';
        $this->class_name        = __CLASS__;
        $this->metabox_positions = array(
            array(
                'post_type' => 'page',
                'position' => 'side',
                'priority' => 'high'
            ),
            array(
                'post_type' => 'post',
                'position' => 'side',
                'priority' => 'high'
            ),
        );

        $this->IncludeBootstrap();

        $this->data = array();

        parent::__construct();
    }
}