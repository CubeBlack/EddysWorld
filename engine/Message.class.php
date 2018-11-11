<?php
    class Message{
        function webhook(){
            global $config, $grimorio;
            if(isset( $_REQUEST['hub_challenge'])){
                $challenge = $_REQUEST['hub_challenge'];
                $verify_token = $_REQUEST['hub_verify_token'];
                if ($verify_token === $config->message_webhookcode) {
                  echo $challenge;
                }
            }
            $input = json_decode(file_get_contents('php://input'), true);
            // Get the Senders Graph ID
            if(isset($input['entry'][0]['messaging'])){
                if(isset($input['entry'][0]['messaging'][0]['message']["is_echo"])){
                    echo "is_echo";
                    return;
                }
                if(isset($input['entry'][0]['messaging'][0]["read"])){
                    echo "read";
                    return;
                }
                if(isset($input['entry'][0]['messaging'][0]["delivery"])){
                    echo "delivery";
                    return;
                }
                
                $sender = $input['entry'][0]['messaging'][0]['sender']['id'];
                // Get the returned message
                $message = $input['entry'][0]['messaging'][0]['message']['text'];
                //$this->send($sender,"3 [$message]");
                $this->send($sender,$grimorio->ouvir($message));
            }else{
                //echo "Empty!";
            }

        }
        function send($user,$msg){
            global $config;
            $url = "https://graph.facebook.com/v2.6/me/messages?access_token={$config->message_token}";
            $conteudo = array(
                'messaging_type' => 'RESPONSE',
                'recipient' => array(
                    'id' => $user
                ), 
                'message' => array(
                    "text" => $msg
                )
            );
            
            $options = array(
              'http' => array(
                'method'  => 'POST',
                'content' => json_encode($conteudo),
                'header'=>  "Content-Type: application/json\r\n" .
                            "Accept: application/json\r\n"
                )
            );
            
            $context  = stream_context_create( $options );
            file_get_contents($url, false, $context );
        }
        //calbacks
    }
