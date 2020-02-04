<?php

namespace Yosmy\Payment\Gateway\Mock;

use Yosmy\Payment\Gateway;

/**
 * @di\service({
 *     tags: ['yosmy.payment.gateway.add_customer']
 * })
 */
class AddCustomer implements Gateway\AddCustomer
{
    /**
     * {@inheritDoc}
     */
    public function add() {
        $id = uniqid();

        return new Gateway\Customer(
            $id
        );
    }

    /**
     * {@inheritDoc}
     */
    public function identify() {
        return 'mock';
    }
}