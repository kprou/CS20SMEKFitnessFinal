<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Input Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    
<style>
</style>
</head>
<body>
    <h1>Get your personalized fitness program today</h1>
    <div id="survey"></div>
    <form action="program.php" method="POST">
        <label>Please describe your fitness level.</label><br>
        <input type="radio" id="beginner" name="level" value="beginner">
        <label for="level">Beginner</label><br>
        <input type="radio" id="intermediate" name="level" value="intermediate">
        <label for="level">Intermediate</label><br>
        <input type="radio" id="advanced" name="level" value="advanced">
        <label for="advanced">Advanced</label>
        <br><br>

        <label>Please enter your height rounded to the neareast inch and weight rounded to the nearest pound.</label><br>
        <label for="height">Height:</label>
        <select id="feet" height="feet" size="1">
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
        </select>
        <label for="feet"> feet</label>
        
        <select id="inches" height="inches" size="1">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>11</option>
        </select>
        <label for="inches"> inches</label>

        <label for="weight">Weight:</label>
        <input type="text" id="weight" name="weight"><br><br>
        <label for="weight"> pounds</label>

        <label>What body parts are you most interested in working on?</label><br>
        <input type="checkbox" id="arms" name="target[]" value="arms">
        <label for="arms">Arms</label><br>
        <input type="checkbox" id="legs" name="target[]" value="legs">
        <label for="legs">Legs</label><br>
        <input type="checkbox" id="core" name="target[]" value="core">
        <label for="core">Core</label><br>
        <input type="checkbox" id="cardio" name="target[]" value="cardio">
        <label for="cardio">Cardio</label>
        <br><br>

        <label>What are your fitness goals?</label><br>
        <input type="radio" id="lose" name="goals" value="lose">
        <label for="goals">Lose weight</label><br>
        <input type="radio" id="maintain" name="goals" value="maintain">
        <label for="goals">Maintain current weight</label><br>
        <input type="radio" id="gain" name="goals" value="gain">
        <label for="goals">Gain weight</label>
        <br><br>

        <input type="submit" value="Submit" onclick="validate">
      </form>
    </div>
    <script>
        function validate() {

            // Get the form element
            var form = document.querySelector('#survey');
            console.log("validate");
            window.location.href = "program.php";
        }
    </script>
</body>
</html>
