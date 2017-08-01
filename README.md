# WUS
WUS is the server which games check to see if your other Wii Friends have the game that you have.

There are two scripts, `inquiry` and `notify`.

- `inquiry` is sent a list of friend codes from the Wii for the server to check. In the same order, it returns a list of 0s and 1s. 0 means the Wii doesn't have the game, and 1 means it does.
- `notify` tells the server the Wii has the game.

At this time, this script lacks any connection to MySQL, so a call to `inquiry` returns a list with every number as 1, and the scripts are very small.
