<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service\Entity;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class NewFactorList extends ListResource {
    /**
     * Construct the NewFactorList
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid Service Sid.
     * @param string $identity Unique external identifier of the Entity
     */
    public function __construct(Version $version, string $serviceSid, string $identity) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'identity' => $identity, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Entities/' . \rawurlencode($identity) . '/Factors';
    }

    /**
     * Create the NewFactorInstance
     *
     * @param string $friendlyName The friendly name of this Factor
     * @param string $factorType The Type of this Factor
     * @param array|Options $options Optional Arguments
     * @return NewFactorInstance Created NewFactorInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $friendlyName, string $factorType, array $options = []): NewFactorInstance {
        $options = new Values($options);

        $data = Values::of([
            'FriendlyName' => $friendlyName,
            'FactorType' => $factorType,
            'Binding.Alg' => $options['bindingAlg'],
            'Binding.PublicKey' => $options['bindingPublicKey'],
            'Config.AppId' => $options['configAppId'],
            'Config.NotificationPlatform' => $options['configNotificationPlatform'],
            'Config.NotificationToken' => $options['configNotificationToken'],
            'Config.SdkVersion' => $options['configSdkVersion'],
            'Binding.Secret' => $options['bindingSecret'],
            'Config.TimeStep' => $options['configTimeStep'],
            'Config.Skew' => $options['configSkew'],
            'Config.CodeLength' => $options['configCodeLength'],
            'Config.Alg' => $options['configAlg'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new NewFactorInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['identity']
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Verify.V2.NewFactorList]';
    }
}