<?php

namespace Fastbill\Resources;

use Fastbill\Fastbill;

/**
 * Class Invoices
 *
 * @namespace    Fastbill\Resources
 * @author     Mauthi <mauthi@gmail.com>
 */
class Invoices extends AbstractResource implements ResourceInterface
{
    const FASTBILL_SERVICE = 'invoice';
    const FASTBILL_RESOURCE = 'INVOICES';
    const FASTBILL_RESOURCE_KEY = 'INVOICE_ID';

    /**
     * @param Connection $connection
     */
    public function __construct(Fastbill $connection)
    {
        parent::__construct($connection, self::FASTBILL_SERVICE, self::FASTBILL_RESOURCE, self::FASTBILL_RESOURCE_KEY);
    }
}