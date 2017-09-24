<?php
declare(strict_types = 1);

namespace Dagr\Tzdb\Dev;

final class CatalogCompiler
{
    public function compile(array $catalog) : void
    {
        file_put_contents(__DIR__ . '/../src/Catalog.php', $this->renderFile($catalog));
    }

    private function renderFile(array $catalog) : string
    {
        ob_start();
        require __DIR__ . '/TimeZoneInfoCatalog.phpt';
        return ob_get_clean();
    }
}
