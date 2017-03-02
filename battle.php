<?php include 'top.php'; ?>
<?php include 'header.php'; ?>
<nav class="nav">
     <ul>
        <li><a href="main.php">Home</a></li>
        <li><a href="description.php">What is Final Fantasy?</a></li>
        <li><a href="games.php">Final Fantasy Titles</a>
            <ul>
            <li><a href="ff1.php">Final Fantasy I</a></li>
            <li><a href="ff2.php">Final Fantasy II</a></li>
            <li><a href="ff3.php">Final Fantasy III</a></li>
            <li><a href="ff4.php">Final Fantasy IV</a></li>
            <li><a href="ff5.php">Final Fantasy V</a></li>
            <li><a href="ff6.php">Final Fantasy VI</a></li>
            <li><a href="ff7.php">Final Fantasy VII</a></li>
            <li><a href="ff8.php">Final Fantasy VIII</a></li>
            <li><a href="ff9.php">Final Fantasy IX</a></li>
            <li><a href="ff10.php">Final Fantasy X</a></li>
            <li><a href="ff11.php">Final Fantasy XI</a></li>
            <li><a href="ff12.php">Final Fantasy XII</a></li>
            <li><a href="ff13.php">Final Fantasy XIII</a></li>
            <li><a href="ff14.php">Final Fantasy XIV</a></li>
        </ul>
        </li>
        <li><a href="characters.php">Main Characters</a></li>
        <li class="active"><a href="battle.php">Battle Systems</a></li>
        <li><a href="themes.php">Recurring Themes</a></li>
     </ul>
</nav>

<body id="battle">
 
<section class="text">
<h2>Battle Systems</h2>

<p>In all of these games and their varying battle systems, there lies one common element; resources. The word "resources" in RPGs refer 
    to the character's health points and magic points, which are essential to most RPGs. Health points (HP) are points that a character has, 
    and it describes the "healthiness" of that character. The higher the HP a character has, the longer he can live in a battle. Characters lose HP by 
    getting hit by enemy attacks, and once a character's HP runs out, they die. However, a character's HP does not drop permanently when they lose points. 
    For example, if a character has 10 HP and an enemy deals 5 damage, the character's HP would drop down to 5/10 total HP. The player can then quickly heal the 
    character back up with potions and spells, to bring the character's HP back up to 10/10. A character can gain more total HP the more they level up. 
    On that note, spells are abilities that can be used by the characters. Spells often use magic points (MP), unlike regular "Attacks" which don't use any resources. 
    However, spells are usually much more powerful than regular attacks
    and therefore, there has to be some limit to the amount of spells a character can use in one battle. Every spell uses a different amount of MP (usually, more 
    powerful spells use more MP) and once a character's MP runs out, they cannot perform anymore spells. The power of spells is dependent on a characters 
    magic stat. It is for this reason that when a character runs out of MP, it can be extremely detrimental to the outcome of the battle. Some characters are very 
    dependent on spells because their magic stats are high, but their attack stats are low. Characters that are regular attackers and don't rely on magic spells too 
    much are not affect much by this because they can just keep using their regular attack, which consumes no resources. This is why MP conservation is such an important 
    concept in RPGs. It is not often that you get to refill your MP, and items that do refill MP cost a lot of gil (the currency in Final Fantasy).</p>


<section class="battle">
<h3>Turn Based</h3>
<img src="turn.png" alt="turn based">
    <p id="turnBased">The turn based battle system is a very traditional system, found in most RPGs. In the earlier 
        Final Fantasy games, the system was made so that both sides of the battle basically chose their actions for their 
        characters at the same time, and then the actions would be performed after the moves had been chosen. The order of the 
        actions would be performed based on the speed stat of the character. In later installments, like in Final Fantasy X, the 
        player would get to choose a move for a character, and the character would immediately perform that action. Once again, the 
        order in which the player got to choose actions was based on the speed stat. The character with the highest speed would go first. 
        Unlike time based battle, this system does not rely on time, and the player can take as long as he/she want to choose his/her actions. 
        The turn based battle system appears in Final Fantasy I, II, III, IV, and X.</p>
</section>

<section class="battle">
<h3>Time Based</h3>
<img src="time.jpg" alt="time based">
    <p id="timeBased">The time based battle system was popularized by the Final Fantasy series. The system first appeared in the series 
        in Final Fantasy VI. In this battle system, each character has a "time" gauge, later renamed the "ATB" gauge, which stands for "action 
        time based." At the start of a battle, the characters wait until their time gauges have been filled up. Then, the player is able to input
        a command for the character. Each character starts out with a certain amount of time in their gauge depending on their speed stat. The 
        higher the speed stat, the closer a character is to filling up their gauge completely. The rate at which the gauge fills up also depends on 
        the speed stat. Once a character has been given an action to perform for that turn, the gauge becomes empty, and the player once again 
        has to wait for the gauge to refill. Unlike the turn based battle system, the player is not given as much time as they want to choose 
        their actions. Because both sides of the battle are given actions based on time, if the player takes too long to choose an action, the 
        enemy will keep performing moves, so the system closely resembles real time battle. This system appears in Final Fantasy VI, VII, VIII, and IX.
    </p>
</section>
    
<section class="battle">
<h3>Action Based</h3>
<img src="action.jpg" alt="action based">
    <p id="actionBased">The action based battle system is similar to the time based battle system, in that it is based on time and closely resembles real time battle. 
        However, this system added on more features to make it closely resemble real time battle even more. The action based battle system still has a ATB gauge that 
        fills up depending on the character speed, but within the battle field, the characters actually move around. Because of the advancement of gaming technology,
        incorporation 3D space into the battle field was possible, and it only added to the complexity and strategy of battle. However, the player was not able to 
        directly move the character. The way the character moved around was dependent on the move that they performed. So in that regard, the battle system was made 
        even more complicated and strategical. In the later installments of Final Fantasy that this battle system appeared in, the player was only given the option to 
        move the main character, and the other characters were controlled on an AI. This subtracted from some of the complexity of the battle system. However, the player 
        was able to control the way the AI performed in battle, and this helped the player create his or her own battle style. This battle system appears in Final Fantasy 
        XII and XIII.
    </p>
</section>

<section class="battle">
<h3>MMORPG - Real Time Battle</h3>
<img src="real.png" alt="real time battle">
    <p id="mmorpg">The Final Fantasy series' first MMORPG (massively multiplayer online role-playing game) was FFXI, and it was somewhat of a success. 
        It was not extremely popular, but it did get enough positive reviews to convince them to make another one, which was FFXIV. In these MMORPGs, the player gets the 
        option to make a character, customize their looks in any way the player wants, and choose their classes and abilities. In this way, these games probably gave the 
        player the most creativity in terms of character development. Because these games are online, however, it meant that the battle system had to be changed to match 
        the fast-paced gameplay that most people are used to with MMORPGs. So, Square Enix had to go with traditional MMORPG fighting styles, which was to point and click 
        on monsters to start fighting them, and the character would do damage based on how fast their attack speed was. The player could also use abilities on their target, 
        which would generally use up MP. Because this type of system tries to resemble real time battle, the spells must have some sort of "cool down." Cool downs are timers 
        that each spell has to prevent the player from using them in quick succession. This concept was implemented to balance the game, so that once character could not simply 
        use the most powerful spell over and over again, even if there is a limit on MP. This battle system appears in Final Fantasy XI and FFXIV.
    </p>
</section>
</section>
</body>

<?php include 'footer.php'; ?>  

</html>