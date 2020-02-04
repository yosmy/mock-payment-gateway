<?php

namespace Yosmy\Payment\Gateway\Mock;

use Yosmy\Payment\Gateway;

/**
 * @di\service({
 *     tags: ['yosmy.payment.gateway.refund_charge']
 * })
 */
class RefundCharge implements Gateway\RefundCharge
{
    /**
     * {@inheritDoc}
     */
    public function refund(
        string $id,
        ?int $amount
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function identify(): string
    {
        return 'mock';
    }
}
