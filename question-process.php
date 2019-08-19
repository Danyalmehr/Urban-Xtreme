<?php

session_start();
include_once('database.php');

    if(isset($_POST['submit'])){
      $test_id = $_SESSION["test_id"];
     $que = mysqli_real_escape_string($con, $_POST['question']);
     $ans = mysqli_real_escape_string($con, $_POST['correct_answer']);
     $wans1 = mysqli_real_escape_string($con, $_POST['wrong_answer1']);
     $wans2 = mysqli_real_escape_string($con, $_POST['wrong_answer2']);
     $wans3 = mysqli_real_escape_string($con, $_POST['wrong_answer3']);

     $insertqry = "INSERT INTO `question`(`que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `test_id`, `que_type`) VALUES ('$que','$wans3',
       '$wans1','$wans2','$ans','$ans','$test_id','MCQ' )";
     if(mysqli_query($con,$insertqry))
     {
       echo "your new details have been successfully INSERTED!!". mysqli_error($con);
       ?>
       <form class="" action="createquestion4.php" method="post">
         <input type="hidden" name="test_id" value="<?=$test_id?>"><label><?php $test_id?></label>
         <button type="submit" name="selectedtest" class="btn btn-default">Submit</button>
       </form>
       <?php

     }
     else
     {
       echo "something is wrong". mysqli_error($con);;
     }
   }

   if(isset($_POST['shortanswer'])){
     $test_id = $_SESSION["test_id"];

    $que = mysqli_real_escape_string($con, $_POST['question']);


    $insertqry = "INSERT INTO `question`(`que`, `que_type`, `test_id`) VALUES ('$que','shortAns', '$test_id')";
    if(mysqli_query($con,$insertqry))
    {
      echo "your new details have been successfully INSERTED!!". mysqli_error($con);
      ?>

      <?php

    }
    else
    {
      echo "something is wrong". mysqli_error($con);;
    }
  }


     if (isset($_POST['update']))
     {
       $test_id = $_SESSION["test_id"];
       $que = mysqli_real_escape_string($con, $_POST['question']);
       $ans = mysqli_real_escape_string($con, $_POST['correct_answer']);
       $wans1 = mysqli_real_escape_string($con, $_POST['wrong_answer1']);
       $wans2 = mysqli_real_escape_string($con, $_POST['wrong_answer2']);
       $wans3 = mysqli_real_escape_string($con, $_POST['wrong_answer3']);
           $updateqry = "UPDATE question SET que='$que', `option 1`= '$wans1', `option 2`= '$wans2', `option 3`= '$wans3', `option 4`= '$ans', `ans`= '$ans'
           WHERE que_id ='$_POST[que_id]'";
           if(mysqli_query($con,$updateqry))
           {
             echo "your new details have been successfully UPDATED!!". mysqli_error($con);
             ?>
             <form class="" action="createquestion4.php" method="post">
               <input type="hidden" name="test_id" value="<?=$test_id?>"><label><?php$test_id?></label>
               <button type="submit" name="selectedtest" class="btn btn-default">Submit</button>
             </form>
             <?php
           }
           else
           {
             echo "something is wrong". mysqli_error($con);;
           }
       }
       ?>

         <?php
         if (isset($_POST['delete'])) {
           $test_id = $_SESSION["test_id"];
           $deleteqry = "DELETE FROM question WHERE que_id ='$_POST[que_id]'";
           if(mysqli_query($con,$deleteqry))
           {
             echo "your question has been successfully DELETED!!". mysqli_error($con);
             ?>
             <form class="" action="createquestion4.php" method="post">
               <input type="hidden" name="test_id" value="<?=$test_id?>"><label><?php$test_id?></label>
               <button type="submit" name="selectedtest" class="btn btn-default">Submit</button>
             </form>
             <?php
           }
           else
           {
             echo "something is wrong". mysqli_error($con);;
           }
         }

         ?>

       <td><a href="createquestion3.php?delete=' <? echo $id; ?>'" onclick="return confirm('Are you sure?');">Delete</a></td>
   </tr>
</table>

          <form class="" action="createquestion4.php" method="post">
            <input type="hidden" name="test_id" value="<?=$test_id?>"><label><?php $test_id?></label>
            <button type="submit" name="selectedtest" class="btn btn-default">Submit</button>
          </form>
