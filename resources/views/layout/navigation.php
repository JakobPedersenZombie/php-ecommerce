<nav>
    <ol>
         
        <?php foreach($router->routes as $route => $controller):?>
           
            <li>
                <a href="<?php echo $route ?>">
                    <?php echo ucwords($route)?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</nav>