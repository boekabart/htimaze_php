# PlayerInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**player_id** | **string** | The public unique identifier of a player. | [optional] 
**name** | **string** | The name a player has chosen to represent her. | [optional] 
**is_in_playthrough** | **bool** | An indication of whether a player is currently playing a maze or not. | 
**maze** | **string** | The name of the maze the player is currently playing. Might be null if player  is not currently playing a maze. | [optional] 
**has_found_easter_egg** | **bool** | Wink wink. | 
**maze_score_in_hand** | **int** | How much score the player has in her hand. Only available if player is playing a maze. | [optional] 
**maze_score_in_bag** | **int** | How much score the player has in her bag. Only available if player is playing a maze. | [optional] 
**player_score** | **int** | The accumulated score across all played mazes. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


