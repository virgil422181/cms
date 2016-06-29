<?php
/**
 * Created by Virgil
 * Date: 3/13/2016
 * Time: 10:05 PM
 */

namespace Custom\CMSBundle\Controller;


use Facebook\Facebook;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FacebookController extends Controller
{
    private $appId;
    private $appSecret;
    private $fb;
    private $token;

    public function __construct () {
        $this->appId = "1682842461985678";
        $this->appSecret = "ec64a1d677b1166ceb5f091de3456189";
        $data = array(
            'app_id' => $this->appId,
            'app_secret' => $this->appSecret,
            'default_graph_version' => 'v2.5',
        );
        $this->fb = new Facebook($data);
    }
    /**
     * @return Facebook object
     */
    public function getFb()
    {
        return $this->fb;
    }


}