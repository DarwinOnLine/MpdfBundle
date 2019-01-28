<?php

namespace DoL\MpdfBundle\Service;

use Mpdf\Mpdf;

/**
 * Mpdf service.
 *
 * @author DarwinOnLine
 *
 * @see https://github.com/DarwinOnLine/MpdfBundle
 */
class MpdfService
{
    /**
     * @var string
     */
    private $cacheDir;

    /**
     * MpdfService constructor.
     *
     * @param string $cacheDir
     */
    public function __construct($cacheDir)
    {
        $this->cacheDir = $cacheDir;
    }

    /**
     * @param array $constructorArgs
     *
     * @return Mpdf
     *
     * @throws \Mpdf\MpdfException
     */
    public function getMpdf($constructorArgs = array())
    {
        return new Mpdf(array_merge(array(
            'tempDir' => $this->cacheDir,
        ), $constructorArgs));
    }
}
