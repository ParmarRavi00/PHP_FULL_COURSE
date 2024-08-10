<pre>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($k = 0; $k <= 5 - $i; $k++) {
            print_r(" ");
        }

        for ($j = 1; $j <= $i; $j++) {
            print_r("*");
        }
        print_r("</br>");
    }
    ?>
</pre>