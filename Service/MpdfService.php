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
     * @param array $constructorArgs
     *
     * @return Mpdf
     *
     * @throws \Mpdf\MpdfException
     */
    public function getMpdf($constructorArgs = array())
    {
        return new Mpdf($constructorArgs);
    }
}
