<!DOCTYPE html>
<html>
<?php
include "header.html";
?>
<head>
    <title>Haukai Restaurant Menu page</title>
</head>
<?php
include "navigation.html";
?>

<body>
    <!--Here is our page's main content-->
    <main>
        <div class="container" role="Menu">
            <h1 style="text-align:center"> <strong>Our Menu </strong></h1>
            <div class="row" role="menu image and description">
                <div class="column" role="food picture">
                    <img src="images/food2.jpg" style="width:100%" alt="Tuatua meal">
                </div>
                <div class="column" role="food description">
                    <h2><strong>Tuatua</strong></h2>
                    <p>
                        A New Zealand delicacy! Tuatua are an indigenous New Zealand shellfish that you will not
                        find anywhere else in the world. While very similar in shape and size to pipis, tuatuas have
                        a milder flavour than most shellfish and a softer, creamier texture as well.
                    </p>
                </div>
            </div>
            <div class="row" role="menu image and description">
                <div class="column" role="food picture">
                    <img src="images/food3.jpg" style="width:100%" alt="Hangi meal">
                </div>
                <div class="column" role="food description">
                    <h2><strong>Hangi</strong></h2>
                    <p>
                        Chicken, pork, potatoes, pumpkin and a few other vegetabless, all cooked in massive hole in
                        the ground on top of hot rocks. This is a traditional method of Maori cooking that dates back many
                        generations, and is still used today in various Maori communities. If you are looking to try traditional
                        New Zealand food, this is about as close as it gets.
                    </p>
                </div>
            </div>
            <div class="row" role="menu image and description">
                <div class="column" role="food picture">
                    <img src="images/food4.jpg" style="width:100%" alt="Whitbait fritter meal">
                </div>
                <div class="column" role="food description">
                    <h2><strong>Whitebait fritter</strong></h2>
                    <p>
                        A delicacy in New Zealand and currently demands the highest price of any fish in the country.
                        The preferred method of cooking is the whitebait fritter; a simple combination of eggs, flour and whitebait,
                        fried like an omelette and then topped with lemon, salt and pepper.
                    </p>
                </div>
            </div>
            <div class="row" role="menu image and description">
                <div class="column" role="food picture">
                    <img src="images/food5.jpg" style="width:100%" alt="Bluff oyster meal">
                </div>
                <div class="column" role="food description">
                    <h2><strong>Bluff Oysters</strong></h2>
                    <p>
                        Down at the bottom of New Zealand lies the small town of Bluff, world famous for its rich, succulent oysters,
                        which are often considered the best on the planet. If you are an oyster freak you will go crazy for these things,
                        however they don not come easy; you will need to wait until they are in season (March to August).
                    </p>
                </div>
            </div>
            <div class="row" role="menu image and description">
                <div class="column" role="food picture">
                    <img src="images/food6.jpg" style="width:100%" alt="New Zealand Mussels meal">
                </div>
                <div class="column" role="food description">
                    <h2><strong>New Zealand Mussels</strong></h2>
                    <p>
                        New Zealand green lipped mussels are native to New Zealand and can be found on restaurant menus all around the world.
                        What better place to try them than in the motherland itself? Eating a steaming hot pot of mussels is definitely one of
                        New Zealand's great pleasures - pulling apart fat juicy shellfish with mussel sauce dripping all over your hands and face
                        and then wiping the bowl clean with a bowl of fries or a few slices of fresh bread.
                    </p>
                </div>
            </div>
            <div class="row" role="menu image and description">
                <div class="column" role="food picture">
                    <img src="images/food7.jpg" style="width:100%" alt="Maori Boil Up meal">
                </div>
                <div class="column" role="food description">
                    <h2><strong>Boil-up</strong></h2>
                    <p>
                        Boil-ups are particularly popular in Maori communities in NZ and are cooked by boiling different ingredients together
                        like a soup, usually with a pork base. Popular ingredients are pumpkin, potatoes, pork and watercress. It's also common
                        to add Maori style dumplings, known as 'doughboys' into the mix. Perfect if you're craving a bit of hearty, home cooked comfort food.
                    </p>
                </div>
            </div>
            <div class="row" role="menu image and description">
                <div class="column" role="food picture">
                    <img src="images/food8.jpg" style="width:100%" alt="Lamb meal">
                </div>
                <div class="column" role="food description">
                    <h2><strong>Lamb</strong></h2>
                    <p>
                        While lamb is enjoyed all over the world, you won't find them much cheaper or fresher than you will down in New Zealand.
                        There are choice offerings of lamb chops, lamb steaks, lamb racks and lamb burgers, and you owe it to yourself to try all of them while
                        you're in the country.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <!-- And here is our main footer that is used across all the pages of our website -->
    <?php
        echo '</div></div>';
        include_once("footer.html");
    ?>
    
</body>
</html>