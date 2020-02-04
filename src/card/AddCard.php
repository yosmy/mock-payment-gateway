<?php

namespace Yosmy\Payment\Gateway\Mock;

use Yosmy\Payment\Gateway;

/**
 * @di\service({
 *     tags: ['yosmy.payment.gateway.add_card']
 * })
 */
class AddCard implements Gateway\AddCard
{
    /**
     * {@inheritDoc}
     */
    public function add(
        string $customer,
        string $name,
        string $number,
        string $month,
        string $year,
        string $cvc,
        string $zip
    ) {
        $id = uniqid();

        $last4 = substr($number, -4);

        return new Gateway\Card(
            $id,
            $last4
        );
    }

    /**
     * {@inheritDoc}
     */
    public function identify() {
        return 'mock';
    }
}