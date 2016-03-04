<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use GuzzleHttp\Client;
use Prophecy\Argument;
use PhpSpec\ObjectBehavior;

class TransactionsSpec extends ObjectBehavior
{
    function let(Client $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Transactions');
    }

    function it_should_return_a_transaction()
    {
        $this->getTransaction(123);
    }

    function it_should_return_a_list_of_transactions_for_an_account_id()
    {
        $this->getTransactionsForAccountId(123);
    }

    function it_should_add_a_single_annotation_for_a_transaction()
    {
        $this->addAnnotationForTransaction(123, 'key', 'val');
    }

    function it_should_add_multiple_annotations_for_a_transaction()
    {
        $this->addAnnotationForTransaction(123, [
            'key1' => 'val1',
            'key2' => 'val2',
            'key3' => 'val3',
        ]);
    }

    function it_should_remove_a_single_annotation_for_a_transaction()
    {
        $this->removeAnnotationForTransaction(123, 'key');
    }

    function it_should_remove_multiple_annotations_for_a_transaction()
    {
        $this->removeAnnotationForTransaction(123, [
            'key1',
            'key2',
            'key3',
        ]);
    }
}
