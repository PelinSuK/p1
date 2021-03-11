<?php
echo "<h2>" . "Pelin Su Karabacak - 1700004206" . "</h1>";
echo "<h1>" . "ROCK - PAPER - SCISSORS GAME" . "</h1>";
 
$moves = ['ROCK' => 'ROCK','PAPER' => 'PAPER','SCISSORS' =>'SCISSORS'];
$round =1;
$Awon=0;
$Bwon=0;
$draw=0;
for ($x = 0; $x < 10; $x++) {

$playerA = array_rand($moves);
$playerB = array_rand($moves);

echo "<br>";
echo "Round " . $round . " :";
$round++;
echo "<br>";
echo "PlayerA chooses "  . $playerA . "</i>";
echo "<br>" . "PlayerB chooses " . $playerB . "</i>";
echo "<br>";
if($playerA == $playerB)
	{
		echo 'Same choice: DRAW';
		$draw++;
	}
	else if($playerA == 'ROCK' && $playerB == 'PAPER')
	{
		echo 'Paper covers Rock: PLAYER B WON';
		$Bwon++;	
	}
	else if($playerA == 'PAPER' && $playerB == 'ROCK')
	{
		echo 'Paper covers Rock: PLAYER A WON';
		$Awon++;
	}
	else if($playerA == 'ROCK' && $playerB == 'SCISSORS')
	{
		echo 'Rock crushes Scissors: PLAYER A WON';
		$Awon++;
	}
	else if($playerA == 'SCISSORS' && $playerB == 'ROCK')
	{
		echo 'Rock crushes Scissors: PLAYER B WON';
		$Bwon++;
	}
	else if($playerA == 'SCISSORS' && $playerB == 'PAPER')
	{
		echo 'Scissors cut paper: PLAYER A WON';
		$Awon++;
	}
	else if($playerA == 'PAPER' && $playerB == 'SCISSORS')
	{
		echo 'Scissors cut paper: PLAYER B WON';
		$Bwon++;
	}	
	echo "<br>";
}
echo "<br>";
echo "Player A: " . $Awon . " wins" ;
echo "<br>";
echo "Player B: " . $Bwon . " wins" ;
echo "<br>";
echo $draw . " Games were a draw.";
?>