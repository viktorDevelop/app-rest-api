<?php
namespace core\bridge;

// importSection
class ControllerImportSection
{
    public function actionSection()
    {
        $type = new TypeCsvImport();
        $import = new ImportSection($type,[]);
    }

}