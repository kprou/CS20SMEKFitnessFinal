<!DOCTYPE html>
<html>
<head>
<style>
.header   { grid-area: week; }
.day1     { grid-area: day1; }
.day2     { grid-area: day2; }
.day3     { grid-area: day3; }
.day4     { grid-area: day4; }

h1 {
  text-align: center;
}
.week1, .week2, .week3, .week4 {
  display: grid;
  grid-template:
    'week   week    week    week    '
    'day1   day2    day3    day4   ';
  grid-gap: 5px;
  background-color: black;
  padding: 5px;
  margin: 40px;

}

.week1, .week2, .week3, .week4 > div {
  text-align: center;
  /* font-size: 2vw; */
}

table {
    text-align: left;
    width: 100%;
    height: 100%;
    font-size: 1.2vw;
}
th {
    background-color: rgb(211, 211, 211);
    color: black;
}
td {
    background-color: rgb(233, 230, 230);
}

.header {
  background-color: rgb(211, 211, 211);
  padding: 20px;
  /* text-align: left;  */
  font-size: 3vw;
}

.day1, .day2, .day3, .day4, .day5 {
  background-color: rgb(252, 252, 252);
}

#gallery1, #gallery2, #gallery3, #gallery4 {
  display: flex;
  flex-wrap: wrap;
  font-size: 1vw !important;
  width: 100%;
  align-items: center;
}

#gallery1 img, #gallery2 img, #gallery3 img, #gallery4 img {
  width: 12vw;
  margin: 5px;
}

.recipe {
  display: flex;
  align-items: center; /* to vertically center the content */
}

.recipe img {
  margin-right: 10px; /* to add some space between the image and text */
}

</style>
</head>
<body>

<h1>Your Fitness Plan</h1>
<?php
      // quantities
      $level = $_POST['level'];
      $height = $_POST['height'];
      $weight = $_POST['weight'];
      $goals = $_POST['goals'];
      $arms = $_POST['target'][0];
      $legs = $_POST['target'][1];
      $core = $_POST['target'][2];
      $cardio = $_POST['target'][3];

      // echo "<p>Level: " . $level ."</p>";
      // echo "<p>Height: " . $height ."</p>";
      // echo "<p>Weight: " . $weight ."</p>";
      // echo "<p>Target(s): ";
      //   echo $_POST['target'][0]. " ";
      //   echo $_POST['target'][1]. " ";
      //   echo $_POST['target'][2]. " ";
      //   echo $_POST['target'][3]. " ";
      // echo "<p>";
      // echo "<p>Goals: " . $goals ."</p>";
    ?>

<script>
  // Arms exercises
  const armExercises = [
    ['Pushups', 0, 20],
    ['Chin-up', 0, 10],
    ['Tricep Dip', 0, 15],
    ['Barbell Curl', 60, 10],
    ['Tricep Extension', 40, 12],
    ['Incline Dumbbell Curl', 25, 10],
    ['Tricep Pushdown', 50, 12],
    ['Dumbbell Hammer Curl', 25, 10],
    ['Overhead Tricep Extension', 35, 12],
    ['Preacher Curl', 40, 8],
    ['Diamond Push-up', 0, 15],
    ['Concentration Curl', 20, 12],
    ['Tricep Kickback', 15, 12],
    ['Cable Curl', 40, 12],
    ['Close-grip Bench Press', 95, 10],
    ['Reverse Grip Barbell Curl', 50, 8],
    ['Zottman Curl', 20, 10],
    ['Dumbbell Curl', 30, 10],
    ['Tricep Rope Pushdown', 30, 12],
    ['Skullcrusher', 50, 10],
    ['Cable Overhead Tricep Extension', 30, 12]
  ];

  // Legs exercises
  const legExercises = [
    ['Side Squat', 45, 8],
    ['Squat', 225, 8],
    ['Step-up', 30, 10],
    ['Wall Sit', 15, 30],
    ['Box Jump', 0, 10],
    ['Lunges', 40, 10],
    ['Donkey Kick', 0, 12],
    ['Hip Thrust', 185, 12],
    ['Glute Bridge', 95, 15],
    ['Calf Raise', 225, 12],
    ['Leg Extension', 80, 15],
    ['Deadlift', 315, 6],
    ['Leg Press', 360, 10],
    ['Romanian Deadlift', 185, 10],
    ['Bulgarian Split Squat', 25, 10],
    ['Sumo Deadlift', 275, 6],
    ['Hack Squat', 180, 8],
    ['Seated Leg Curl', 90, 12],
    ['Reverse Lunge', 30, 10],
    ['Single-leg Deadlift', 35, 10],
    ['Jump Squat', 20, 10]
  ];

  // Core exercises
  const coreExercises = [
    ['Peguins', 0, 40],
    ['Plank', 0, 60],
    ['Russian Twist', 10, 20],
    ['Flutter Kick', 0, 20],
    ['Crunch', 0, 15],
    ['Dead Bug', 0, 12],
    ['Superman', 0, 15],
    ['Bicycle Crunch', 0, 20],
    ['Sit-up', 0, 12],
    ['Side Plank', 0, 30],
    ['V-up', 0, 10],
    ['Reverse Crunch', 0, 15],
    ['Russian Twist with Medicine Ball', 10, 20],
    ['Leg Raise', 0, 12],
    ['Ab Wheel Rollout', 0, 10],
    ['Toe Touch', 0, 12],
    ['Bird Dog', 0, 12],
    ['Lying Leg Raise', 0, 15],
    ['Oblique Crunch', 0, 15],
    ['Plank Knee-to-Elbow', 0, 12],
    ['Hanging Leg Raise', 0, 10]
  ];

  // Cardio exercises
  const cardioExercises = [
    ['Bicycles', 0, 40],
    ['Incline Walking', 0, '30 min'],
    ['Swimming', 0, '20 laps'],
    ['Dancing', 0, '30 min'],
    ['Treadmill Walking', 0, '45 min'],
    ['Jump Rope', 0, '1 min'],
    ['Running', 0, '20 min'],
    ['High Knees', 0, '30 sec'],
    ['Mountain Climbers', 0, '30 sec'],
    ['Cycling', 0, '30 min'],
    ['Jumping Jacks', 0, '50'],
    ['Stair Climbing', 0, '10 min'],
    ['Rowing', 0, '15 min'],
    ['Elliptical Machine', 0, '25 min'],
    ['Burpees', 0, '2 sets of 10'],
    ['Sprinting', 0, '20 sec'],
    ['Boxing', 0, '3 min'],
    ['Kickboxing', 0, '3 min'],
    ['Jump Squats', 0, '10'],
    ['Circuit Training', 0, '30 min'],
    ['Battle Ropes', 0, '30 sec']
  ];

  let list = []
  var start = 0; 

  function make_list(level, arms, legs, core, cardio, weight) {
    console.log("in make list...");
    console.log('Level: ' + level);
    console.log('Weight: ' + weight);
    console.log('Target muscle groups: ' + arms + legs + core + cardio);
    
    // customize based on level (lists are sorted by difficulty)
    if (level == 'beginner') {
      console.log("beginner");
    } else
     if (level == "intermediate") {
      start = 7;
    } else {
      start = 14
    }

    list.push(armExercises[start]);
    list.push(legExercises[start]);
    list.push(armExercises[start + 1]);
    list.push(legExercises[start + 1]);
    list.push(coreExercises[start]);
    list.push(cardioExercises[start]);
  }
  // console.log(list);

  // pull php variables for javascript
  const level = "<?php echo $level; ?>";
  const arms = "<?php echo $arms; ?>";
  const legs = "<?php echo $legs; ?>";
  const core = "<?php echo $core; ?>";
  const cardio = "<?php echo $cardio; ?>";
  const weight = "<?php echo $weight; ?>";

  make_list(level, arms, legs, core, cardio, weight);
  
  function make_table(name, id) {
    var s = "<table><tr><th colspan='4' style='text-align: center; font-size: 2vw;'>" + name + "</th></tr>";
    s += "<tr><th>Rotation</th><th>Excercise</th><th>Weight</th><th>Reps</th></tr>"

    // rotation lettering
    let result = [];
    for (let i = 1; i <= 2; i++) {
      for (let j = 97; j <= 99; j++) {
        let char = String.fromCharCode(j);
        result.push(i.toString() + char);
      }
    }

    for (let i = 0; i < 6; i++) {
      // need to pull excercises and weights
      let place = start + i;
      console.log("start: " + start);
      s += "<tr><td>" + result[i] + "</td><td>" + list[i][0] + "</td><td>" + list[i][1] + "</td><td>" + list[i][2] + "</td></tr>";
    }
    s += "</table>";
    document.writeln(s);
  }

  function make_week(week){
    var s = "<div class='week" + week + "'>";
    s += "<div class='header'>Week " + week + "</div>";
    
    for (let i = 1; i < 5; i++) {
      var params = "('Day " + i + "', 'day" + i + "')";
      s += "<div class='day" + i + "'>";
      s += "<script>make_table" + params;
      s += "<";
      s += "/script></div>";
    }
    s += "</div>";

    // list = list.slice(2);
    console.log(s);
    document.writeln(s);
  }
  
  // create the program
  make_week(1)
  make_week(2)
  make_week(3)
  make_week(4)

</script>
</body>
</html>
