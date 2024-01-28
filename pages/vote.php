<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Vote Page</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap"
         rel="stylesheet"
      />
      <link rel="stylesheet" href="../assets/css/vote.css" />
      <link rel="icon" href="../assets/img/ISU-logo.png" type="image/icon type">
   </head>
   <body>
      <header>
         <img src="../assets/img/ISU-logo.svg" alt="" />
         <h1>Supreme Student Council Election</h1>
      </header>
      <form id="myForm" action="./actions/process_vote.php" method="post">
         <fieldset id="myFieldset">
            <legend>President</legend>
            <label><input type="radio" name="president" value="Zen" /> Zen</label>
            <label><input type="radio" name="president" value="Abi" /> Abi</label>
            <label
               ><input type="radio" name="president" value="Gelo" /> Gelo</label
            >
         </fieldset>

         <fieldset>
            <legend>Vice President</legend>
            <label
               ><input type="radio" name="vice_president" value="Toni" />
               Toni</label
            >
            <label
               ><input type="radio" name="vice_president" value="Jared" />
               Jared</label
            >
            <label
               ><input type="radio" name="vice_president" value="Karl" />
               Karl</label
            >
         </fieldset>

         <fieldset>
            <legend>Secretary</legend>
            <label
               ><input type="radio" name="secretary" value="Vinch" /> Vinch</label
            >
            <label
               ><input type="radio" name="secretary" value="Jensent" />
               Jensent</label
            >
            <label
               ><input type="radio" name="secretary" value="Harold" />
               Harold</label
            >
         </fieldset>

         <fieldset>
            <legend>Treasurer</legend>
            <label
               ><input type="radio" name="treasurer" value="Karel" /> Karel</label
            >
            <label
               ><input type="radio" name="treasurer" value="Jusip" /> Jusip</label
            >
         </fieldset>

         <fieldset>
            <legend>Auditor</legend>
            <label><input type="radio" name="auditor" value="Neil" /> Neil</label>
            <label><input type="radio" name="auditor" value="MC" /> MC</label>
         </fieldset>

         <fieldset>
            <legend>Accountant</legend>
            <label
               ><input type="radio" name="accountant" value="Brylle" />
               Brylle</label
            >
            <label
               ><input type="radio" name="accountant" value="Alden" />
               Alden</label
            >
         </fieldset>

         <input type="submit" value="Submit Vote" />
      </form>

      <script>
         document
            .getElementById('myForm')
            .addEventListener('change', function (event) {
               if (event.target.type === 'radio') {
                  var fieldset = event.target.closest('fieldset');
                  if (fieldset) {
                     fieldset.style.border = '2px solid #096539'; 
                  }
               }
            });
      </script>

      <a href="../index.php">Logout</a>
   </body>
</html>
