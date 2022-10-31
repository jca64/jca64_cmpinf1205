<?php
$username = $_POST['j_username'];
?>

<!DOCTYPE html>
<link rel="stylesheet" href="form.css">

<style>
body {
  background-image: url('images/passport-bckgnd-shield-watermark-blue-repeat.png');
}
</style>

<div class="top">
    <p>Something Phishy is Going on Here: A CMPINF 1205 Project</p>
</div>

<div class="inform">
    <p>Hello <?php echo ($username) ?>, and thank you for participating in my experiment. The login page that you just saw
        was fake! Any information that you put into the previous boxes is now, in theory, in my hands. Luckily for you, I am
        only a Pitt student testing to see how vulnerable other Pitt students are to phishing links. However, had you submitted your
        information to somebody with malicious intent, with a few more simple tricks they could easily be logged into your Pitt accounts.
        With your permission I would like to use some of your information to complete a study of students like you that have also fallen
        victim to my link. If you could please fill out the following information and give consent to me using it I would greatly appreciate
        it! Also, you should be more careful in the future to prevent things like this from happening! If you would like more information 
        please email me at jca64@pitt.edu and I will try to get back to you ASAP!</p>

</div>
<div class="user-info">
    <form id="form" action="submit.php" method="post">
        <div class="username">
            <label for="username">Email: </label>
            <input name="username" value="<?php echo ($username) ?>">
        </div>

        <div class="age-select">
            <label for="age-select">Select Age: </label>
            <select name="age-select">
                <option value="0">Freshman</option>
                <option value="1">Sophmore</option>
                <option value="2">Junior</option>
                <option value="3">Senior</option>
                <option value="4">Other</option>
            </select>
        </div>

        <div class="gender-select">
            <label for="gender-select">Select Gender: </label>
            <select name="gender-select">
                <option value="0">Male</option>
                <option value="1">Female</option>
                <option value="2">Non-Binary</option>
                <option value="3">Other</option>
                <option value="-1">Prefer not to say</option>
            </select>
        </div>

        <div class="ethnicity-select">
            <label for="ethnicity-select">Select Ethnicity: </label>
            <select name="ethnicity-select">
                <option value="0">White</option>
                <option value="1">Black or African-American</option>
                <option value="2">American Indian or Alaskan Native</option>
                <option value="3">Asian</option>
                <option value="4">Native Hawaiian or other Pacific islander</option>
                <option value="5">From multiple races</option>
                <option value="-1">Prefer not to say</option>
            </select>
        </div>

        <div class="consent">
            <label for="consent"> By checking this box you are allowing your information to be used in the associated study</label>
            <input required type="checkbox">
        </div>
        <div class="submit">
        <button @click="document.getElementById('form').submit()" id="submit">Submit</button>
        </div>
    </form>
</div>

</html>