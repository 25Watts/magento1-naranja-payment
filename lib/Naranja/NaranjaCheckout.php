<?php
require_once(__DIR__ . '/vendor/autoload.php');

class Naranja_NaranjaCheckout {
    /**
     * Instance clientId
     * @var string
     */
    private $clientId;

    /**
     * Instance clientSecret
     * @var string
     */
    private $clientSecret;
    
    /**
     * Naranja Checkout API
     * 
     * @param String clientId Client Id
     * @param String clientSecret Client secret
     * @param String environment What environment to use <prod|sandbox>
     * @param Array customHost Optional set custom host for the API calls. First item of array is the api path, second is security api.
     */
    public function __construct(string $clientId, string $clientSecret, string $enviroment, array $customHost = null) {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        
        $this->setEnviroment($enviroment, $customHost);
    }
    
    private function setEnviroment(string $enviroment, array $customHost = null) {
        // Define custom hosts
        if (!empty($customHost)) {
            $basePath = ['/api','/security-ms'];
            
            Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setHost($customHost[0].$basePath[0]);
            Naranja\Security\Configuration::getDefaultConfiguration()->setHost($customHost[1].$basePath[1]);
            
            return;
        }
        
        switch ($enviroment) {
            case 'prod':
            case 'production':
            case 'produccion':
                $hosts = array(
                    'https://checkout.apinaranja.com/api',
                    'https://services.apinaranja.com/security-ms'
                );
                
                Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setHost($hosts[0]);
                Naranja\Security\Configuration::getDefaultConfiguration()->setHost($hosts[1]);
            break;
            case 'sandbox':
                $hosts = array(
                    'https://sandbox-checkout.apinaranja.com/api',
                    'https://homoservices.apinaranja.com/security-ms'
                );
                
                Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setHost($hosts[0]);
                Naranja\Security\Configuration::getDefaultConfiguration()->setHost($hosts[1]);
            break;
            case 'staging':
            case 'stage':
            case 'stagin':
                $hosts = array(
                    'https://e3-checkout.apinaranja.com/api',
                    'https://homoservices.apinaranja.com/security-ms'
                );
                
                Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setHost($hosts[0]);
                Naranja\Security\Configuration::getDefaultConfiguration()->setHost($hosts[1]);
            break;
            default:
                throw new Naranja\CheckoutApi\ApiException('Invalid environment');
        }
    }
    
    private function getToken() {
        $tenantGroupId = "clients";
        $settings = [
            "client_id" => $this->clientId, 
            "client_secret" => $this->clientSecret,
            "audience" => "https://naranja.com/ranty/merchants/api",
            "cache" => true
        ];
        
        $apiInstance = new Naranja\Security\Api\DefaultApi(new GuzzleHttp\Client());
        $authenticationb2bpost = new \Naranja\Security\Model\Authenticationb2bpost($settings);
        
        try {
            $result = $apiInstance->postAuth0B2b($tenantGroupId, $authenticationb2bpost);
            return $result;
        } catch (Exception $e) {
            throw new Naranja\CheckoutApi\ApiException('Exception when calling postAuth0B2b: '. $e->getMessage());
        }
    }
    
    private function getInstanceApiCheckout(string $jwt) {
        $token = json_decode($jwt);
        $config = Naranja\CheckoutApi\Configuration::getDefaultConfiguration()->setAccessToken($token->access_token);
        $apiInstance = new Naranja\CheckoutApi\Api\RantyApi(new GuzzleHttp\Client(), $config);
        
        return $apiInstance;
    }
    
    public function createPaymentRequest(Naranja\CheckoutApi\Model\PaymentRequest $paymentRequest) {
        $invalidProperties = $paymentRequest->listInvalidProperties();
        
        if (!empty($invalidProperties)) {
            throw new Exception('Payment request data invalid: ' . implode(', ', $invalidProperties));
        }
        
        $token = $this->getToken();
        $apiCheckoutSdk = $this->getInstanceApiCheckout($token);
        
        try {
            $result = $apiCheckoutSdk->createPaymentRequest($paymentRequest); 
            return $result;
        } catch (Exception $e) {
            throw new Naranja\CheckoutApi\ApiException('Exception when calling NaranjaCheckout->createPaymentRequest: '. $e->getMessage());
        }
    }
    
    /**
     * Get payment request by its id
     * 
     * @param String Id payment id
     * @return PaymentRequest
     * @throws Naranja\CheckoutApi\ApiException
     */
    public function getPaymentRequest(string $id) {
        $token = $this->getToken();
        $apiCheckoutSdk = $this->getInstanceApiCheckout($token);
        
        try {
            $result = $apiCheckoutSdk->getPaymentRequest($id);
            return $result;
        } catch (Exception $e) {
            throw new Naranja\CheckoutApi\ApiException('Exception when calling NaranjaCheckout->getPaymentRequests: '. $e->getMessage());
        }
    }
    
    /**
     * Get payment by external id
     * 
     * @param String externalId The external id provided in the payment request
     * @return Payment
     * @throws Naranja\CheckoutApi\ApiException
     */
    public function getPaymentByExternalId(string $externalId) {
        $token = $this->getToken();
        $apiCheckoutSdk = $this->getInstanceApiCheckout($token);
        
        try {
            $result = $apiCheckoutSdk->getPaymentByExternalId($externalId);
            return $result;
        } catch (Exception $e) {
            throw new Naranja\CheckoutApi\ApiException('Exception calling NaranjaCheckout->getPaymentByExternalId: '. $e->getMessage());
        }
    }
    
    /**
     * Get payment
     * 
     * @param String id The id of the payment request
     * @return Payment
     * @throws Naranja\CheckoutApi\ApiException
     */
    public function getPayment(string $id) {
        $token = $this->getToken();
        $apiCheckoutSdk = $this->getInstanceApiCheckout($token);
        
        try {
            $result = $apiCheckoutSdk->getPayment($id);
            return $result;
        } catch (Exception $e) {
            throw new Naranja\CheckoutApi\ApiException('Exception when calling OwnerDxApi->getPayment: '. $e->getMessage());
        }
    }
}
?>