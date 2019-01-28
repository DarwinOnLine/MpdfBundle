<?php

namespace DoL\MpdfBundle\Tests\Service;

use DoL\MpdfBundle\Service\MpdfService;
use Mpdf\Mpdf;

/**
 * Test class for MpdfService.
 */
final class MpdfServiceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers \DoL\MpdfBundle\Service\MpdfService::getMpdf
     */
    public function testGetMpdf()
    {
        $service = new MpdfService();

        self::assertInstanceOf(Mpdf::class, $service->getMpdf());
    }
}
