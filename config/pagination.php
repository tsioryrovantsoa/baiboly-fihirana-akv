<?php

return [
    'per_page_options' => json_decode(env('PER_PAGE_OPTIONS', "[20, 30, 40, 50]"), true),
    'per_page' => env('PER_PAGE',20)
];

?>
