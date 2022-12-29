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
        'model'  => 'code-davinci-002',
        'prompt' => readline(""),
        'max_tokens' => 2048,
    ])
)->toModel();

echo "Total tokens used: ";
echo $response->usage->total_tokens;
echo $response->choices[0]->text;
echo "\n";
?>
