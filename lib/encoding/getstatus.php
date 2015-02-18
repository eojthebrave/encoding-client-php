<?php
/**
 * @file
 */

/**
 * Class EncodingAPIGetStatusAction
 */
class Encoding_GetStatusAction extends Encoding_Client {
  /**
   * Constructor.
   */
  public function __construct($user_id, $user_key) {
    parent::__construct($user_id, $user_key);
    $this->setAction(Encoding_Client::ACTION_GET_STATUS);
  }

  /**
   * Set the MediaID.
   */
  public function setMediaID($media_id) {
    $this->setFieldValue('mediaid', $media_id);
  }

  /**
   * Implements parent::sendRequest().
   */
  public function sendRequest($method) {
    return parent::sendRequest(Encoding_Client::POST);
  }
}
