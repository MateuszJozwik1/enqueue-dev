<?php

namespace Enqueue\Dbal\Tests\Spec\Postgresql;

use Interop\Queue\Spec\ProducerSpec;

/**
 * @group functional
 */
class DbalProducerTest extends ProducerSpec
{
    use CreateDbalContextTrait;

    /**
     * {@inheritdoc}
     */
    protected function createProducer()
    {
        return $this->createDbalContext()->createProducer();
    }
}
