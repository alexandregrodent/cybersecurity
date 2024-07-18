<?php

/**
 * Class View
 */
class View
{
    /**
     * Rend une vue
     *
     * @param string $template
     * @param array $data
     */
    public function render(string $template, array $data = []): void
    {
        extract($data);
        require "../templates/$template.php";
    }
}

