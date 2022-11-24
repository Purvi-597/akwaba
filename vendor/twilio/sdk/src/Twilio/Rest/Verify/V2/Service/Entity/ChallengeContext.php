<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service\Entity;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceContext;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Rest\Verify\V2\Service\Entity\Challenge\NotificationList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property NotificationList $notifications
 */
class ChallengeContext extends InstanceContext {
    protected $_notifications;

    /**
     * Initialize the ChallengeContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid Service Sid.
     * @param string $identity Unique external identifier of the Entity
     * @param string $sid A string that uniquely identifies this Challenge.
     */
    public function __construct(Version $version, $serviceSid, $identity, $sid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'identity' => $identity, 'sid' => $sid, ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Entities/' . \rawurlencode($identity) . '/Challenges/' . \rawurlencode($sid) . '';
    }

    /**
     * Fetch the ChallengeInstance
     *
     * @return ChallengeInstance Fetched ChallengeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): ChallengeInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new ChallengeInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['identity'],
            $this->solution['sid']
        );
    }

    /**
     * Update the ChallengeInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ChallengeInstance Updated ChallengeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): ChallengeInstance {
        $options = new Values($options);

        $data = Values::of(['AuthPayload' => $options['authPayload'], ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new ChallengeInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['identity'],
            $this->solution['sid']
        );
    }

    /**
     * Access the notifications
     */
    protected function getNotifications(): NotificationList {
        if (!$this->_notifications) {
            $this->_notifications = new NotificationList(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['identity'],
                $this->solution['sid']
            );
        }

        return $this->_notifications;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Verify.V2.ChallengeContext ' . \implode(' ', $context) . ']';
    }
}