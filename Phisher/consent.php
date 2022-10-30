<?php
$username = $_POST['j_username'];
?>

<!DOCTYPE html>
<link rel="stylesheet" href="form.css">

<div class="inform">
    <p>Hello <?php echo ($username) ?>, and thank you for participating in my experiment. The login page that you saw before this
        one was fake! Any information that you put into the previous boxes is now, in theory, in my hands. Luckly for you, I am
        only a Pitt student testing to see how vulnerable other Pitt students are to phishing links. However, had you submitted your
        information to somebody with malicious intent, with a few more simple tricks they could easily be logged into your Pitt accounts.
        With your permission I would like to use some of your information to complete a study of students like you that have also fallen
        victim to my link. If you could please fill out the following information and give consent to me using it I would greatly appreciate
        it! Also, you should be more careful in the future to prevent things like this from happening!</p>

</div>
<div class="user-info">
    <form action="submit.php">
        <div class="username">
            <label for="username">Username:</label>
            <input value="<?php echo ($username) ?>">
        </div>

        <div class="age-select">
            <label for="age-select">Select Age:</label>
            <select>
                <option value="0">17 or younger</option>
                <option value="1">18-21</option>
                <option value="2">22 or older</option>
                <optipn value="3">Prefer not to say</option>
            </select>
        </div>

        <div class="ethnicity-select">
            <label for="ethnicity-select">Select Ethnicity:</label>
            <select>
                <option value="0">White</option>
                <option value="1">Black or African-American</option>
                <option value="2">American Indian or Alaskan Native</option>
                <option value="3">Asian</option>
                <option value="4">Native Hawaiian or other Pacific islander</option>
                <option value="5">From multiple races</option>
                <option value="6">Prefer not to say</option>
            </select>
        </div>

        <div class="consent">
            <label for="consent"> By checking this box you are allowing your information to be used in the associated study</label>
            <input type="checkbox">
        </div>
        <div class="submit">
        <button id="submit">Submit</button>
        </div>
    </form>
</div>

</html>