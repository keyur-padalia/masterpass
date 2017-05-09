<?php


class CheckoutParsingTest extends BaseTestCase
{

    public function testItParsesCorrectlyTheCheckout()
    {
        $response = unserialize('a:6:{s:4:"Card";O:8:"stdClass":7:{s:7:"BrandId";s:6:"master";s:9:"BrandName";s:10:"MasterCard";s:13:"AccountNumber";s:16:"5506900140100000";s:14:"BillingAddress";O:8:"stdClass":5:{s:4:"City";s:12:"Chesterfield";s:7:"Country";s:2:"US";s:18:"CountrySubdivision";s:5:"US-MO";s:5:"Line1";s:15:"123 Main Street";s:10:"PostalCode";s:5:"63017";}s:14:"CardHolderName";s:11:"Diego Calle";s:11:"ExpiryMonth";s:1:"1";s:10:"ExpiryYear";s:4:"2020";}s:13:"TransactionId";s:19:"3728129981411915500";s:7:"Contact";O:8:"stdClass":5:{s:9:"FirstName";s:5:"Diego";s:8:"LastName";s:5:"Calle";s:7:"Country";s:2:"CO";s:12:"EmailAddress";s:16:"dnetix@gmail.com";s:11:"PhoneNumber";s:10:"3006108399";}s:21:"AuthenticationOptions";s:0:"";s:8:"WalletID";s:3:"101";s:14:"ExtensionPoint";s:0:"";}');
        $checkout = new \Dnetix\MasterPass\Model\Checkout($response);

        $this->assertInstanceOf(\Dnetix\MasterPass\Model\Card::class, $checkout->getCard());
        $this->assertEquals('5506900140100000', $checkout->getCard()->accountNumber());
        $this->assertEquals('01', $checkout->getCard()->expirationMonth());
        $this->assertEquals('20', $checkout->getCard()->expirationYear());
        $this->assertEquals('01/20', $checkout->getCard()->expiration());

        $this->assertInstanceOf(\Dnetix\MasterPass\Model\Address::class, $checkout->getCard()->getBillingAddress());
        $this->assertInstanceOf(\Dnetix\MasterPass\Model\Contact::class, $checkout->getContact());

        $this->assertEquals([
            'name' => 'Diego',
            'surname' => 'Calle',
            'email' => 'dnetix@gmail.com',
            'mobile' => '3006108399',
            'address' => [
                'country' => 'US',
                'city' => 'Chesterfield',
                'street' => '123 Main Street',
                'postalCode' => '63017',
            ],
        ], $checkout->getPayer());
    }

}