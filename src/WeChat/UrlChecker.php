<?php

/**
 * Created by IntelliJ IDEA.
 * User: maxsky
 * Date: 2021/12/13
 * Time: 6:19 PM
 */

namespace MaxSky\WeChat;

use GuzzleHttp\Client;

class UrlChecker {

    private $httpClient;

    public function __construct() {
        $this->httpClient = new Client();
    }

    /**
     * @param string $url
     *
     * @return bool
     */
    public function check(string $url): bool {
        $location = $this->httpClient->get(URL_WECHAT_WAP_REDIRECT, [
                'query' => [
                    'url' => $url
                ],
                'allow_redirects' => false
            ])->getHeader('Location')[0] ?? null;

        if ($location === $url) {
            return true;
        }

        return false;
    }
}
