<?php

/**
 *Upload Image In Local Storage.
 * @param  $folder
 * @param $image
 */

use Illuminate\Support\Arr;

const PAGINATION_COUNT = 10;

if (!function_exists('upload_image')) {
    function upload_image($folder, $image)
    {
        $store = \Illuminate\Support\Facades\Storage::disk('public')->put($folder, $image);
        $url = \Illuminate\Support\Facades\Storage::disk('public')->url($store);
        return $url;

    }
}

if (!function_exists('paginationInformation')) {

    function paginationInformation($paginated)
    {
        return [
            'links' => paginationLinks($paginated),
            'meta' => meta($paginated),
        ];
    }
}
if (!function_exists('paginationLinks')) {

    function paginationLinks($paginated)
    {
        return [
            'first' => $paginated['first_page_url'] ?? null,
            'last' => $paginated['last_page_url'] ?? null,
            'prev' => $paginated['prev_page_url'] ?? null,
            'next' => $paginated['next_page_url'] ?? null,
        ];
    }
}

if (!function_exists('meta')) {

    function meta($paginated)
    {
        return Arr::except($paginated, [
            'data',
            'first_page_url',
            'last_page_url',
            'prev_page_url',
            'next_page_url',
        ]);
    }
}



