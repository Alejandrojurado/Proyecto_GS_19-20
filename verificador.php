<?php
     print_r($_GET);

     $ClientID="AbSQgCnx0sM0xhD3XWM4uKMua0wWQYI4YhKI8GWEdxgd311jyZh1jsNf2mRjB_avIdAV6WbQABuhDPSF";
     $Secret="EKq3317vQE9SsBGS29MtcrPCKzlBCKj_XgRSqnngq3GMm7FBC-dO2I5hUB0xncftYMIwCriohWF6wSdn";


          $Login=curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");

          curl_setopt($Login,CURLOPT_RETURNTRANSFER,true);

          curl_setopt($Login,CURLOPT_USERPWD,$ClientID.":".$Secret);

          curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");

          $Respuesta = curl_exec($Login);
          $objRespuesta=json_decode($Respuesta);
          $AccessToken=$objRespuesta->access_token;

          print_r($AccessToken);

 ?>
