# PossibleActionsAndCurrentScore

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**possible_move_actions** | [**\Swagger\Client\Model\MoveAction[]**](MoveAction.md) | The actions available on your surrounding tiles (lookahead of one tile). | 
**can_collect_score_here** | **bool** | In the tile where you are standing, is it possible to collect score (from hand to bag). | 
**can_exit_maze_here** | **bool** | In the tile where you are standing, is it possible to exit the maze. Remember you will lose any score in hand  and only be rewarded with the score you have in your bag. | 
**current_score_in_hand** | **int** | What is the score you currently have in your hand. Find a score collection point and issue a collect  score command to move this score into your bag. Score in your hand is not awarded when you exit a maze. | 
**current_score_in_bag** | **int** | What is the score currently in your bag. When you exit the maze this score will be rewarded to your total  overall score. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


