<?php
namespace core\bridge;

class ImportSection extends Import
{
    /**
     * @return void
     */
    public function run()
    {
        echo "ImportSection ";
        $this->import->update($this->arParams);
    }
}
