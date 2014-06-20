<?php $category = new Category_collection(); ?>
<nav>
    <ul>
        <?php foreach($category->items as $nav_category): ?>
            <li>
                <?=$nav_category['name']?>

                <?php $products = new Product_collection($nav_category['id']); ?>
                <ul>
                    <?php foreach($products->items as $nav_page): ?>
                        <li>
                            <a href="index.php?id=<?=$nav_page['id']?>">
                                <?=$nav_page['name']?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
    
            </li>


        <?php endforeach; ?>
    </ul>
</nav>
     <div class="line"></div>