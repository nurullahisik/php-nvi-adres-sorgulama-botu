<?php
/**
 * Created by PhpStorm.
 * User: Nurullah ISIK
 * Date: 30.05.2020
 * Time: 21:49
 */

namespace NVI\Adres;
class Options
{

    private $host;
    private $referer;
    private $content_type;
    private $request_verification_token;
    private $cookie;
    private $user_agent;
    private $x_requested_with;


    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return string
     */
    public function getReferer()
    {
        return $this->referer;
    }

    /**
     * @param string $referer
     */
    public function setReferer($referer)
    {
        $this->referer = $referer;
    }

    /**
     * @return string
     */
    public function getContentType()
    {
        return $this->content_type;
    }

    /**
     * @param string $content_type
     */
    public function setContentType($content_type)
    {
        $this->content_type = $content_type;
    }

    /**
     * @return mixed
     */
    public function getRequestVerificationToken()
    {
        return $this->request_verification_token;
    }

    /**
     * @param mixed $request_verification_token
     */
    public function setRequestVerificationToken($request_verification_token): void
    {
        $this->request_verification_token = $request_verification_token;
    }

    /**
     * @return mixed
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * @param mixed $cookie
     */
    public function setCookie($cookie): void
    {
        $this->cookie = $cookie;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * @param mixed $user_agent
     */
    public function setUserAgent($user_agent): void
    {
        $this->user_agent = $user_agent;
    }

    /**
     * @return mixed
     */
    public function getXRequestedWith()
    {
        return $this->x_requested_with;
    }

    /**
     * @param mixed $x_requested_with
     */
    public function setXRequestedWith($x_requested_with): void
    {
        $this->x_requested_with = $x_requested_with;
    }

}