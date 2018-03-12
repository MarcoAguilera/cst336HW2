<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Personal Profile Creator</title>
        <style>
            @import url("css/styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    </head>
    <body>
        <h1 id="ppc">Personal Profile Creator</h1>
        <p>Weclome to this personal profile creator!<br> 
        Please enter your info down below so we can create your profile!</p><br>
        </p1>
        <form action="transfer.php" method="post">
            <fieldset>
                <legend><strong>Name</strong></legend>
                First<br> 
                <input type="text" name="firstName"/> <br>
                Last<br>
                <input type="text" name="lastName"/> <br><br>
            </fieldset>
            <br>
            <fieldset>
                <legend><strong>Date of Birth</strong></legend>
                Month<br>
                <input type="text" name="month"/> <br>
                Year<br>
                <input type="text" name="year"/> <br>
                Age<br>
                <input type="text" name="age"/> <br>
            </fieldset>
            <br>
            <fieldset>
                <legend><strong>Gender</strong></legend>
                <input type="radio" name="gender" value="Male"> Male<br>
                <input type="radio" name="gender" value="Female"> Female<br>
                <input type="radio" name="gender" value="Both"> Both<br>
                <input type="radio" name="gender" value="Other"> Other<br>
            </fieldset>
            <br>
            <fieldset>
                <legend><strong>Location</strong></legend>
                City<br>
                <input type="text" name="city"/> <br>
                State<br>
                <select name="state">
                <option value="AL"AL></option>
                <option value="AK">AK</option>
                <option value="AZ">AZ</option>
                <option value="AR">AR</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DC">DC</option>
                <option value="DE">DE</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="IA">IA</option>-
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="ME">ME</option>
                <option value="MD">MD</option>
                <option value="MA">MA</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MS">MS</option>
                <option value="MO">MO</option>
                <option value="MT">MT</option>
                <option value="NE">NE</option>
                <option value="NV">NV</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>-
                <option value="NY">NY</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VT">VT</option>
                <option value="VA">VA</option>
                <option value="WA">WA</option>-
                <option value="WV">WV</option>
                <option value="WI">WI</option>
                <option value="WY">WY</option>
            </select><br>
            </fieldset>
            <br>
            <div id="SubmitButton">
                <input type="submit" value="Submit"><br>
            </div>
        </form>
    </body>
</html>