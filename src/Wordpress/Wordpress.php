<?php

namespace DanielGelling\Wordpress;

class Wordpress
{
    protected $foo;
    private $metaboxId = 1;

    public function metabox($title, $content, $post_type, $id = null)
    {
        if (is_null($id))
            $id = $this->metaboxId ++;

        add_action('add_meta_boxes', function () use ($title, $content, $post_type, $id) {
            add_meta_box(
                $id,
                __( $title ),
                function () use ($content) { echo $content; },
                $post_type,
                'normal',
                'default'
            );
        });
    }

    public function table($data, $columnNames = null)
    {
        die(var_dump(\App\Post::all()));

        $data = (array) $data;

        if (! is_null($columnNames))
            $columnNames = (array) $columnNames;

        $output = '';

        foreach ($data as $key => $value) {
            if(isset($columnNames[$key]))
                $output .= '';
        }
    }
}
