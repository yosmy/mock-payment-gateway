<?php

namespace Yosmy\Payment\Gateway\Mock;

use Yosmy\Payment\Gateway;

/**
 * @di\service({
 *     tags: ['yosmy.payment.gateway.execute_charge']
 * })
 */
class ExecuteCharge implements Gateway\ExecuteCharge
{
    /**
     * {@inheritDoc}
     */
    public function execute(
        string $customer,
        string $card,
        int $amount,
        string $description,
        string $statement
    ) {
        $id = uniqid();

        return new Gateway\Charge(
            $id,
            time()
        );
    }

    /**
     * {@inheritDoc}
     */
    public function identify() {
        return 'mock';
    }
}
