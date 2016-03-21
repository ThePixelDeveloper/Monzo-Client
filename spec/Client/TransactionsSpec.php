<?php

namespace spec\Thepixeldeveloper\Mondo\Client;

use Prophecy\Argument;
use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;
use Thepixeldeveloper\Mondo\MondoClientInterface;
use Thepixeldeveloper\Mondo\Response\Transactions;
use Thepixeldeveloper\Mondo\Response\Transactions\Transaction;

class TransactionsSpec extends ObjectBehavior
{
    function let(MondoClientInterface $client)
    {
        $this->beConstructedWith($client);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Thepixeldeveloper\Mondo\Client\Transactions');
    }

    function it_should_return_a_transaction(MondoClientInterface $client, ResponseInterface $response)
    {
        $client->get('/transactions/123')->willReturn($response);

        $client->deserializeResponse($response, Transaction::class)->willReturn(new Transaction());

        $this->getTransaction(123)->shouldHaveType(Transaction::class);
    }

    function it_should_return_a_list_of_transactions_for_an_account_id(MondoClientInterface $client, ResponseInterface $response)
    {
        $client->get('/transactions', [
            'query' => [
                'account_id' => 123
            ]
        ])->willReturn($response);

        $client->deserializeResponse($response, Transactions::class)->willReturn(new Transactions());

        $this->getTransactionsForAccountId(123)->shouldHaveType(Transactions::class);
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
