<?php
/*
 * I have zero clue how package management works in PHP but I assume this is the minimum viable
 * 
 * @package nmCAPTCHA2
 */
?>

<form>
    <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>

    <!-- everything above was given the StackOverflow treatment; everything below is reverse engineered from info taken from the video and from the tags (also, from google)-->

    <div>	
        <label>How did you hear about us?:<br />
            <select name="exposure_vector" required="required" title="Memetic Intrusion Vector (required)" tabindex="30">
                <option value="">Select an option</option>
                <option value="none">All of the above</option>
                <option value="betamaxnote">A sticky note on the back of a video tape</option>
                <option value="foresight">I did not, I simply knew</option>
                <option value="arg">The solution to the undeciphered pages of Liber Primus</option>
                <option value="symbolism">Mesmeric yet cryptic dream symbolism</option>
                <option value="cannotdisclose">Cannot legally disclose at this time</option>
            </select>
        </label>
    </div>

    <div>	
        <label>Have you touched, inhaled, ingested, or spoken with any substances in the facility in the last 30 days?<br />
            <select name="interaction" required="required" title="Affirmation of self-inertness (required)" tabindex="30">
                <option value="">Select an option</option>
                <option value="yes">Yes</option>
                <option value="no">No</option>
                <option value="ascension">y̵̢̧̡̨̛̙̮̘̱̖̲̘̲̝͔̺̟̞̱̣̯̳̪̥̖̟̰̮̱̼͍͇̮̟̪̭̬̓̀̈́́͊͒́̆̂̈̾̒͗̓̅̚͜͜ͅͅͅö̸͎̭̦͐̄̃̀̅̔̈́̚̕͘͝͠͠ű̵̡͎̣̬̳̥̱̬͓͈̮̼̪͇̮̟͖͍̹͙̼͎͇̤̦̥̠̆͊̃͜ͅ ̸̡̧̢̡̢̡̭̻̠̜̭͉̻̫̱̳̮̯̖̺̘̞̺͕̺̹͕̤̞̟̦̜̬̱̱̫̈̉̃̀͆͆̾̋̓́̽͐̋͗̃̀̒͊̓̆̃̃̔̅͑͘̕͜͠͠l̴̡̥͈͔͕̭̣͙̯̮̼̹͍̞̪̪̞͙̩͕̞̦̖̗͕̝̼͇̳͓̥̃̅́̓͛̈̐̅̅̔͗̔̂̒̀́̽̆̽̋͊́̎̂͆͒̈̃̊̀̆̒͘̕͝͝͝͠ͅa̴̢͔͍̖̮̲̼̣̼̙̹̠̰̜̟͕̙̬͈̘̗͍̮̻̼͆͋̊́͊͂͒͜͜ͅç̷̢̹͖̮͓͈̲͉̥͍̺̜̻͎̺͙̣͚̝͙̻̝̈́̿̿̚͜͜ͅk̶̡̡̢̧̖̝͚͈͚̺̥̞̼̈́̒͛͗̿̏͊͐̏̂̍͒͋̃̌̀̏́̿̒̓́̎͂͋͋̃̌̄͘̕͘̕͠ ̶̗͇̂̊͐̀̽̅i̸̢̛̻̗͖̺͚̠͙̖͇̹̪̗̘̳͇̺̗̺͕̙͚̟͇̇̀́̄̆͛̓͊͋̀̄͂̿̋̍͋͊̃̐̄̋͋̇̿̅̏̀̅̏̕͘͜͝͝ņ̶̡̡̢̨͍̥̪͕̺̻̯͔͕̭̺̜̲̯̖͙̗̦̭̝̹̹̥͕̳͇̘̙̺̙̲͐͛͋̾̐̅́͗̓̔̑́̓̿͂̈͝͠͝ͅͅͅͅş̸̪͙̖̯̟̥̪̑̇̂̔͌̈́̾̉̓͛͊̈́̏̍̋̉̀̄͌̀͑͒̈́́̿̍̊̀̽͒̌̚̕̕͝͝͝i̴̱͔̇̇̋̈́̀́̈́̆͑͆͒̎̂͗̅͆̓̉͋̿̀̅̑̿̓̓̽̈́̓̐̊̈́̿͘̕̕̚͝͝͠ǵ̴̢̛̛̝̗̭͙͉̪̱̱̳̹͔͔̝̪̟̖̯̩̦͙͕͍̻̟͕̣̗͍͙̑͊̌͐́͐ͅḧ̷̡̢̢̢̢̡̡̻͙̲͕̫̖͇̹͎̬̖͉͔̱̬̞̤̖̫̘͓͍̬̲́́̔́̄́̃͊̀̌̽̔͘̚͠t̴̛͇̠̰̙̯̓͊̈̈́̾̃̏͛̈̊̌͛̓̾̈́͑͊͝</option>
            </select>
        </label>
    </div>

</form>