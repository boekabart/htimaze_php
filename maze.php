<?php
require_once(__DIR__ . '/vendor/autoload.php');

$key = $argv[1];
// Configure API key authorization: User token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', $key);
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$playerApi = new Swagger\Client\Api\PlayerApi(
    new GuzzleHttp\Client(),
    $config
);

$mazesApi = new Swagger\Client\Api\MazesApi(
    new GuzzleHttp\Client(),
    $config
);

$mazeApi = new Swagger\Client\Api\MazeApi(
    new GuzzleHttp\Client(),
    $config
);

try {
    $playerApi->forget();
    $result = $playerApi->register('bart @ php');
    print_r($result);
    $mazes = $mazesApi->all();
    //print_r($mazes);
    foreach($mazes as $aMaze)
        doOneMaze($aMaze, $mazesApi, $mazeApi);
    
    } catch (Exception $e) {
    echo 'Exception: ', $e->getMessage(), PHP_EOL;
}

function doOneMaze($aMaze, $mazesApi, $mazeApi)
{
    print_r("Entering Maze " . $aMaze->getName() . PHP_EOL);
    print_r("Max Score " . $aMaze->getPotentialReward() . PHP_EOL);
    $backTrack = new Ds\Stack();
    $moves = $mazesApi->enter($aMaze->getName());
    while (true) {
        if ($moves->getCurrentScoreInHand() != 0 && $moves->getCanCollectScoreHere())
            $moves = $mazeApi->collectScore();

        $bestMove = getBestMove($moves);
        if ($bestMove == null) {
            $bestMove = popFrom($backTrack);
            print_r("Back ". $bestMove . PHP_EOL);
            if ($bestMove == null) {
                break;
            }
        }
        else
        {
            $backTrack->push($bestMove);
            print_r($bestMove . PHP_EOL);
        }
        $moves = $mazeApi->move($bestMove);
    }

    while (true) {
        if ($moves->getCurrentScoreInHand() != 0 && $moves->getCanCollectScoreHere())
            $moves = $mazeApi->collectScore();

        if ($moves->getCurrentScoreInHand() == 0 && $moves->getCanExitMazeHere())
            break;
        
        $possibleMoves = $moves->getPossibleMoveActions();
        $randomMove = $possibleMoves[array_rand($possibleMoves)]->getDirection();
        print_r("Randomly going " . $randomMove . PHP_EOL);
        $moves = $mazeApi->move($randomMove);
    }

    $mazeApi->exitMaze();
    return;
}

function popFrom($stack)
{
    if ($stack->isEmpty())
        return null;
    $moveToInvert = $stack->pop();
    switch ($moveToInvert) {
        case "Up": return "Down";
        case "Down": return "Up";
        case "Left": return "Right";
        case "Right": return "Left";
    }
    print_r($moveToInvert . " cannot be inverted");
    return null;
}

function getBestMove($moves)
{
    foreach ($moves->getPossibleMoveActions() as $move) {
        $moveNotUseful = $move->getHasBeenVisited();
        if (!$moveNotUseful)
            return $move->getDirection();
    }
    return null;
}

?>