          <?php

            if (!empty($data))
            {
              echo "<ul class = 'errors'>";
              foreach($data as $error)
              {
                echo "<li>" . $error . "</li>";
              }
              echo "</ul>";
            }

          ?>