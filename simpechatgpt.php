<?php

require_once(__DIR__ . '/vendor/autoload.php');
use Tectalic\OpenAi\Authentication;
use Tectalic\OpenAi\Manager;
use Tectalic\OpenAi\Models\Completions\CreateRequest;

$openaiClient = Manager::build(new \GuzzleHttp\Client([
    'verify' => false,
]), new Authentication("TOKEN"));
$response = $openaiClient->completions()->create(
    new CreateRequest([
        'model'  => 'text-davinci-003',
        'prompt' => 'PROMPT',
        'max_tokens' => 256,
    ])
)->toModel();

echo $response->choices[0]->text;

?>
