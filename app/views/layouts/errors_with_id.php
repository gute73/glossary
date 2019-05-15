          <?php

            if (!empty($data[1]))
            {
              echo "<ul class = 'errors'>";
              foreach($data[1] as $error)
              {
                echo "<li>" . $error . "</li>";
              }
              echo "</ul>";
            }

          ?>