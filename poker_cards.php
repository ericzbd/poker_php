

    <?php
    if (isset($_SESSION["points_this_session"])){
        $points_this_session = $_SESSION["points_this_session"];
    } else {
        $points_this_session = 0;
    } // end if

    print "<h2>Counter: $points_this_session</h2> \n";


    //store new data in counter
    $_SESSION["points_this_session"] = $points_this_session;

    $sum=0;

    $deal=0;

    $points_this_card=0;


  // $points_this_session = filter_input(INPUT_POST, "points_this_session");

    for ($i = 0; $i < 5; $i++) {

        $deal = rand(1,13);

        $points_this_card = $deal;

        print "<img src = \"card$deal.jpg\" alt = \"$deal\" /><br/>";

        if ($points_this_card > 10){

            $points_this_card=10;

        } // end if

        $sum += $points_this_card;


    }//end for

    $points_this_session += $sum;

    $_SESSION["points_this_session"] = $points_this_session;

    print ("Total number of points this round: $sum<br/><br/>");

    print ("Total number of points this session: $points_this_session");

    print "<br/>";


    if ($sum >= 50) {

        print ("Congrats, you are the luckiest person alive! Now go spend all your money on dollar scratch-offs!");

    }//end if

    else {

        print("Foiled again =P ");

    }//end else





    print <<< HERE
<form action = "poker_cards.html"
      method = "post">
  <p>
    <button type = "submit">
      Click to waste another five seconds
    </button>
  </p>
</form>

HERE;

    ?>
	


