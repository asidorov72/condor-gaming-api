<?php

namespace Controller\Transporter;

class TransporterController {
    
  public function Response($status, $status_message, $data) {
    header("HTTP/1.1 ".$status);

    $response['status'] = $status;
    $response['message'] = $status_message;
    $response['data'] = $data;

    $json_response = json_encode($response);
    echo $json_response;
  }
}

