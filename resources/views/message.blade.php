<p>Http client : {{$json_httpClient}}</p>
<p>Bot: {{$json_bot}}</p>
<p>Result: {{$json_result}}</p>
<p>Http status: {{empty($httpStatus) ? '' : $httpStatus}}</p>
<p>Body: {{empty($rawBody) ? '' : $rawBody}}</p>
<p>End point : {{empty($endPoint) ? '' : $endPoint}}</p>
<p>Data: {{$data}}</p>
