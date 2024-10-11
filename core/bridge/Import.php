<?php
namespace core\bridge;

abstract class Import
{
    protected ImportInterface $import;
    protected $arParams = [];

    /**
     * @param ImportInterface $import
     * @param $arParams
     */
    public function __construct(ImportInterface $import, $arParams = [])
    {

        $this->arParams = $arParams;
        $this->import = $import;
    }

    /**
     * @param ImportInterface $import
     * @return void
     */
    public function changeImport(ImportInterface $import)
    {
        $this->import = $import;
    }


    /**
     * @return mixed
     */
    abstract public function run();
}