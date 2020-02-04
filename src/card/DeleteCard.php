<?php

namespace Yosmy\Payment\Gateway\Mock;

use Yosmy\Payment\Gateway;

/**
 * @di\service({
 *     tags: ['yosmy.payment.gateway.delete_card']
 * })
 */
class DeleteCard implements Gateway\DeleteCard
{
    /**
     * {@inheritDoc}
     */
    public function delete(
        string $customer,
        string $card
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